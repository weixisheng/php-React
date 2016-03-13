<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

<?php
/*
 * Created on 2016-3-10
 */
 header("Content-Type: text/html; charset=utf-8");

 //chunk分割数组
 $cars = array("carA","carB","carC","carD","carE");
 //Array ( [0] => Array ( [0] => carA [1] => carB )
 //[1] => Array ( [2] => carC [3] => carD ) [2] => Array ( [4] => carE ) )
 print_r(array_chunk($cars,2,true));
 echo "<br>";
 //column返回单列的值
 $column = array(
 array("id"=>11,"name"=>"Jack","age"=>23),
 array("id"=>22,"name"=>"Hoe","age"=>24),
 array("id"=>33,"name"=>"Koh","age"=>34));
 //Array ( [11] => Jack [22] => Hoe [33] => Koh )
 print_r(array_column($column,"name","id"));
 echo "<br>";
 //combine合并
 $firstname = array("Jack","John","Smith");
 $age = array(24,25,26);
 $combine = array_combine($firstname,$age);
 //Array ( [Jack] => 24 [John] => 25 [Smith] => 26 )
 print_r($combine);
 echo "<br>";
 //count_values统计数组值的次数
 $count = array("a","c","d","c","d");
 //Array ( [a] => 1 [c] => 2 [d] => 2 )
 print_r(array_count_values($count));
 echo "<br>";
 //filter//过滤数组
 function test_odd($var){
 	return ($var & 1);
 }
 $a1 = array("a","b","1","2","3");
 //Array ( [2] => 1 [4] => 3 )
 print_r(array_filter($a1,"test_odd"));
 echo "<br>";
 //intersect交集
 $inter1 = array("a"=>"red","b"=>"green","c"=>"yellow");
 $inter2 = array("a"=>"red","b"=>"green");
 //Array ( [a] => red [b] => green )
 print_r(array_intersect($inter1,$inter2));
 echo "<br>";
 //array_intersect_uassoc比较键名和键值
 function myFilter($a,$b){
 	if($a === $b)
 	return 0;
 	return ($a>$b)?1:-1;
 }
 $a_a =array("a"=>"red","b"=>"green","c"=>"blue");
 $a_b = array("a"=>"red","b"=>"green");
 $a_c = array("e"=>"cyan","a"=>"red","d"=>"yellow");
 //Array ( [a] => red )
 print_r(array_intersect_uassoc($a_a,$a_b,$a_c,"myFilter"));
 echo "<br>";
 //aray_map改变数组
 function myMap($var1,$var2){
 	if($var1===$var2)
 	return "same";
 	return "different";
 }
  //Array ( [0] => same [1] => same [2] => different )
 print_r(array_map("myMap",$a_a,$a_b));
 echo "<br>";
 //array_merge合并数组
 //Array ( [a] => red [b] => green [c] => blue [e] => cyan [d] => yellow )
 print_r(array_merge($a_a,$a_c));
 echo "<br>";
 //array_merge_recursive合并数组键名自成数组
 $re1 = array("a"=>"red","b"=>"yellow","c"=>"green");
 $re2 = array("b"=>"cyan");
//Array ( [a] => red [b] => Array ( [0] => yellow [1] => cyan ) [c] => green )
 print_r(array_merge_recursive($re1,$re2));
 echo "<br>";
 //multisort多组排序
 $sort_a= array("apple","cat","banana");
 $sort_b = array("phone","computer","pad");
 array_multisort($sort_a,$sort_b);
 print_r($sort_a);//Array ( [0] => apple [1] => banana [2] => cat )
 print_r($sort_b);//Array ( [0] => phone [1] => pad [2] => computer )
 echo "<br>";
 $sort_c = array("we","we","ok");
 array_multisort($sort_c,SORT_DESC,$sort_a,SORT_ASC);

 print_r($sort_c);//Array ( [0] => we [1] => we [2] => ok )
  print_r($sort_a);//Array ( [0] => apple [1] => banana [2] => cat )
  echo "<br>";
 //aray_pad 指定值插入返回指定长度的数组
 //Array ( [0] => apple [1] => banana [2] => cat [3] => HELLO [4] => HELLO )
 print_r(array_pad($sort_a,5,"HELLO"));
 //Array ( [0] => PHP [1] => PHP [2] => apple [3] => banana [4] => cat )
 print_r(array_pad($sort_a,-5,"PHP"));
 echo "<br>";
 //array_rand随机键名
 print_r(array_rand($sort_a,2));//Array ( [0] => 1 [1] => 2 )
 echo "<br>";

// $sort_a已经排序,array("apple","banana","cat")
//reduce传值到自定义函数
function re($var1,$var2){
	return $var1 ." + ". $var2;
}
//There are + apple + banana + cat
print_r(array_reduce($sort_a,"re","There are "));
echo "<br>";
//reverse翻转数组
//Array ( [0] => cat [1] => banana [2] => apple )
print_r(array_reverse($sort_a));
//Array ( [2] => cat [1] => banana [0] => apple )
print_r(array_reverse($sort_a,true));
echo "<br>";
//splice移除元素并替换
$splice1 = array("I","Love","JS");
$splice2 = array("PHP");
array_splice($splice1,2,1,$splice2);
print_r($splice1);
echo "<br>";
//array_udiff比较数组键值返回差集
//Array ( [b] => green [c] => blue )
print_r(array_udiff($a_a,$a_c,"myFilter"));
echo "<br>";
//array_uintersect返回交集
//Array ( [a] => red [b] => green )
print_r(array_uintersect($a_a,$re1,"myFilter"));
echo "<br>";
//array_unique移除重复值
//Array ( [0] => we [2] => ok )
print_r(array_unique($sort_c));
echo "<br>";
//array_walk自定义函数
function walk($value,$key){
	echo "键名:".$key.",键值:".$value." ";
}
array_walk($splice1,"walk");
echo "<br>";
//compact创建变量名和值的数组
$firstName = "hello";
$secondName = "php";
$profession = "teacher";
//Array ( [firstName] => hello [secondName] => php [profession] => teacher )
print_r(compact("firstName","secondName","profession"));
echo "<br>";
$theName = array("firstName","secondName");
//Array ( [firstName] => hello [secondName] => php [profession] => teacher )
print_r(compact($theName,"location","profession"));
echo "<br>";
$aaa = "original";
$people = array("aaa"=>"HELLO","bbb"=>"PHP","ccc"=>"ARRAY");
reset($people);
while(list($key,$val)= each($people)){
	//aaa=>HELLO bbb=>PHP ccc=>ARRAY
	echo "$key=>$val ";
}

echo "<br>";
//extract从数组将变量导入当前符号表
extract($people,EXTR_PREFIX_SAME,"P");
//$aaa=original; $bbb=PHP; $ccc=ARRAY; $P_aaa= HELLO
echo "\$aaa=$aaa; \$bbb=$bbb; \$ccc=$ccc; \$P_aaa= $P_aaa";
//key()元素键名位置
echo "<br>";
reset($people);
//next($people);
echo "position: ".key($people);
?>
