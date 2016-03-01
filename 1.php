<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
 .error{
 	color:red;
 }
</style>
<?php
/*
 * Created on 2016-2-22
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $name = $email =$gender="";
 $nameerr = $emailerr = $gendererr="";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 	if(empty($_POST["name"])){
 		$nameerr="请输入姓名";
 	}
 	else{
 		$name=test_input($_POST["name"]);
 	}
 	if(empty($_POST["email"])){
 		$emailerr="请输入邮箱";
 	}
 	else{
 		$email=test_input($_POST["email"]);
 	}
 	if(empty($_POST["gender"])){
 		$gendererr="请选择性别";
 	}
 	else{
 		$gender = test_input($_POST["gender"]);
 	}

 }
 function test_input($data){
 	$data = trim($data);
 	$data = stripslashes($data);
 	$data = htmlspecialchars($data);
 	return $data;
 }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div>名称：<input name="name"><span class="error"><?php echo $nameerr?></span></div>
<div>邮箱：<input name="email" type="email"><span class="error"><?php echo $emailerr?></span></div>
<div>性别：<input type="radio" name="gender" value="男">男
<input type="radio" name="gender" value="女">女
<span class="error"><?php echo $gendererr?></span></div>
<input type="submit" value="提交">
</form>
<?php
	echo $name .":" .$email.":".$gender;
?>