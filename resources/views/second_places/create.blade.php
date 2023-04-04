@extends('layouts.master')

@section('title', 'Types Create')

@section('content')
<form method="POST" action="{{ route('second_places.store') }}" class="createform">
	{{ csrf_field() }}
	{{ csrf_field() }}
	<p class="resultat">Място</p>
	<input type="text" name="name">
	
	<p></p>
	{!! Form::select('place_id', $places_arr) !!}
	<p></p>
	<input type="submit" name="submit" value="Създай" class="btn btn-success">
</form>
@endsection