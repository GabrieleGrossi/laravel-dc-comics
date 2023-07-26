@extends('layouts.app')
@section('title', 'Admin Comics Index')
@section('main-content')
<section class="my-bg">
    <div class="container pt-5">
        <div class="row">
            <div class='col-12'>
                @if (session('delete'))
                    <div class="alert alert-warning">
                       {{session ('delete')}} has deleted succesfully
                    </div>
                @endif
                <table class="table table-dark table-striped table-hover text-center table-bordered align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Description</th>
                                <th scope="col">Thumb</th>
                                <th scope="col"></th>
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
                            <a class="btn btn-sm btn-warning me-2" href="{{ route('admin.comics.show', $comic->id) }}">View More</a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection