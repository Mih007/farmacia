<?php

$servename = "localhost";
$ursename = "root";
$password = "";
$database = "farmaciapanaceia";

$conexao = mysqli_connect( $servename, $ursename, $password, $database);
mysqli_set_charset($conexao,"utf8");

?>