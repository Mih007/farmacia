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
              <input class="form-control mr-sm-2" style="margin-left: 340px; width:450px; height:50px ;" type="search" placeholder="Encontre o que procura" aria-label="Pesquisar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="img/menu/pesquisar.png" alt="" width="30" height="35"></button>
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

  <?php
    
    $mysqli = new mysqli("localhost", "root", "", "farmaciapanaceia"); // Conexão com o banco de dados

    for ($i=0; $i < 63; $i++) {
      if ($mysqli->connect_error) { //Verifica se houve erro na conexão
        die("Erro na conexão: " . $mysqli->connect_error); 
      }
      $query = "SELECT nomeProduto, valorUnidade FROM produto WHERE idProduto = $i"; // Query para buscar um registro da tabela 'produto'
      $resultado[$i] = $mysqli->query($query); // Executa a query
      $registro[$i] = $resultado[$i]->fetch_assoc(); // Obtém o registro retornado pela query
      
    }

    ?>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/aveneAOxitive.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[47]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Pierre Fabre
                <br>15 ml
                <br>Creme anti-rugas
                <br>
                <R1><strong>R$ <?php echo $registro[47]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/cicatricure.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[48]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Genomma
                <br>250 g 
                <br>Creme anti-estrias
                <br>
                <R1><strong>R$ <?php echo $registro[48]["valorUnidade"]  ?></strong></R1>
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
            <img class="card-img-top" src="img/beleza/sensibioDs.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[49]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Bioderma
                <br>40 ml
                <br>Creme calmante
                <br>
                <R1><strong>R$ <?php echo $registro[49]["valorUnidade"]  ?></strong></R1>
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
    <div class="container-fluit">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/hydraporin.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[50]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: HYPERA PHARMA
                <br>200 ml
                <br>Sabonete líquido hidratante
                <br>
                <R1><strong>R$ <?php echo $registro[50]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
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
            <img class="card-img-top" src="img/beleza/skinceuticals.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[56]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Skinceuticals
                <br>30 ml
                <br>Combater o envelhecimento
                <br>
                <R1><strong>R$ <?php echo $registro[56]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/bepantolDerma.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[57]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Bayer
                <br>50 ml
                <br>Hidratante restaurador
                <br>
                <R1><strong>R$ <?php echo $registro[57]["valorUnidade"]  ?></strong></R1>
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
    <div class="container-fluit">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/fisiocalm.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[58]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Genom
                <br>240 ml
                <br>Ação calmante e restauradora
                <br>
                <R1><strong>R$ <?php echo $registro[58]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/profuseNutrel.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[59]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Eudora
                <br>20 g
                <br>Creme multirreparador
                <br>
                <R1><strong>R$ <?php echo $registro[59]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/skinceuticalsSerum.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[60]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Skinceuticals
                <br>30 ml
                <br>Sérum corretor calmante
                <br>
                <R1><strong>R$ <?php echo $registro[60]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/aveneAguaTermal.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[61]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Eudora
                <br>50 ml
                <br>Acalma, nutri e suaviza a pele
                <br>
                <R1><strong>R$ <?php echo $registro[61]["valorUnidade"]  ?></strong></R1>
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
    <div class="container-fluit">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/dermovanceDauf.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[62]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: FQM Melora
                <br>500 ml
                <br>Hidratante para pele seca
                
                <br>
                <R1><strong>R$ <?php echo $registro[62]["valorUnidade"]  ?></strong></R1>
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
            <img class="card-img-top" src="img/beleza/rosaSelvagem.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[51]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: RCM Cosmeticos
                <br>100 ml
                <br>Clareador de machas e estrias
                <br>
                <R1><strong>R$ <?php echo $registro[51]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/serumGlycolic.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[52]["nomeProduto"]  ?></h5>
              <p class="card-text"> Marca: La Roche-Posay
                <br>30 ml
                <br>Sérum anti-rugas
                <br>
                <R1><strong>R$ <?php echo $registro[52]["valorUnidade"]  ?></strong></R1>
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
    <div class="container-fluit">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/skinceuticalsSilymarin.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[53]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Skinceuticals
                <br>30 ml
                <br>Prevenir o envelhecimento
                <br>
                <R1><strong>R$ <?php echo $registro[53]["valorUnidade"]  ?></strong></R1>
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
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/cicatricureMaternity.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[54]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Gennoma
                <br>250 ml
                <br>Creme atin-estrias
                <br>
                <R1><strong>R$ <?php echo $registro[54]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/beleza/ureaderme.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[55]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Nutriex
                <br>120 ml
                <br>Hidratação Intensiva
                <br>
                <R1><strong>R$ <?php echo $registro[55]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
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


