<?php

// Esta página recebe a informação do respectivo formulário com os dados a serem inseridos no SGBD e faz essa comunicação com o mesmo, não aparecendo ao usuário

include 'database.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nasc = $_POST['data_nasc'];

// echo $nome_aluno;
// echo $data_nasc;

// A variável data_nasc deve ser passada com aspas simples pois o Mysql reconhece a mesma como VARCHAR mesmo estando setada como date no SGBD, se não passada com aspas simples o número é reconhecido como zeros
$query = "INSERT INTO alunos (nome_aluno, data_nascimento) VALUES ('$nome_aluno', '$data_nasc')";

// var_dump($query);


mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');