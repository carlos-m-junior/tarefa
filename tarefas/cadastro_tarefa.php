<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Tarefa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Cadastrar Tarefa</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $setor = $_POST['setor'];
        $prioridade = $_POST['prioridade'];
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO TBL_TAREFAS (Tar_setor, Tar_prioridade, Tar_descricao) 
                VALUES ('$setor', '$prioridade', '$descricao')";

        if ($conn->query($sql) === TRUE) {
            echo "Tarefa cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar tarefa: " . $conn->error;
        }
    }
    ?>

    <form action="cadastro_tarefa.php" method="post">
        <label>Setor:</label>
        <input type="text" name="setor" required>
        <br>
        
        <label>Prioridade:</label>
        <select name="prioridade" required>
            <option value="Alta">Alta</option>
            <option value="Média">Média</option>
            <option value="Baixa">Baixa</option>
        </select>
        <br>
        
        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>
        <br><br>
        
        <button type="submit">Cadastrar Tarefa</button>
    </form>
</div>

</body>
</html>
