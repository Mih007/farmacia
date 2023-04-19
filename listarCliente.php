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
        <div class="container text-center">
            <h3>Listagem de Cliente</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `cadastroSiteApp`";
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $idCadastroSiteApp  =  $array['idCadastroSiteApp'];
                        $nome       =  $array['nome'];
                        $email      =  $array['email'];
                        $senha      =  $array['senha'];
                ?>
                    <tr>
                        <td> <?php echo $nome   ?> </td>
                        <td> <?php echo $email  ?> </td>
                        <td> <?php echo $senha  ?> </td>
                        <td><a href="editarCliente.php?id=<?php echo $idCadastroSiteApp ?>"><button type="button" class="btn btn-outline-success">Editar</button></a></td>
                        <td><a href="deletarCliente.php?id=<?php echo $idCadastroSiteApp ?>"><button type="button" class="btn btn-outline-danger">Excluir</button></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
</body>
</html>