<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <meta name="author" content="Sheikh Heera" />
 

    <title>LaraPress</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href = "{{ asset('bootstrap/css/sticky-footer-navbar.css') }}" rel="stylesheet" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

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
            .table{
                margin-top: 30%;
                background: rgba(255, 255, 255, 0.7);
     width: 35%;
     height: 20%; 
     color: #ffbcd9;
     font-size: 120%;
    font-weight: bold;
    -webkit-text-stroke-width: 1.4px;
  -webkit-text-stroke-color: black;
     -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);
            }
           .createbtn{
            background-color: #658585;
            border-radius: 20%;
            color: #000;
            -webkit-text-stroke-width: 1.4px;
  -webkit-text-stroke-color: black;
     -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);

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
    color: #f58abe;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: #f58abe;
  text-shadow: 2px 2px 3px #000;
  font-size: 120%;
}
.description{
    color: #658585;
     font-size: 120%;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: #f58abe;
  text-shadow: 2px 2px 3px #000;

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
.choice{
    position: relative;
     top: 300px; 
     background: rgba(255, 255, 255, 0.7);
     width: 35%;
     height: 20%; 
     color: #658585;
     font-size: 120%;
    font-weight: bold;
    -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
     border-radius: 30%; 
     -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);
}
.btn{
    background-color: #658585;
}
.createform{
    margin-top: 40%;
    background: rgba(255, 255, 255, 0.7);
     border-radius: 50%;
     -webkit-box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77); 
box-shadow: 0px 0px 50px 10px rgba(255,255,255,0.77);
}
        </style>
    </head>
    <body>
                    


        <div class="flex-center position-ref full-height" >

            @if (Route::has('login'))
                <div class="top-right links" >

                    @auth
                        <a href="{{ url('/home') }}" style="text-decoration: underline; position:fixed; color:  #f58abe; top: 5%; right: 2%; background: rgba(255, 255, 255, 0.7); border-radius: 20%" class="description">Профил</a>
                    @else
                        <a href="{{ route('login') }}" style="text-decoration: underline; position:fixed; color:  #f58abe; right: 5%; top: 5%; background: rgba(255, 255, 255, 0.7); border-radius: 20%" class="resultat">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="text-decoration: underline; position:fixed; color:  #f58abe; right: 10%; top: 5%; background: rgba(255, 255, 255, 0.7); border-radius: 20%" class="description">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

            <center><div class="center">
                 @yield('content')

            </div></center>

          
          
    </body>
</html>
