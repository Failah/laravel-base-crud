@extends('layouts.app')

@section('title')
    Comics List
@endsection

@section('content')
    <div id="new-comic">
        <a href="{{ route('comics.create') }}">Add new comic!</a>
    </div>

    <div id="comics-list">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <div>
                    <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
                </div>
                <form id="delete-comic" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input onclick="return confirm('Do you really want to delete this Comic?')" type="submit"
                        value="Delete Comic">
                </form>
            </div>
        @endforeach
    </div>
@endsection
