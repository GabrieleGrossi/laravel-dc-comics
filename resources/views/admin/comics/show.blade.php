@extends('layouts.app')

@section('title', 'Single Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('update'))
                <div class="alert alert-success">
                   {{session ('update')}} has edit succesfully
                </div>
            @endif
            <div class="card" style="width: 80rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top rounded mx-auto d-block" alt="..."style="width: 20rem;">
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $comic->title }}
                    </h2>
                    <p class="card-text">
                        Description: 
                        {{ $comic->description }}
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Comics Series: 
                            {{ $comic->series }}
                        </li>
                        <li class="list-group-item">
                            Type: 
                            {{ $comic->type }}
                        </li>
                        <li class="list-group-item">
                            Sale Date: 
                           {{ $comic->sale_date }} 
                        </li>
                        <li class="list-group-item">
                            Artist: 
                           {{ $comic->artists[0] }} 
                        </li>
                        <li class="list-group-item">
                            Writer: 
                           {{ $comic->writers [0]}} 
                        </li>
                        <li class="list-group-item">
                            Price: 
                           {{ $comic->price}} $
                        </li>
                    </ul>
                </div>
                    <a class="btn btn-warning mt-3" href="{{ route('admin.comics.edit', $comic->id) }}">
                        Edit
                    </a>
                    <form action="{{route ('admin.comics.destroy', $comic->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger col-12 my-3">
                            Delete Comic
                        </button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection