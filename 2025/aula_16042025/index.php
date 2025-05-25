<?php
    require_once 'Fabricante.php';

    $fabricante = new Fabricante;
    $fabricante->setNome("Sony");
    $fabricante->setEndereco("Rua Qualquer, 80");
    $fabricante->setDocumento("0303030303");
    echo($fabricante->__toString());

    require_once 'Produto.php';
    $produto = new Produto("Mouse Óptico", 99.9, 2);
    $produto->setFabricante($fabricante);
    echo("<p>{$produto}</p>");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fabricante->setNome($_POST['nome']);
    }
?>