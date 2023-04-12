<?php

include 'conexao.php';
$id = $_POST['id'];

$nome  = $_POST['nome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];

$sql = "UPDATE `cadastrositeapp` SET `nome`='$nome',`email`='$email',`senha`='$senha' WHERE idCadastrositeapp = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<div>
    <h4>Cliente Atualizado com Sucesso!</h4>
    <div>
        <a href="listarCliente.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>