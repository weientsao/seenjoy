<?php
//$sendTo = "supersbman@gmail.com";
$sendTo = "Funtour7520@gmail.com";
$subject = "心喬旅行社-聯絡我們";
//$subject = "=?UTF-8?B?".base64_encode($subject)."?=";//解決亂碼

$company = $_POST['company'];
$ckind = $_POST['ckind'];
$cname = $_POST['cname'];
$cmail = $_POST['cmail'];
$ctel = $_POST['ctel'];
$ctel2 = $_POST['ctel2'];
$cfax = $_POST['cfax'];
$cphone = $_POST['cphone'];
$time = $_POST['time'];

$addr0 = $_POST['addr0'];
$addr = $_POST['addr'];
$taiwan = $_POST['taiwan'];
$type = $_POST['type'];
$year = $_POST['year'];
$mon = $_POST['mon'];
$day = $_POST['day'];
$goday = $_POST['goday'];
$peo = $_POST['peo'];
$money = $_POST['money'];
$money2 = $_POST['money2'];
$info = $_POST['info'];

	//send mail
	$headers  = "From: $cmail\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $msg = "以下來自於網站聯絡我們的訊息:<br><br>
		聯絡人:".$cname."<br>
		Email:".$cmail."<br>
		公司名稱:".$company."<br>
		單位部門:".$ckind."<br>
		聯絡電話:".$ctel." 分機:".$ctel2."<br>
		傳真電話:".$cfax."<br>
		手機:".$cphone."<br>
		方便聯絡時間:".$time."<br><br>
		
		旅遊地點:".$addr0."<br>
		城市或景區:".$addr."<br>
		出發地:".$taiwan."<br>
		旅遊型態:".$type."<br>
		出發時間:".$year."年".$mon."月".$day."日<br>
		行程天數:".$goday."<br>
		參加人數:".$peo."<br>
		旅遊預算:".$money."~".$money2."<br>
		其它需求:".$info."<br>
		";
	mail($sendTo, $subject, $msg, $headers);
	header('Location: index.html');
?>