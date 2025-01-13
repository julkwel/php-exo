<?php
// CRUD
// Create
// Objet
// Procédurale, POO
// MVC ->
// << Class Model -> Encapsulation Object,
// << View -> Twig, html, .php, JSON, XML, XHTML
// << Controller -> Routing ( URL ) > REQUEST < req, res >
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $taskTitle = $_POST['task'];
        $taskDelay = $_POST['delay'];
        // persistence method, connexion + query + flush
        header('Location: /tasks.php?title='.$taskTitle.'&delay='.$taskDelay);
        exit(0);
    }
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
        <input type="text" value="" name="task" placeholder="Task title">
        <input type="text" value="" name="delay" placeholder="Task delay per day">
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>
