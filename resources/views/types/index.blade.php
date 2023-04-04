@extends('layouts.master')

@section('title', 'Types')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table">
	@foreach( $types as $type )
		<tr>
			<td>
				<label class="resultat" >{{ $type->type }}</label>
			</td>
			<td>
				<a href="{{ route('types.edit', ['id' => $type->id]) }}" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="{{ route('types.destroy', $type->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	@endforeach
</table>
<a href="{{url('types/create')}}" class="createbtn">Създайте тип</a>
@endsection