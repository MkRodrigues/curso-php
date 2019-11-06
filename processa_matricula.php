<?php 
// Esta página recebe a informação do respectivo formulário com os dados a serem inseridos no SGBD e faz essa comunicação com o mesmo, não aparecendo ao usuário.

include 'database.php';

 $id_aluno = $_POST['escolha_aluno'];
 $id_curso = $_POST['escolha_curso'];


 $query = "INSERT INTO alunos_cursos(id_aluno, id_curso) VALUES ($id_aluno, $id_curso)";

 mysqli_query($conexao, $query);

 header('location:index.php?pagina=matriculas');