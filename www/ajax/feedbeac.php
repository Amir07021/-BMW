<?php
$name = htmlspecialchars($_POST['name']);
$name = htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_POST['subject']);
$name = htmlspecialchars($_POST['message']);
if ($name == '' || $email =='' || $subject =='' || $message ==''){
echo "Запоните все поля";
exit;
}
// Отправка
$subject = "=?utf-8?B?". base64_encode($subject)."?=";
$headers = "From: #email\r\nReply-to: #email\r\nContent-type: text/html; charset=utf-8\r\n";
if(mail("test@mai.ru", $ubject, $message, $headers ))
echo "Сообщение отправлено";
else
echo "Сообщение не отправлено";
?>