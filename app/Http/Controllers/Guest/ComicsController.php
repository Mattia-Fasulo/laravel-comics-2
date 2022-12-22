<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comics = Comic::all();
        // dd(compact('comics'));
        $links = config('links');
        // dd(compact('links'));

        return view('home', compact('comics'), compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $links = config('links');


        return view('comics.create', compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        // $newComic = new Comic();
        //     $newComic->title = $form_data['title'];
        //     $newComic->description = $form_data['description'];
        //     $newComic->thumb = $form_data['thumb'];
        //     $newComic->price = $form_data['price'];
        //     $newComic->series = $form_data['series'];
        //     $newComic->sale_date = $form_data['sale_date'];
        //     $newComic->type = $form_data['type'];
        //     $newComic->save();

        $newproduct = Comic::create($form_data);

        return redirect()->route('comics.show', $newproduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        $links = config('links');
        return view('comics.show', compact('comic'), compact('links'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Comic $comic)
    {
        $links = config('links');
        return view('comics.edit', compact('comic'), compact('links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::find($id);

        $form_data = $request->all();

        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        $comic->update();


        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
