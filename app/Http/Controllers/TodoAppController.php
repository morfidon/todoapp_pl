<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoAppController extends Controller
{
    public function index()
    {
        
        return view("todoapp.index")->with("tasks", Task::where("completed", 0)->get());
    }  
    public function store(Request $request, Task $task)
    {
        Task::create($request->all());
    
        return redirect()->route("todoapp.index");
    }   
    
    public function destroy(Task $task)
    {
        $task->delete();


        return redirect()->route("todoapp.index");
    }  
    
    public function update(Task $task, Request $request)
    {
        $task->update($request->all());

        return redirect()->route("todoapp.index");
    }  
    public function complete(Task $task, Request $request)
    {
        $task->update($request->all());
        
        return redirect()->route("todoapp.index");
    }              
}
