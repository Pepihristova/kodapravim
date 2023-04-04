@extends('layouts.master')

@section('title', 'Types')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table">
	@foreach( $activities as $activity )
		<tr>
			<td>
				<label class="resultat" >{{ $activity->name }}</label>
			</td>
			<td>
				<label class="resultat" >{{ $activity->type->type }}</label>
			</td>
			<td>
				<a href="{{ route('activities.edit', ['id' => $activity->id]) }}" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="{{ route('activities.destroy', $activity->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	@endforeach
</table>
<a href="{{url('activities/create')}}" class="createbtn">Създайте активност</a>
@endsection