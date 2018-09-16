@extends('layouts.master')
@section('style')
    <style>

      .wrapper-home{
        margin-top: 50px;
      }
      .wrapper-home .card{
        border: none;
        overflow: hidden;
        position: relative;
      }
    </style>
@endsection
@section('content')
    <div id="home">
      <div class="cover-home" style="background-image: url({{asset('assets/img/banner/3.jpg')}});">
        <div class="box">
          <div class="container">
            <div class="content">
              <div class="d-flex flex-cover ai-center" style="height: 450px">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="col-left">
                    <p class="lema-web">Encuentra las Respuestas a tus Dudas.</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 user-outstanding">
                  <div class="user-score d-flex jc-center">
                    <div class="card" style="width: 200px;">
                      @if ($score != null)
                      <div class="avatar"><img src="{{asset('assets/img/icons/svg/'.$score->avatar_dus.'.svg')}}" alt="" srcset="" width="60px" height="60px"></div>
                      <div class="data-user">
                        <h1 class="user-name">
                          {{$score->name}}
                        </h1>
                          @if ($score->estado == 'activo')
                            <img style="position: absolute;top:10px;right: 10px;border-radius: 50%;" src="{{asset('assets/img/icons/svg/013-cuadrado-de-forma-redondeada-negra.svg')}}" alt="" srcset="" width="15px" height="15px">
                          @else
                            <img style="position: absolute;top:10px;right: 10px;border-radius: 50%;" src="{{asset('assets/img/icons/svg/010-forma-cuadrada-sombra-1.svg')}}" alt="" srcset="" width="15px" height="15px">
                          @endif
                        <p class="puntaje-user">
                          {{$score->puntaje_dus}}
                           .puntos</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('location/route')
      <div class="wrapper-home">
        <div class="container">
          <div class="box">
            <div class="d-flex">
              <div class="col">
                <div class="d-flex col-left">
                  @php
                      $i = 0;
                  @endphp
                  @foreach ($temas['data'] as $t)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding:10px;">
                          <div class="card">
                            <div class="caract icon-theme-detail"><img class="img-caract" state='true' src="{{asset("assets/img/icons/svg/024-nuevo.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="30px" height="30px"></div>
                            <div class="more more-handle icon-theme-detail" state ='desactive'><img class="img-more" state='true' src="{{asset("assets/img/icons/svg/048-menu-5.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></div>
                            <div class="avatar-theme"><img class="img-theme" state='true' src="{{asset("assets/img/icons/svg/079-escritorio.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="40px" height="40px"></div>
                            <div class="titulo-theme"><h1>{{$t->nombre_tem}}</h1></div>
                            <div class="data-theme">
                              <div class="date-creation"><span class="small">Fecha :</span>
                                @if ($t->created_at == null)
                                  <span class="small text-muted-app">00:00:0000 00:00:00</span>
                                @else
                                    <span class="small text-muted-app">{{$t->created_at}}</span>
                                @endif
                              </div>
                              <div class="date-category">
                                <span class="small">Categoria :</span>
                                <span class="small text-muted-app">{{$t->nombre_cat}}</span>
                              </div>
                              <div class="date-count-question">
                                <span class="small">Preguntas :</span>
                                <span class="small padding-count-question">{{$temas['contPre'][$i]}}</span>
                              </div>
                            </div>
                            <div class="option-more">
                              <nav class="box">
                                <ul class="content-more">
                                  {{-- {{route('auth.ViewPregunEspec',[$t->nombre_tem,$t->codigo_tem])}} --}}
                                  <li class="more-item"><a style="display:block" href="{{route('foro.categoria.tema',[$t->area_cat  ,$t->nombre_cat,$t->nombre_tem])}}"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/097-enlace.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Visitar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="{{route('auth.ViewPregunEspec',[$t->nombre_cat,$t->nombre_tem,$t->codigo_tem])}}"><span class="small"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/199-levantar-la-mano-para-preguntar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"> </span> Preguntar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="http://"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/094-notificacion.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Notificar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="http://"><span class="small"></span></a></li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                    @php
                        $i= $i +1;
                    @endphp
                  @endforeach
                </div>
              </div>
              <div class="sidebar-right"style="width:300px;">
                <div class="box">
                  <div class="content" style="padding:10px;"  >
                    <div class="button-type">
                      @if (Auth::check())
                        <a href="{{route('auth.ViewPregunGen')}}"><button type="button" class="btn btn-default btn-preguntar-all btn-danger"><span class="small">Quiero Preguntar</span></button></a>
                      @else
                        <button type="button" class="btn btn-default btn-preguntar-all btn-danger" data-toggle="modal" data-target=".bs-example-login"><span class="small">Quiero Preguntar</span></button>
                      @endif
                    </div>
                    <div class="question-prominent" style="margin-top:20px;">
                        <div class="title-question text-center"><img src="{{asset("assets/img/icons/svg/006-rotacion.svg")}}" alt="" srcset="" width="25px" height="25px"> <span class="small" style="font-weight: 700;"> Ultimas Preguntas</span></div>
                        <div class="list-question">
                            <ul class="box-question">
                              {{-- <a href="#" class="question-item" style="width:100%; display:flex;"> --}}
                              {{-- <h6 class="title-question-bd">a</h6></a> --}}
                                @for ($i = 0; $i <count($ultimaP['contRPT']) ; $i++)
                                {{-- {{dd($ultimaP['data'][$i])}} --}}
                                    <li class="row">
                                      {{-- {{route("foro.categoria.preguntaView",[$ruta['nombre'][(count($ruta['nombre']) - 4)],$ruta['nombre'][(count($ruta['nombre']) - 3)],$ruta['nombre'][(count($ruta['nombre']) - 1)],$dt->codigo_pre])}} --}}
                                        <a href="#" class="question-item" style="width:100%; display:flex;">
                                            <div class="avatar-user"><img src="{{asset("assets/img/icons/svg/118-usuario.svg")}}" alt="" srcset="" width="40px" height="40px"></div>
                                            <div class="title-question-item">
                                                <h6 class="title-question-bd">{{$ultimaP['data'][$i]->titulo_pre}}</h6>
                                                <h6 class="small user-question" style="color:#9aa0ac"><i class="ti-hand-point-right"></i> {{$ultimaP['data'][$i]->name}}</h6>
                                            </div>
                                            <div class="time-date-question">
                                                <h6 class="small time-date">{{$ultimaP['data'][$i]->created_at}}</h6>

                                            </div>
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- @include('pregunta.modalPreGen') --}}
@endsection

@section('script')
    <script>
    </script>
@endsection