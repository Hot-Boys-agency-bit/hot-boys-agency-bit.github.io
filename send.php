<?php

$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = trim($_POST["project_name"]);
	$admin_email  = "anton.bukashin@yandex.ru"; // кому
	$form_subject = trim($_POST["form_subject"]);

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
} else if ( $method === 'GET' ) {

	$project_name = trim($_GET["project_name"]);
	$admin_email  = ""; // кому
	$form_subject = trim($_GET["form_subject"]);

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
		}
	}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'."admin@unlun.pp.ua".'>' . PHP_EOL . //  от кого
'Reply-To: '."admin@unlun.pp.ua".'' . PHP_EOL;                         //  от кого

send($admin_email, adopt($form_subject), $message, $headers );

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=/index.html');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=/index.html">
<title>С вами свяжутся</title>
<meta name="generator">
<style>
body {
    color: #574439;
    font-family: Arial;
    font-size: 15px;
    line-height: 1;
    text-align: center;
	background: #333333; 
    padding: 10%;
	
}
h2 {
    font-size: 1.8em;
    color: #fff;
    position: relative;
    font-weight: 300;
    margin-bottom: 1em;
    padding-bottom: 0.8em;
    text-transform: uppercase;
    letter-spacing: 3px;
}
.success {
    font-size: 25px;}
.b {
    font-size: 1em;
    color: #999;
    padding: 1em 3em;
    margin-top: 2em;
    display: inline-block;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    -ms-transition: all 0.5s;
    transition: all 0.5s;
    position: relative;
    text-decoration: none;
    outline: none;
	border: 1px solid #ffffff;
    margin-top: 0;
	}
.b:hover	   { background: #fff;
    color: #333333;}
.b a{
    color: #fff;
    text-decoration: none;
	padding:1em 3em;}	
.b a:hover{
    color: #333333;
    text-decoration: none;
	}	
	
.success {    color: #fff;
    font-weight: 300;}

	@media (max-width:1000px){ 
	.form{zoom:1.9; padding:5px}
}  
	
</style>
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 5000);</script> 

</head>
<body>

<div class="form">
 <h2>ОТЛИЧНО!</h2>
    <p class="success">Контакт отправлен.</p>
    <h1 style='    color: #fff;
    font-size: 40px; text-align: center;'>Скоро мы свяжемся с Вами.</h1>
	<p class="b"><a href="/">НА ГЛАВНУЮ</a></p>
</div>





</body>
</html>







