<?php

if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {


/////////////////////////////////////////////////////////
 if ( isset( $_REQUEST['del'] ))
  {
    
if ( isset( $_REQUEST['work1'] )  ){
system("cat /dev/null  > work1");
}
if ( isset( $_REQUEST['work2'] )  ){
system("cat /dev/null  > work2");
}
if ( isset( $_REQUEST['work3'] )  ){
system("cat /dev/null  > work3");
}
if ( isset( $_REQUEST['work4'] )  ){
system("cat /dev/null  > work4");
}
if ( isset( $_REQUEST['work5'] )  ){
system("cat /dev/null  > work5");
}
if ( isset( $_REQUEST['nowork1'] )  ){
system("cat /dev/null  > nowork1");
}
if ( isset( $_REQUEST['nowork2'] )  ){
system("cat /dev/null  > nowork2");
}
if ( isset( $_REQUEST['nowork3'] )  ){
system("cat /dev/null  > nowork3");
}
if ( isset( $_REQUEST['nowork4'] )  ){
system("cat /dev/null  > nowork4");
}
if ( isset( $_REQUEST['nowork5'] )  ){
system("cat /dev/null  > nowork5");
}
header('Refresh: 1; URL=../time/time.php');


}
//////////////////////////////////////////////////
 if ( isset( $_REQUEST['add'] ))
  {
$timestr="";
if ( ($_REQUEST['hour_start']=='-') && ($_REQUEST['minute_start']=='-') && ($_REQUEST['hour_finish']=='-') && ($_REQUEST['minute_finish']=='-')  ){
$timestr="*,";
}else{
$timestr=$_REQUEST['hour_start'].":".$_REQUEST['minute_start']."-".$_REQUEST['hour_finish'].":".$_REQUEST['minute_finish'].",";
}

if ( ($_REQUEST['wday_start']=='-') && ($_REQUEST['wday_finish']=='-')  ){
$timestr=$timestr."*,";
}else{
    if (  ($_REQUEST['wday_finish']=='-')  ){
$timestr=$timestr . $_REQUEST['wday_start'].",";
    }else{
$timestr=$timestr . $_REQUEST['wday_start']."-".$_REQUEST['wday_finish'].",";
}}

if ( ($_REQUEST['mday_start']=='-') && ($_REQUEST['mday_finish']=='-')  ){
$timestr=$timestr."*,";
}else{
    if (  ($_REQUEST['mday_finish']=='-')  ){
$timestr=$timestr . $_REQUEST['mday_start'].",";
    }else{
$timestr=$timestr . $_REQUEST['mday_start']."-".$_REQUEST['mday_finish'].",";
}}


if ( ($_REQUEST['month_start']=='-') && ($_REQUEST['month_finish']=='-')  ){
$timestr=$timestr."*";
}else{
    if (  ($_REQUEST['month_finish']=='-')  ){
$timestr=$timestr . $_REQUEST['month_start'];
    }else{
$timestr=$timestr . $_REQUEST['month_start']."-".$_REQUEST['month_finish'];
}}

echo $timestr;

if ($_REQUEST['work'] == 1){
 //определяем размер файла 
  if( filesize("work1") == 0){
//system("echo ".$timestr." > work1");
    filep($timestr,"work1");
  }else{
  if( filesize("work2") == 0){
//system("echo ".$timestr." > work2");
filep($timestr,"work2");
  }else{
  if( filesize("work3") == 0){
//system("echo ".$timestr." > work3");
    filep($timestr,"work3");
  }else{
  if( filesize("work4") == 0){
//system("echo ".$timestr." > work4");
    filep($timestr,"work4");
  }else{
  if( filesize("work5") == 0){
//system("echo ".$timestr." > work5");
    filep($timestr,"work5");
  }}}}}
}else{
  if( filesize("nowork1") == 0){
//system("echo ".$timestr." > nowork1");
filep($timestr,"nowork1");
  }else{
  if( filesize("nowork2") == 0){
//system("echo ".$timestr." > nowork2");
filep($timestr,"nowork2");
  }else{
  if( filesize("nowork3") == 0){
//system("echo ".$timestr." > nowork3");
filep($timestr,"nowork3");
  }else{
  if( filesize("nowork4") == 0){
//system("echo ".$timestr." > nowork4");
filep($timestr,"nowork4");
  }else{
  if( filesize("nowork5") == 0){
//system("echo ".$timestr." > nowork5");
filep($timestr,"nowork5");
  }}}}}
}


header('Refresh: 1; URL=../time/time.php');
}//end add






//  $message = $_REQUEST['smsMessage'];
//  $to = $_REQUEST['phoneNumber'];
//  $str=$to." ".$message;

//echo $message;
/*
$fp = fopen("/srv/sms/new/sms.txt", "a+"); // Открываем файл в режиме записи.
$test = fwrite($fp, $str); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла
//  system("echo ".$str." >> /srv/sms/new/sms.txt");

  print 'SENT SMS' ;
//    header('Refresh: 1; URL=../sms/sms.html');
*/
  exit;
 } else {
  
 }





