@extends('layouts.app')

@section('title', 'Single Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
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
                           {{ $comic->writers[0] }} 
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">
                    {{ $comic->price }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection