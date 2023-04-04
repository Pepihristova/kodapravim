@extends('layouts.master')

@section('title', 'Types Create')

@section('content')
<form method="POST" action="{{ route('types.store') }}" class="createform">
	{{ csrf_field() }}
	<p class="resultat">Тип</p>
	<input type="text" name="type">
	<p></p>
	<input type="submit" name="submit" value="Създай" class="btn btn-success">
</form>
@endsection