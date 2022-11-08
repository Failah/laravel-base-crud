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
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete Comic">
        </form>
    @endforeach
@endsection
