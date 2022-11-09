<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $addComic = new Comic();
        $addComic->title = $data['title'];
        $addComic->description = $data['description'];
        $addComic->thumb = $data['thumb'];
        $addComic->price = $data['price'];
        $addComic->series = $data['series'];
        $addComic->sale_date = $data['sale_date'];
        $addComic->type = $data['type'];

        $addComic->save();

        return redirect()->route('comics.show', $addComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $data = $request->all();

        $comic->update($data);

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