print "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" /> </head><body>";

echo "<p>Установленное время</p>
<table>
<form name=\"del\" method=\"post\" action=\"time.php\">";

echo"<tr><td>Не рабочее время</td></tr>";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"nowork1\" value=\"n1\"></td><td>";
include "nowork1";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"nowork2\" value=\"n2\"></td><td>";
include "nowork2";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"nowork3\" value=\"n3\"></td><td>";
include "nowork3";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"nowork4\" value=\"n4\"></td><td>";
include "nowork4";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"nowork5\" value=\"n5\"></td><td>";
include "nowork5";

echo "</td></tr> <tr><td> Рабочее время</td></tr>


<tr><td><input type=\"checkbox\" name=\"work1\" value=\"w1\"></td><td>";
include "work1";
echo "</td></tr><tr><td> <input type=\"checkbox\" name=\"work2\" value=\"w2\"></td><td>";
include "work2";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"work3\" value=\"w3\"></td><td>";
include "work3";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"work4\" value=\"w4\"></td><td>";
include "work4";
echo "</td></tr><tr><td><input type=\"checkbox\" name=\"work5\" value=\"w5\"></td><td>";
include "work5";
echo "</td></tr></table>
<p> <input type=\"submit\" name=\"del\" value=\"Удалить\"></p>
<p>Галочки для удаления, если какое либо время не указано, оно считается нерабочим</p>
 </form> <table>";



print "<br><br><p>Добавление времени</p><form name=\"add\" method=\"get\" action=\"time.php\">";
print "<input type=\"radio\" name=\"work\" value=\"1\" >Рабочее время<br>
       <input type=\"radio\" name=\"work\" value=\"0\" >Нерабочее время<br>";

print timeconditions_timegroups_drawtimeselects("aaa");

function filep($str,$filel){
$fp = fopen($filel, "a+"); // Открываем файл в режиме записи.
$test = fwrite($fp, $str); // Запись в файл
fclose($fp); //Закрытие файла
}


