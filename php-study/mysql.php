<?php

//创建与MySQL服务器的连接
//$link = mysqli_connect("127.0.0.1", "root", "root") or die("不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！".mysql_error());   //连接Mysql服务器
//if($link){
//    echo "数据源连接成功!";
//}

//选择MySQL数据库
//$link = mysqli_connect("127.0.0.1", "root", "root") or die("不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！".mysql_error());   //连接Mysql服务器
//$db_selected=mysqli_select_db($link,'mysql');
////$db_selected=mysql_query("use db_database18",$link);
//if($db_selected){
//    echo "数据库选择成功!";
//}

//应用mysql_fetch_array()函数从数组结果集中获取信息
//$link=mysqli_connect("127.0.0.1","root","root") or die("数据库连接失败".mysql_error());
//mysqli_select_db($link,'db_database');
//$sql=mysqli_query($link, 'select * from tb_book');
//$info=mysqli_fetch_array($sql);
//do{
//    echo $info[bookname];
//}
//while($info=mysqli_fetch_array($sql));


//应用mysql_fetch_object()函数从数组结果集中获取信息
//$con = mysqli_connect("127.0.0.1", "root", "root");
//if (!$con)
//{
//    die('Could not connect: ' . mysql_error());
//}
//
//$db_selected = mysqli_select_db($con,"db_database");
//$sql = "SELECT * from tb_book";
//$result = mysqli_query($con,$sql);
//
//while ($row = mysqli_fetch_object($result))
//{
//    echo $row->bookname . "<br />";
//}
//mysqli_close($con);

//应用mysql_fetch_row函数从数组结果集中获取信息
//$con = mysqli_connect("127.0.0.1", "root", "root");
//if (!$con)
//{
//    die('Could not connect: ' . mysql_error());
//}
//
//$db_selected = mysqli_select_db($con,"db_database");
//$sql = "SELECT * from tb_book where bookname = '高'";
//$result = mysqli_query($con,$sql);
//
//print_r(mysqli_fetch_row($result));
//mysqli_close($con);

//应用mysql_num_rows()函数获取查询结果集中的记录数
//$con = mysqli_connect("127.0.0.1", "root", "root");
//if (!$con)
//{
//    die('Could not connect: ' . mysql_error());
//}
//
//$db_selected = mysqli_select_db($con,"db_database");
//$sql = "SELECT * from tb_book";
//$result = mysqli_query($con,$sql);
//
//echo mysqli_num_rows($result);
//mysqli_close($con);


?>