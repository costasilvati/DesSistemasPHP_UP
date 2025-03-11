<?php
class Fabricante{
    private $id;
    private $nome;
    private $endereco;
    private $documento;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    public function __toString(){
        return "Fabricante: Nome: {$this->nome} - Endereço: {$this->endereco} - Docuemnto: {$this->documento}";
    }
}
?>