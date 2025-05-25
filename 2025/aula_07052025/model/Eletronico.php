<?php
class Eletronico extends Produto{ // herança
    private $voltagem;

    public function __construct($descricao, $valor, $qtdEstoque, $voltagem){
        parent::__construct($descricao, $valor, $qtdEstoque);
        $this->voltagem = $voltagem;
    }

    public function getVoltagem(){
        return $this->voltagem;
    }

    public function setVoltagem($v){
        $this->voltagem = $v;
    }

    public function __toString(){
        return parent::__toString()." Eletronico: Voltagem: {$this->voltagem}";
    }
}
?>