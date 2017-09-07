#coding=utf-8
# 字符串格式化
str1 = "version"
num = 1.0
format = "% s" % str1
print str1
format = "% s % d" % (str1, num)
print format

# 带精度的格式化
print "浮点型数字：%f" % 1.25
print "浮点型数字：%.1f" % 1.25
print "浮点型数字：%.2f" % 1.25

# 字符串的转义符
path = "hello\tworld\n"
print path
print len(path)
path = r"hello\tworld\n"
print path
print len(path)

# 字符串连接
str1 = "hello "
str2 = "world "
str3 = "hello "
str4 = "China "
result = str1 + str2 + str3
result += str4
print result

strs = ["hello", "world", "hello", "China"]
result = " ".join(strs)
print result

# 字符串截取
word = "world"
print word[4]

sentence = "Bob said : 1, 2, 3, 4"
print sentence.split()
print sentence.split(",")

# 字符串比较
str1 = 1
str2 = "1"
if str1 == str2:
    print "相同"
else:
    print "不相同"

if str(str1) == str2:
    print "相同"
else:
    print "不相同"

word = "hello world"
print word.startswith("hello")

# 查找字符串
sentence = "this is a apple"
print sentence.find("a")
print sentence.rfind("a")

# 字符串替换
centence = "hello world, hello China"
print centence.replace("hello", "hi")
print centence.replace("hello", "hi", 1)
print centence.replace("abc", "hi")
