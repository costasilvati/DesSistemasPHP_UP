<?php
class Eletronico{
    private $nome;
    private $estoque;
    private $fabricante;

    // construtor
    public function __construct($nome, $estoque, $fabricante){
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->fabricante = $fabricante;
    }

    // Getter e setters

    public function __toString(){
        return "Produto - Nome: {$this->nome}, 
                Estoque: {$this->estoque}, 
                {$this->fabricante->__toString()}";
    }
}
?>