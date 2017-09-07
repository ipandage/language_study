#coding=utf-8

# 定义
print '定义'
a = []
print type(a)
print bool(a)
print a

a=['2',3,'qiwsir.github.io']
print type(a)
print bool(a)
print a

# list 索引
print 'list 索引'
url = "qiwsir.github.io"
print url[2]
print url[:4]
print url[3:9]

a=['2',3,'qiwsir.github.io']
print a[0]
print a[1]
print a[:2]
print a[1:]
print a[-1]
print a[-2]
print a[:]

# 对list的操作 追加元素
print '对list的操作 追加元素'
a = ["good","python","I"]
print a
a.append("like")
print a
a.append(100)
print a
print len(a)
a[6:] = ['xxoo']
print a

# len
print 'len 使用'
name = 'yeashape'
print len(name)

a=[1,2,'a','b']
print len(a)

b=['yeashape']
print len(b)

# list的长度
print 'list的长度'

name = 'qiwsir'
type(name)
print len(name)

lname = ['sir','qi']
print type(lname)
print len(lname)
length = len(lname)
print length
print type(length)

# 合并list
print '合并list'
la = [1, 2, 3]
lb = ['qiwsir', 'python']
la.extend(lb)
print la
print lb

la = [1,2,3]
b = "abc"
la.extend(b)
print la

# 如果extend的对象是数值型，则报错
# c = 5
# la.extend(c)
# print la

# append是整建制地追加，extend是个体化扩编
lst = [1,2,3]
lst.append(["qiwsir","github"])
print lst
print len(lst)

lst2 = [1,2,3]
lst2.extend(["qiwsir","github"])
print lst2
print len(lst2)

# list中某元素的个数
print 'list中某元素的个数'
la = [1,2,1,1,3]
print la.count(1)
la.append('a')
la.append('a')
print la
print la.count('a')

# 元素在list中的位置
print '元素在list中的位置'
la = [1, 2, 3, 'a', 'b', 'c', 'qiwsir', 'python']
print la[2]
print la[2:5]
print la[:7]

la = [1, 2, 3, 'a', 'b', 'c', 'qiwsir', 'python']
print la.index(3)
print la.index('a')
print la.index(1)
print la.index('qiwsir')

# 向list中插入一个元素
print '向list中插入一个元素'
all_users = ["qiwsir","github"]
all_users.append("io")
print all_users

all_users = ['qiwsir', 'github', 'io']
all_users.insert(0, "python")
print all_users
all_users.insert(1, "http://")
print all_users

length = len(all_users)
print length
all_users.insert(length, "algorithm")
print all_users

# 删除list中的元素
print '删除list中的元素'
all_users = ['python', 'http://', 'qiwsir', 'github', 'io', 'algorithm']
all_users.remove('http://')
print all_users
# 原list中没有“tianchao”，要删除，就报错。
# all_users.remove('ceshi')
# print all_users

all_users = ['python', 'qiwsir', 'github', 'io', 'algorithm']
print "python" in all_users #这里用in来判断一个元素是否在list中，在则返回True，否则返回False

all_users = ['qiwsir', 'github', 'io', 'algorithm']
print all_users.pop()
print all_users
print all_users.pop(1)
print all_users

# range(start,stop)生成数字list
print 'range(start,stop)生成数字list'
print range(9)
print range(0, 9)
print range(1, 9) #start=1
print range(0, 9, 2)  # step=2,每个元素等于start+i*step
print range(0, -9, -10)
print range(0, 100, 2)

pythoner = ['I', 'am', 'a', 'pythoner', 'I', 'am', 'learning', 'it', 'with', 'qiwsir']
py_index = range(len(pythoner))
print py_index

# 排序
print '排序'
number = [1,4,6,2,9,7,3]
number.sort()
print number

number = [1,4,6,2,9,7,3]
print number
print sorted(number)

number = [1,4,6,2,9,7,3]
print number
number.sort(reverse=True)
print number

number = [1,4,6,2,9,7,3]
print number
sorted(number, reverse=True)
print number

# print help(list) # 查找内置函数


# list解析
print 'list解析'
power2 = []
for i in range(1, 10):
    power2.append(i*i)
print power2

aliquot = [n for n in range(1,100) if n%3==0]
print aliquot

print range(3,100,3)

mybag = [' glass',' apple','green leaf ']
print [one.strip() for one in mybag]


# enumerate
print 'enumerate'
seasons = ['Spring', 'Summer', 'Fall', 'Winter']
print list(enumerate(seasons))
print list(enumerate(seasons, start=1))

# set
s1 = set("qiwsir")
print s1

s2 = set([123,"google","face","book","facebook","book"])
print s2

s3 = {"facebook",123}
print s3

