<?php
// classe
class Fabricante{
    private $nome;
    private $endereco;
    private $documento;

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
    // toString
    public function __toString(){
        // Faça tudo na mesma linha
        return "Fabricante - Nome: {$this->nome} 
                Endereço: {$this->endereco} 
                Documento: {$this->documento}";
    }
}
?>