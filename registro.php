<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar-se</title>

    <link rel="stylesheet" href="/../css/registro.css" />

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
    <section id="login">
      <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 id="logo" class="text-uppercase text-center mb-5">
                  Sorriso Doce - Registro
                </h2>

                <form action="verificar-registro.php" method="post">
                  <div class="form-outline mb-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input
                      type="text"
                      id="nome"
                      name="nome"
                      class="form-control form-control-lg"
                      required
                    />
                  </div>
                  <div class="form-outline mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input
                      type="text"
                      id="nome"
                      name="email"
                      class="form-control form-control-lg"
                      required
                    />
                  </div>
                  <div class="form-outline mb-4">
                    <i class="far fa-eye" id="verSenha"></i>
                    <label for="senha" class="form-label">Senha</label>
                    <input
                      type="password"
                      id="senha"
                      name="senha"
                      class="form-control form-control-lg"
                      required
                    />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button
                      id="btn-login"
                      class="btn btn-success btn-block btn-lg w-100"
                      type="submit"
                      name="registro"
                      value="Registro"
                    >
                      Entrar
                    </button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">
                    Já se registrou?
                    <a
                      class="fw-bold text-body"
                      href="login.php"
                      ><u>Entre aqui</u></a
                    >
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
