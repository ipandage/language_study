#coding:utf-8
import MySQLdb

conn = MySQLdb.connect(host="localhost",user="root",passwd="root",db="qiwsirtest",charset="utf8")
cur = conn.cursor()

# cur.execute("insert into users (username,password,email) values (%s,%s,%s)",("python","123456","python@gmail.com"))
# conn.commit()
#
# # 插入多条数据
# cur.executemany("insert into users (username,password,email) values (%s,%s,%s)",(("google","111222","g@gmail.com"),("facebook","222333","f@face.book"),("github","333444","git@hub.com"),("docker","444555","doc@ker.com")))
# conn.commit()

print '-------------------------------------'
# 查询数据
cur.execute("select * from users")
lines = cur.fetchall()
for line in lines:
    print line
print '-------------------------------------'
# 只返回一条
cur.execute("select * from users where id=1")
line_first = cur.fetchone()
print line_first
print '-------------------------------------'
cur.execute('select * from users')
print cur.fetchone()
print cur.fetchone()
print cur.fetchone()
print '-------------------------------------'
# 指针向上移动
cur.scroll(1)
print cur.fetchone()
cur.scroll(-2)
print cur.fetchone()
print '-------------------------------------'
# 更新数据
cur.execute("update users set username=%s where id=1",("gao"))
conn.commit()
cur.execute("select * from users where id=1")
print cur.fetchone()
