<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    function index(Request $request) {
        $name = $request["name"];
        $email = $request["email"];


        return view("top.index", compact("name","email") );

    }

}
