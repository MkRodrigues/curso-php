<?php 

class Pessoa{

    private $nome;

    public function __construct(){
        
    }
    
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
}