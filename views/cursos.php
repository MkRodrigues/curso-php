<a class="btn-novo" href="?pagina=inserir_curso">Novo Curso</a>

<table class="tabela">

    <tr>
        <th>Nome Curso</th>
        <th>Carga Horária</th>
    </tr>

    <?php 
    while($linha = mysqli_fetch_array($consulta_cursos)) {
        echo '<tr><td>' .$linha ['nome_curso'].'</td>';
        echo '<td>' .$linha['carga_horaria'].'</td></tr>';
    }
 ?>   

</table>