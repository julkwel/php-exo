<?php
require_once 'database.php';
try {
    if (isset($_POST['submit'])) {
        $_POST['id'] = $_GET['id'];
        update($_POST);
        header('location: car_list.php');
        exit(0);
    }

    if (isset($_GET['id'])) {
        $car = find('SELECT * FROM car WHERE id = ' . $_GET['id']);
        $car = $car->fetch(PDO::FETCH_OBJ);
    } else {
        throw new Exception("ID not found");
    }
} catch (Exception $e) {
    header('Location: errors.php?errors=' . $e->getMessage());
    exit(0);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Création voiture</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Création voiture</h1>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-control">
                    <label for="mark">Marque voiture</label>
                    <input type="text" value="<?= $car->mark ?>" id="mark" class="form-control" name="mark">
                </div>
                <div class="form-control">
                    <label for="type">Type</label>
                    <input type="text" value="<?= $car->type ?>" id="type" class="form-control" name="type">
                </div>
                <div class="form-control">
                    <label for="year">Année</label>
                    <input type="text" value="<?= $car->year ?>" id="year" class="form-control" name="year">
                </div>
                <div class="form-control">
                    <input type="submit" name="submit" class="w-100 btn btn-primary" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>