@extends('layouts.app')

@section('content')
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%"  >
{!! Form::model($bigtable, ['route' => ['bigtables.update', ['id' => $bigtable->id]], 'files'=>'true' ,'method' => 'PUT']) !!}		

<td>
				<p class="resultat" >Снимка</p>
				<img width="50%" src="{{ asset('free_time_images')}}/{{$bigtable->filename }}">
				<input type="hidden"  name="filename" value="$bigtable->filename">
				<p></p>
<p class="resultat">Нова Снимка</p>
{!! Form::file('image')!!}
			</td>
			<p></p>
<label class="resultat">Място</label>
<p></p>
	{!! Form::select('place_id', $places_arr, $bigtable->place->id) !!}
	<p></p>
	<label class="resultat">Местонахождение</label>
<p></p>
	{!! Form::select('second_place_id', $second_places_arr, $bigtable->second_place->id) !!}
	<p></p>
	<p></p>
	<label class="resultat">Тип</label>
<p></p>
	{!! Form::select('type_id', $types_arr, $bigtable->type->id) !!}
	<p></p>
	<p></p>
	<label class="resultat">Дейност</label>
<p></p>
	{!! Form::select('activity_id', $activities_arr, $bigtable->activity->id) !!}
	<p></p>
	<p></p>
	<label class="resultat">Валидност</label>
	<p></p>
{!! Form::text('is_valid', $bigtable->is_valid)!!}
<p></p>
	<label class="resultat">Описание</label>
	<p></p>
{!! Form::text('description', $bigtable->description)!!}
<p></p>
<p></p>

	{!! Form::submit('Изпрати!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
</div></center>
@endsection


