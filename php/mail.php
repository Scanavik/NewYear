<?php
$fio = $_POST['username'];
$tel = $_POST['usertel'];
$mes = $_POST['message'];
$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$mes = htmlspecialchars($mes);
$fio = urldecode($fio);
$tel = urldecode($tel);
$mes = urldecode($mes);
$fio = trim($fio);
$tel = trim($tel);
$mes = trim($mes);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("scanavik@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$tel." Сообщение: ".$mes ,"From: info@morozperm.ru \r\n"))
 {     echo "";
} else {
    echo "при отправке сообщения возникли ошибки";
}
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>