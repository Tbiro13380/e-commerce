<?php

    include 'conexao.php';

    $query = $db->query("SELECT * FROM `clientes` where email='".$_POST['email']."' AND senha='".md5($_POST['senha'])."' ");

    if ($query->num_rows != 1) {
        $msg = 'Login invalido';
    } else {
        if(!isset($_SESSION)) {
            session_start();
        }

        $row = $query->fetch_assoc();

        $_SESSION['UsuarioID'] = $row['id'];
        $_SESSION['UsuarioNome'] = $row['nome'];

        header("Location: home.php");
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
</head>
<body style="background-image: url('./imgs/bg-index.png'); height: 100vh">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-5"><?php echo $msg; ?><h2>
                        <p class="text-center text-muted mt-5 mb-0">Voltar ao Login: <a class="fw-bold text-body" href="/login.php"><u>Clique Aqui</u></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>