<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema Gestión Académico ENFMP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tooltip.css') }}" rel="stylesheet">
    
    {!! SEO::generate() !!}
    <style>
         
    body    {
            background-image: url('/img/fondo.jpeg') ;
            
               
            }
            .imagen-fondo {         
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;  
                opacity:.8;         
                display: block;
                width: 60%;
                margin: auto;     
              
            }
            div . display: flex;
          justify-content: space-around;{
                justify-content: center;
                align-items: center;            

            }
    </style>  
</head>

<body>
  
      
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" title ="Ir A la Página Principal">
                <img src="{{url('/img/portada.png')}}" width="80" height="80" > Inicio

                </a>               
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">         
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))                     
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/home') }}"> <img src="{{url('/img/icon/home.png')}}" heigth="20px" width="20px"  ><strong><font color=#001958> Inicio</strong></font></a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login',1) }}" title="Acceso al Sistema Gestión ENFMP"><img src="{{url('/img/icon/users.png')}}" heigth="20px" width="20px"  ><strong> <font color=#001958> Acceso Personal ENFMP</strong></font></a>
                                </li>       
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login',2) }}" title="Acceso Estudiante"><img src="{{url('/img/icon/estudiante.png')}}" heigth="20px" width="20px"  ><strong> <font color=#001958> Acceso Estudiante</strong></font></a>
                                </li>                     

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif

                            @endauth                        
                            @endif 

                    </ul>
                </div>
           
        </nav>
        <div class="container">
          
        <img src="{{url('/img/portada.png')}}"  class="imagen-fondo" >
 
        </div>
    <footer class="px-2 py-2 fixed-bottom bg-dark ">
        <div class="container">
            <span class="text-primary"  >ENFOCA  Organizar, Controlar y Organizar. .</span>
            <span class="text-warning font-weight-bold"> Todos los derechos reservados 2023 ©Fundación Escuela Nacional de Fiscales del Ministerio Público </span>
                 <a target="_blank" class="text-success" href="http://www.enf.edu.ve"></a>         
            </span>
            
        </div>
    </footer>
 
</body>
</html>
