@extends('layouts.master')

@section('title', 'SecondPlaces')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
 <table class="table">
	@foreach( $second_places as $second_place )
		<tr>
			<td>
				<label class="resultat" >{{ $second_place->name }}</label>
			</td>
<td>
				<label class="resultat" >{{ $second_place->place->name }}</label>
			</td>

			<td>
				<a href="{{ route('second_places.edit', ['id' => $second_place->id]) }}" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="{{ route('second_places.destroy', $second_place->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	@endforeach
</table> 
<a href="{{url('second_places/create')}}" class="createbtn">Създай място</a>
@endsection