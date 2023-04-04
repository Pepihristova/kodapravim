@extends('layouts.app')

@section('content')
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%" >
{!! Form::model($second_place, ['route' => ['second_places.update', ['id' => $second_place->id]], 'method' => 'PUT']) !!}	
<label class="resultat">Тип</label>
<p>{!! Form::text('name', $second_place->name, ['placeholder'=>'recipe name here', 'class'=>'form-control']) !!}</p>
<p></p>

<p></p>
<label class="resultat">Място</label>
<p></p>
	{!! Form::select('place_id', $places_arr, $second_place->place->id) !!}
	<p></p>
	{!! Form::submit('Изпрати!', ['class'=> 'btn btn-secondary']) !!}
{!! Form::close() !!}
</div></center>
@endsection


