<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Gerenciar Tarefas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuário ID</th>
            <th>Setor</th>
            <th>Prioridade</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>

        <?php
        $sql = "SELECT * FROM TBL_TAREFAS";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["Tar_codigo"]."</td>
                        <td>".$row["Usu_codigo"]."</td>
                        <td>".$row["Tar_setor"]."</td>
                        <td>".$row["Tar_prioridade"]."</td>
                        <td>".$row["Tar_descricao"]."</td>
                        <td>".$row["Tar_status"]."</td>
                        <td>
                            <a href='editar_tarefa.php?id=".$row["Tar_codigo"]."'>Editar</a> | 
                            <a href='excluir_tarefa.php?id=".$row["Tar_codigo"]."' onclick='return confirm(\"Tem certeza que deseja excluir esta tarefa?\")'>Excluir</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhuma tarefa encontrada</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>

</body>
</html>
