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

    for ($i=0; $i < 36; $i++) {
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
            <img class="card-img-top" src="img/aparelhos/autotesteCovid.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[17]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Eco Diagnóstica
                <br>03 unidades
                <br>Faixa etária: +14 
                <br>
                <R1><strong>R$ <?php echo $registro[17]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/contourPlus.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[18]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Bayer
                <br>50 unidades
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[18]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/kitSeringa.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[19]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: BD
                <br>10 unidades
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[19]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/munhequeiraElasticaBege.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[20]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Mercur
                <br>02 unidades
                <br>Tamanho: M
                <br>
                <R1><strong>R$ <?php echo $registro[20]["valorUnidade"] ?></strong></R1>
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
            <img class="card-img-top" src="img/aparelhos/munhequeiraElasticaPreta.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[21]["nomeProduto"]  ?></h5>
              <p class="card-text"> Marca: Mercur
                <br>02 unidades
                <br>Tamanho: P
                <br>
                <R1><strong>R$ <?php echo $registro[21]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/novopen.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[22]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Novo Nordisk
                <br>01 unidade
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[22]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/oximetroPulso.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[23]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Multilaser
                <br>01 unidade
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[23]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/seringa.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[24]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: BD
                <br>01 unidade
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[24]["valorUnidade"] ?></strong></R1>
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
            <img class="card-img-top" src="img/aparelhos/testeGravidez.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[25]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: União Quimica 
                <br>01 unidade
                <br>Faixa etária: +18
                <br>
                <R1><strong>R$ <?php echo $registro[25]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/umidificador.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[26]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Multilaser
                <br>2,1L 
                <br>Faixa etária: Livre
                <br>
                <R1><strong>R$ <?php echo $registro[26]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/testeDeFertilidade.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[28]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Alamar
                <br>05 unidades 
                <br>Faixa etária: +18
                <br>
                <R1><strong>R$ <?php echo $registro[28]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/coletorMenstrual.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[29]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: BioWorld
                <br>01 unidade
                <br>Tamanho: P
                <br>
                <R1><strong>R$ <?php echo $registro[29]["valorUnidade"] ?></strong></R1>
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
            <img class="card-img-top" src="img/aparelhos/bombaTiraLeite.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[30]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: MAM
                <br>01 unidade
                <br>Tamanho: único
                
                <br>
                <R1><strong>R$ <?php echo $registro[30]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/micronebulizador.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[31]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Soniclear
                <br>01 unidade
                <br>Tamanho: M
                <br>
                <R1><strong>R$ <?php echo $registro[31]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/copinhosParaInalador.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[32]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Soniclear
                <br>15 unidades
                <br>Cor: Trasparente
                <br>
                <R1><strong>R$ <?php echo $registro[32]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/mascaraParaDormir.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[33]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Mercur 
                <br>01 unidade
                <br>Tamanho: único
                <br>
                <R1><strong>R$ <?php echo $registro[33]["valorUnidade"] ?></strong></R1>
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
            <img class="card-img-top" src="img/aparelhos/coxalEsporte.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[34]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Mercur
                <br>01 unidade
                <br>Tamanho: P
                <br>
                <R1><strong>R$ <?php echo $registro[34]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/aparelhos/nosewahs.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[35]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: AGP Med
                <br>01 unidade
                <br>Faixa etária: +01
                <br>
                <R1><strong>R$ <?php echo $registro[35]["valorUnidade"] ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md"></div>
        <div class="col-md"></div>
        <div class="col-md"></div> 
        <div class="col-md"></div>
        <div class="col-md"></div> 
        <div class="col-md"></div>
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


