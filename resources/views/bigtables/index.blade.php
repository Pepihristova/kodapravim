@extends('layouts.master')

@section('title', 'Types')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered" style="position: absolute; right: -350px;">
	@foreach( $big_tables as $big_table )
		<tr>
			<td>
				<label class="resultat" style="color: #f58abe;">Снимка</label>
				<img width="100%" src="{{ asset('free_time_images')}}/{{$big_table->filename }}">

			</td>
			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->place->name }}</label>
			</td>

			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->second_place->name }}</label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->activity->name }}</label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->type->type }}</label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->description }}</label>
			</td>
			<td>
				<label class="resultat" style="color: #f58abe;">{{ $big_table->is_valid }}</label>
			</td>
			<td>
				<a href="{{ route('bigtables.edit', ['id' => $big_table->id]) }}" class="btn btn-warning">Промени</a>
			</td>
			<td>
				<form method="POST" action="{{ route('bigtables.destroy', $big_table->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>
			
		</tr>
	@endforeach
</table>
<a href="{{url('bigtables/create')}}" class="createbtn">Създайте дейност</a>
@endsection