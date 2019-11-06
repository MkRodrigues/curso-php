<h1>Inserir novo aluno</h1>

<form class="formulario" action="processa_aluno.php" method="POST">

    <div class="parte-1">
        <label class="titulo" for="">Nome:</label>
        <input class="campo" type="text" name="nome_aluno">
    </div>

    <div class="parte-2">
        <label class="titulo" for="">Data de Nascimento:</label>
        <input class="campo" type="date" name="data_nasc">
    </div>
    <input type="submit" value="inserir aluno">

</form>