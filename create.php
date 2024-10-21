<?php
include 'databaseconnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->execute([
        'title' => $title,
        'description' => $description
    ]);
    header('Location: read.php');
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Título da Tarefa" required>
    <input type="text" name="description" placeholder="Descrição da Tarefa">
    <button type="submit">Adicionar Tarefa</button>
</form>
