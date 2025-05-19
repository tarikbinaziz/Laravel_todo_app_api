<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // সব টাস্ক লিস্ট করে
    public function index(){
        return Task::all();
    }

    // নতুন টাস্ক ইনসার্ট করে
    public function store(Request $request){

        $request->validate(["title" => "required|string|max:255"]);
        $task = Task::creat([
            "title" => $request->title,
        ]);
        
        return response()->json($task, 201);
    }
}
