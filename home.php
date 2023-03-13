<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados</title>
    <style>

        * {
            width: 0;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table {
            border-collapse: separate;
            border-spacing: 15rem 2rem;

}
     

    </style>
</head>
<body>

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
    echo ('<p> Logado: '. $logado .'</p>');
?>

<center>
    <table>
        <div>
            <h2>Lista de chamados</h2>
        </div>
        <tr>
            <th>Nº Chamado</th>
            <th>Tipo</th>
            <th>Chamado</th>
            <th>Aberto por</th>
        </tr>
        <tr>
            <td>jdhawjda</td>
            <td>ndbjawhdua</td>
            <td>bdawndiawmdiawnd</td>
            <td>bdawndiawmdiawnds</td>
        </tr>

    


</center>






</body>
</html>