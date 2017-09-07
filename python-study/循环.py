#coding=utf-8

# 简单的for循环例子
print '简单的for循环例子'
hello = "world"
for i in hello:
    print i

for i in hello:
    print i,

for i in hello:
    print i+",",

for i in range(len(hello)):
    print hello[i]

# 操作list
print '操作list'
ls_line = ['Hello', 'I am qiwsir', 'Welcome you', '']
for word in ls_line:
    print word

for i in range(len(ls_line)):
    print ls_line[i]

# 找出100以内的能够被3整除的正整数
aliquot = []
for n in range(1, 100):
    if n%3 == 0:
        aliquot.append(n)
print aliquot

