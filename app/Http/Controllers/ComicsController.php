<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function getComics(){

        $comics = Comic::all();

        return view('welcome', compact('comics'));
    }
}
