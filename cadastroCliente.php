<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/formularioCliente.css">
  <link rel="icon" href="img/logos/logoPanaceiaGoogle.png">
  <title>Farmacia Panaceia | Cadastre-se</title>
</head>


<body background="img\fundoCliente.png">
  <!--NAV-->

  <section>
    <div class="container-fluit fixed-top menuInicio text-center" style="background-color: #FFFFFF;">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar bg">
          <a class="navbar-brand logoMenu" style="margin-left: 200px;" href="index.php"><img src="img/logos/logoPanaceia.png" width="100" height="50" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

            <form class="form-inline my-3 my-lg-0">
              <input class="form-control mr-sm-2" style="margin-left: 340px; width:450px; height:50px ;" type="search" placeholder="Encontre o que procura" aria-label="Pesquisar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="img/menu/pesquisar.png" alt="" width="30" height="35"></button>
            </form>


            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="cadastrese.php" style="margin-left: 400px;"><img src="img/menu/user.png" alt="" width="45" height="45"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 80px;"><img src="img/menu/carrinhoVerde.png" alt="" width="45" height="45"></a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </div>
  </section>

  

  <section class="tamanhoFormulario">
        <div class="container ">
         <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md">
          <br><br><br><br><br><br><br>
            <form action="inserirCliente.php" method="POST">
                <h3 style="text-align: center">Cadastro do Clientes</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Entre com o seu nome:" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Entre com o seu E-mail:" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Escolha sua senha" required>
                </div>
                <div class="button">
                <button type="button" style="width: 225px ;" class="btn btn-outline-success">Cadastrar </button>
                </div>
            </form>
          </div>
          <div class="col-md-2"></div>
         </div>
        </div>
  </section>

  <footer class="border-top text-muted bg">
    <div class="container-fluit">
      <div class="row py-3">
        <div class="col-md-4 text-center">
          <p>2023 - Farmacia Panaceia Online Ltda ME<br>
            Rua Virtual Inexistente, 171, Compulândia/PT <br>
            CPNJ 99.999.999/0001-99</p>
        </div>
        <div class="col-md-4 text-center">
          <a href="/privacidade.html" class="text-decoration-none text-dark">
            Política de Privacidade
          </a><br>
          <a href="/termos.html" class="text-decoration-none text-dark">
            Termos de Uso
          </a><br>
          <a href="/quemsomos.html" class="text-decoration-none text-dark">
            Quem Somos
          </a><br>
          <a href="/trocas.html" class="text-decoration-none text-dark">
            Trocas e Devoluções
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="/contato.html" class="text-decoration-none text-dark">
            Contato pelo Site
          </a><br>
          <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
            E-mail: email@dominio.com
          </a><br>
          <a href="phone:28999990000" class="text-decoration-none text-dark">
            Telefone: (34) 99899-0000
          </a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>