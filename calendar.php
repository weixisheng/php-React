<?php
/*
 * Created on 2016-3-13
 */
 header("Content-Type: text/html; charset=utf-8");
 //cal_days_in_month一个月中的天数
 $day = cal_days_in_month(CAL_GREGORIAN,3,2016);
 //2016年3月有 31 天
 echo "2016年3月有 $day 天<br>";
 //cal_from_jd转换日历
 $day = unixtojd(mktime(10,10,10,3,15,2016));
 //Array ( [date] => 3/15/2016 [month] => 3 [day] => 15 [year] => 2016 [dow] => 2
 //[abbrevdayname] => Tue [dayname] => Tuesday [abbrevmonth] => Mar [monthname] => March )
 print_r(cal_from_jd($day,CAL_GREGORIAN));
 echo "<br>";
 //cal_info高里历法
 print_r(cal_info(0));
 echo "<br>";
 //复活节日期
 //2016-Mar-26
 echo date("Y-M-d",easter_date())."<br>";
 //date_add增加时间到新日期
 $date = date_create("2016-03-12");//创建新的DateTime对象
 date_add($date,date_interval_create_from_date_string("10 days"));
 //2016-03-22
 echo date_format($date,"Y-m-d");//格式化日期
 echo "<br>";
 //date_crete_from_format指定格式创建date对象
 $date = date_create_from_format("Y-m-d","2016-03-12");
 //2016-03-12
 echo date_format($date,"Y-m-d");
 echo "<br>";
 //date_default_timezone_get/set时区
 date_default_timezone_set("Asia/Shanghai");
 echo date_default_timezone_get()."<br>";
 //date_get_last_errors解析日期的警告
 date_create("20160-3-12");
 //Array ( [warning_count] => 0 [warnings] => Array ( ) [error_count] => 0 [errors] => Array ( ) )
 print_r(date_get_last_errors());
 echo "<br>";
 //date_parse_from_format指定格式日期
 print_r(date_parse_from_format("j.n.Y H:i:s","12032016 12:21:23"));
 echo "<br>";
 //date_sub减去天数
date_sub($date,date_interval_create_from_date_string("10 days"));
echo date_format($date,"Y-m-d")."<br>";
?>
