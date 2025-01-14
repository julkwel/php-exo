<?php
require_once 'database.php';

if (isset($_GET['id'])) {
    delete($_GET['id']);
    header('Location: car_list.php');
    exit(0);
}
