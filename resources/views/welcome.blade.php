<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
         

           
             body {

  background: url('{{ asset('/images/background.jpg') }}') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                
                text-decoration: none;
                text-transform: uppercase;
            }

           

            .search-background img {
  
}
.center{
   position:absolute;
    top:2%;
    bottom:0;
    left:0;
    right:0;
    width:30%; /* Assign a value */
    margin:auto;
}
.well-searchbox {
  

  
 
  background: rgba(255, 255, 255, 0.7);
  color: #ffbcd9;
  
 
  
  
}

.well-searchbox label {
    
}
.resultat{
    color: #ffbcd9;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
  font-size: 120%;
}
.description{
    color: #658585;
     font-size: 120%;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
}
.bgsvg{
    position: relative;
    top: 10%;
    bottom:0;
    left:0;
    right:0; /* Assign a value */
    margin:auto;
}
.bgsvg_pos{
    position: relative;
    top: 10%;
    bottom:0;
    left:0;
    right:0; /* Assign a value */
    margin:auto;
    background: rgba(0, 0, 0, 0.1);
  color: #ffbcd9;
     font-size: large;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;

  
}
        
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div style="background-color: #fff; height: 30px; color: #658585; -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="margin: 1%;">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline" style="font-weight: bold; color: #658585; position: relative; left: 90% ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" style="font-weight: bold; color: #658585; position: relative; left: 88%">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="font-weight: bold; color: #000; position: relative; left: 90%">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

           <center> <div style="position: relative; top: 300px; background-color: #fff; width: 25%; border-radius: 30%; -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); "><h1 >Какво да правим?</h1>
                        <h4><a href="{{url('results/places')}}">Дейности</a></h4>
                        
           </div></center> 

                    
                </div>
            </div>
        </div>
    </body>
</html>
