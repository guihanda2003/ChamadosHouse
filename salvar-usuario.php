<?php
include("conexao/conexao.php");
switch ($_REQUEST["acao"]){
    case 'cadastrar' :
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $sql = "INSERT INTO usuarios (nome_usuario, login_usuario, pass_usuario) VALUES ('$nome', '$login', '$senha')";
        $sql_result = mysqli_query($mysqli, $sql);
    break;
} 
header('Location:login.php');

?>