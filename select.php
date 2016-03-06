<?php
/*
 * Created on 2016-3-5
 */
 header("Content-Type: text/html; charset=utf-8");
 $con = mysqli_connect("localhost","root","","mydb");
 if(mysqli_connect_error())
 	echo "连接失败：".mysqli_connect_error();
 $result = mysqli_query($con,"SELECT * FROM myguest where firstname='Jack'");
 while($row = mysqli_fetch_array($result)){
 	echo $row['firstname']." ".$row['lastname'];
 	echo "<br>";
 }
 mysqli_close($con);
?>
