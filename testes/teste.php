<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teste2.php" method="POST">
        <input type="hidden" name="acao">
        nome<input type="text" name="nome"><br><br>
        login<input type="text" name="login"><br><br>
        senha<input type="password" name="senha"><br><br>
        <input type="submit">
        <?php
         include("conexao/conexao.php");
        ?>

    </form>
    
</body>
</html>