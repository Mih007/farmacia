<?php

include 'conexao.php';

$nome      = $_POST ["nome"];
$genero     = $_POST ["genero"];
$cpf       = $_POST ["cpf"];
$cep       = $_POST ["cep"];
$telefone     = $_POST ["telefone"];
$enderecoRua     = $_POST ["enderecoRua"];
$enderecoNumero     = $_POST ["enderecoNumero"];
$dataNasc     = $_POST ["dataNasc"];
$email     = $_POST ["email"];
$senha     = $_POST ["senha"];

$sql = "INSERT INTO `cliente`(`nome`, `genero`, `cep`, `cpf`, `telefone`, `enderecoRua`, `enderecoNumero`, `dataNasc`, `senha`) 
VALUES ('$nome','$genero','$cep','$cpf','$telefone','$enderecoRua','$enderecoNumero','$dataNasc','$senha')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 300px; text-align:center; padding-top: 50px">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h4>Cadastrado realizado com sucesso</h4>

<div>
    <a href="index.php" role ="button" class="btn btn-secondary"> Cadastrar</a>
</div>
</div>