<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
class TypeChoiceController extends Controller
{
    
    
    public function index()
    {
    	$place_id = request('place_id');
    	$second_place_id = request('second_place_id');
    	$types = Type::all();
        $types_arr = $types->pluck('type','id');
    	return view('results.types', compact('types', 'place_id', 'second_place_id', 'types_arr'));
    }
}
