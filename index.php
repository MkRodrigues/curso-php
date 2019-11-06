<?php 

// Banco de Dados -->
include 'database.php';

// Cabeçalho
include 'header.php';

// Conteúdo
$pagina = $_GET['pagina'];

// Pegando cada página do Menu via PHP
// Se a página estiver setada será pega e exibida ao usuário
if(isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

}else{
    $pagina = 'home';
}

if($pagina == 'cursos') {
    include 'views/cursos.php';

}elseif($pagina == 'alunos') {
    include 'views/alunos.php';

}elseif($pagina == 'matriculas') {
    include 'views/matriculas.php';

}elseif($pagina == 'inserir_aluno') {
    include 'views/inserir_aluno.php';

}elseif($pagina == 'inserir_curso') {
    include 'views/inserir_curso.php';

}elseif($pagina == 'inserir_matricula') {
    include 'views/inserir_matricula.php';

}else{
    include 'views/home.php';
}

// Rodapé
include 'footer.php';