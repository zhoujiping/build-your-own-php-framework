<?php 

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('tasks', 'Task');

var_dump($tasks);
