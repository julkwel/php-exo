<?php
// Read Request
// Query BDD, si Existant -> edit, sinon Exception
    if (!isset($_REQUEST['task'])) {
        header('Location: /errors.php');
        exit(1);
    }
    // Submit form, save
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO LIST</title>
</head>
<body>
<form action="" method="post">
    <input type="text" value="<?= $_GET['task'] ?>" name="task" placeholder="Task title">
    <input type="text" value="<?= $_GET['delay'] ?>" name="delay" placeholder="Task delay per day">
    <input type="submit" name="submit" value="Save">
</form>
</body>
</html>

