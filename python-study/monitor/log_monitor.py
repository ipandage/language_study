#coding:utf-8
import re
import smtplib
import datetime
import socket
from email.mime.text import MIMEText

# 要发给谁
mailto_list=["546657868@qq.com"]

# 设置服务器，用户名、口令以及邮箱的后缀
mail_host="smtp.qq.com"
mail_user="546657868"
mail_pass=""
mail_postfix="qq.com"

# 取前一天日期
log_path_suffix=(datetime.date.today() + datetime.timedelta(days=-1)).strftime('%Y%m%d')

# 日志路径
log_path_all = {
    'order': '/opt/hosts/resin_log/order/stdout_order.log.'+log_path_suffix,
    'agent': '/opt/hosts/resin_log/agent/stdout_agent.log.'+log_path_suffix,
    'staruser': '/opt/hosts/resin_log/staruser/stdout_staruser.log.'+log_path_suffix
    }

# 处理日志
def analysis_log(appName ,logPath):
    f1 = file(logPath, "r")
    count = 0
    exceptionStr = ""
    for s in f1.readlines():
        li = re.findall("Exception", s)
        if len(li) > 0:
            count = count + li.count("Exception")
            exceptionStr = exceptionStr + " " + s
    print appName + " 异常数量为 " + str(count)
    return "---------------------------------" + appName + " ----------------------------- \n " + exceptionStr

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

def getip():
    names,aliases,ips = socket.gethostbyname_ex(socket.gethostname())
    for ip in ips :
        if not re.match('^192',ip):
            return ip

if __name__ == '__main__':
  exceptionContents = "";
  for key in log_path_all:
    exceptionContent = analysis_log(key, log_path_all[key])
    exceptionContents = exceptionContents + exceptionContent
    exceptionContents = exceptionContents + "*********************************************** \n"
  if send_mail(mailto_list,getip()+" log alarm",exceptionContents):
    print "发送成功"
  else:
    print "发送失败"
