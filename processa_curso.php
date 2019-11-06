<?php
// Esta página recebe a informação do respectivo formulário com os dados a serem inseridos no SGBD e faz essa comunicação com o mesmo, não aparecendo ao usuário


// Chamando a página via include para que possamos acessar os dados da mesma
include 'database.php';

// A variável POST pega os dados armazenados na tag NAME do HTML que está inserida na tag input, pegando os dados do usuário quando digitados
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

// Variável $nome_curso dentro de aspas simples devido a ser String
$query = "INSERT INTO cursos (nome_curso, carga_horaria) VALUES ('$nome_curso', $carga_horaria)";

// Variável Global de inserção de Query no SGBD, passando como parâmetro a conexao como banco feita na página database.php e a query realizada acima.
mysqli_query ($conexao, $query);

// Responsável por reencaminhar a página para um local especificado após a realização da ação
header('location:index.php?pagina=cursos');