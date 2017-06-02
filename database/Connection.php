<?php 

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=todolist', 'root', 'longzu2016!@#');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}