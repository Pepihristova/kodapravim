<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondPlace;
class SecondPlacesChoiceController extends Controller
{
    public function index()
    {
    	$place_id = request('place_id');
    	$second_places = SecondPlace::where([
       'place_id' => $place_id,
      ])->get();
        $second_places_arr = $second_places->pluck('name','id');
    return view('results.second_places', compact('place_id', 'second_places', 'second_places_arr'));
    }
}
