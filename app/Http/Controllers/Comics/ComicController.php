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
    public function create()
    {
        return view('admin.comics.create');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $newComic= new Comic;
        $newComic->title= $data['title'];
        $newComic->description= $data['description'];
        $newComic->thumb= $data['thumb'];
        $newComic->price= $data['price'];
        $newComic->series= $data['series'];
        $newComic->sale_date= $data['sale_date'];
        $newComic->type= $data['type'];
        $newComic->artists= $data['artists'];
        $newComic->writers= $data['writers'];
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.edit', compact ('comic'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comic= Comic::findOrFail($id);
        $comic->title= $data['title'];
        $comic->description= $data['description'];
        $comic->thumb= $data['thumb'];
        $comic->price= $data['price'];
        $comic->series= $data['series'];
        $comic->sale_date= $data['sale_date'];
        $comic->type= $data['type'];
        $comic->artists= $data['artists'];
        $comic->writers= $data['writers'];
        $comic->save();
        return redirect ()->route('admin.comics.show', $comic->id);
    }
}
