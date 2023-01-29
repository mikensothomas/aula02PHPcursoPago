<?php

$nome = ($_POST['nome']);
$sobrenome = ($_POST['sobrenome']);
$email = ($_POST['email']);
$mensagem = ($_POST['mensagem']);

//mail("mikensonthomas71@gmail.com", "Teste", "Olá!!");

//host: smtp.gmail.com
//Email: mikensonthomas0@gmail.com
//Senha: a sua password
//Porta: 465

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

//$mail->SMTPDebug = 2;

//Configuração do servidor
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
$mail->Username = 'mikensonthomas2@gmail.com';
$mail->Password = '17011994yeyeye';

//Configuração da mensagem
//$mail->isHTML(true);
//$mail->CharSet = 'UTF-8';

$mail->setFrom($mail->Username, "Mikenson Thomas");
$mail->addAddress('mikensonthomas2@gmail.com');
$mail->Subject = 'Fala conosco';
//$mail->Body = "h1>Email enviado com sucesso</h1>";

$conteudo_email = "
// Você recebeu uma mensagem $nome $sobrenome  ($email):
<br><br>

Mensagem:<br>
$mensagem
";

$mail->isHTML(true);
$mail->Body = $conteudo_email;

if ($mail->send()) {
    echo "E-mail enviado com sucesso";
} else {
    echo "Falha ao enviar email" . $mail->ErrorInfo;
}