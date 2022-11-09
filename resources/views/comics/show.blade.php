@extends('layouts.app')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <h1>
        {{ $comic->title }}
    </h1>
    <div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <p>
        {{ $comic->description }}
    </p>
    <h4 style="margin-bottom: 60px">
        {{ $comic->price }}
    </h4>
    <div>
        <a href="{{ route('comics.edit', $comic->id) }}">Edit Comic's Infos</a>
    </div>

    <a href="{{ route('comics.index') }}">BACK TO THE COMICS LIST</a>
@endsection
