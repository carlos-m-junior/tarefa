<?php include 'db_connection.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM TBL_TAREFAS WHERE Tar_codigo = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa excluída com sucesso!";
    } else {
        echo "Erro ao excluir a tarefa: " . $conn->error;
    }
} else {
    echo "ID da tarefa não especificado.";
}

$conn->close();
?>

<a href="gerenciar_tarefas.php">Voltar para Gerenciar Tarefas</a>
