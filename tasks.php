<?php
// Read
// Query BDD
// List view
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            ?>
                <tr>
                    <td> <?= $_GET['title'].$i ?></td>
                    <td> <?= $_GET['delay'].$i ?></td>
                    <td><a href="/update_task.php?task=<?= $_GET['title']?>&delay=<?= $_GET['delay'] ?>">Modifier</a></td>
                    <td><a href="/delete.php?task=<?= $_GET['title']?>">Supprimer</a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>
