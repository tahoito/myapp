<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    function index(){
        return view("task.index");
    }

    function create(){
        return view("task.create");
    }

    function store(Request $request){
        $title = $request["title"];
        $content = $request["content"];

        $user = Auth::user();

        $user->tasks()->create([
            "title" => $title,
            "content" => $content
        ]);

        return redirect()->route("task");
    }
}
