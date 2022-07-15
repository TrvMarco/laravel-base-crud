@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col">
                <h3>{{$comic->title}}</h3>
                <p>{{$comic->description}}</p>
                <p><strong>Prezzo: ${{$comic->price}}</strong></p>
                <div><small>{{$comic->sale_date}}</small></div>
                <div><small>Tipologia: {{$comic->type}}</small></div>
            </div>
        </div>
    </div>
@endsection