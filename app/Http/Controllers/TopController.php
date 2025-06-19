<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    function index() {
        $age = 18;
        $skills = [
            ["name" => "Python" , "years" => "2年" ],
            ["name" => "PHP", "years" => "1年"],
            ["name" => "JavaScript", "years" => "0.5年"],
        ];


        return view("top.index", compact("age","skills") );

    }

}
