<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
class PlacesChoiceController extends Controller
{
    public function index()
    {
    	$places = Place::all();
    	$places_arr = $places->pluck('name','id');
    return view('results.places', compact('places', 'places_arr'));
    }
}
