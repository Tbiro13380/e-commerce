<?php

    if(isset($_POST['registro']) && $_POST['email']) {
        include 'conexao.php';

        $resultado = $db->query("select * from `clientes` where email='".$_POST['email']."'");
        $row = $resultado->num_rows;

        if($row < 1) {
            $db->query("INSERT INTO `clientes`(`nome`, `email`, `senha`) VALUES ('".$_POST['nome']."','".$_POST['email']."','".md5($_POST['senha'])."')");
            $msg = "Usuario cadastrado com sucesso";
        } else {
            $msg = "Esse email já esta cadastrado";
        }
    } else {
        $msg = "Acesso não via formulario";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Login</title>

    <!-- Bootstrap -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <!-- Fonte -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
</head>
<body style="background-image: url('./imgs/bg-index.png'); height: 100vh">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-5"><?php echo $msg; ?><h2>
                        <p class="text-center text-muted mt-5 mb-0">Já se cadastrou? <a class="fw-bold text-body" href="/login.php"><u>Entre aqui</u></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>