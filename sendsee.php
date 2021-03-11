<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
  <script type="application/javascript">(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10076389'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");</script>
</head>
<body>
  <h2>發送成功，感謝您的意見來信.</h2>

<?php
$sendTo = "sam-liau@yahoo.com.tw,heat1222@gmail.com";
$subject = "來自鼎巨LaVie網頁的訪客信";
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

