<?php

$hostname = "localhost";
$bancodedados = "chamados_house";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_error) {
    echo "Falha ao conectar: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
}

?>