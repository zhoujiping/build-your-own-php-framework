<?php 

App::get('database')->create('tasks', [
    'description' => $_POST['description'],
    'completed'   => 0
]);

header('Location: /');