<?php
include 'databaseconnection.php';

$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll();
?>

<h1>Lista de Tarefas</h1>
<a href="create.php">Adicionar Tarefa</a>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php echo htmlspecialchars($task['title']); ?>&nbsp;
            <?php echo htmlspecialchars($task['description']); ?> 
        </li>
    <?php endforeach; ?>
</ul>
