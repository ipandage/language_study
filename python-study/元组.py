#coding=utf-8
t = 123, 'abc', ["come", "here"]
print t

t = 1,"23",[123,"abc"],("python","learn")
print t

# t[0] = 8

t = (1, '23', [123, 'abc'], ('python', 'learn'))
print t[2]

print t[1:]

for every in t:
    print every

print len(t)

# 分别用list()和tuple()能够实现两者的转化:
t = (1, '23', [123, 'abc'], ('python', 'learn'))
tls = list(t)
print tls

t_tuple = tuple(tls)
print t_tuple