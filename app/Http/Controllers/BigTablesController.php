<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Type;
use App\Models\Place;
use App\Models\SecondPlace;
use App\Models\BigTable;

class BigTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $big_tables = BigTable::all();
        return view('bigtables.index', compact('big_tables'));
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
        $activities = Activity::all();
        $activities_arr = $activities->pluck('name','id');
        $second_places = SecondPlace::all();
        $second_places_arr = $second_places->pluck('name','id');
        $types = Type::all();
        $types_arr = $types->pluck('type','id');
        return view('bigtables.create',  compact('places_arr', 'places', 'activities', 'activities_arr', 'second_places', 'second_places_arr', 'types_arr', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('image');
        if ($file==null) {
            $filename = null;
        }else{
            $filename = $file->getClientOriginalName();
        $file->move('free_time_images', $filename);
        }
        
        BigTable::create([
        'place_id' => $request->place_id,
        'second_place_id' => $request->second_place_id,
        'type_id' => $request->type_id,
        'filename' => $filename,
        'activity_id' => $request->activity_id,
        'description' => $request->description,
        ]);
        return redirect()->route('home');
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
        $activities = Activity::all();
        $activities_arr = $activities->pluck('name','id');
        $second_places = SecondPlace::all();
        $second_places_arr = $second_places->pluck('name','id');
        $types = Type::all();
        $types_arr = $types->pluck('type','id');
        $bigtable = BigTable::find($id);
        return view('bigtables.edit', compact('places_arr', 'places', 'activities', 'activities_arr', 'second_places', 'second_places_arr', 'types_arr', 'types', 'bigtable'));
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
        /*$file = $request->file('image');
        if ($file==null) {
            $filename = $request->filename;
        }else{
            $filename = $file->getClientOriginalName();
        $file->move('free_time_images', $filename);
        }
        $id = $request->id;
         $bigtable = BigTable::find($id);
        $bigtable->update([
        'place_id' => $request->place_id,
        'second_place_id' => $request->second_place_id,
        'type_id' => $request->type_id,
        'filename' => $filename,
        'activity_id' => $request->activity_id,
        'description' => $request->description,
        'is_valid'=>$request->is_valid
        ]);
        return redirect()->route('bigtables');*/

$id = $request->id;
         $bigtable = BigTable::find($id);
        if($request->hasFile('image')) {
            $file = $request->file('image');
    $filename = $file->getClientOriginalName();
        $file->move('free_time_images', $filename);
        $bigtable->update([
        'place_id' => $request->place_id,
        'second_place_id' => $request->second_place_id,
        'type_id' => $request->type_id,
        'filename' => $filename,
        'activity_id' => $request->activity_id,
        'description' => $request->description,
        'is_valid'=>$request->is_valid
        ]);
        return redirect()->route('bigtables');
  }else{
$bigtable->update([
        'place_id' => $request->place_id,
        'second_place_id' => $request->second_place_id,
        'type_id' => $request->type_id,
        'activity_id' => $request->activity_id,
        'description' => $request->description,
        'is_valid'=>$request->is_valid
        ]);
return redirect()->route('bigtables');
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
         $bigtable = BigTable::find($id);
        $bigtable->delete();
        return redirect()->route('bigtables');
    }
}
