<?php 

//Criando uma Classe 
// Classes devem iniciar com Letras Maiúsculas

// Para chamar a Classe criada e usar seus métodos, precisamos usar a palavra reservada Require, para que ele chame a classe solicitada.

// require_once ""; - Chama o arquivo uma única vez
require "Pessoa.php";

$uma_pessoa = new Pessoa("Mikael");
// $uma_pessoa->nome = "Mikael";

// $uma_pessoa->setNome("Mikael");
echo $uma_pessoa->getNome();
