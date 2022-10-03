<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sorriso Doce</title>

    <link rel="stylesheet" href="css/index.css" />

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
    <section>
      <header>
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container" id="nav-container">
            <a href="#" class="navbar-brand" id="logo"
              ><span>Sorriso Doce</span></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbar-links"
              aria-controls="navbar-links"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-links">
              <ul class="nav navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="login.php" class="nav-link"
                    ><i class="fa-solid fa-user"></i><span>Login</span></a
                  >
                </li>
                <li class="nav-item">
                  <a href="registro.php" class="nav-link"
                    ><i class="fa-solid fa-user-plus"></i><span>Registrar</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="main">
        <h1>Sorriso Doce</h1>
        <p>A sua loja online de doces</p>
        <button type="button" class="btn-registre">
          <a href="registro.php">Registre-se</a>
        </button>
      </div>
    </section>

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
