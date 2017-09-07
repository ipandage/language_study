import MySQLdb

from bottle import route, run, debug, template, request, static_file, error


# only needed when you run Bottle on mod_wsgi

@route('/todo')
def todo_list():

    conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
    c = conn.cursor()
    c.execute("SELECT id, task FROM todo WHERE status LIKE '1';")
    result = c.fetchall()
    c.close()

    output = template('make_table', rows=result)
    return output

@route('/new', method='GET')
def new_item():

    if request.GET.get('save','').strip():

        new = request.GET.get('task', '').strip()
        conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
        c = conn.cursor()
        c.execute("INSERT INTO todo (task,status) VALUES (%s,%s)", (new,"1"))
        new_id = c.lastrowid

        conn.commit()
        c.close()

        return '<p>The new task was inserted into the database, the ID is %s</p>' % new_id

    else:
        return template('new_task.tpl')

@route('/edit/<no:int>', method='GET')
def edit_item(no):

    if request.GET.get('save','').strip():
        edit = request.GET.get('task','').strip()
        status = request.GET.get('status','').strip()

        if status == 'open':
            status = 1
        else:
            status = 0

        conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
        c = conn.cursor()
        c.execute("UPDATE todo SET task = %s, status = %s WHERE id = %s", (edit,status,no))
        conn.commit()

        return '<p>The item number %s was successfully updated</p>' %no

    else:

        conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
        c = conn.cursor()
        c.execute("SELECT task FROM todo WHERE id = %s", (int(no)))
        cur_data = c.fetchone()

        return template('edit_task', old = cur_data, no = no)

@route('/delete/<no:int>', method='GET')
def delete_item(no):

    conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
    c = conn.cursor()
    c.execute("DELETE from todo where id = %s", (no))
    conn.commit()

    return '<p>The item number %s was successfully deleted</p>' %no


@route('/item<item:re:[0-9]+>')
def show_item(item):

        conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
        c = conn.cursor()
        c.execute("SELECT task FROM todo WHERE id in (%s)", (item))
        result = c.fetchall()
        c.close()

        if not result:
            return 'This item number does not exist!'
        else:
            return 'Task: %s' %result[0]

@route('/help')
def help():

    static_file('help.html', root='.')

@route('/json<json:re:[0-9]+>')
def show_json(json):

    conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
    c = conn.cursor()
    c.execute("SELECT task FROM todo WHERE id LIKE ?", (json))
    result = c.fetchall()
    c.close()

    if not result:
        return {'task':'This item number does not exist!'}
    else:
        return {'Task': result[0]}


@error(403)
def mistake403(code):
    return 'There is a mistake in your url!'

@error(404)
def mistake404(code):
    return 'Sorry, this page does not exist!'


debug(True)
run(reloader=True)
#remember to remove reloader=True and debug(True) when you move your application from development to a productive environment