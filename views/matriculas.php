<a class="btn-novo" href="?pagina=inserir_matricula">Nova Matrícula</a>

<table class="tabela">

    <tr>
        <th>Nome do Aluno</th>
        <th>Nome do Curso</th>
    </tr>

    <?php 
    while($linha = mysqli_fetch_array($consulta_matriculas)) {
        echo '<tr><td>' .$linha ['nome_aluno'].'</td>';
        echo '<td>' .$linha['nome_curso'].'</td></tr>';

    }

 ?>   

</table>