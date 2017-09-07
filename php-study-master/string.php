<?php

//去除字符串左右空格及特殊字符
//$str="\r\r(:@_@   创图书编撰伟业 展软件开发雄风   @_@:)      ";
//echo trim($str);
//echo "<br>";
//echo trim($str,"\r\r(: :)");

//使用转义字符“\”对字符串进行转义
//echo ' select * from tb_book where bookname = \'PHP5从入门到精通\' ';

//应用addcslashes()函数和stripslashes()函数分别对字符串进行转义和还原
//$str = "select * from tb_book where bookname = 'PHP5从入门到精通'";
//echo $str."<br>";								//输出字符串
//$a = addslashes($str);							//对字符串中的特殊字符进行转义
//echo $a."<br>";								//输出转义后的字符
//$b = stripslashes($a);							//对转义后的字符进行还原
//echo $b."<br>";								//将字符原义输出

//输出指定字符串的长度
//echo strlen("编程体验网:www.bcty365.com");

// 应用substr()函数截取字符串中指定长度的字符
//echo substr("She is a well-read girl",0);    	   //从第6个字符开始截取
//echo "<br>";
//echo substr("She is a well-read girl",4,14);  	   //从第4个字符开始连续截取14个字符
//echo "<br>";
//echo substr("She is a well-read girl",-4,4);        //从倒数第4个开始截取4个字符
//echo "<br>";
//echo substr("She is a well-read girl",0,-4);        //从第一个字符开始截取,截取到倒数第4个字符

//应用substr()函数截取超长文本的部分字符串，剩余的部分用“…”代替
//$text="祝全国程序开发人员在编程之路上一帆风顺二龙腾飞三羊开泰四季平安五福临门六六大顺七星高照八方来财九九同心十全十美百事可乐千事顺心万事吉祥PHP编程一级棒";
//if(strlen($text)>30){
//    echo substr($text,0,30)."…";
//}
//else{
//    echo $text;
//}

//应用strcmp()和strcasecmp()函数分别对两个字符串按字节进行比较
//$str1="明日编程词典!";					//定义字符串常量
//$str2="明日编程词典!"; 					//定义字符串常量
//$str3="mrsoft";							//定义字符串常量
//$str4="MRSOFT";						//定义字符串常量
//echo strcmp($str1,$str2).'</br>';    				//这两个字符串相等
//echo strcmp($str3,$str4).'</br>';   				//注意该函数区分大小写
//echo strcasecmp($str3,$str4);				//该函数不区分字母大小写

//应用strncmp()函数比较字符串的前2个字符是否与源字符串相等
//$str1="I like PHP !"; 							//定义字符串常量
//$str2="i am fine !";							//定义字符串常量
//echo strncmp($str1,$str2,2);  					//比较前2个字符

//应用substr_count()函数检索子串出现的次数
//$str="明日编程词典词";								//输出查询的字符串
//echo substr_count($str,"词");						//输出查询的字符串

//使用新的子字符串替换原始字符串中被指定要替换的字符串
//$str2="某某";
//$str1="**";
//$str="   某某公司是一家以计算机软件技术为核心的高科技企业，多年来始终致力于行业管理软件开发、数字化出版物制作、计算机网络系统综合应用以及行业电子商务网站开发等领域，涉及生产、管理、控制、仓贮、物流、营销、服务等行业";
//echo str_ireplace($str2,$str1,$str);

//应用str_ireplace()函数对查询关键字描红
//$content="白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
//$str="女子公寓";
//echo str_ireplace($str,"<font color='#FF0000'>".$str."</font>",$content); 	//替换字符串为红色字体

//应用substr_replace()函数对指定字符串进行替换
//$str="用今日的辛勤工作，换明日的双倍回报！";						//定义字符串常量
//$replace="百倍";													//定义预替换的字符串``
//echo substr_replace($str,$replace,26,4);   							//替换字符串

//应用number_format()函数对指定的数字字符串进行格式化
//$number = 1868.96; 									//定义数字字符串常量
//echo number_format($number);						//输出格式化后的数字字符串
//echo "<br>";										//执行换行
//echo number_format($number, 2);						//输出格式化后的数字字符串
//echo "<br>";										//执行换行
//$number2 = 11886655.760055;							//定义数字字符串常量
//echo number_format($number2, 2, '.', '.');			//输出格式化后的数字字符串

//应用explode()函数实现字符串分割
//$str="PHP编程词典@NET编程词典@ASP编程词典@JSP编程词典";				//定义字符串常量
//$str_arr=explode("@",$str);											//应用标识@分割字符串
//print_r($str_arr);													//输出字符串分割后的结果

//应用函数explode()对全国各省汇名称以逗号进行分割
//$content = "北京,上海,天津,重庆,河北,山西,辽宁,吉林,黑龙江,江苏,浙江,安徽,福建,江西,山东,河南,湖北,湖南,其他";
//$data=explode(",",$content);
//for($index=0;$index<count($data);$index++){							//数组循环
//    echo $data[$index];
//    echo "</br>";
//}

?>

