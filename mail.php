<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$birthday = $_POST['user_birthday'];
$adress = $_POST['user_adress'];
$citizenship = $_POST['user_citizenship'];
$orientation = $_POST['user_orientation'];
$phone = $_POST['user_phone'];
$home = $_POST['user_home'];
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$whatsapp = $_POST['user_whatsapp'];
$telegram = $_POST['user_telegram'];
$color = $_POST['user_color'];
$сolorh = $_POST['user_сolorh'];
$height = $_POST['user_height'];
$weighs = $_POST['user_weighs'];
$tatu = $_POST['user_tatu'];
$advantage = $_POST['user_advantage'];
$education = $_POST['user_education'];
$languages = $_POST['user_languages'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hot.boys.agency@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '2015jnTr87Q'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('hot.boys.agency@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('gomudusu@p33.org');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Анкета с сайта';
$mail->Body    = 'Ф.И.О.' .$name . '<br> Дата рождения: ' .$birthday. '<br> Адрес проживания: ' .$adress. '<br> Гражданство: ' .$citizenship. '<br> Ориентация: ' .$orientation. '<br> Мобильный телефон: ' .$phone. '<br> Дом. телефон: ' .$home. '<br> E-mail: ' .$email. '<br> Пароль: ' .$pass. '<br> WhatsApp: ' .$whatsapp. '<br> Telegram: ' .$telegram. '<br> Цвет  глаз: ' .$color. '<br> Цвет волос: ' .$colorh. '<br> Рост: ' .$height. '<br> Вес: ' .$weighs. '<br> Наличие татуировок: ' .$tatu. '<br> Достоинство: ' .$advantage. '<br> Образование: ' .$education. '<br>Знание языков: ' .$languages;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: send.html');
}
?>