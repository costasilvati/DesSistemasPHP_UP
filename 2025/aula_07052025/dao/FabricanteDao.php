<?php
class FabricanteDao{

    public function inserir(Fabricante $fab){
        try{
            $sql = "INSERT INTO fabricante (nome, endereco, documento)
                VALUES (:nome, :endereco, :documento)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $fab->getNome());
            $conn->bindValue(":endereco", $fab->getEndereco());
            $conn->bindValue(":documento", $fab->getDocumento());
            return $conn->execute(); # executa o insert
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }
}
?>