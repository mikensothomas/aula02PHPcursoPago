<?php

//mail("mikensonthomas71@gmail.com", "Teste", "Olá!!");

//host: smtp.gmail.com
//Email: mikensonthomas0@gmail.com
//Senha: a sua password
//Porta: 465


use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'mikensonthomas0@gmail.com';
$mail->Password = '17011994yeyeye';
$mail->Port = 465;
$mail->SMTPAuth = true;

$mail->SMTPSecure = false;
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';

$mail->setFrom('mikensonthomas0@gmail.com', "Teste Zero Bugs");
$mail->addAddress('mikensonthomas2@gmail.com');
$mail->Subject = 'MikensonThomas';
$mail->Body = "h1>Email enviado com sucesso</h1>";

if ($mail->send()) {
    echo "E-mail enviado com sucesso";
} else {
    echo "Falha ao enviar email";
}