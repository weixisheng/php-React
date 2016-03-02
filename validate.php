<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-2
 */
 header("Content-Type: text/html; charset=utf-8");
 //自定义异常
 class myException extends Exception{
 	public function errorMessage(){
 		$error = $this->getMessage()." is not valid,more than 20 or less than 0";
 		return $error;
 	}
 }
 $int = 120;
 $int_options = array("options"=>array(
 	"min_range"=>0,
 	"max_range"=>20
 ));
 try{
 	if(!filter_var($int,FILTER_VALIDATE_INT,$int_options)){
 	throw new myException($int);
 }
 	echo $int." is valid,between 0 to 20.";
 }
 catch(myException $e){
 	echo $e->errorMessage();
 }
?>
