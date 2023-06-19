<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoAppController extends Controller
{
    public function index()
    {
        
        return view("todoapp.index")->with("tasks", Task::all());
    }  
    public function store(Request $request, Task $task)
    {
        $task->content = $request->content;
        
        $task->save();



        return view("todoapp.index");
    }     
}
