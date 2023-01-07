<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        // $form_data = $request->all();
        $form_data = $this->validation($request->all());

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

        // $form_data = $request->all();
        $form_data = $this->validation($request->all());

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
        return redirect()->route('comics.index')->with('message', "$comic->title has been deleted with success.");
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:5',
            'thumb' => 'required|url|max:200',
            'price' => 'required',
            'series' => 'required|max:20',
            'sale_date' => 'required|date',
            'type' => 'required|max:20',
        ], [
            'title.required' => 'Title is required.',
            'title.min' => 'The title must be at least :min characters long.',
            'title.max' => 'Title cannot exceed :max characters.',
            'description.required' => 'The description is required .',
            'description.min' => 'The description must be at least :min characters long.',
            'thumb.required' => 'The image url is required.',
            'thumb.max' => 'Image url cannot exceed :max characters.',
            'thumb.url' => 'Please enter a url.',
            'price.required' => 'Price is required.',
            'series.required' => 'Series is required.',
            'series.max' => 'Series cannot exceed :max characters.',
            'sale_date.required' => 'Sale date is required.',
            'type.required' => 'Type is required.',
            'type.max' => 'The Type cannot exceed :max characters.'
        ])->validate();

        return $validator;
    }
}
