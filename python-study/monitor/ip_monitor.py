#coding:utf-8
import urllib2
class Get_public_ip:
    def getip(self):
        myip = self.visit("http://city.ip138.com/ip2city.asp")
        return myip
    def visit(self,url):
        opener = urllib2.urlopen(url)
        if url == opener.geturl():
            str = opener.read()
            if str != '':
                return str[str.find('[')+1: str.find(']')]
            else:
                return ''
if __name__ == "__main__":
    getmyip = Get_public_ip()
    ip_html = getmyip.getip()
    print ip_html
