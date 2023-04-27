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
for ($i = 0; $i < 118; $i++) {
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
            <img class="card-img-top" src="img/mamaeBebe/prendedorChupeta.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[98]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: MAM
                <br>01 unidade 
                <br>Cor: Azul
                <br>
                <R1><strong>R$ <?php echo $registro[98]["valorUnidade"]  ?></strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/aspiradorNasal.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[99]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Nose Frida
                <br>01 unidade
                <br>Aspirador de fluidos nasais
                <br>
                <R1><strong>R$ 91,05</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/copoAvent.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[100]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Avent
                <br>260 ml
                <br>Cor: rosa
                <br>
                <R1><strong>R$ 69,85</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/nanAr.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[101]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Nan Ar
                <br>800 g
                <br>Faixa etária: 0 a 12 meses
                <br>
                <R1><strong>R$ 62,90</strong></R1>
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
            <img class="card-img-top" src="img/mamaeBebe/tesouraNuk.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[102]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Nuk
                <br>01 unidade
                <br>tesoura para cortar unhas
                <br>
                <R1><strong>R$ 30,90</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/talcoGranado.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[103]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Casa Granado
                <br>100 g
                <br>Previne assaduras
                <br>
                <R1><strong>R$ 23,70</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/oleoJohnsons.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[104]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Johnsons & Johnsons
                <br>200 ml
                <br>Ajuda a dormir mais rápido
                <br>
                <R1><strong>R$ 70,32</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/compressasRefrescantes.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[105]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Fever Friends
                <br>04 unidades
                <br>Compressas refrescantes
                <br>
                <R1><strong>R$ 54,35</strong></R1>
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
            <img class="card-img-top" src="img/mamaeBebe/saboneteJohnsons.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[106]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Johnsons & Johnsons
                <br>80 g
                <br>Johnsons Baby glicerina
                <br>
                <R1><strong>R$ 6,47</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/nestogeno.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[107]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Nestle
                <br>400 g
                <br>Fórmula infantil para lactentes
                <br>
                <R1><strong>R$ 47,70</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/cremeParaPentear.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[108]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Johnsons & Johnsons
                <br>200 ml
                <br>Cachos dos sonhos
                <br>
                <R1><strong>R$ 52,44</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/bepantolBaby.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[109]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Bayer
                <br>30 g
                <br>Creme de Assaduras
                <br>
                <R1><strong>R$ 21,12</strong></R1>
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
            <img class="card-img-top" src="img/mamaeBebe/saboneteLiquidoJohnsons.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[110]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Johnsons & Johnsons
                <br>400 ml
                <br>Sabonete líquido johnson`s
                
                <br>
                <R1><strong>R$ 46,12</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/umedecidosHuggies.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[111]["nomeProduto"]  ?></h5>
              <p class="card-text">Marca: Huggies
                <br>48 unidades
                <br>Lenços umedecidos max clean
                <br>
                <R1><strong>R$ 22,17</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/coloniaJohnsons.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[112]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Johnsons & Johnsons
                <br>200 ml
                <br>Johnson`s baby - Lavanda
                <br>
                <R1><strong>R$ 42,33</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/hipoglosPomada.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[113]["nomeProduto"]  ?> </h5>
              <p class="card-text"> Marca: Johnsons & Johnsons
                <br>30 g
                <br>Proteção 5 em 1
                <br>
                <R1><strong>R$ 30,00</strong></R1>
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
            <img class="card-img-top" src="img/mamaeBebe/saboneteLiquidoHuggies.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[114]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Huggies
                <br>200 ml
                <br>Sabonete líquido extra suave
                <br>
                <R1><strong>R$ 25,75</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/pampersSuper.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[115]["nomeProduto"]  ?>  </h5>
              <p class="card-text">Marca: Pampers
                <br>30 unidades
                <br>Tamanho: G
                <br>
                <R1><strong>R$ 53,90</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/bicoMamadeira.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $registro[116]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Avent
                <br>02 unidades
                <br>Bicos 100% silicone
                <br>
                <R1><strong>R$ 34,47</strong></R1>
              </p>
              <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card" style="width: 265px ;">
            <img class="card-img-top" src="img/mamaeBebe/saboneteHuggies.png" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title text-center"> <?php echo $registro[117]["nomeProduto"]  ?> </h5>
              <p class="card-text">Marca: Huggies
                <br>75 g
                <br>Sabonete extra suave
                <br>
                <R1><strong>R$ 6,10</strong></R1>
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


