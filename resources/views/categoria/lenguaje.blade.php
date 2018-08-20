@extends('layouts.master')
@section('style')
<style>.fa-bar-chart-o{margin-top:0.5vw;}.fa-bar-chart-o::before{font-size:5vw;}.fa-question-circle::before{font-size:5vw;}.fa-comments::before{font-size:5vw;}.fa-sitemap::before{font-size:5vw;}.text-white::before{font-size:20px;}.h-c-m{height:150px;}</style>

  {{-- <style>
    .fa-bar-chart-o{
      margin-top: 0.5vw;
    }
    .fa-bar-chart-o::before{
      font-size: 5vw;
    }
    .fa-question-circle::before{
      font-size: 5vw;
    }
    .fa-comments::before{
      font-size: 5vw;
    }
    .fa-sitemap::before{
      font-size: 5vw;
    }
    .text-white::before{
      font-size: 20px;
    }
    .h-c-m{
      height: 150px;
    }
  </style> --}}
@endsection
@section('content')
{{--  style="background-image: url({{asset('assets/img/banner/cta-banner.jpg')}});background-position: center;
    background-size: cover;
    background-attachment: fixed;" --}}

  @include('location/route')
  <div class="cover-category">
    <div class="box">
      <div class="">
        <div class="content">
          <div class="d-flex">
            <div class="col-lg-5" style="background-image: url({{asset('assets/img/banner/category.jpg')}});background-position: center;
                background-size: cover; background-attachment: scroll;padding: 0;"><div class="layer-category"><h1 class="display-4 text-name text-white">{{$descripcionCat[0]->nombre_cat}}</h1></div></div>
            <div class="col-lg-7 p-0 h-100">
              <div class="card bg-gradient-danger b-r-0 b-0 h-100 card-img-holder">
                 {{-- text-white --}}
                <div class="card-body">
                  <h4 class="font-weight-bold h5 mb-3" style="text-transform: uppercase;">{{$descripcionCat[0]->area_cat}}
                    <i class="mdi mdi-24px float-right ti-bookmark"></i>
                  </h4>
                  <div class="d-flex">
                    <div class="col-lg-6 col-md-6 pt-1">
                      <div class="card-body h-c-m bg-white">
                        <div class="clearfix">
                          <div class="float-left text-center">
                            <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="float-right">
                            <p class="mb-0 text-right">Porcentaje Total</p>
                            <div class="fluid-container">
                              <h3 class="f-bold text-right mb-0">{{number_format($detalleCategoria[0]->porcentaje,2)}}%</h3>
                            </div>
                          </div>
                        </div>
                        <p class="text-muted-app small f-bold mt-3 mb-0">
                          <i class="fa fa-info text-success mr-2" aria-hidden="true"></i>El <span class="text-success f-bold">{{number_format($detalleCategoria[0]->porcentaje,2)}}% </span> de las preguntas resulta de <span class="text-success"><a href="{{route($ruta['direct'][(count($ruta['nombre']) - 1)],[$ruta['nombre'][(count($ruta['nombre']) - 2)],$ruta['nombre'][(count($ruta['nombre']) - 1)]])}}">{{$descripcionCat[0]->nombre_cat}}</a></span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pt-1">
                      <div class="card-body h-c-m bg-white">
                        <div class="clearfix">
                          <div class="float-left text-center">
                            <i class="fa fa-question-circle"></i>
                          </div>
                          <div class="float-right">
                            <p class="mb-0 text-right">Preguntas</p>
                            <div class="fluid-container">
                              @php
                                $totalPre = 0;
                                foreach ($detalleCategoria as $dc) {
                                  $totalPre += $dc->cantidadPregunta;
                                }
                              @endphp
                              <h3 class="f-bold text-right mb-0">{{$totalPre}}</h3>
                            </div>
                          </div>
                        </div>
                        <p class="text-muted-app small f-bold mt-3 mb-0">
                          <i class="fa fa-info text-success mr-2" aria-hidden="true"></i>Se han realizado <span class="text-success f-bold">{{$totalPre}} </span> preguntas en <span class="text-success"><a href="{{route($ruta['direct'][(count($ruta['nombre']) - 1)],[$ruta['nombre'][(count($ruta['nombre']) - 2)],$ruta['nombre'][(count($ruta['nombre']) - 1)]])}}">{{$descripcionCat[0]->nombre_cat}}</a></span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pt-1">
                      <div class="card-body h-c-m bg-white">
                        <div class="clearfix">
                          <div class="float-left text-center">
                            <i class="fa fa-comments"></i>
                          </div>
                          <div class="float-right">
                            <p class="mb-0 text-right">Respuestas</p>
                            <div class="fluid-container">
                              @php
                                $totalRes = 0;
                                foreach ($detalleCategoria as $dc) {
                                  $totalRes += $dc->cantidadRespuesta;
                                }
                              @endphp
                              <h3 class="f-bold text-right mb-0">{{$totalRes}}</h3>
                            </div>
                          </div>
                        </div>
                        <p class="text-muted-app small f-bold mt-3 mb-0">
                          <i class="fa fa-info text-success mr-2" aria-hidden="true"></i>Se han realizado <span class="text-success f-bold">{{$totalRes}} </span> respuestas en <span class="text-success"><a href="{{route($ruta['direct'][(count($ruta['nombre']) - 1)],[$ruta['nombre'][(count($ruta['nombre']) - 2)],$ruta['nombre'][(count($ruta['nombre']) - 1)]])}}">{{$descripcionCat[0]->nombre_cat}}</a></span>
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pt-1">
                      <div class="card-body h-c-m bg-white">
                        <div class="clearfix">
                          <div class="float-left text-center">
                            <i class="fa fa-sitemap"></i>
                          </div>
                          <div class="float-right">
                            <p class="mb-0 text-right">Temas</p>
                            <div class="fluid-container">
                              <h3 class="f-bold text-right mb-0">{{count($detalleCategoria)}}</h3>
                            </div>
                          </div>
                        </div>
                        <p class="text-muted-app small f-bold mt-3 mb-0">
                          <i class="fa fa-info text-success mr-2" aria-hidden="true"></i>Encuentras <span class="text-success f-bold">{{count($detalleCategoria)}} </span> temas con la que podras realizar preguntas.
                        </p>
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
    <br><br>
    <div class="container">
      <div class="d-flex">
        @foreach ($detalleCategoria as $dc)
          <div class="col-lg-3">
            {{-- #4B5F71 --}}
            {{-- linear-gradient(to bottom, #3b506400, #364B5F); --}}
            <div class="card-body p-relative" style="background: #fff;box-shadow: 1px 5px 10px 0 rgba(0, 0, 0, 1);">
              @if ($dc->estado_tem == 'nuevo')
                <div class="caract t-1 l-1 icon-theme-detail">
                  <img class="img-caract" state='true' src="{{asset("assets/img/icons/svg/024-nuevo.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="30px" height="30px">
                </div>
              @endif
              <div class="more more-handle icon-theme-detail" state ='desactive'>
                {{-- <i class="fa fa-ellipsis-v text-white"></i> --}}
                <img class="img-more" state='true' src="{{asset("assets/img/icons/svg/048-menu-5.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px">
              </div>
              <div class="avatar-theme text-center pt-4"><img class="img-theme" state='true' src="{{asset("assets/img/icons/svg/079-escritorio.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="40px" height="40px"></div>
              <div class="titulo-theme text-dark"><a style="display:block" href="{{route('foro.categoria.tema',['Lenguajes',$descripcionCat[0]->nombre_cat,$dc->nombre_tem])}}"><h1>{{$dc->nombre_tem}}</h1></a></div>
              <div class="data-theme">
                <div class="date-creation"><span class="small">Fecha :</span>
                  @if ($dc->created_at == null)
                    <span class="small text-muted-app">00:00:0000 00:00:00</span>
                  @else
                      <span class="small text-muted-app">{{$t->created_at}}</span>
                  @endif
                </div>
                <div class="date-category">
                  {{-- <span class="small">Categoria :</span>
                  <span class="small text-muted-app">{{$t->nombre_cat}}</span> --}}
                </div>
                <div class="date-count-question">
                  <span class="small">Preguntas :</span>
                  <span class="small padding-count-question">{{$dc->cantidadPregunta}}</span>
                </div>
                <div class="date-count-rpta">
                  <span class="small">Respuestas :</span>
                  <span class="small padding-count-question">{{$dc->cantidadRespuesta}}</span>
                </div>
              </div>
              <div class="option-more">
                <nav class="box">
                  <ul class="content-more">
                    {{-- {{route('auth.ViewPregunEspec',[$t->nombre_tem,$t->codigo_tem])}} --}}
                    <li class="more-item"><a style="display:block" href="{{route('foro.categoria.tema',['Lenguajes',$descripcionCat[0]->nombre_cat,$dc->nombre_tem])}}"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/097-enlace.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Visitar</span></a></li>
                    <li class="more-item"><a style="display:block" href="{{route('auth.ViewPregunEspec',[$descripcionCat[0]->nombre_cat,$dc->nombre_tem,$dc->codigo_tem])}}"><span class="small"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/199-levantar-la-mano-para-preguntar.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"> </span> Preguntar</span></a></li>
                    <li class="more-item"><a style="display:block" href="http://"><span><img class="" state='true' src="{{asset("assets/img/icons/svg/094-notificacion.svg")}}" alt="triangle with all three sides equal" sizes="" srcset="" width="15px" height="15px"></span> <span class="small"> Notificar</span></a></li>
                    <li class="more-item"><a style="display:block" href="http://"><span class="small"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
{{-- cta-banner --}}
@endsection