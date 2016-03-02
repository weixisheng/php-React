<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-2
 */
 header("Content-Type: text/html; charset=utf-8");
 //验证数值范围
 $var = 2;
 $min = 0;
 $max = 20;
 if (filter_var($var, FILTER_VALIDATE_INT, array("options" => array
 ("min_range"=>$min, "max_range"=>$max))) === false) {
 	echo $var . "---数值不在范围[0,20]<br>";
 }
 else{
 	 echo $var . "---数值符合要求<br>";
 }
 //验证ipv6地址
 $ipv6 = "2001:0:78c6:e706:3035:2607:f593:fe14";
 if(!filter_var($ipv6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false){
 	echo $ipv6 ."is a valid ipv6 address<br>";
 }
 else echo $ipv6 ."is not a valid ipv6 address<br>";
 //检测URL，包含查询字符串
 $url = "https://www.hishion.com?a=b";
 if(!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
 	echo $url."是合法url<br>";
 }
 else echo $url."不是合法的url<br>";
?>
