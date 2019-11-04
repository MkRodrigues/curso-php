<?php

#mysqli 
// Usado para acessar o banco de dados
// Os dados a seguir são necessários para realizar a conexão com o Banco
$servidor = "localhost:8000";
$usuario = "root";
$senha = "password";
$database = "curso_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao) {
    echo "Conectado com sucesso";
}else{
    echo "Conexão não realizada!"; 
}
