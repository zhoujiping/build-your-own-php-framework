<?php 

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

var_dump($tasks);
die;
