<?php
class FabricanteDao{

    public function inserir(Fabricante $fab){
        try{
            $sql = "INSERT INTO fabricante (nome, endereco, documento) 
            VALUES (:nome, :endereco, :documento);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":nome", $fab->getNome());
            $con_sql->bindValue(":endereco", $fab->getEndereco());
            $con_sql->bindValue(":documento", $fab->getDocumento());
            return $con_sql->execute();
        }catch(PDOException $ex){
            echo "<p> Erro ao inserir Fabricante no banco de dados!</p> $ex";
        }

    }
}
?>