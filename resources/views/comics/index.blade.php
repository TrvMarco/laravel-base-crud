@extends('layouts.base')

@section('page-title')
    Index
@endsection

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 pb-2 text-center">
                    <a href="{{ route('comics.create')}}" type="button" class="btn btn-danger">Aggiungi un fumetto</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data sconto</th>
                <th scope="col">Tipologia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td class="img-fluid"><img style="height:150px;" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <th scope="col">
                    <a href="{{ route('comics.show', $comic->id) }}" type="button" class="btn btn-info mb-2">Visualizza</a>
                    <a type="button" class="btn btn-warning">Modifica</a>
                </th>
            </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection