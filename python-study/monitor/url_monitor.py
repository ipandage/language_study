#coding:utf-8
import re
import os
import sys
import smtplib
import pycurl
import socket
import shelve
from email.mime.text import MIMEText

# 应用描述，url，超时报警时间
mydict = {}

# 要发给谁
mailto_list=[""]

# 设置服务器，用户名、口令以及邮箱的后缀
mail_host="smtp.17guagua.com"
mail_user=""
mail_pass=""
mail_postfix="17guagua.com"

# 连续几次发送
limit_count=2

alarmInfo = shelve.open('alarmInfo')

c = pycurl.Curl()
def analysis_url(app, app_info):
    desc = app_info[0]
    url = app_info[1]
    timeout = app_info[2]
    c.setopt(pycurl.URL, url)
    indexfile = open(os.path.dirname(os.path.realpath(__file__))+"/content.txt", "wb")
    c.setopt(pycurl.WRITEHEADER, indexfile)
    c.setopt(pycurl.WRITEDATA, indexfile)
    try:
        c.perform()
    except Exception,e:
        print "connecion error:"+str(e)
        indexfile.close()
        c.close()
        sys.exit()
    TOTAL_TIME = c.getinfo(c.TOTAL_TIME)
    HTTP_CODE =  c.getinfo(c.HTTP_CODE)
    print url
    print "HTTP状态码：%s" %(HTTP_CODE)
    check_http_code(app, HTTP_CODE)
    check_alarm(app)
    if (TOTAL_TIME*1000 > timeout) :
        print("alarm")
        if is_alarm(app) == 1:
            send_mail(mailto_list, url, url + " total time ：%.2f ms" %(TOTAL_TIME*1000))

    print " beyond time ms ：%.2f ms" %(TOTAL_TIME*1000)

def check_http_code(app, http_code):
    if http_code != 200:
        send_mail(mailto_list, app, 'http code error  ' + str(http_code))

def check_alarm(app):
    app_alarm_info = get_shelve_value(app)
    if app_alarm_info != -1:
        sequence = app_alarm_info[0]
        alarm_count = app_alarm_info[1]
        set_shelve_value(app, [sequence+1, alarm_count])
    else:
        set_shelve_value(app, [1, 0])

def is_alarm(app):
    app_alarm_info = get_shelve_value(app)
    sequence = app_alarm_info[0]
    alarm_count = app_alarm_info[1]
    if alarm_count >= limit_count:
        if sequence == alarm_count + 1:
            set_shelve_value(app, [0, 0])
            print 'continue alarm'
            return 1
        else:
            del_shelve_value(app)
            return 0
    else:
        set_shelve_value(app, [sequence, alarm_count + 1])
        return 0


def set_shelve_value(key, value):
    alarmInfo[key] = value

def get_shelve_value(key):
    if alarmInfo.has_key(key):
        return alarmInfo[key]
    else:
        return -1

def del_shelve_value(key):
    if alarmInfo.has_key(key):
        del alarmInfo[key]

# 获得外网ip
def getip():
    names,aliases,ips = socket.gethostbyname_ex(socket.gethostname())
    for ip in ips :
        if not re.match('^192',ip):
            return ip

# 发送邮件
def send_mail(to_list,sub,content):
  me = mail_user + "<"+ mail_user + "@" + mail_postfix + ">"
  msg = MIMEText(content)
  msg['Subject'] = sub
  msg['From'] = me
  msg['To'] = ";".join(to_list)
  try:
    s = smtplib.SMTP()
    s.connect(mail_host)
    s.login(mail_user,mail_pass)
    s.sendmail(me, to_list, msg.as_string())
    s.close()
    return True
  except Exception, e:
    print str(e)
    return False

if __name__ == '__main__':
  print alarmInfo
  for app in mydict:
    analysis_url(app, mydict[app])
  alarmInfo.close()
