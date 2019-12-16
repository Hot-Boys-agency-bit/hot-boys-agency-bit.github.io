<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 
 $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
 $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

 $success = mail("anvar.rakhmnoff@yandex.ru", $subject, $headers );
 echo $success;




?>