<?php

include 'conexao.php';

$nome      = $_POST ["nome"];
$email     = $_POST ["email"];
$senha     = $_POST ["senha"];

$sql = "INSERT INTO `cadastroSiteApp`(`nome`, `email`, `senha`) 
VALUES ('$nome','$email','$senha')";

$inserir = mysqli_query($conexao, $sql);

?>


<h4>Cliente cadastrado com sucesso</h4>

<div>
    <a href="index.php" role ="button" class="btn btn-secondary"> Cadastrar</a>
</div>
</div>