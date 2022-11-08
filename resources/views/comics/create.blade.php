<style>
    form div {
        margin-top: 20px
    }
</style>

@extends('layouts.app')

@section('title')
    Add new Comic
@endsection

@section('content')
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="thumb">Thumbnail Link:</label>
            <input type="text" name="thumb">
        </div>
        <div>
            <label for="price">Price: (use point . not comma , )</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" name="series">
        </div>
        <div>
            <label for="sale_date">Sale Date: (YYYY-MM-DD)</label>
            <input type="text" name="sale_date">
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type">
        </div>

        <div>
            <input type="submit" value="Invia">
        </div>

    </form>
@endsection
