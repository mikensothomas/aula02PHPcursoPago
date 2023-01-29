<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="send.php" method="POST">
        <label for="Nome">Nome</label><br>
        <input type="text" name="nome" require><br><br>
        <label for="Sobrenome">Sobrenome</label><br>
        <input type="text" name="sobrenome" require><br><br>
        <label for="Nome">E-mail</label><br>
        <input type="email" name="email" require><br><br>
        <label for="">Mensagem</label><br>
        <textarea name="mensagem" require></textarea><br><br>
        <input type="submit" name="Enviar">
    </form>
</body>

</html>