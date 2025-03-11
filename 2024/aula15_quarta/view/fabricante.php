<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Produto</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Cadastro de Fabricantes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="controller/FabricanteController.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" name="endereco" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="documento" class="form-label">Documento</label>
                        <input type="text" name="documento" class="form-control" required>
                    </div>
                    <input type="submit" value="Salvar" name="cadastrar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // include Dao, connectionFactory e model no Form.php
                    $fabricanteDao = new FabricanteDao();
                    foreach($fabricanteDao->read() as $fab) : ?>
                        <tr>
                            <td> <?= $fab->getId() ?> </td>
                            <td> <?= $fab->getNome() ?> </td>
                            <td> <?= $fab->getEndereco() ?> </td>
                            <td> <?= $fab->getDocumento() ?> </td>
                            <td>
                                <a href="controller/FabricanteController.php?del=<?= $fab->getId() ?>">
                                <button class="btn btn-danger btn-sm" type="button">Excluir</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
        </div>
    </div>
</body>
</html>