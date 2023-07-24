@extends('layouts.app')
@section('title', 'Admin Comics Index')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Welcome in php Laravel
            </h1>
        </div>
        <div class='col-12'>
            <table class="table table-striped table-hover text-center table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumb</th>
                        </tr>
                    </thead>
            @foreach ($comicList as $comic)
                <tr>
                    <th scope="row">
                        {{ $comic->id }}
                    </th>
                    <td>
                        {{ $comic->title  }}
                    </td>
                    <td>
                        {{ $comic->description  }}
                    </td>
                    <td>
                        <img src="{{$comic->thumb}}" alt="Comic Image" class='card-img-top'>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning me-2">View More</a>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection