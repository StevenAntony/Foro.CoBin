@php
    function nameMonth($var,$tipo) {
      // dd($var);
      $day = ["01" => "Enero","02" => "Febrero","03" => "Marzo","04" => "Abril","05" => "Mayo","06" => "Junio","07" => "Julio","08" => "Agosto","09" => "Setiembre","10" => "Octubre","11" => "Noviembre","12" => "Diciembre"];
      if ($tipo == "month") {
        return $day[$var];
      }
    }
@endphp
@extends('layouts.master')
@section('style')
<style>
  /* #343a40de */
  .fa-ellipsis-v::before{
    position: absolute;
    top: 30px;
    right: 20px;
    font-size: 2rem;
  }
  .card-header:nth-child(1) .float-left{
    overflow: hidden;
    width: 30vw;
  }
  .card-header:nth-child(1) .float-left .text-muted{
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 30vw;
  }
  .fa-bars::before{
    position: absolute;
    background: #17a2b8;
    padding: 20px 20px;
    top:-15px;
    right: -20px;
  }
  .description{
    height: 55px;
  }
  .box-options{
    overflow: hidden;
    height: calc(100% - 48px);
  }
</style>
@endsection
@section('content')
  @include('location/route')
  <div class="wrapper-theme">
    <div class="card bg-dark  b-0 b-r-0">
      <div class="container">
        <div class="box bg-info">
          <div class="content">
            <div class="layer-img" style="background-image: url({{asset('assets/img/banner/bg-banner.jpg')}});height:350px;background-position: center;
                background-size: cover; background-attachment: scroll;">
              <div class="layer-bg-dark h-100">
                <div class="box-p p-relative">
                  <h1 class="display-6 f-bold o-5 text-uppercase text-white">{{$detalle[0]->nombre_tem}}</h1>
                  <span class="fa fa-ellipsis-v text-white"></span>
                  {{-- <h1 class="display-6 f-bold o-5 text-uppercase text-success">{{count($detalle)}} Preguntas</h1> --}}
                </div>
              </div>
            </div>
            {{-- <img class="col-lg-12 p-0" height="350px" src="{{asset('assets/img/banner/bg-banner.jpg')}}" alt="" srcset=""> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="content">
        <div class="box">
          <div class="d-flex">
            <div class="w-4"></div>
            <div class="col">
              @foreach ($detalle as $dt)
              <br>
                <div class="card w-100 b-0 box-sha b-r-0 overflow-h">
                  <div class="card-header overflow-h p-relative b-0 text-dark">
                    <div class="">
                      <div class="clearfix">
                      <div class="float-left"><span class="small d-block mt-1 text-muted" title="Realizado Por {{$dt->name}}">Realizado Por <span class="text-dark">{{$dt->name}}</span></span></div>
                      {{-- {{date("d",strtotime($dt->created_pre))." de ".nameMonth(date("m",strtotime($dt->created_pre)),"month")." de ".date("Y",strtotime($dt->created_pre))}} --}}
                      <div class="float-right p-relative"><span class="fa fa-bars cursor-p text-light more-handle" state="desactive"></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    {{-- uppercase --}}
                    {{-- {{dd($ruta['nombre'][(count($ruta['nombre']) - 4)])}} --}}
                    <div class="title-question"><h5 class="text-info h5"><a href="{{route("foro.categoria.preguntaView",[$ruta['nombre'][(count($ruta['nombre']) - 4)],$ruta['nombre'][(count($ruta['nombre']) - 3)],$ruta['nombre'][(count($ruta['nombre']) - 1)],$dt->codigo_pre])}}">¿ {{$dt->titulo_pre}} ?</a></h5></div>
                    <div class="description overflow-h"><p class="small text-secondary">{{$dt->descripcion_pre}}</p></div>
                  </div>
                  <div class="card-footer b-0 text-right">
                    <div class="blockquote-footer">
                      {{date("d",strtotime($dt->created_pre))." de ".nameMonth(date("m",strtotime($dt->created_pre)),"month")." de ".date("Y",strtotime($dt->created_pre))}}
                    </div>
                  </div>
                  <div class="box-options option-more w-2 t-4 mt-2 text-white bg-info p-absolute r-0" style="transform: scale(0);transition: 0.2s">
                    <div class="content">
                      <li class="p-2"><span class="fa fa-comments"></span> <span class="pl-1 small">Responder</span></li>
                      <li class="p-2"><span class="fa fa-folder"></span> <span class="pl-1 small">Archivo</span></li>
                      <li class="p-2"><span class="fa fa-bell"></span> <span class="pl-1 small">Recibir Notificaciones</span></li>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection