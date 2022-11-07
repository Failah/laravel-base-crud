@extends('layouts.app')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <h1>
        {{ $comic->title }}
    </h1>

    <a href="{{ route('comics.index') }}">BACK TO THE COMICS LIST</a>
@endsection
