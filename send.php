<?php

   $name = $_POST['name'];
   $birthday = $_POST['birthday'];
   $adress = $_POST['adress'];
   $citizenship = $_POST['citizenship'];
   $orientation = $_POST['orientation'];
   $tel = $_POST['tel'];
   $home = $_POST['home'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];   
   $whatsapp = $_POST['whatsapp'];
   $telegram = $_POST['telegram'];
   $color = $_POST['color'];
   $colorh = $_POST['colorh'];
   $height = $_POST['height'];
   $weighs = $_POST['weighs'];
   $tatu = $_POST['tatu'];
   $advantage = $_POST['advantage'];
   $nam = $_POST['nam'];
   $namee = $_POST['namee'];
















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
