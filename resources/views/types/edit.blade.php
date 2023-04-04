@extends('layouts.app')

@section('content')
<center><div class="box" style="width: 40%; background: rgba(255, 255, 255, 0.7); margin-top: 10%; border-radius: 30%" >
{!! Form::model($type, ['route' => ['types.update', ['id' => $type->id]], 'method' => 'PUT']) !!}	
<label class="resultat">Тип</label>
<p>{!! Form::text('type', $type->type, ['placeholder'=>'recipe name here', 'class'=>'form-control']) !!}</p>
<p></p>
	{!! Form::submit('Изпрати!', ['class'=> 'btn btn-secondary']) !!}
{!! Form::close() !!}
</div></center>
@endsection


