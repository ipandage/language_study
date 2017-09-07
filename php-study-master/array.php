<?php

//通过array()函数声明数组
//$array=array("1"=>"编","2"=>"程","3"=>"词","4"=>"典");
//print_r($array);
//echo "<br>";
//echo $array[1];								 //输出数组元素的值
//echo $array[2];								 //输出数组元素的值
//echo $array[3];								 //输出数组元素的值
//echo $array[4];								 //输出数组元素的值

//通过为数组元素赋值的方式声明数组
//$array[1]="编";
//$array[2]="程";
//$array[3]="词";
//$array[4]="典";
//print_r($array);   						   //输出所创建数组的结构

//关联数组
//$newarray = array("first"=>1,"second"=>2,"third"=>3);
//echo $newarray["second"];
//$newarray["third"]=8;
//echo $newarray["third"];

//声明二维数组
//$str = array (
//    "书籍"=>array ("文学","历史","地理"),
//    "体育用品"=>array ("m"=>"足球","n"=>"篮球"),
//    "水果"=>array ("橙子",8=>"葡萄","苹果") );
//print_r ( $str) ;

//foreach()函数遍历数组
//$url = array('编程词典网'=>'www.mrbccd.com',
//    '编程体验网'=>'www.bcty365.com',
//    '编程资源网'=>'www.bc110.com',
//);
//foreach (  $url as $link ) {
//    echo $link.'<br><br>';
//}

//应用explode()函数将字符串转换成数组
//$str = "时装、体闲、职业装";					//定义一个字符串
//$strs = explode("、", $str);					//应用explode()函数将字符串转换成数组
//print_r($strs);								    //输出数组元素

//应用implode()函数将数组转换成一个新字符串
//$str= array(明日,编程词典,网址,'www.mrbccd.com',服务电话,"0431-84972266");
//echo implode(" ",$str);

//应用count()函数递归统计数组元素的个数
//$array = array("php" => array("PHP函数参考大全","PHP程序开发范例宝典","PHP数据库系统开发完全手册"),
//    "asp" => array("ASP经验技巧宝典")
//);												//声明一个二维数组
//echo count($array,COUNT_RECURSIVE);						//递归统计数组元素的个数

//弹出数组元素
//$arr = array ("asp", "java", "javaweb", "php", "vb");	//定义数组
//$array = array_pop ($arr);								//获取数组中最后一个元素
//echo "被弹出的单元是：$array <br />";					//输出最后一个元素值
//print_r($arr);											//输出数组结构

//添加数组元素
//$array_push = array ("PHP从入门到精通", "PHP范例手册");					//定义数组
//array_push ($array_push, "PHP开发典型模块大全","PHP网络编程自学手册");	//添加元素
//print_r($array_push);			//输出数组结果

//删除数组中重复元素
//$array_push = array ("PHP从入门到精通", "PHP范例手册", "PHP范例手册","PHP网络编程自学手册");	//定义数组
//array_push ($array_push, "PHP开发典型模块大全","PHP网络编程自学手册");							//添加元素
//print_r($array_push);				//输出数组
//echo "<br>";
//$result=array_unique($array_push);	//删除数组中重复的元素
//print_r($result);					//输出删除后的数组

//声明一个一维数组和一个二维数组，并输出
//$php=array(1=>"I",2=>"Like",3=>"PHP");						//声明一个一维数组
//print_r($php);												//输出一维数组
//echo "<br>";
//$str = array (
//    "书籍"=>array ("生活","人与自然","动物世界"),
//    "体育用品"=>array ("m"=>"乒乓球","n"=>"网球","q"=>"高尔夫球"),
//    "水果"=>array ("橙子","葡萄","苹果") );					//声明一个二维数组
//print_r ( $str) ;												//输出二维数组

//应用sort()函数对数组进行升序排序
//$array=array(76,32,99,24,8,75);
//$array1=sort($array);   					//用sort()函数对$array数组进行升序排序，并返回新数组$array1
//for($i=0;$i<count($array);$i++){			//应用for循环语句输出数组元素
//    echo $array[$i]."&nbsp;&nbsp;";
//}

?>
