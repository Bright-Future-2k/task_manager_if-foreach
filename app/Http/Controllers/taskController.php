<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index(){
        $tasks = \App\Task::all();
        return view('index',compact('tasks'));
    }
}
