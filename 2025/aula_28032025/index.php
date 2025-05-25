<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- getbootstrap.com > include via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>aula 26/03</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
              <!-- Aqui vai o menu -->
            <?php
                //include "menu.php";
                require "menu.php";
            ?>
            </div>
            <div class="col-5 border bg-light p-5">
                <h1 class="display-5">Formulário PHP</h1>
                <form action="formulario.php" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" max="14" name="cpf" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p>Gênero</p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="F">
                            <label for="genero" class="form-check-label">Feminino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="M">
                            <label for="genero" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="genero" value="O">
                            <label for="genero" class="form-check-label">Outro</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p>Exames para qual laboratório?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bioq" value="bioquimica" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Bioquímica
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hemato" value="hematologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Hematologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="imuno" value="imunologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Imunologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="micro" value="microbiologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                              Microbiologia
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="parasito" value="parasitologia" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Parasitologia
                            </label>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar via GET</button>
                </form>
            </div>
            <div class="col p-3 mt-2">
              <!-- Solicitação via POST para formulario.php-->
              <form action="formulario.php" method="post">
                <input type="text" name="oi">
                <button type="submit" class="btn btn-danger">
                  Solictar formulario.php via POST
                </button>
              </form>
            </div>
        </div>
    </div>
</body>
</html>