<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- getbootstrap.com > include via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <!-- Aqui vai o menu -->
            <?php
                //include "menu.php";
                require "menu.php";
            ?>
        </div>
        <div class="col">
            <!-- Form aqui -->
             <!-- Solicitação via POST para formulario.php-->
             <form action="formulario.php" method="post">
                <input type="text" name="oi">
                <button type="submit" class="btn btn-danger">
                  Solictar formulario.php via POST
                </button>
              </form>
        </div>
        <div class="col"></div>
    </div>
    
</body>
</html>