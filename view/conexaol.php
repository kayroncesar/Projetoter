<?php

$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$conexaol = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

if (!$conexaol) {
    die("Conexão falhou: " . mysqli_connect_error());
}



?>
