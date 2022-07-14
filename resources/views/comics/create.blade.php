@extends('layouts.base')

@section('page-title')
    Aggiungi Fumetto
@endsection

@section('page-content')
    <div>
        <form action="{{ route('comics.store')}}" method="post">
            @csrf

            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title">

            <label for="description">description:</label>
            <input type="text-area" name="description" id="description">

            <label for="thumb">thumb:</label>
            <input type="text" name="thumb" id="thumb">

            <label for="price">price:</price>
                <input type="number" id="price" name="price"></input>

            <label for="series">series:</price>
            <input type="text" name="series" id="series">

            <label for="sale_date">sale_date:</price>
            <input type="text" name="sale_date" id="sale_date">

            <label for="type">type:</price>
            <input type="text" name="type" id="type">

            <button type="submit">Invia!</button>
        </form>

    </div>
@endsection