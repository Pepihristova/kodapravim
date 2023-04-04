@extends('layouts.master')

@section('content')


 <div class="choice">
  <form class="form-horizontal" role="form" id="myForm">
          <div class="form-group">
                        <label class="col-md-12 control-label">Място</label>
                        <div class="col-md-12">
                            {!! Form::select('place_id', $places_arr, ['class' => 'form-control' ], ['id' => 'place_id']) !!}
                        </div>
                    </div>
                  </form>
                  <button onclick="myFunction()" class="btn">Продължи</button>
                  <p id="demo"></p>
@endsection
</div>
<script type="text/javascript">
  /*function go(){
              //var query = "destinations";
           
              var e = document.getElementById("place_id");
              var place_id = e.options[e.selectedIndex].value;
               console.log(place_id)
                console.log("Pepi e qka")
               // var string_url = "?area_id=" + area_id + '&subarea_id=' + subarea_id +'&type_id=' +type_id +'&days=' +days ;
      //  window.location = query+string_url; // JQuery:  $("#menu").val();
              //console.log("Pepi e qka")
              //window.location = query+string_url; // JQuery:  $("#menu").val();
            }*/

function myFunction() {
  var e = document.getElementById("place_id");
              var place_id = e.options[e.selectedIndex].value;
              var query = "second_places";
              var string_url = "?place_id=" + place_id;
              
                console.log(place_id)
                console.log(string_url)
                window.location = query+string_url;

}

</script>
