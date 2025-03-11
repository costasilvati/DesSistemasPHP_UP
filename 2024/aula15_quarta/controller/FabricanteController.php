<?php
include '../dao/ConnectionFactory.php'; // Conexão c/ banco
include '../dao/FabricanteDao.php'; // Data Access Object
include '../model/Fabricante.php'; // Classe Fabricante

$fabricante = new Fabricante();
$fabricanteDao = new FabricanteDao();

// Pegar os dados enviados
$dadosRequest = filter_input_array(INPUT_POST);

// se a operação for salvar
if(isset($_POST['cadastrar'])){
    $fabricante->setNome($_POST['nome']);
    $fabricante->setEndereco($_POST['endereco']);
    $fabricante->setDocumento($_POST['documento']);
    $fabricanteDao->inserir($fabricante);
    header("Location: ../FabricanteForm.php");
}else if(isset($_GET['del'])){
    $fabricante->setId($_GET['del']);
    $fabricanteDao->delete($fabricante);
    header("Location: ../FabricanteForm.php");
}
?>