<h1>Inserir novo curso</h1>

<form class="formulario" action="processa_curso.php" method="POST">

    <div class="parte-1">
        <label class="titulo" for="nome_curso">Curso: </label>
        <input class="campo" type="text" name="nome_curso">
    </div>

    <div class="parte-2">
        <label class="titulo" for="carga_horaria">Carga Horária: </label>
        <input class="campo" type="text" name="carga_horaria">
    </div>
    <input type="submit" value="inserir curso">

</form>