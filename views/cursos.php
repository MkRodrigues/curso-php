<a class="btn-novo" href="?pagina=inserir_curso">Novo Curso</a>

<table class="tabela">

    <tr>
        <th>Nome Curso</th>
        <th>Carga Horária</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php 
    while($linha = mysqli_fetch_array($consulta_cursos)) {
        echo '<tr><td>' .$linha ['nome_curso'].'</td>';
        echo '<td>' .$linha['carga_horaria'].'</td>';
    
    ?>  
        <td>
            <a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>">Editar</a>
        </td>
        <td>
            <a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">Excluir</a>
        </td>
    </tr>

    <?php 
        }
    ?>
    
  
    

</table>