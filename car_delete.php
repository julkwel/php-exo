<?php
require_once 'database.php';
require 'Car.php';

if (isset($_GET['id'])) {
    $car = new Car()->hydrate($_GET);
    delete($car);
    header('Location: car_list.php');
    exit(0);
}
