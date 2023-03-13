<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="salvar-usuario.php" method="POST" >    
            <input type="hidden" name="acao" value="cadastrar">
            <h1>Cadastro</h1>
            <br>
            <br>
            <br>
            <h2>Nome</h2>
            <input type="text" name="nome">
            <br>
            <h2>Login</h2>
            <input type="text" name="login">
            <br>
            <h2>Senha</h2>
            <input type="password" name="senha">
            <br>
            <br>
            <input type="submit">
        </form>
    </center>
</body>
</html>
<?php 
include("conexao/conexao.php");

?>