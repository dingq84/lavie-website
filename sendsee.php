<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>發送成功，感謝您的意見來信.</h2>

<?php
$sendTo = "fanchie@hotmail.com.tw,heat1222@gmail.com";
$subject = "來自三發嵐海網頁的訪客信";
$namess = $_POST['name'] ;
$phone = $_POST['phone'];
//$email = $_POST['email'] ;
$time = $_POST['time'];

$msg = 
    "顧客姓名: $namess\n" . 
    "聯絡電話: $phone\n" .    
    //"電子信箱: $email\n" .
	"聯絡時間: $time \n" ;
	
mb_internal_encoding("UTF-8");
mail($sendTo, $subject, $msg, $email);
?>

<a href="index.html">返回首頁</a>

</body>
</html>