@extends('layouts.master')

@section('title', 'Types Create')

@section('content')
<form method="POST" action="{{ route('activities.store') }}" class="createform">
	{{ csrf_field() }}
	<p class="resultat">Активност</p>
	<input type="text" name="name">
	<p class="resultat">Тип</p>
	<p></p>
	{!! Form::select('type_id', $types_arr) !!}
	<p></p>
	<input type="submit" name="submit" value="Създай" class="btn btn-success">
</form>
@endsection