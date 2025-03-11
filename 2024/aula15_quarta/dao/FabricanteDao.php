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
       }catch(PDOException $e){
            echo "<p>Erro ao inserir Fabricante</p> $e";
       }
    }

    public function read(){
     try{
          $sql = "SELECT * FROM fabricante";
          $result = ConnectionFactory::getConnection()->query($sql);
          $lista = $result->fetchAll(PDO::FETCH_ASSOC);
          $fabricanteLista = array(); // declarar lista vazia
          foreach($lista as $l){
               $fabricanteLista[] = $this->listaFabricante($l);
          }
          return $fabricanteLista;
     }catch(PDOException $e){
          echo "Ocorreu um erro ao listar fabricantes <br> $e";
     }
    }

    public function listaFabricante($row){
          $fabricante = new Fabricante(); // Escrever construtor para fazer tudo em uma linha
          $fabricante->setId($row['id']);
          $fabricante->setNome($row['nome']);
          $fabricante->setEndereco($row['endereco']);
          $fabricante->setDocumento($row['documento']);
          return $fabricante;
    }

    public function delete(Fabricante $fab){
     try{
          $sql = "DELETE FROM fabricante WHERE id = :id";
          $con_sql = ConnectionFactory::getConnection()->prepare($sql);
          $con_sql->bindValue(":id", $fab->getId());
          return $con_sql->execute();
     }catch(Exception $e){
          echo "Erro ao excluir fabricante <br> $e";
     }
    }
}
?>