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
            <input onclick="return confirm('Do you really want to delete this Comic?')" type="submit" value="Delete Comic">
        </form>
    @endforeach
@endsection

{{-- <script>
    $(".delete").on("submit", function() {
        return confirm("Do you want to delete this item?");
    });
</script> --}}
