<?php

// http://www.cnblogs.com/yhdsir/p/5693647.html

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully";
//查看服务是否运行
echo "Server is running: " . $redis->ping();

$redis->set('test',"1111111111111");
echo $redis->get('test');   //结果：1111111111111
$redis->delete('test');
var_dump($redis->get('test'));  //结果：bool(false)
echo 'delete'.'</br>';

//exists 验证指定的键是否存在
$redis->set('test',"1111111111111");
var_dump($redis->exists('test'));  //结果：bool(true)
echo 'exists'.'</br>';

//incr 数字递增存储键值键
$redis->set('test',"123");
var_dump($redis->incr("test"));  //结果：int(124)
var_dump($redis->incr("test"));  //结果：int(125)
echo 'incr'.'</br>';

//incr 数字递减存储键值
$redis->set('test',"123");
var_dump($redis->decr("test"));  //结果：int(122)
var_dump($redis->decr("test"));  //结果：int(121)
echo 'decr'.'</br>';

//getMultiple 取得所有指定键的值。如果一个或多个键不存在，该数组中该键的值为假
$redis->set('test1',"1");
$redis->set('test2',"2");
$result = $redis->getMultiple(array('test1','test2'));
print_r($result);   //结果：Array ( [0] => 1 [1] => 2 )
echo 'getMultiple'.'</br>';


//lpush 由列表头部添加字符串值。如果不存在该键则创建该列表。如果该键存在，而且不是一个列表，返回FALSE。
$redis->delete('test');
var_dump($redis->lpush("test","111"));   //结果：int(1)
var_dump($redis->lpush("test","222"));   //结果：int(2)
echo 'lpush'.'</br>';


//rpush 由列表尾部添加字符串值。如果不存在该键则创建该列表。如果该键存在，而且不是一个列表，返回FALSE。
$redis->delete('test');
var_dump($redis->lpush("test","111"));   //结果：int(1)
var_dump($redis->lpush("test","222"));   //结果：int(2)
var_dump($redis->rpush("test","333"));   //结果：int(3)
var_dump($redis->rpush("test","444"));   //结果：int(4)
echo 'rpush'.'</br>';


//lpop返回和移除列表的第一个元素
$redis->delete('test');
$redis->lpush("test","111");
$redis->lpush("test","222");
$redis->rpush("test","333");
$redis->rpush("test","444");
var_dump($redis->lpop("test"));  //结果：string(3) "222"
echo 'lpop'.'</br>';

//lsize返回的列表的长度。如果列表不存在或为空，该命令返回0。如果该键不是列表，该命令返回FALSE
$redis->delete('test');
$redis->lpush("test","111");
$redis->lpush("test","222");
$redis->rpush("test","333");
$redis->rpush("test","444");
var_dump($redis->lsize("test"));  //结果：int(4)
echo 'lsize'.'</br>';

//lget 返回指定键存储在列表中指定的元素。 0第一个元素，1第二个… -1最后一个元素，-2的倒数第二…错误的索引或键不指向列表则返回FALSE。
$redis->delete('test');
$redis->lpush("test","111");
$redis->lpush("test","222");
$redis->rpush("test","333");
$redis->rpush("test","444");
var_dump($redis->lget("test",3));  //结果：string(3) "444"
echo 'lget'.'</br>';

//lset 为列表指定的索引赋新的值,若不存在该索引返回false
$redis->delete('test');
$redis->lpush("test","111");
$redis->lpush("test","222");
var_dump($redis->lget("test",1));  //结果：string(3) "111"
var_dump($redis->lset("test",1,"333"));  //结果：bool(true)
var_dump($redis->lget("test",1));  //结果：string(3) "333"
echo 'lset'.'</br>';

//lgetrange 为列表指定的索引赋新的值,若不存在该索引返回false
$redis->delete('test');
$redis->lpush("test","111");
$redis->lpush("test","222");
print_r($redis->lgetrange("test",0,-1));  //结果：Array ( [0] => 222 [1] => 111 )
echo 'lgetrange'.'</br>';

//lremove 从列表中从头部开始移除count个匹配的值。如果count为零，所有匹配的元素都被删除。如果count是负数，内容从尾部开始删除
$redis->delete('test');
$redis->lpush('test','a');
$redis->lpush('test','b');
$redis->lpush('test','c');
$redis->rpush('test','a');
print_r($redis->lgetrange('test', 0, -1)); //结果：Array ( [0] => c [1] => b [2] => a [3] => a )
var_dump($redis->lremove('test','a',2));   //结果：int(2)
print_r($redis->lgetrange('test', 0, -1)); //结果：Array ( [0] => c [1] => b )
echo 'lremove'.'</br>';




?>
