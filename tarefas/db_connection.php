<?php
// db_connection.php
$servername = "localhost";
$username = "root";       // Altere conforme seu ambiente
$password = "";           // Altere conforme seu ambiente
$dbname = "ProjetoTarefas";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
