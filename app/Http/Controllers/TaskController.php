<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    // public function store(Request $request){
    //     //dd($request->all());
    //     $task = new Task;
    //     $task->task = $request->task;
    //     $task->save();
    //     return redirect()->back();
    // }

    public function store(Request $request){
    $request->validate([
        'task' => 'required|string|max:255',
    ]);

    // $this->validate($request,[
    //     'task' =>'required|max:100|min:5',
    // ]);

    $task = new Task;
    $task->task = $request->task;
    $task->save();

    $data = Task:: all();
    return view('tasks') -> with('tasks, $data');
    //dd($data);
    //return redirect()->back()->with('success', 'Task added!');
}


}
