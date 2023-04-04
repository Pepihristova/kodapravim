<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Type;
class ActivitiesChoiceController extends Controller
{
    public function index()
    {
    	
    $place_id = request('place_id');
    $second_place_id = request('second_place_id');
    $type_id = request('type_id');
    	$activities = Activity::where([
       'type_id' => $type_id,
      ])->get();
        $activities_arr = $activities->pluck('name','id');
    return view('results.activities', compact('place_id', 'second_place_id', 'type_id', 'activities', 'activities_arr'));
    }
}
