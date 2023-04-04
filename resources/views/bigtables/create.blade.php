@extends('layouts.master')

@section('title', 'Types Create')

@section('content')
<center><div class="createform" style="margin-top: 10%" >
	{!! Form::open(['route' => ['bigtables.store'], 'files'=>'true']) !!}	
	
	<label class="resultat">Място</label>
	<p></p>
	{!! Form::select('place_id', $places_arr) !!}
	<p></p>
	<label class="resultat">Местонахождение</label>
	<p></p>
	{!! Form::select('second_place_id', $second_places_arr) !!}
	<p></p>
	<label class="resultat">Тип</label>
	<p></p>
	{!! Form::select('type_id', $types_arr) !!}
	<p></p>
	<label class="resultat">Активност</label>
	<p></p>
	{!! Form::select('activity_id', $activities_arr) !!}
	<p></p>
	<label class="resultat">Описание</label>
<p></p>
<textarea id="w3mission" name="description"></textarea>
	<p></p>
	<p class="resultat">Снимка</p>
{!! Form::file('image')!!}
<p></p>

	
	{!!Form::submit('Предай')!!}
	{!! Form::close() !!}
</div></center>
@endsection