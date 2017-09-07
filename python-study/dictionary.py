#coding=utf-8

# 创建dict
print '创建dict'
mydict = {}
print mydict
person = {"name":"qiwsir","site":"qiwsir.github.io","language":"python"}
print person
person['name2']="qiwsir"
print person

mydict = {}
print mydict
mydict["site"] = "qiwsir.github.io"
mydict[1] = 80
mydict[2] = "python"
mydict["name"] = ["zhangsan","lisi","wangwu"]
print mydict

mydict[1] = 90  #如果这样，则是修改这个键的值
print mydict

name = (["first","Google"],["second","Yahoo"])
website = dict(name)
print website

website = {}.fromkeys(("third","forth"),"facebook")
print website

# 访问dict的值
print '访问dict的值'
person = {'name2': 'qiwsir', 'name': 'qiwsir', 'language': 'python', 'site': 'qiwsir.github.io'}
print person['name']
print person['language']

site = person['site']
print site

person_list = ["qiwsir","Newton","Boolean"]
for name in person_list:
    print name

person = {'name2': 'qiwsir', 'name': 'qiwsir', 'language': 'python', 'site': 'qiwsir.github.io'}
for key in person:
    print person[key]

# dict()的操作方法
# 嵌套
a_list = [[1,2,3],[4,5],[6,7]]
print a_list[1][1]

a_dict = {1:{"name":"qiwsir"},2:"python","email":"qiwsir@gmail.com"}
print a_dict

a_dict = {1: {'name': 'qiwsir'}, 2: 'python', 'email': 'qiwsir@gmail.com'}
print a_dict[1]['name']

# 获取键、值
website = {1:"google","second":"baidu",3:"facebook","twitter":4}
print website.keys()
print ['google', 'baidu', 'facebook', 4]
print website.items()

for key in website.keys():
    print key, type(key)
for key in website:
    print key, type(key)

for value in website.values():
    print value
for key in website:
    print(website[key])

for k,v in website.items():
    print str(k)+":"+str(v)
for k in website:
    print str(k)+":"+str(website[k])

website = {1: 'google', 'second': 'baidu', 3: 'facebook', 'twitter': 4}
print website.get(1)
print website.get("second")

print len(website)
website = {1: 'google', 'second': 'baidu', 3: 'facebook', 'twitter': 4}
new_web = website.copy()
print new_web

print new_web.pop('second')
del new_web[3]
print new_web

cnweb = {'qq': 'first in cn', 'python': 'qiwsir.github.io', 'alibaba': 'Business'}
website = {1: 'google', 'second': 'baidu', 3: 'facebook', 'twitter': 4}
website.update(cnweb)   # 把cnweb合并到website内
print website
print cnweb



