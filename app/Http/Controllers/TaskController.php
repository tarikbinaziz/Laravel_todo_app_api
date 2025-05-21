<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // সব টাস্ক লিস্ট করে
    public function index(){
     ;
        return Task::all();
    }

    // নতুন টাস্ক ইনসার্ট করে
    public function store(Request $request){

        $request->validate(["title" => "required|string|max:255"]);
        $task = Task::create([
            "title" => $request->title,
        ]);
        
        return response()->json($task, 201);
    }

    // টাস্ক ডিলিট করে

public function destroy($id)
{
    $task = Task::find($id);

    if (!$task) {
        return response()->json(['message' => 'Task not found'], 404);
    }

    $task->delete();

    return response()->json(['message' => 'Task deleted successfully']);
}

}
