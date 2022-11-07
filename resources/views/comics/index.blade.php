@extends('layouts.app')

@section('title')
    Comics List
@endsection

@section('content')
    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
        </div>
    @endforeach
@endsection
