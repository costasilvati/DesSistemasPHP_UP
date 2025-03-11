<?php
    include 'view/produto.html';

    if(isset($_POST['descricao']) and isset($_POST['estoque']) and isset($_POST['preco'])){
        echo "POST";
        // Instancie um objeto produto com os dados enviados
        require_once 'model/Produto.php';
        require_once 'model/Fabricante.php';
        $produto = new Produto($_POST['descricao'], $_POST['estoque'], $_POST['preco']);

        $fabricante = new Fabricante;
        $fabricante->setNome($_POST['fabricante']);

        $produto->setFabricante($fabricante);
        // Imprima os valores usando o toString da classe
        echo $produto->__toString();
        require_once 'dao/ConnectionFactory.php';
        $connection = new ConnectionFactory;
        echo "<p></p>";
        $connection->getConnection();

    }else{
        echo "Não enviou todos os dados";
    }
?>