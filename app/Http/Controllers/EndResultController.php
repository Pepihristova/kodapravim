<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Type;
use App\Models\Place;
use App\Models\SecondPlace;
use App\Models\BigTable;
class EndResultController extends Controller
{
    public function index()
    {
    	
    $place_id = request('place_id');
    $second_place_id = request('second_place_id');
    $type_id = request('type_id');
    $activity_id = request('activity_id');
    	$endresult_arr = BigTable::where([
    		'place_id' => $place_id,
    		'second_place_id' => $second_place_id,
       'type_id' => $type_id,
       'activity_id'=>$activity_id,
      ])->whereNotNull('is_valid')
    	->get();
    
    return view('results.endresult', compact('place_id', 'second_place_id', 'type_id', 'endresult_arr'));
    }
}
