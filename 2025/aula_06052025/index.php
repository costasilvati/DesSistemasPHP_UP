<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller/FabricanteController.php" method="post">
        <p>Nome</p>
        <input type="text" name="nome">
        <p>Endereço</p>
        <input type="text" name="endereco">
        <p>Documento</p>
        <input type="text" name="documento">
        <p></p>
        <input type="submit" value="Salvar" name="cadastrar">
    </form>
</body>
</html>