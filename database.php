<?php

function connectToDatabase(): Pdo
{
    $pdo = new Pdo('mysql:host=127.0.0.1;dbname=cours_php;charset=utf8;port=3303', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function find(string $sql): PDOStatement|false
{
    $pdo = connectToDatabase();

    return $pdo->query($sql);
}

function update(Car $car): bool
{
    $pdo = connectToDatabase();
    $query = $pdo->prepare("UPDATE `car` SET `type` = :type, `mark` = :mark, `year` = :year WHERE `id` = :id");

    return $query->execute([
        'type' => $car->getType(),
        'mark' => $car->getMark(),
        'year' => $car->getYear(),
        'id' => $car->getId(),
    ]);
}

function insert(Car $car): void
{
    $pdo = connectToDatabase();

    $query = $pdo->prepare('INSERT INTO `car` (`type`, `mark`, `year`) VALUES (:type, :mark, :year)');
    $query->execute([
        'type' => $car->getType(),
        'mark' => $car->getMark(),
        'year' => $car->getYear(),
    ]);
}

function delete(Car $car): void
{
    $pdo = connectToDatabase();
    $query = $pdo->prepare('DELETE FROM `car` WHERE `id` = :id');
    $query->execute(['id' => $car->getId()]);
}