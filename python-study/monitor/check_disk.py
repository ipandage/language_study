import os
import time
import re
from email.mime.text import MIMEText
import smtplib
def check_hd_use():
        cmd_get_hd_use = '/bin/df'
        try:
            fp = os.popen(cmd_get_hd_use)
        except:
            ErrorInfo = r'get_hd_use_error'
            print ErrorInfo
            return ErrorInfo
        re_obj = re.compile(r'^/dev/.+\s+(?P<used>\d+)%\s+(?P<mount>.+)')
        hd_use = {}
        for line in fp:
            match = re_obj.search(line)
            if match is not None:
                hd_use[match.groupdict()['mount']] = match.groupdict()['used']
        fp.close()
        return  hd_use
def get_wan_ip():
	cmd_get_ip = "/sbin/ifconfig |grep 'inet addr'|awk -F\: '{print $2}'|awk '{print $1}' | grep -v '^127' | grep -v '192'"
        get_ip_info = os.popen(cmd_get_ip).readline().strip()
	return get_ip_info
def get_sys_time():
	cmd_get_time = time.strftime("%Y-%m-%d %H:%M:%S", time.localtime())
	return cmd_get_time
def send_mail(to_list,sub,content):   
        me="mobilewebsvr"+"<"+mail_user+"@"+mail_postfix+">"
        msg = MIMEText(content,_subtype='plain',_charset='utf-8')
        msg['Subject'] = sub   
        msg['From'] = me
        msg['To'] = ";".join(to_list)
        try:
             server = smtplib.SMTP()   
             server.connect(mail_host)
             server.login(mail_user,mail_pass)
             server.sendmail(me, to_list, msg.as_string())
             server.close()
             return True
        except Exception, e:
             print str(e)
             return False
mailto_list=['']
mail_host=""
mail_user=""
mail_pass=""
mail_postfix=""
for v in check_hd_use().values():
	if int(v) > 7:
	     if send_mail(mailto_list,
	       		 'System Disk Monitor',
			 'System Time:%s\nSystem Ip:%s\nSystem Disk Use:%s'
			 % (get_sys_time(),get_wan_ip(),check_hd_use())):
		     print  "sendmail success!!!!!"
	else:
	     print "disk not mail"


