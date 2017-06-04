<?php 

$tasks = App::get('database')->selectAll('tasks', 'Task');

require 'views/index.view.php';