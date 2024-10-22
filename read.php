<!DOCTYPE html>
<html>
    <head>
        <title>Lista de tarefas</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php
        include 'databaseconnection.php';

        $stmt = $pdo->query("SELECT * FROM tasks 
        ORDER BY done ASC;");
        $tasks = $stmt->fetchAll();
        ?>

        <h1 class="headliner1">Lista de Tarefas</h1>

        <a href="create.php" class="adicionar">Adicionar Tarefa</a>

        <input type="text" id="searchbar" class="searchbar" name="searchbar" placeholder="Pesquise aqui">
        
        <ul class="lista">
            <?php foreach ($tasks as $task): ?>
                <li class="linha">
                    <p class="title" id="title-<?php echo $task['id']; ?>"><?php echo htmlspecialchars($task['title']); ?></p>&nbsp;
                    <?php echo htmlspecialchars($task['description']); ?> 
                    <?php if ($task['done'] == 1) { echo '&check;'; } ?>
                    <a href="update.php?id=<?php echo $task['id']; ?>" class="editardeletar">Editar</a>
                    <a href="delete.php?id=<?php echo $task['id']; ?>" class="editardeletar">Deletar</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <script src="search.js" defer></script>
    </body>
</html>