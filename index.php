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


<body style="background-color: ghostwhite;">


  <section>
    <div class="container-fluit fixed-top menuInicio text-center" style="background-color: #FFFFFF;">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar bg">
          <a class="navbar-brand logoMenu" style="margin-left: 200px;" href="index.php"><img src="img/logos/logoPanaceia.png" width="150" height="80" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

            <form class="form-inline my-3 my-lg-0">
              <input name="busca" value="<?php
                                          if (isset($_GET['busca'])) echo $_GET['busca'] ?>" class="form-control mr-sm-2" style="margin-left: 340px; width:450px; height:50px ;" type="search" placeholder="Encontre o que procura" aria-label="Pesquisar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="img/menu/pesquisar.png" alt="" width="25" height="25"></button>
            </form>

            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="cadastroCliente.php" style="margin-left: 400px;"><img src="img/menu/user.png" alt="" width="50" height="50"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 80px;"><img src="img/menu/carrinhoVerde.png" alt="" width="50" height="50"></a>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </div>
  </section>

  <br><br><br><br><br><br><br><br>

  <section>
    <div class="container">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">

            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="nutrigoodProdutos.php"><img class="d-block w-100" src="img/slides/nutrigoodSlides.png" alt="Primeiro Slide"></a>
            </div>
            <div class="carousel-item">
              <a href=""> <img class="d-block w-100" src="img/slides/consultasOnlineSlides.png" alt="Segundo Slide"> </a>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slides/freteGratisSlides.png" alt="Terceiro Slide">
            </div>
            <div class="carousel-item ">
              <a href="blackSkull.php"> <img class="d-block w-100" src="img/slides/suplementosSlides.png" alt="Quarto Slide"> </a>
            </div>
            <div class="carousel-item">
              <a href="loreal.php"> <img class="d-block w-100" src="img/slides/belezaLorealSlides.png" alt="Quinto Slide"> </a>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slides/leveMpagueMSlides.png" alt="Sexto Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slides/novaNoiteSlides.png" alt="Setimo Slide">
            </div>
            <div class="carousel-item">
              <a href="nutren.php"> <img class="d-block w-100" src="img/slides/nutrenSlides.png" alt="Oitvavo Slide"> </a>
            </div>
            <div class="carousel-item">
              <a href="needs.php"> <img class="d-block w-100" src="img/slides/produtosNeedsSlides.png" alt="Nono Slide"> </a>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slides/powerChaiSlides.png" alt="Decimo Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Próximo</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <a href="aparelhosTeste.php">
            <img src="img/button/aparelhosTeste.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="dermocosmeticos.php">
            <img src="img/button/dermocosméticos.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="higieneCuidados.php">
            <img src="img/button/higieneCuidadosPessoais.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="mamaeBebe.php">
            <img src="img/button/mamaeBebe.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="medicamentos.php">
            <img src="img/button/medicamentos.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="vacinas.php">
            <img src="img/button/vacinas.png" alt="" class="rounded-circle">
          </a>
        </div>
        <div class="col-md">
          <a href="vitaminasAlimentos.php">
            <img src="img/button/vitaminasAlimentos.png" alt="" class="rounded-circle">
          </a>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br><br>
  <?php

  $mysqli = new mysqli("localhost", "root", "", "farmaciapanaceia"); // Conexão com o banco de dados
  for ($i = 0; $i < 17; $i++) {
    if ($mysqli->connect_error) { //Verifica se houve erro na conexão
      die("Erro na conexão: " . $mysqli->connect_error);
    }
    $query = "SELECT nomeProduto, valorUnidade FROM produto WHERE idProduto = $i"; // Query para buscar um registro da tabela 'produto'
    $resultado[$i] = $mysqli->query($query); // Executa a query
    $registro[$i] = $resultado[$i]->fetch_assoc(); // Obtém o registro retornado pela query

  }

  ?>

  <section>
    <div class="container-fluit comboDescInicio ">
      <div class="row ">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/comboDesconto/sabonete.png" alt="Imagem de capa do card ">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[1]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Natura
                <br>Produtos para pele
                <br><s>
                  <R1 class="preçoAnterior">R$ 59,80</R1>
                </s>
                <br>
                <R1><strong>R$ <?php echo $registro[1]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/comboDesconto/mamaeEbebe.png" alt="Imagem de capa do card ">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[2]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Natura
                <br>Produtos para cabelo e pele
                <br><s>
                  <R1 class="preçoAnterior">R$ 407,80</R1>
                </s>
                <br>
                <R1><strong>R$ <?php echo $registro[2]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/comboDesconto/cabelo.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[3]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Diversas
                <br>Produtos para cabelo
                <br><s>
                  <R1 class="preçoAnterior">R$ 108,10</R1>
                </s>
                <br>
                <R1><strong>R$ <?php echo $registro[3]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/comboDesconto/higieneOral.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[4]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Diversas
                <br>Higiene Oral
                <br><s>
                  <R1 class="preçoAnterior">R$ 77,50</R1>
                </s>
                <br>
                <R1><strong>R$ <?php echo $registro[4]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
      </div>
    </div>
  </section>

  <br><br><br>

  <section>
    <div class="container-fluit InicioblackSkull">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/blackSkull/coqueteleira.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[5]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Black Skull
                <br> 600ml
                <br>Faixa etária: +16
                <br>
                <R1><strong>R$ <?php echo $registro[5]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/blackSkull/kitBS.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[6]["nomeProduto"]  ?></h5>
              <p class="card-text"> Marca: Black Skull
                <br>+ Brinde
                <br>Faixa etária: +16
                <br>
                <R1><strong>R$ <?php echo $registro[6]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/blackSkull/thermoFlame.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[7]["nomeProduto"] ?></h5>
              <p class="card-text"> Marca: Black Skull
                <br>60 Tabletes
                <br>Faixa etária: +16
                <br>
                <R1><strong>R$ <?php echo $registro[7]["valorUnidade"]  ?>0</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/blackSkull/whey900g.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[8]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Black Skull
                <br>900g
                <br>Faixa etária: +16
                <br>
                <R1><strong>R$ <?php echo $registro[8]["valorUnidade"] ?>0</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
      </div>
    </div>
  </section>

  <br><br><br>

  <section>
    <div class="container-fluid beleza">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/revitaliftHialuronico.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[9]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Loreal
                <br> 30 ml
                <br>Serúm preenchedor
                <br>
                <R1><strong>R$ <?php echo $registro[9]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/neovadiol.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[10]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Vichy
                <br> 50 g
                <br>Creme efeito lifting
                <br>
                <R1><strong>R$ <?php echo $registro[10]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/skinceuticalsGlycolic.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[11]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Skinceuticals
                <br> 50 ml
                <br>Promove brilho da pele
                <br>
                <R1><strong>R$ <?php echo $registro[11]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/gelCremeRedutor.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[12]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Hidrabene
                <br> 200 g
                <br>Gel-creme redutor de medidas
                <br>
                <R1><strong>R$ <?php echo $registro[12]["valorUnidade"]  ?> </strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
      </div>
    </div>
  </section>

  <br><br><br>

  <section>
    <div class="container-fluit mamaeBebeInicio">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/chupetaNukSensitiveS1.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[13]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Sensitive
                <br>Cor: Transparente
                <br>Faixa etária: Bebê
                <br>
                <R1><strong>R$ <?php echo $registro[13]["valorUnidade"]  ?>0</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/absorventeParaSeiosBemCare.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[14]["nomeProduto"]  ?></h5>
              <p class="card-text"> Marca: Philips
                <br>30 unidades
                <br>Faixa etária: Mamãe
                <br>
                <R1><strong>R$ <?php echo $registro[14]["valorUnidade"]  ?>0</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/fraldaPampersPantsAjusteTotalTamanhoM.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[15]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Pampers
                <br> M 112 unidades
                <br>Faixa etária: Bebê
                <br>
                <R1><strong>R$ <?php echo $registro[15]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/lencosUmedecidosJohnsonsBabyRecemNascidoSemFragrancia.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[16]["nomeProduto"]  ?></h5>
              <p class="card-text"> Marca: Johnsons
                <br>48 unidades
                <br>Faixa etária: Bebê
                <br>
                <R1><strong>R$ <?php echo $registro[16]["valorUnidade"]  ?>0</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
      </div>
    </div>


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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
 
