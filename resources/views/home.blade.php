@extends('layouts.base')

@section('page-title')
    Home Page | BoolComics
@endsection

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col-12 pb-2 text-center">
                <a href="{{ route('comics.index')}}" type="button" class="btn btn-dark">Esplora tabella fumetti</a>
            </div>
        </div>
        <div class="row g-2">
            @foreach ($comics as $comic)
            <div class="col-2">
                <img style="height: 300px;" class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            @endforeach
        </div>
    </div>
    
@endsection

