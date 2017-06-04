<?php 

$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('', 'TasksController@index');
$router->post('tasks', 'TasksController@store');