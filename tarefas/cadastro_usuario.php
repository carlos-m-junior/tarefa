<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Usuário</h1>
    <form action="cadastro_usuario.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO TBL_USUARIOS (Usu_nome, Usu_email) VALUES ('$nome', '$email')";

        if ($conn->query($sql) === TRUE) {
            // Obter o ID do usuário recém-cadastrado
            $ultimo_id = $conn->insert_id;
            echo "Usuário cadastrado com sucesso! ID do Usuário: " . $ultimo_id;
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    ?>
</div>

</body>
</html>
