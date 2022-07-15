@extends('layouts.base')

@section('page-title')
    Modifica Fumetto
@endsection

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 pb-2 text-center">
                    <a href="/" type="button" class="btn btn-danger">Home page</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Modifica un fumetto</h1>
        <form action="{{ route('comics.update', $comic->id )}}" method="post" class="d-flex flex-column" style="width: 50%;">
            @csrf
            @method('PUT')

            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">

            <label for="description">description:</label>
            <textarea rows="7" type="text-area" name="description" id="description">{{$comic->description}}</textarea>

            <label for="thumb">thumb:</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">

            <label for="price">price:</label>
            <input type="number" id="price" name="price" step="any" value="{{$comic->price}}"></input>

            <label for="series">series:</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}">

            <label for="sale_date">sale_date:</label>
            <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">

            <label for="type">type:</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}">

            <button class="mt-3" type="submit">Invia!</button>
        </form>

    </div>
@endsection