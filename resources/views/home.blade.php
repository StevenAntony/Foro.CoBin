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
      {{-- <img src="{{asset('assets/img/banner/3.jpg')}}" alt="" sizes="" srcset=""> --}}
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
                      <div class="avatar"><img src="{{asset('assets/img/icons/svg/003-usuario-3.svg')}}" alt="" srcset="" width="60px" height="60px"></div>
                      <div class="data-user">
                        <h1 class="user-name">{{$score['datos']->name}}</h1>
                        @if ($score['datos']->estado == 'activo')
                          <img style="position: absolute;top:10px;right: 10px;" src="{{asset('assets/img/icons/svg/077-exito.svg')}}" alt="" srcset="" width="20px" height="20px">
                        @else
                          <img style="position: absolute;top:10px;right: 10px;" src="{{asset('assets/img/icons/svg/135-error.svg')}}" alt="" srcset="" width="20px" height="20px">
                        @endif
                        <p class="puntaje-user">{{$score['puntaj']}} .puntos</p>
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
                  @for ($i = 0; $i < count($temas)-2; $i++)
                    {{-- {{$temas[$i]['datosC']->nombre_categ}} --}}
                    @if ($temas[$i]['tema'] != null)
                      @for ($j = 0; $j < count($temas[$i]['tema']); $j++)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" style="padding:10px;">
                          <div class="card">
                            <div class="caract icon-theme-detail"><img class="img-caract" state='true' src="{{asset("assets/img/icons/svg/004-estrella-1.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></div>
                            <div class="more more-handle icon-theme-detail" state ='desactive'><img class="img-more" state='true' src="{{asset("assets/img/icons/svg/108-menu.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></div>
                            <div class="avatar-theme"><img class="img-theme" state='true' src="{{asset("assets/img/icons/svg/026-espacio-de-trabajo.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="40px" height="40px"></div>
                            <div class="titulo-theme"><h1>{{$temas[$i]['tema'][$j]['datosT']->nombre_tem}}</h1></div>
                            <div class="data-theme">
                              <div class="date-creation"><span class="small">Fecha :</span>
                                @if ($temas[$i]['tema'][$j]['datosT']->created_at == null)
                                  <span class="small text-muted-app">00:00:0000 00:00:00</span>
                                @else
                                    <span class="small text-muted-app">{{$temas[$i]['tema'][$j]['datosT']->created_at}}</span>
                                @endif
                              </div>
                              <div class="date-category">
                                <span class="small">Categoria :</span>
                                <span class="small text-muted-app">{{$temas[$i]['datosC']->nombre_categ}}</span>
                              </div>
                              <div class="date-count-question">
                                <span class="small">Preguntas :</span>
                                <span class="small padding-count-question">{{$temas[$i]['tema'][$j]['contPreg']}}</span>
                              </div>
                            </div>
                            <div class="option-more">
                              <nav class="box">
                                <ul class="content-more">
                                  <li class="more-item"><a style="display:block" href="http://"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/042-enlace.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Visitar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="http://"><span class="small"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/009-levantar-la-mano-para-preguntar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"> </span> Preguntar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="http://"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/039-notificacion.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Notificar</span></a></li>
                                  <li class="more-item"><a style="display:block" href="http://"><span class="small"></span></a></li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      @endfor
                    @endif
                  @endfor
                </div>
              </div>
              <div class="sidebar-right"style="width:300px;">
                <div class="box">
                  <div class="content" style="padding:10px;"  >
                    <div class="button-type"><button type="button" class="btn btn-default btn-preguntar-all btn-danger"><span class="small">Quiero Preguntar</span></button></div>
                    <div class="question-prominent" style="margin-top:40px;">
                      {{-- <div class="title-question text-center btn-secondary"><img src="{{asset("assets/img/icons/svg/078-internet.svg")}}" alt="" srcset="" width="25px" height="25px"><span class="small" style="x">ULTIMAS PREGUNTAS</span></div> --}}
                        <div class="list-question">
                            <ul class="box-question">
                                @for ($i = 0; $i <count($ultimaP['contRPT']) ; $i++)
                                    <li class="row">
                                        <a href="#" class="question-item" style="width:100%; display:flex;">
                                            <div class="avatar-user"><img src="{{asset("assets/img/icons/svg/003-usuario-3.svg")}}" alt="" srcset="" width="40px" height="40px"></div>
                                            <div class="title-question-item">
                                                <h6 class="title-question-bd">{{$ultimaP['data'][$i]->titulo_pre}}</h6>
                                                <h6 class="small user-question" style="color:#9aa0ac"><i class="ti-hand-point-right"></i> {{$ultimaP['data'][$i]->name}}</h6>
                                            </div>
                                            <div class="time-date-question">
                                                <h6 class="small time-date">{{$ultimaP['data'][$i]->fecha_pre}}</h6>
                                                <h6 class="small time-date">{{$ultimaP['data'][$i]->hora_pre}}</h6>
                                            </div>
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="card" style="height: 600px;">

                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
    <script>
      console.log(@json($temas));
    </script>
@endsection