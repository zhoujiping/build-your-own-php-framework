<?php 

 function connectToDb()
 {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=todolist', 'root', 'longzu2016!@#');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from tasks');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}