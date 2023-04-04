@extends('layouts.app')

@section('content')
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%" >
{!! Form::model($activity, ['route' => ['activities.update', ['id' => $activity->id]], 'method' => 'PUT']) !!}	
<label class="resultat">Активност</label>

<p>{!! Form::text('name', $activity->name, ['placeholder'=>'', 'class'=>'form-control']) !!}</p>
<p></p>

<p></p>
<label class="resultat">Тип</label>
<p></p>
	{!! Form::select('type_id', $types_arr, $activity->type->id) !!}
	<p></p>
	{!! Form::submit('Изпрати!', ['class'=> 'btn btn-secondary']) !!}
{!! Form::close() !!}
</div></center>
@endsection


