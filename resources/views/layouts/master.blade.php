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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- reusable -> librerias -->
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/reusable.style.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('assets/css/layout/style.master.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/welcome.style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/home.style.css')}}">
        @yield('style')
    </head>
    <body>

        <div class="wrapper">
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
                            <div class="ini-session"><button type="button" class="btn btn-default btn-sesion"><img src="{{asset("assets/img/icons/svg/057-login-4.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="20px" height="20px"> Iniciar Sesion</button></div>
                            <div class="register-has"><button type="button" class="btn btn-default btn-register">Registrar</button></div>
                            {{-- <a href="#" class="network"><span class="ti-facebook"></span></a>
                            <a href="#" class="network"><span class="ti-twitter-alt"></span></a>
                            <a href="#" class="network"><span class="ti-instagram"></span></a> --}}
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
                          {{-- <span class="title">Foro</span> --}}
                          <div class="form-search-group">
                            <input type="search" autocomplete="true" name="" id="input-search" placeholder="Buscar....">
                            <button type="button" id="sumit-search" class="btn-search btn btn-default">
                              <i class="ti-search"></i>
                              {{-- <img src="{{asset("assets/img/icons/svg/070-busqueda.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px"> --}}
                            </button>
                          </div>
                        </div>
                      </div>
                     </div>
                     <div class="">
                       <div class="box">
                         <div class="col-right">
                           <div class="menu-burger">
                             <img class="icon-burger show-icon-burger" state='true' src="{{asset("assets/img/icons/svg/067-menu-3.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             <img class="icon-burger hidden-icon-burger" state='false' src="{{asset("assets/img/icons/svg/082-cancelar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             {{-- <button type="button" class="btn btn-burger"><i class="ti-view-list"></i></button> --}}
                           </div>
                          <div id="content-burger" active="false">
                            <nav class="nav walpper-burger jc-flexEnd">
                              <ul class="options">
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Lenguajes <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['Lenguajes'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Lenguajes',$c->nombre_categ])}}">{{$c->nombre_categ}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Sistema Operativo <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['SistOper'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Sistema Operativo',$c->nombre_categ])}}">{{$c->nombre_categ}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Base Datos <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['BaseDatos'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Base Datos',$c->nombre_categ])}}">{{$c->nombre_categ}}</a></li>
                                      @endforeach
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Herramientas <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      @foreach ($categoria['Herramientas'] as $c)
                                          <li class="sub-option-item"><a href="{{route('foro.categoria',['Herramientas',$c->nombre_categ])}}">{{$c->nombre_categ}}</a></li>
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
              <!--==============================-->
              {{-- <div class="head-bottom">
                <div class="container">
                  <div class="content">
                    <div class="row  jc-spaceBetween ai-center">
                      <div class="col-sm-6">
                        @for ($i = 0; $i < count($ruta['nombre']) ; $i++)
                          @if ($ruta['direct'][$i] == 'foro.categoria')
                            @if (($i%2 == 0))
                              <span><a href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-1],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a> / </span>
                            @else
                              <span style="color:#9ea8ac">{{$ruta['nombre'][$i]}} / </span>
                            @endif
                          @else
                            <span><a href="{{route($ruta['direct'][$i])}}">{{$ruta['nombre'][$i]}}</a> / </span>
                          @endif
                        @endfor
                      </div>
                      <div class="">
                        <div class="col-right">
                          <div class="form-search-group">
                            <input type="search" autocomplete="true" name="" id="input-search" placeholder="Buscar....">
                            <button type="button" id="sumit-search" class="btn-search btn btn-default"><img src="{{asset("assets/img/icons/svg/070-busqueda.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px"></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </header>

          <!--Contenido General-->
          <div id="contain-all">
            @yield('content')
          </div>
        </div>

        <!-- Bootstrap -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('assets/js/layout/script.master.js')}}"></script>
        <script src="{{asset('assets/js/layout/script.busqueda.js')}}"></script>
        <script src="{{asset('assets/js/script.more.js')}}"></script>
        @yield('script')
    </body>
</html>
