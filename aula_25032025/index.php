<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP aula 3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="display-1">Formulario PHP</h1>
                <form action="requisicoes.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso de graduação</label>
                        <select name="curso" class="form-select">
                            <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
                            <option value="BES" selected>Bacharelado em Engenharia de Software</option>
                        </select>
                    </div>
                    <p>Você é bolsista?</p>
                    <div class="form-check">
                        <input type="radio" name="bolsista" value="Sim"> 
                        <label for="bolsista" class="form-check-label">Sim</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="bolsista" value="Não" checked> 
                        <label for="bolsista" class="form-check-label">Não</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>