@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: #f58abe">{{ __('Профил') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@if(auth()->user()->is_admin == 1)
                    
                     <center><p class="description">{{ Auth::user()->name }} </p>
                     <p class="description">{{ Auth::user()->email }}</p> 
                     <p class="description">Администратор</p>
                     <p><a href="{{url('types')}}" class="resultat">Типове</a></p>
                    <p><a href="{{url('second_places')}}" class="resultat">Места</a></p>
                    <p><a href="{{url('activities')}}" class="resultat">Дейности</a></p>
                    <p><a href="{{url('bigtables')}}" class="resultat">Таблица за крайна оценка</a></p>
                    <p><a href="{{url('results/places')}}" class="resultat">Избор на място</a></p></center>
                    
                    @else
                    
                    <p class="description">{{ Auth::user()->name }} </p>
                     <p class="description">{{ Auth::user()->email }}</p>
                     <a href="{{url('bigtables/create')}}" class="resultat">Създайте дейност</a> 
                    
                             <input type="hidden" id="user_id" name="custId" value="{{ Auth::user()->id }}">
                            <p ></p>

                    <div>
                       
 

     
    <span class="caret"></span>
                    </div>
                    <div>
                        <form>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
