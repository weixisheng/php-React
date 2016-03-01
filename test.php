
<?php
/*
 * Created on 2016-2-25
 */
 header("Content-Type: text/html; charset=utf-8");
$arr = array('a'=>1,'b'=>2);
$result = json_encode($arr);
$callback = $_GET['callback'];
 echo $callback."($result)";
?>
