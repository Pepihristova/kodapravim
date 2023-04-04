@extends('layouts.master')

@section('content')

 <div class="choice" style="position: relative;
     top: 300px; 
     background: rgba(255, 255, 255, 0.7);
     width: 45%;
     height: 20%; 
     color: #658585;
     font-size: 120%;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
     border-radius: 30%; 
     -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);">

                        <label class="col-md-12 control-label">Второ Място</label>
                        
                        {!! Form::select('second_place_id', $second_places_arr, ['class' => 'form-control' ], ['id' => 'second_place_id']) !!}
                         <input type="hidden" id="place_id" name="place_id" value="{{$place_id}}">
                         <button onclick="myFunction()">Продължи</button>
             </div>        
@endsection
<script type="text/javascript">
function myFunction() {
  var place_id = document.getElementById("place_id").value;
  var e = document.getElementById("second_place_id");
              var second_place_id = e.options[e.selectedIndex].value;
              var query = "types";
              var string_url = "?place_id=" + place_id + '&second_place_id=' + second_place_id;
                console.log("Pepi e qka")
                console.log(place_id)
                console.log(string_url)
                window.location = query+string_url;

}
</script>