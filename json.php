<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-2
 */
 header("Content-Type: text/html; charset=utf-8");
 $arr = array('a'=>1,'b'=>"你好");
 foreach($arr as $key=> $value){
 	$arr[$key]=urlencode($value);
 }
 echo urldecode (json_encode($arr));
 echo "<br>";
 class Emp{
 	public $name="";
 	public $age= 0;
 	public $date = "";
 }

 $e = new Emp();
 $e->name ="张三";
 $e->age=23;
 $e->date = date('Y/m/d h:i:s a',strtotime('2016/3/2 10:10:10'));
 foreach($e as $key=>$value){
 	$e->$key = urlencode($value);
 }
 echo urldecode(json_encode($e));
 echo "<br>";
 $json = '{"a":1,"b":"你好"}';
 var_dump(json_decode($json));//对象
 var_dump(json_decode($json,true));//数组
?>
