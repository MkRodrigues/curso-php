<?php 

class Carro {
    
    private $banco;
    private $volante;
    private $painel;
    private $janela;
    private $marcha;
    private $freio_mao;

    public function __construct(){

    }

    //Getters
    public function getBanco($banco) : string {
        return $this->id = $id;
    }

    public function getVolante($volante) : string {
        return $this->volante = $volante;
    }

    public function getPainel($painel) : string {
        return $this->painel = $painel;
    }

    public function getJanela($janela) : string {
        return $this->janela = $painel;
    }

    public function getMarcha($marcha) : string {
        return $this->marcha = $marcha;
    }

    public function getFreioMao($freioMao) : string {
        return $this->freioMao = $freio_mao;
    }

    // Setters

    public function setBanco(string $banco){
        $this->banco = $banco;
    }

    public function setVolante(string $volante){
        $this->volante = $volante;
    }

    public function setPainel(string $painel){
        $this->painel = $painel;
    }

    public function setJanela(string $janela){
        $this->janela = $janela;
    }

    public function setMarcha(string $marcha){
        $this->marcha = $marcha;
    }

    public function setfreioMao(string $freioMao){
        $this->freioMao = $freio_mao;
    }

    public function __destruct(){

    }

}   