<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELS
use App\Models\Movie;

class MainController extends Controller
{
    public function index() {

        return view('welcome', [
            'movies'=> Movie::all(),
        ]);
    }
}
