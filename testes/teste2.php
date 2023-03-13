<?php
include_once("conexao/conexao.php");
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

echo $nome;
echo $login;
echo $senha;



$sql = "INSERT INTO usuarios (nome_usuario, login_usuario, pass_usuario) VALUES ('$nome', '$login', '$senha')";
$sql_result = mysqli_query($mysqli, $sql);
?>