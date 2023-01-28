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
$mail->Host = 'smtp.zerobugs.com.br';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'teste@zerobugs.com.br';
$mail->Password = 'mc0BfI9*mm<';

$mail->SMTPSecure = false;
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';

$mail->setFrom('teste@zerobugs.com.br', "Teste Zero Bugs");
$mail->addAddress('mikensonthomas2@gmail.com');
$mail->Subject = 'MikensonThomas';
$mail->Body = "h1>Email enviado com sucesso</h1>";

if ($mail->send()) {
    echo "E-mail enviado com sucesso";
} else {
    echo "Falha ao enviar email";
}