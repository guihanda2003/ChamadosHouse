<?php 
include_once("conexao/conexao.php");

     
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamado House</title>
</head>
<body>
<center>
    <form method="post" action="testLogin.php">
        <h2>FAÇA SEU LOGIN</h2>
        <br>
        <label>Login</label> 
        <input name="loginEntrar" type="text">
        <br>
        <br>
        <br>
        <label>Senha</label>
        <input name="senhaEntrar" type="password">
        <br>
        <br>
        <input name="submit" type="submit">
        <br>
        <br>
        não tem cadastro? <a href="cadastro.php">clique aqui</a>
    </form>
</center>
</body>
</html>