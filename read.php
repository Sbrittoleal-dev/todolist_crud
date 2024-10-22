<?php
include 'databaseconnection.php';

$stmt = $pdo->query("SELECT * FROM tasks 
ORDER BY done ASC;");
$tasks = $stmt->fetchAll();
?>

<h1>Lista de Tarefas</h1>

<input type="text" id="searchbar" name="searchbar" placeholder="Pesquise aqui">

<a href="create.php">Adicionar Tarefa</a>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <p class="title" id="title-<?php echo $task['id']; ?>"><?php echo htmlspecialchars($task['title']); ?></p>&nbsp;
            <?php echo htmlspecialchars($task['description']); ?> 
            <?php if ($task['done'] == 1) { echo '&check;'; } ?>
            <a href="update.php?id=<?php echo $task['id']; ?>">Editar</a>
            <a href="delete.php?id=<?php echo $task['id']; ?>">Deletar</a>
        </li>
    <?php endforeach; ?>
</ul>
<script src="search.js" defer></script>