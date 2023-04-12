<?php 

    include 'conexao.php';
    $id = $_GET ['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/logos/logoPanaceiaGoogle.png">
  <title>Farmacia Panaceia | 24h Online</title>
</head>
<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarCliente.php" method="POST">
            <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `cadastroSiteApp` WHERE idCadastroSiteApp = $id";
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $idCadastroSiteApp  =  $array['idCadastroSiteApp'];
                        $nome       =  $array['nome'];
                        $email      =  $array['email'];
                        $senha      =  $array['senha'];
                ?>

                <h3 style="text-align: center">Edição do Clientes</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
                    <input type="number" class="form-control" name="id" value = "<?php echo $id ?>" style="display:none ;">
                
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="text" class="form-control" name="senha" value="<?php echo $senha ?>">
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-secondary button">Finalizar</button>
                </div>
                <?php } ?>
            </form>
        </div>
    </section>
</body>
</html>