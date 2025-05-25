<?php
require '../dao/ConnectionFactory.php';
require '../model/Fabricante.php';
require '../dao/FabricanteDao.php';

$fabricante = new Fabricante();
$fabricanteDao = new FabricanteDao();

if(isset($_POST['cadastrar'])){
    $fabricante->setNome($_POST['nome']);
    $fabricante->setEndereco($_POST['endereco']);
    $fabricante->setDocumento($_POST['documento']);
    $fabricanteDao->inserir($fabricante);
    header("Location: ../index.php");
}

?>