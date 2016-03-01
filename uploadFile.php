<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-1
 */
 header("Content-Type: text/html; charset=utf-8");
 if($_FILES["file"]["error"]>0){
 	echo "错误信息：".$_FILES["file"]["erro"];
 }
 else{
 	echo "文件名：".$_FILES["file"]["name"]."<br>";
 	echo "类型：".$_FILES["file"]["type"]."<br>";
 	echo "大小".($_FILES["file"]["size"]/1024)."Kb<br>";
 	echo "temp_name".$_FILES["file"]["tmp_name"];
 }
?>
