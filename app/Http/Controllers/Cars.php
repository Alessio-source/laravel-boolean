<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars_table;

class Cars extends Controller
{

    public function index() {
        $cars = cars_table::all();

        return view('home', compact('cars'));
    }
    
}
