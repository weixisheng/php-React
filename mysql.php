<?php
/*
 * Created on 2016-3-2
 */
 header("Content-Type: text/html; charset=utf-8");
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "mydb";
 $con = mysqli_connect($server,$username,$password,$db);
 //检测连接
 if(!$con){
 	die("连接失败：".mysqli_connect_error());
 }
 //创建数据库
// $database = "CREATE DATABASE ".$db;
// mysqli_query($con,"set names utf8");
// if(mysqli_query($con,$database)){
// 	echo "数据库创建成功";
// }
// else{echo "数据库创建失败：".mysqli_error($con);}

//创建表
//$table = "CREATE TABLE myguest(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY," .
//		"firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL," .
//		"email VARCHAR(50),reg_date TIMESTAMP)";
//	if(mysqli_query($con,$table)){
//		echo "数据表已创建";
//	}
//	else "数据表创建失败".mysqli_error($con);

//插入数据
//$insert = "INSERT INTO myguest(firstname,lastname,email) VALUES('张','三','12345@php.com')";
//mysqli_query($con,"set names utf8");
//if(mysqli_query($con,$insert)){
//	echo "插入数据成功";
//}
//else echo "插入数据失败：".mysqli_error($con);

//插入多条数据和预处理语句
//$sql = "INSERT INTO myguest(firstname,lastname,email) VALUES('Java','Script','hellojs@js.com');".
//"INSERT INTO myguest(firstname,lastname,email) VALUES('PHP','p','hellophp@php.com')";
//if(mysqli_multi_query($con,$sql)){
//	echo "多条数据插入成功";
//}
//else echo "多条数据插入失败";

//预处理语句

 mysqli_close($con);
?>
