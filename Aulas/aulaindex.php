<?php

#mysqli 
// Usado para acessar o banco de dados
// Os dados a seguir são necessários para realizar a conexão com o Banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "curso_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

// ESTRUTURA CONDICIONAL PARA TESTE DE CONEXÃO
// if($conexao) {
//     echo "Conectado com sucesso";
// }else{
//     echo "Conexão não realizada!"; 
// }

// A VARIÁVEL GLOBAL mysqli_query($conexao, $query); insere no banco de dados as informações passadas a $query pelo PHP

// $query = "CREATE TABLE exemplo(
//     id_exemplo INT NOT NULL AUTO_INCREMENT,
//     nome VARCHAR (255) NOT NULL,
//     data DATE,
//     PRIMARY KEY(id_exemplo)
//     )";

// $executar = mysqli_query($conexao, $query); 
// if ($executar) {
//     echo "Exeutado com Sucesso (Nome tabela) <br>";
// }else {
//    echo "Falha ao executar (nome da tabela) <br>";
// }