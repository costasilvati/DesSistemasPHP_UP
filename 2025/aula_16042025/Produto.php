<?php
class Produto{
    private $descricao;
    private $valor;
    private $qtdEstoque;
    private $fabricante;

    // Construtor
    public function __construct($descricao, $valor, $qtdEstoque){
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($desc){
        $this->descricao = $desc;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getQtdEstoque(){
        return $this->qtdEstoque;
    }

    public function setQtdEstoque($qtdEstoque){
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabricante){
        $this->fabricante = $fabricante;
    }

    public function __toString(){
        return "Produto - Descrição: {$this->descricao} - Valor: {$this->valor}
         - Quantidade em Estoque: {$this->qtdEstoque} - 
         {$this->fabricante->__toString()}";
    }
}
?>