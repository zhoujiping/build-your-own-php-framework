<?php 

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('tasks', 'Task');

        return view('index', ['tasks' => $tasks]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        require view('contact');
    }
}