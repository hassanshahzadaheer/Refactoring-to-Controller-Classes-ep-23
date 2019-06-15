<?php
class UsersController
{
    public function index()
    {
        $task = App::get('database')->selectAll('tasks');
        return view('$task', compact('tasks'));
    }
    public function store()
    {
      get('database')->insert('tasks',[
        'description' => $_POST['name'],
        'completed' => empty($_POST["task"])
        ]);
        return redirect('users');
    }
}

 ?>
