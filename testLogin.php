<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['loginEntrar']) && !empty($_POST['senhaEntrar'])) {
    include_once("conexao/conexao.php");
    $login = $_POST['loginEntrar'];
    $senha = $_POST['senhaEntrar'];
// 
    $sql = "SELECT * FROM usuarios WHERE login_usuario = '$login' AND pass_usuario = '$senha'";
    $result = $mysqli->query($sql);
    if(mysqli_num_rows($result) < 1) {
        unset($_SESSION['loginEntrar']);
        unset($_SESSION['senhaEntrar']);
        header('Location: login.php');
    } else {
        $_SESSION['loginEntrar'] = $login;
        $_SESSION['senhaEntrar'] = $senha;
        header('Location: home.php');
    }
} else {
    header('Location: login.php');
}
?>