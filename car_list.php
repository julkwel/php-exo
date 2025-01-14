<?php
    require_once 'database.php';
    $data = find('SELECT * FROM car');
    $data->setFetchMode(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des voitures</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="car_create.php">Créer une voiture</a>
        <table class="table">
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row->mark ?></td>
                        <td><?= $row->type ?></td>
                        <td><?= $row->year ?></td>
                        <td><a href="car_edit.php?id=<?= $row->id ?>">Modifier</a></td>
                        <td><a href="car_delete.php?id=<?= $row->id ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
