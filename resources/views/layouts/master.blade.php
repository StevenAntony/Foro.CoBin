<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Foro-CodBin</title>
        <!-- Icons -->
        <link rel="icon" href="{{asset('assets/img/logo/conbin2.png')}}" type="image/x-icon" >
        {{-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" > --}}
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- reusable -> librerias -->
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/reusable.style.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/layout/style.master.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/welcome.style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/categoria.style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/home.style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/redes.style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/form.style.css')}}">
        @yield('style')
        <style>
          @keyframes sk-rotateplane{
            0%{
              transform: rotate(360deg);
            }
            100%{
              transform: rotate(0deg);
            }
          }

          #spinner-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    z-index: 9999999;
}
/* spiner-img */
.spiner-img {
    width: 60px;
    height: 60px;
    /* background-color: #27aae1; */
    position: absolute;
    top: 48%;
    left: 48%;
    /* box-shadow: 0 0 8px rgba(0,0,0, .3); */
    -webkit-animation: sk-rotateplane 0.5s infinite ease-in;
    animation: sk-rotateplane 0.5s infinite ease-in;
}
        </style>
    </head>
    <body>

        <div class="wrapper">
          @include('redesSocial.segir')
          <!--cabecera general-->
          <header id="header">
            <div class="box">
              <div class="head-top">
                <div class="container">
                  <div class="content">
                    <div class="row jc-spaceBetween ai-center">
                      <!--col-sm-2-->
                      <div class="">
                        <div class="box">
                          <div class="col-left">
                            <a href="{{route('foro.index')}}" title="Foro-CodBin - Encuentra respuestas a tus dudas"><span class="logo-web"><img src="{{asset('assets/img/logo/conbin2.png')}}" alt=""></span></a>
                          </div>
                        </div>
                      </div>
                      <!--col-sm-3-->
                      <div class="">
                        <div class="box">
                          <div class="col-right d-flex jc-flexEnd ai-center" style="height: 70px;">

                            @if (Auth::check())
                              <div class="dropdown">
                                <button class="btn btn-default btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <span class="small">MI CUENTA</span>
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="margin-right: 20px;">
                                  <li><a href="#" style="display:flex;overflow: hidden;text-overflow: ellipsis;padding: 5px 10px;" title="{{Auth::user()->name}}"><img src="{{asset("assets/img/icons/svg/".Auth::user()->detalle->avatar_dus.".svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="20px" height="20px"><span class="small" style="width: 100px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{Auth::user()->name}}</span></a></li>
                                  <li><a href="#" style="display:flex;padding: 5px 10px;"><span class="small">Configuracion</span></a></li>
                                  <li><a href="#" style="display:flex;padding: 5px 10px;"><span class="small">Soporte</span></a></li>
                                  <hr style="margin:0;">
                                  {{-- {{route('cerrar')}} --}}
                                  <li><a href="{{route('cerrar')}}" style="display:flex;padding: 5px 10px;"><span class="small">salir</span></a></li>
                                </ul>
                              </div>
                            @else
                            <div class="ini-session"><button type="button" data-toggle="modal" data-target=".bs-example-login" class="btn btn-default btn-sesion"><img src="{{asset("assets/img/icons/svg/112-login-1.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="20px" height="20px"> Iniciar Sesion</button></div>
                            <div class="register-has"><button  data-toggle="modal" data-target=".bs-example-register" type="button" class="btn btn-default btn-register">Registrar</button></div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--==============================-->
              <div class="head-center">
               <div class="container">
                 <div class="content">
                   <div class="d-flex layer ai-center jc-spaceBetween">
                     <div class="col" style="position: relative">
                      <div class="box">
                        <div class="col-left">
                          <div class="form-search-group">
                            <input type="search" autocomplete="true" name="" id="input-search" placeholder="Buscar....">
                            <button type="button" id="sumit-search" class="btn-search btn btn-default">
                              <i class="ti-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                     </div>
                     <div class="">
                       <div class="box">
                         <div class="col-right">
                           <div class="menu-burger">
                             <img class="icon-burger show-icon-burger" state='true' src="{{asset("assets/img/icons/svg/124-menu-2.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             <img class="icon-burger hidden-icon-burger" state='false' src="{{asset("assets/img/icons/svg/168-cancelar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             {{-- <button type="button" class="btn btn-burger"><i class="ti-view-list"></i></button> --}}
                           </div>
                          <div id="content-burger" active="false">
                            <nav class="nav walpper-burger jc-flexEnd">
                              <ul class="options">
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Lenguajes <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['Lenguajes'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Lenguajes',$c->nombre_cat])}}">{{$c->nombre_cat}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Sistema Operativo <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['SistOper'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Sistema Operativo',$c->nombre_cat])}}">{{$c->nombre_cat}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Base Datos <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['BaseDatos'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Base Datos',$c->nombre_cat])}}">{{$c->nombre_cat}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Herramientas <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['Herramientas'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Herramientas',$c->nombre_cat])}}">{{$c->nombre_cat}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                              </ul>
                            </nav>
                          </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
            </div>
          </header>

          <!--Contenido General-->
          <div id="contain-all">
            @yield('content')
          </div>
        </div>
        @if (!Auth::check())
        <!-- Small modal -->
        <div class="modal fade bs-example-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title small" id="gridSystemModalLabel">{{ __('INICIAR SESION') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                @include('auth.login')
              </div>
            </div>
          </div>
        </div>
                <!-- Small modal -->
        <div class="modal fade bs-example-register" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title small" id="gridSystemModalLabel">{{ __('REGISTRAR CUENTA') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                @include('auth.register')
              </div>
            </div>
          </div>
        </div>
        @endif
        <div id="spinner-wrapper" >
      <div class="spinner"><img class="spiner-img" src="{{asset("assets/img/icons/svg/041-girar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px"></div>
    </div>
        <!-- Bootstrap -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('assets/js/layout/script.master.js')}}"></script>
        <script src="{{asset('assets/js/layout/script.busqueda.js')}}"></script>
        <script src="{{asset('assets/js/script.more.js')}}"></script>
        <script>
          'use strict'

          //Preloader
          var preloader = $('#spinner-wrapper');
          $(window).on('load', function() {
              var preloaderFadeOutTime = 500;

              function hidePreloader() {
                  preloader.fadeOut(preloaderFadeOutTime);
              }
              hidePreloader();
          });
        </script>
        @yield('script')

        <script src="{{asset('assets/js/script.form.js')}}"></script>
    </body>
</html>
