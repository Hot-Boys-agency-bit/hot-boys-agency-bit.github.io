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
   $name = htmlspecialchars($name);
   $birthday = htmlspecialchars($birthday);
   $adress = htmlspecialchars($adress);
   $citizenship = htmlspecialchars($citizenship);
   $orientation = htmlspecialchars($orientation);
   $tel = htmlspecialchars($tel);
   $home = htmlspecialchars($home);
   $email = htmlspecialchars($email);
   $pass = htmlspecialchars($pass);
   $whatsapp = htmlspecialchars($whatsapp);
   $telegram = htmlspecialchars($telegram);
   $color = htmlspecialchars($color);
   $colorh = htmlspecialchars($colorh);
   $height = htmlspecialchars($height);
   $weighs = htmlspecialchars($weighs);
   $tatu = htmlspecialchars($tatu);
   $advantage = htmlspecialchars($advantage);
   $nam = htmlspecialchars($nam);
   $namee = htmlspecialchars($namee);
   $name = urldecode($name);
   $birthday = urldecode($birthday);
   $adress = urldecode($adress);
   $citizenship = urldecode($citizenship);
   $orientation = urldecode($orientation);
   $tel = urldecode($tel);
   $home = urldecode($home);
   $email = urldecode($email);
   $pass = urldecode($pass);
   $whatsapp = urldecode($whatsapp);
   $telegram = urldecode($telegram);
   $color = urldecode($color);
   $colorh = urldecode($colorh);
   $height = urldecode($height);
   $weighs = urldecode($weighs);
   $tatu = urldecode($tatu);
   $advantage = urldecode($advantage);
   $nam = urldecode($nam);
   $namee = urldecode($namee);
 
   $name = trim($name);
   $birthday = trim($birthday);
   $adress = trim($adress);
   $citizenship = trim($citizenship);
   $orientation = trim($orientation);
   $tel = trim($tel);
   $home = trim($home);
   $email = trim($email);
   $pass = trim($pass);
   $whatsapp = trim($whatsapp);
   $telegram = trim($telegram);
   $color = trim($color);
   $colorh = trim($colorh);
   $height = trim($height);
   $weighs = trim($weighs);
   $tatu = trim($tatu);
   $advantage = trim($advantage);
   $nam = trim($nam);
   $namee = trim($namee);
   
   if (mail("anvar.rakhmonoff@yandex.ru", 
           "Новое письмо с сайта",
           ".$name.
           ".$birthday.
           ".$adress.
           ".$citizenship.
           ".$orientation.
	   ".$tel.
           ".$home.
           ".$email.
           ".$pass.
           ".$whatsapp.
           ".$telegram.
	   ".$color.
           ".$colorh.
           ".$height.
           ".$weighs.
           ".$tatu.
           ".$advantage.	   
           ".$nam,	   
           "From:https://hot-boys-agency-bit.github.io/post.html\r\n")
) {
   	 echo ("Письмо успешно отправлено!");
   }
else {
	echo ("Есть ошибки! Проверьте данные...");
}
  ?>
