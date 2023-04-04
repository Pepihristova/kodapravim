@extends('layouts.master')

@section('content')

 <div class="choice">
<label class="col-md-12 control-label">endresult</label>
                         <div class="well-searchbox">
                    @foreach( $endresult_arr as $endresult )
        <tr>
            <td style="border: 2px; border-color: blue">
                <label class="description">Име на дестинацията:</label>
               <label class="resultat">{{$endresult->place->name}}</label>
               <p></p>
               <label class="description">Име на второ място:</label>
               <label class="resultat">{{$endresult->second_place->name}}</label>
               <p></p> 
           
               <label class="description">Тип:</label>
               <label class="resultat">{{$endresult->type->type}}</label>
               <p></p> 

               <label class="description">Активност:</label>
               <label class="resultat">{{$endresult->activity->name}}</label>
               <p></p> 

               <label class="description">Описание:</label>
               <label class="resultat">{{$endresult->description}}</label>
               <p></p>
               <label class="description">Снимка на дейността:</label>
               <p><img src="{{ asset('free_time_images')}}/{{$endresult->filename }}" width="40%"></p> 
               <hr>
            </td>
            
        </tr>
    @endforeach
                
            </div>
          </div>
@endsection

