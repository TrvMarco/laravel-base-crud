@extends('layouts.base')

@section('page-title')
    Aggiungi Fumetto
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
        <h1>Aggiungi un fumetto</h1>
        <form action="{{ route('comics.store')}}" method="post" class="d-flex flex-column align-items-start">
            @csrf

            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title">

            <label for="description">description:</label>
            <input type="text-area" name="description" id="description">

            <label for="thumb">thumb:</label>
            <input type="text" name="thumb" id="thumb">

            <label for="price">price:</label>
            <input type="number" id="price" name="price" step="any"></input>

            <label for="series">series:</label>
            <input type="text" name="series" id="series">

            <label for="sale_date">sale_date:</label>
            <input type="text" name="sale_date" id="sale_date">

            <label for="type">type:</label>
            <input type="text" name="type" id="type">

            <button class="mt-3" type="submit">Invia!</button>
        </form>

    </div>
@endsection