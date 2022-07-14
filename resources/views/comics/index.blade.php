@extends('layouts.base')

@section('page-title')
    Index
@endsection

@section('page-content')
    <div>
        <strong>Index</strong>
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>Titolo: {{$comic->title}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection