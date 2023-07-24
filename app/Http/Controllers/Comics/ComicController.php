<?php

namespace App\Http\Controllers\Comics;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comicList = Comic::all();

        return view('admin.comics.index', compact('comicList'));
    }
    public function show($id)
    {
        {
            $comic = Comic::findOrFail($id);
            return view('admin.comics.show', compact('comic'));
        }
    }
}
