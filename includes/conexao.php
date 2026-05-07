<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pedidos_online";

$conn = new mysqli($host, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>