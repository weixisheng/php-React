<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-1
 */
 header("Content-Type: text/html; charset=utf-8");
 $allows=array("gif","png","jpg","jpeg");
 $temp = explode(".",$_FILES["file"]["name"]);
 $extension = end($temp);
 if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpg")||
 ($_FILES["file"]["type"]=="image/png")||($_FILES["file"]["type"]=="image/jpeg")||
 ($_FILES["file"]["type"]=="image/x-png")||($_FILES["file"]["type"]=="image/pjpeg"))&&
 ($_FILES["file"]["size"]<2*1024*1024)&&(in_array($extension,$allows))){
 	if($_FILES["file"]["error"]>0){
 		echo ("错误：".$_FILES["file"]["error"]."<br>");
 	}
 	else{
 		echo "文件名：".$_FILES["file"]["name"]."<br>";
 		echo "文件类型：".$_FILES["file"]["type"]."<br>";
 		echo "文件大小：".round(($_FILES["file"]["size"]/1024),2)."Kb<br>";
 		echo "文件存储：".$_FILES["file"]["tmp_name"];
 	}
 }
 else{
 	echo "不符合要求";
 }
?>
