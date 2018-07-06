<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foro-CoBin</title>
        <!-- Icons -->
        {{-- <link rel="icon" href="{{asset('assets/img/logo/logo.png')}}" type="image/x-icon" > --}}
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
                      <div class="col-sm-2">
                        <div class="box">
                          <div class="col-left">
                            <a href="{{route('foro.index')}}" title="Foro CoBin"><span class="sigla-web">CB</span><span class="name-web">CoBin</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="box">
                          <div class="col-right d-flex jc-flexEnd" style="height: 70px;">
                            <a href="#" class="network"><span class="ti-facebook"></span></a>
                            <a href="#" class="network"><span class="ti-twitter-alt"></span></a>
                            <a href="#" class="network"><span class="ti-instagram"></span></a>
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
                   <div class="row ai-center jc-spaceBetween">
                     <div class="col-lg-3">
                      <div class="box">
                        <div class="col-left">
                          <span class="title">Foro</span>
                        </div>
                      </div>
                     </div>
                     <div class="">
                       <div class="box">
                         <div class="col-right">
                           <nav class="nav">
                             <ul class="options d-flex">
                               <li class="option-item"><label>Lenguajes</label>
                                 <ul class="sub-options">
                                    @foreach ($categoria['Lenguajes'] as $c)
                                        <li class="sub-option-item"><a href="#">{{$c->nombre_categ}}</a></li>
                                    @endforeach
                                 </ul>
                               </li>
                               <li class="option-item"><label>Sistema Operativo</label>
                                 <ul class="sub-options">
                                    @foreach ($categoria['SistOper'] as $c)
                                        <li class="sub-option-item"><a href="#">{{$c->nombre_categ}}</a></li>
                                    @endforeach
                                 </ul>
                               </li>
                               <li class="option-item"><label>Base Datos</label>
                                 <ul class="sub-options">
                                    @foreach ($categoria['BaseDatos'] as $c)
                                        <li class="sub-option-item"><a href="#">{{$c->nombre_categ}}</a></li>
                                    @endforeach
                                 </ul>
                               </li>
                               <li class="option-item"><label>Herramientas</label>
                                 <ul class="sub-options">
                                    @foreach ($categoria['Herramientas'] as $c)
                                        <li class="sub-option-item"><a href="#">{{$c->nombre_categ}}</a></li>
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
              <!--==============================-->
              <div class="head-bottom">
                <div class="container">
                  <div class="content">
                    <div class="row ai-center">
                      <div class="col-lg-12">
                        @foreach ($ruta as $r)
                            <span>{{$r}} / </span>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div id="contain-all">
            @yield('content')
          </div>
        </div>

        <!-- Bootstrap -->
        <script src="{{asset('js/app.js')}}"></script>
        @yield('script')
    </body>
</html>
