<?php
include 'databaseconnection.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = :id");
    $stmt->execute(['id' => $id]);
    header('Location: read.php');
}
?>


<h1>Deseja mesmo apagar esta tarefa?</h1>
<form method="POST">
    <button type="submit">Sim, apagar tarefa</button>
</form>

<a href="read.php">Não, voltar à lista</a>