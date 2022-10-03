<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['UsuarioID'])) {
        session_destroy();
        header("Location: index.php");
    }

    if(isset($_POST['add'])){
        if(isset($_SESSION['carrinho'])) {
            $item_array_id = array_column($_SESSION['carrinho'], 'produto_id');

            if (in_array($_POST['produto_id'], $item_array_id)){
                echo(null);
            } else {
                $item_array = array(
                    'produto_id' => $_POST['produto_id']
                );

                $_SESSION['carrinho'][0] = $item_array;
            }
        } else {
            $item_array = array(
                'produto_id' => $_POST['produto_id']
            );

            $_SESSION['carrinho'][0] = $item_array;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos</title>

    <link rel="stylesheet" href="./css/home.css" />

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
<body style="background-image: url('./imgs/bg-index.png'); height: 100vh">
<div class="container">
    <div class="row text-center py-5">
        <div class="my-3 my-md-0">
            <header id="header">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3">
                    <a href="home.php" class="navbar-brand">
                        <h3 class="px-5"><span>Sorriso Doce</span></h3>
                    </a>
                    <button class="navbar-toggler"
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
                             <a href="carrinho.php" id="carrinho_id" class="nav-item nav-link active">
                                <h5 class="px-5 cart">
                                    <i class="fas fa-shopping-cart"></i> Carrinho
                                    <?php
                                        if(isset($_SESSION['carrinho'])) {
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
            <form action="home.php" method="post">
                <div class="shadow-lg card">
                    <div class="mt-3">
                        <img
                                src="./imgs/Interrogacao.png"
                                alt="Interrogação"
                                class="card-img-top"
                                id="img-card"
                        />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Produto</h5>
                        <p class="card-text">Produto Surpresa</p>
                        <h5>
                            <span class="price">R$ 00,00</span>
                            <small class="text-secondary">Grátis!</small>
                        </h5>

                        <button type="submit" class="btn btn-warning my-3" name="add">
                            Adicionar ao Carrinho <i class="fas fa-shopping-cart"></i>
                        </button>
                        <input type="hidden" name="produto_id" value="1">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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