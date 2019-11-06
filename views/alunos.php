<a class="btn-novo" href="?pagina=inserir_aluno">Novo Aluno</a>

<table class="tabela">

    <tr>
        <th>Nome Aluno</th>
        <th>Data de Nascimento</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php 
    while($linha = mysqli_fetch_array($consulta_alunos)) {
        echo '<tr><td>' .$linha ['nome_aluno'].'</td>';
        echo '<td>' .$linha['data_nascimento'].'</td>';
    ?>
        <td>
            <a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>">Excluir</a>
        </td>
    </tr>

    <?php
        }
    ?>   

</table>