@extends('layouts.app')

@section('title')
    Comics List
@endsection

@section('content')
    <div>
        <a href="{{ route('comics.create') }}">Add new comic!</a>
    </div>

    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
        </div>
    @endforeach
@endsection
