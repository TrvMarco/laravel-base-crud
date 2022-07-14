@extends('layouts.base')

@section('page-title')
    Home Page | BoolComics
@endsection

@section('page-content')
    <div class="container">
        <div class="row g-2">
            @foreach ($comics as $comic)
            <div class="col-2">
                <img style="height: 300px;" class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            @endforeach
        </div>
    </div>
    
@endsection

