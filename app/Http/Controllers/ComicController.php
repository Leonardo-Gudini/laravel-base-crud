<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title'=>'required|max:60|min:5',
                'description'=>'required|max:35565|min:10',
                'thumb'=>'required|max:254|url',
                'price'=>'required|numeric|',
                'series'=>'required|max:50|min:5',
                'sale_date'=>'required|max:20|date_format:Y-m-d',
                'type'=>'required|max:20|min:5',
            ]
            );

        $data = $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        if ($comics) {
            return view('comic.show', compact('comics'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::find($id);
        if ($comics) {
            return view('comic.edit', compact('comics'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comics)
    {

        $request->validate(
            [
                'title'=>'required|max:60|min:5',
                'description'=>'required|max:35565|min:10',
                'thumb'=>'required|max:254|url',
                'price'=>'required|numeric',
                'series'=>'required|max:50|min:5',
                'sale_date'=>'required|max:20|date_format:Y-m-d',
                'type'=>'required|max:20|min:5',
            ]
            );

        if ($comics) {
            $data=$request->all();
            $comics->update($data);
            $comics->save();
            return redirect()->route('comics.edit', ['comic' => $comics]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::find($id);
        if ($comics) {
            $comics->delete();
            return redirect()->route('comics.index');
        }
    }
}
