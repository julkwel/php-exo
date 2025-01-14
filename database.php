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

function update(array $data)
{
    $pdo = connectToDatabase();

    $query = $pdo->prepare("UPDATE `car` SET `type` = :type, `mark` = :mark, `year` = :year WHERE `id` = :id");
    $query->execute([
        'type' => $data['type'],
        'mark' => $data['mark'],
        'year' => $data['year'],
        'id' => $data['id'],
    ]);
}

function insert(array $data): void
{
    $pdo = connectToDatabase();

    $query = $pdo->prepare('INSERT INTO `car` (`type`, `mark`, `year`) VALUES (:type, :mark, :year)');
    $query->execute([
        'type' => $data['type'],
        'mark' => $data['mark'],
        'year' => $data['year'],
    ]);
}

function delete(int $id)
{
    $pdo = connectToDatabase();
    $query = $pdo->prepare('DELETE FROM `car` WHERE `id` = :id');
    $query->execute(['id' => $id]);
}