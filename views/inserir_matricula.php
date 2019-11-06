<h1>Inserir nova matrícula</h1>

<form class="formulario" action="processa_matricula.php" method="POST">

    <p>Selecione o aluno: </p>
    <select name="escolha_aluno">
        <option value="">Selecione um Aluno</option>
        <?php
            
            while($linha = mysqli_fetch_array($consulta_alunos)) {
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }

        ?>
    </select>
    
    <br><br>
    
    <p>Selecione o curso: </p>
    <select name="escolha_curso">
        <option value="">Selecione um Curso</option>

        <?php
            
            while($linha = mysqli_fetch_array($consulta_cursos)) {
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }

        ?>
    </select>

    <br><br>

    <input type="submit" value="Efetuar Matrícula">

</form>





    <!-- <div class="parte-1">
        <label class="titulo" for="">Nome aqui: </label>
        <input class="campo" type="text" name="matricula">
    </div>

    <div class="parte-2">
        <label class="titulo" for=""> Nome aqui: </label>
        <input class="campo" type="text" name="">
    </div>
    <input type="submit" value="inserir matricula">

</form> -->