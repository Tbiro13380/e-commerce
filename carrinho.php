<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['UsuarioID'])) {
        session_destroy();
        header("Location: index.php");
    }

    require_once 'componente.php';

    if(isset($_POST['remover'])) {
        if($_GET['action'] == 'remover') {
            unset($_SESSION['carrinho'][0]);
        }
    }

    if(isset($_POST['buy']) & count($_SESSION['carrinho']) > 0){
      $_SESSION['buyed'] = true;
      unset($_SESSION['carrinho'][0]);
    } else {
      $_SESSION['buyed'] = false;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho</title>

    <link rel="stylesheet" href="./css/carrinho.css" />

    <!-- Bootstrap -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-light">
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 ps-0 pe-0">
        <a href="home.php" class="navbar-brand">
          <h3 class="px-5"><span>Sorriso Doce</span></h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="me-auto"></div>
          <div class="navbar-nav">
            <a
              href="carrinho.php"
              id="carrinho_id"
              class="nav-item nav-link active"
            >
              <h5 class="px-5 cart">
                <i class="fas fa-shopping-cart"></i> Carrinho
                <?php
                    if(isset($_SESSION['carrinho'])) {
                        $produto_id = $_SESSION['carrinho'][0];
                        $quantidade = count($_SESSION['carrinho']);
                        echo '<span id="carrinho_quant" class="text-warning bg-light px-3 rounded-circle">'.$quantidade.'</span>';
                    } else {
                        echo '<span id="carrinho_quant" class="text-warning bg-light px-3 rounded-circle">0</span>';
                    }
                                    
                ?>
              </h5>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <div class="row px-5">
      <div class="col-md-7">
        <div class="shopping-cart">
          <h6>Meu Carrinho</h6>
          <hr />

          <?php
            $total = 0;

            if(isset($_SESSION['carrinho'][0]) & ($_SESSION['buyed'] == false)){
                carrinhoElement($produto_id);
                $total = "R$ 00,00";
            } elseif ($_SESSION['buyed'] == true) {
                echo "<h5>Produto Comprado! Obrigado pela compra '".$_SESSION['UsuarioNome']."'</h5>";
            } else {
              echo "<h5>Carrinho vazio</h5>";
            }
          ?>

        </div>
      </div>
      <div class="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
        <div class="pt-4">
            <h6>Detalhes Do Pagamento</h6>
            <hr>
            <div class="row detalhes-pagamento">
                <div class="col-md-6">
                    <?php
                        if(isset($_SESSION['carrinho'])) {
                            $quantidade = count($_SESSION['carrinho']);
                            echo "<h6>Preço: (".$quantidade." item) </h6>";
                        } else {
                            echo "<h6>Preço: (0 items) </h6>";
                        }
                    ?>
                    <h6>Preço do Frete</h6>
                    <hr>
                    <h6>Preço Total</h6>
                </div>
                <div class="col-md-6">
                    <h6><?php echo $total; ?></h6>
                    <h6 class="text-success">Grátis</h6>
                    <hr>
                    <h6><?php echo $total; ?></h6>
                </div>
            </div>
        </div>
      </div>
      <form action="carrinho.php" method="post">
        <button type="submit" class="btn btn-success mt-5 offset-md-3" name="buy">
          Finalizar Compra 
        </button>
      </form>
    </div>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/befb5dabd2.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
