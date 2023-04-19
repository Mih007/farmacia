<?php

    include 'conexao.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `cadastroSiteApp` WHERE idCadastroSiteApp = $id";

    $deletar = mysqli_query($conexao,$sql);
?>

<div >
    
    <h4>Cliente Deletado com sucesso!</h4>

    <div>
        <a href="listarCliente.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>