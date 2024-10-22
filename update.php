<!DOCTYPE html>
<html>
    <head>
        <title>Atualizar tarefa</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php
        include 'databaseconnection.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = intval($_POST['id']);
            $title = $_POST['title'];
            $description = $_POST['description'];
            $done = 0;
            if ($_POST ['done'] == 'on') {
                $done = 1;
            }
            $stmt = $pdo->prepare("UPDATE tasks SET 
            title = :title,
            description = :description,
            done = :done
            WHERE id = :id");
            $stmt->execute(['title' => $title, 'description' => $description, 'done' => $done, 'id' => $id]);
            header('Location: read.php');
        }

        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $task = $stmt->fetch();
        ?>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
            <input type="text" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" required>
            <input type="text" name="description" value="<?php echo htmlspecialchars($task['description']); ?>">
            <input type="checkbox" name="done" <?php if ($task['done'] == 1) { echo 'checked'; } ?>/>
            <button type="submit">Atualizar Tarefa</button>
        </form>
    </body>
</html>