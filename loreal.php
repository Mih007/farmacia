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

    <section>
        <div class="container">
            <img class="d-block w-100" src="img/slides/belezaLorealSlides.png">
        </div>
    </section>

    <br><br><br>

    <section>
        <div class="container text-center">
            <h3>CONFIRA JÁ OS NOVOS PRODUTOS DA L'ORÉAL</h3>
        </div>
    </section>

    <br><br><br><br><br>

    <?php 
    $mysqli = new mysqli("localhost", "root", "", "farmaciapanaceia"); // Conexão com o banco de dados
    for ($i = 0; $i < 98; $i++) {
      if ($mysqli->connect_error) { //Verifica se houve erro na conexão
        die("Erro na conexão: " . $mysqli->connect_error);
      }
      $query = "SELECT nomeProduto, valorUnidade FROM produto WHERE idProduto = $i"; // Query para buscar um registro da tabela 'produto'
      $resultado[$i] = $mysqli->query($query); // Executa a query
      $registro[$i] = $resultado[$i]->fetch_assoc(); // Obtém o registro retornado pela query
  
    }
    ?>
    <section>
        <div class="container-fluit  ">
            <div class="row ">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/kitCachosLongosDosSonhos.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[78]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produtos para cabelo
                                <br>Faixa etária: +14
                                <br>
                                <R1><strong>R$ <?php echo $registro[78]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/kitCorretivoAguaMicelarGelDeLimpeza.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[79]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produtos para pele
                                <br>Faixa etária: +14
                                <br>
                                <R1><strong>R$ <?php echo $registro[79]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/kitElseveCabelosCacheados.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[80]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produtos para cabelo
                                <br>Faixa etária: +14
                                <br>
                                <R1><strong>R$ <?php echo $registro[80]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/kitHidratacaoLisoDosSonhos.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[81]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produtos para cabelo
                                <br>Faixa etária: +14
                                <br>
                                <R1><strong>R$ <?php echo $registro[81]["valorUnidade"]  ?></strong></R1>
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
        <div class="container-fluit  ">
            <div class="row ">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/kitProfessionnelCurlExpression.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[82]["nomeProduto"]  ?> </h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produtos para cabelo Professionel Curl Expression
                                <br>
                                <R1><strong>R$ <?php echo $registro[82]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/baseAccordParfait2w.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[83]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produto para pele
                                <br>Tom: 2w
                                <br>
                                <R1><strong>R$ <?php echo $registro[83]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/baseTrueMatch1NIvory.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[84]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produto para pele
                                <br>Tom: 1N
                                <br>
                                <R1><strong>R$ <?php echo $registro[84]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/baseTrueMatch8N.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <?php echo $registro[85]["nomeProduto"]  ?> </h5>
                            <p class="card-text">Marca: L'oréal
                                <br>Produto para pele
                                <br>Tom: 8N
                                <br>
                                <R1><strong>R$ <?php echo $registro[85]["valorUnidade"]  ?></strong></R1>
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
        <div class="container-fluit  ">
            <div class="row ">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/cremeDePentearAntiCorte.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <?php echo $registro[86]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>250ml
                                <br>Anti-corte
                                <br>
                                <R1><strong>R$ <?php echo $registro[86]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/CremeDePentearExterminaFrizz.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[87]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>250ml
                                <br>Extermina Frizz
                                <br>
                                <R1><strong>R$ <?php echo $registro[87]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/cremeDeTratamentoOleoDeCoco.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[88]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>300ml
                                <br>Óleo de coco
                                <br>
                                <R1><strong>R$ <?php echo $registro[88]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/cremeDeTratamentoOleoDeFlores.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[89]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>300ml
                                <br>Óleo de flores
                                <br>
                                <R1><strong>R$ <?php echo $registro[89]["valorUnidade"]  ?></strong></R1>
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
        <div class="container-fluit  ">
            <div class="row ">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/cremeHidraHilauronico.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <?php echo $registro[90]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>250ml
                                <br>Ácido Hialurônico
                                <br>
                                <R1><strong>R$ <?php echo $registro[90]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/hidraTotal5.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[91]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>50ml
                                <br>Creme anti-arrugas 35+
                                <br>
                                <R1><strong>R$ <?php echo $registro[91]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/leaveInDeTratamento.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[92]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>50ml
                                <br>Proteção térmica
                                <br>
                                <R1><strong>R$ <?php echo $registro[92]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/mascaraIntensivaHidraHilauronico.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[93]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>300ml
                                <br>Ácido Hialurônico
                                <br>
                                <R1><strong>R$ <?php echo $registro[93]["valorUnidade"]  ?></strong></R1>
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
        <div class="container-fluit  ">
            <div class="row ">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/mascaraReparadora.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[94]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>300ml
                                <br>Total Repair 5
                                <br>
                                <R1><strong>R$ <?php echo $registro[94]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/oleoSerum.png" alt="Imagem de capa do card ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[95]["nomeProduto"]  ?> </h5>
                            <p class="card-text">Marca: L'oréal
                                <br>100ml
                                <br>Óleo de flores
                                <br>
                                <R1><strong>R$ <?php echo $registro[95]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">
                        <img class="card-img-top" src="img/lorelParis/protetorSolarUvDefender.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[96]["nomeProduto"]  ?> </h5>
                            <p class="card-text">Marca: L'oréal
                                <br>40ml
                                <br>UV defender
                                <br>
                                <R1><strong>R$ <?php echo $registro[96]["valorUnidade"]  ?></strong></R1>
                            </p>
                            <button type="button" style="width: 225px ;" class="btn btn-outline-success">COMPRAR <img src="img/menu/carrinhoPreto.png" width="20" height="20"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="width: 265px ;">                                                              
                        <img class="card-img-top" src="img/lorelParis/shampooHidraHilauronico.png" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $registro[97]["nomeProduto"]  ?></h5>
                            <p class="card-text">Marca: L'oréal
                                <br>400ml
                                <br>Ácido Hialurônico
                                <br>
                                <R1><strong>R$ <?php echo $registro[97]["valorUnidade"]  ?></strong></R1>
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

