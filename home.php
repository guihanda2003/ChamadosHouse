<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['loginEntrar']) == true) and (!isset($_SESSION['senhaEntrar']) == true)) 
    {
        unset($_SESSION['loginEntrar']);
        unset($_SESSION['senhaEntrar']);
        header('Location: login.php');
    }
    $logado = $_SESSION['loginEntrar'];
    echo ('Seja bem vindo: ' . $logado);

        



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamadosss</title>
</head>
<body>
    <center>
        logado com sucesso! <br>
        list dos chamados
    </center>
</body>
</html>