<?php
require_once 'Fabricante.php';
require_once 'Eletronico.php';
// Tipo a main do Java
    $fabricante1 = new Fabricante;
    //$fabricante1->nome = "Samsung"; // Somente para atributos publicos
    $fabricante1->setNome("Samsung");
    $fabricante1->setEndereco("Rua Qualquer, 90");
    $fabricante1->setDocumento("000000");
    echo "<p> {$fabricante1} </p>";
    // Eletronico
    $eletronico = new Eletronico("Note 20 ultra", 3, $fabricante1);
    echo "<p> {$eletronico} </p>";


?>