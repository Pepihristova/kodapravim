<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondPlace;
use App\Models\Place;
class SecondPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $second_places = SecondPlace::all();
        return view('second_places.index', compact('second_places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        $places_arr = $places->pluck('name','id');
        return view('second_places.create',  compact('places_arr', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SecondPlace::create([
        'name' => $request->name,
        'place_id'=> $request->place_id,
        ]);
        return redirect()->route('second_places.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $places = Place::all();
        $places_arr = $places->pluck('name','id');
        $second_place = SecondPlace::find($id);
        return view('second_places.edit', compact('second_place', 'places', 'places_arr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $second_place = SecondPlace::find($id);

        $second_place->update([
            'name'=> $request->name,
            'place_id' => $request->place_id,
            


        ]);
        return redirect()->route('second_places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $second_place = SecondPlace::find($id);
        $second_place->delete();
        return redirect()->route('second_places.index') ; 
    }
}
