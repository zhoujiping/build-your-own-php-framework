<?php 

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('tasks', 'Task');

        return view('index', compact('tasks'));
    }

    public function store()
    {
        App::get('database')->create('tasks', [
            'description' => $_POST['description'],
            'completed'   => 0
        ]);

        return redirect();
    }
}