function timeconditions_timegroups_drawtimeselects($name, $time) {
    $html = '';
    // ----- Load Time Pattern Vari/(ables -----
    if (isset($time)) {
	list($time_hour, $time_wday, $time_mday, $time_month) = explode('|', $time);
    } else {
	list($time_hour, $time_wday, $time_mday, $time_month) = Array('*','-','-','-');
    }
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Time to start:").'</td>';
    $html = $html.'<td>';
    // Hour could be *, hh:mm, hh:mm-hhmm
    if ( $time_hour === '*' ) {
	$hour_start = $hour_finish = '-';
	$minute_start = $minute_finish = '-';
    } else {
	list($hour_start_string, $hour_finish_string) = explode('-', $time_hour);
	if ($hour_start_string === '*') {
	    $hour_start_string = $hour_finish_string;
	}
	if ($hour_finish_string === '*') {
	    $hour_finish_string = $hour_start_string;
	}
	list($hour_start, $minute_start) = explode( ':', $hour_start_string);
	list($hour_finish, $minute_finish) = explode( ':', $hour_finish_string);
	if ( !$hour_finish) {
	    $hour_finish = $hour_start;
	}
	if ( !$minute_finish) {
	    $minute_finish = $minute_start;
	}
    }
    $html = $html.'<select name="hour_start">';
    $default = '';
    if ( $hour_start === '-' ) {
	$default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 0 ; $i < 24 ; $i++) {
	$default = "";
	if ( sprintf("%02d", $i) === $hour_start ) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> ".sprintf("%02d", $i);
    }
    $html = $html.'</select>';
    $html = $html.'<nbsp>:<nbsp>';
    $html = $html.'<select name="minute_start">';
    $default = '';
    if ( $minute_start === '-' ) {
        $default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 0 ; $i < 60 ; $i++) {
	$default = "";
	if ( sprintf("%02d", $i) === $minute_start ) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> ".sprintf("%02d", $i);
    }
    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Time to finish:").'</td>';
    $html = $html.'<td>';
    $html = $html.'<select name="hour_finish">';
    $default = '';
    if ( $hour_finish === '-' ) {
        $default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 0 ; $i < 24 ; $i++) {
	$default = "";
	if ( sprintf("%02d", $i) === $hour_finish) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> ".sprintf("%02d", $i);
    }
    $html = $html.'</select>';
    $html = $html.'<nbsp>:<nbsp>';
    $html = $html.'<select name="minute_finish">';
    $default = '';
    if ( $minute_finish === '-' ) {
        $default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 0 ; $i < 60 ; $i++) {
	$default = '';
	if ( sprintf("%02d", $i) === $minute_finish ) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> ".sprintf("%02d", $i);
    }
    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';

    // WDay could be *, day, day1-day2
    if ( $time_wday != '*' ) {
	list($wday_start, $wday_finish) = explode('-', $time_wday);
	if ($wday_start === '*') {
	    $wday_start = $wday_finish;
	}
	if ($wday_finish === '*') {
	    $wday_finish = $wday_start;
	}
	if ( !$wday_finish) {
	    $wday_finish = $wday_start;
	}
    } else {
	$wday_start = $wday_finish = '-';
    }
    $html = $html.'<td>'._("Week Day start:").'</td>';
    $html = $html.'<td>';
    $html = $html.'<select name="wday_start">';
    if ( $wday_start == '-' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"-\" $default>-";

    if ( $wday_start == 'mon' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"mon\" $default>" . _("Monday");

    if ( $wday_start == 'tue' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"tue\" $default>" . _("Tuesday");

    if ( $wday_start == 'wed' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"wed\" $default>" . _("Wednesday");

    if ( $wday_start == 'thu' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"thu\" $default>" . _("Thursday");

    if ( $wday_start == 'fri' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"fri\" $default>" . _("Friday");

    if ( $wday_start == 'sat' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sat\" $default>" . _("Saturday");

    if ( $wday_start == 'sun' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sun\" $default>" . _("Sunday");

    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Week Day finish:").'</td>';
    $html = $html.'<td>';
    $html = $html.'<select name="wday_finish">';

    if ( $wday_finish == '-' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"-\" $default>-";

    if ( $wday_finish == 'mon' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"mon\" $default>" . _("Monday");

    if ( $wday_finish == 'tue' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"tue\" $default>" . _("Tuesday");

    if ( $wday_finish == 'wed' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"wed\" $default>" . _("Wednesday");

    if ( $wday_finish == 'thu' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"thu\" $default>" . _("Thursday");

    if ( $wday_finish == 'fri' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"fri\" $default>" . _("Friday");

    if ( $wday_finish == 'sat' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sat\" $default>" . _("Saturday");

    if ( $wday_finish == 'sun' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sun\" $default>" . _("Sunday");

    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Month Day start:").'</td>';

    // MDay could be *, day, day1-day2
    if ( $time_mday != '*' ) {
	list($mday_start, $mday_finish) = explode('-', $time_mday);
	if ($mday_start === '*') {
	    $mday_start = $mday_finish;
	}
	if ($mday_finish === '*') {
	    $mday_finish = $mday_start;
	}
	if ( !$mday_finish) {
	    $mday_finish = $mday_start;
	}
    } else {
	$mday_start = $mday_finish = '-';
    }

    $html = $html.'<td>';
    $html = $html.'<select name="mday_start">';
    $default = '';
    if ( $mday_start == '-' ) {
	$default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 1 ; $i < 32 ; $i++) {
	$default = '';
	if ( $i == $mday_start ) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> $i";
    }
    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Month Day finish:").'</td>';
    $html = $html.'<td>';
    $html = $html.'<select name="mday_finish">';
    $default = '';
    if ( $mday_finish == '-' ) {
	$default = ' selected';
    }
    $html = $html."<option value=\"-\" $default>-";
    for ($i = 1 ; $i < 32 ; $i++) {
	$default = '';
	if ( $i == $mday_finish ) {
	    $default = ' selected';
	}
	$html = $html."<option value=\"$i\" $default> $i";
    }
    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Month start:").'</td>';

    // Month could be *, month, month1-month2
    if ( $time_month != '*' ) {
	list($month_start, $month_finish) = explode('-', $time_month);
	if ($month_start === '*') {
	    $month_start = $month_finish;
	}
	if ($month_finish === '*') {
	    $month_finish = $month_start;
	}
	if ( !$month_finish) {
	    $month_finish = $month_start;
	}
    } else {
	$month_start = $month_finish = '-';
    }
    $html = $html.'<td>';
    $html = $html.'<select name="month_start">';

    if ( $month_start == '-' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"-\" $default>-";

    if ( $month_start == 'jan' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jan\" $default>" . _("January");

    if ( $month_start == 'feb' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"feb\" $default>" . _("February");

    if ( $month_start == 'mar' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"mar\" $default>" . _("March");

    if ( $month_start == 'apr' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"apr\" $default>" . _("April");

    if ( $month_start == 'may' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"may\" $default>" . _("May");

    if ( $month_start == 'jun' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jun\" $default>" . _("June");

    if ( $month_start == 'jul' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jul\" $default>" . _("July");

    if ( $month_start == 'aug' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"aug\" $default>" . _("August");

    if ( $month_start == 'sep' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sep\" $default>" . _("September");

    if ( $month_start == 'oct' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"oct\" $default>" . _("October");

    if ( $month_start == 'nov' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"nov\" $default>" . _("November");

    if ( $month_start == 'dec' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"dec\" $default>" . _("December");

    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'<tr>';
    $html = $html.'<td>'._("Month finish:").'</td>';
    $html = $html.'<td>';
    $html = $html.'<select name="month_finish">';

    if ( $month_finish == '-' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"-\" $default>-";

    if ( $month_finish == 'jan' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jan\" $default>" . _("January");

    if ( $month_finish == 'feb' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"feb\" $default>" . _("February");

    if ( $month_finish == 'mar' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"mar\" $default>" . _("March");

    if ( $month_finish == 'apr' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"apr\" $default>" . _("April");

    if ( $month_finish == 'may' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"may\" $default>" . _("May");

    if ( $month_finish == 'jun' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jun\" $default>" . _("June");

    if ( $month_finish == 'jul' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"jul\" $default>" . _("July");

    if ( $month_finish == 'aug' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"aug\" $default>" . _("August");

    if ( $month_finish == 'sep' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"sep\" $default>" . _("September");

    if ( $month_finish == 'oct' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"oct\" $default>" . _("October");

    if ( $month_finish == 'nov' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"nov\" $default>" . _("November");

    if ( $month_finish == 'dec' ) {
	$default = ' selected';
    } else {
	$default = '';
    }
    $html = $html."<option value=\"dec\" $default>" . _("December");

    $html = $html.'</select>';
    $html = $html.'</td>';
    $html = $html.'</tr>';
    $html = $html.'</tr>';
    return $html;
}

print " </table> <p><input type=\"submit\" name=\"add\"  value=\"Сохранить\"></p> </form> </body> </html>";

?>