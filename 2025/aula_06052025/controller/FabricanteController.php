<?php
include '../dao/ConnectionFactory.php';
include '../dao/FabricanteDao.php';
include '../model/Fabricante.php';

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