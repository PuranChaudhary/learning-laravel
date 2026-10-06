<?php

namespace App\Http\Controllers;

class Teacher extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function display($name)
    {
        return view('about', [
            'name' => $name,
            'users' => ['Raam', 'Puran', 'Sujan']
        ]);
    }
}