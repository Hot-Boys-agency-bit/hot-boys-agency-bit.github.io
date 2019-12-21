<?php

   $name = $_POST['name'];
   $login = $_POST['login'];
   $pass = $_POST['pass'];
   $email = $_POST['email'];
   $tel = $_POST['tel'];
   $orientation = $_POST['orientation'];

   $login = htmlspecialchars($login);
   $pass = htmlspecialchars($pass);
   $email = htmlspecialchars($email);
   $tel = htmlspecialchars($tel);
   $name = htmlspecialchars($name);
   $orientation = htmlspecialchars($orientation);

   $login = urldecode($login);
   $pass = urldecode($pass);
   $email = urldecode($email);
   $tel = urldecode($tel);
   $name = urldecode($name);
   $orientation = urldecode($orientation);

   $login = trim($login);
   $pass = trim($pass);
   $email = trim($email);
   $tel = trim($tel);
   $name = trim($name);
   $orientation = trim($orientation);

   
   if (mail("anvar.rakhmonoff@yandex.ru", 
           "Новое письмо с сайта",
           ".$login.
           ".$pass.
           ".$email.
           ".$tel.
           ".$name.
           ".$orientation,
           "From: no-reply@mydomain.ru \r\n")
) {
   	 echo ("Письмо успешно отправлено!");
   }
else {
	echo ("Есть ошибки! Проверьте данные...");
}








  ?>
