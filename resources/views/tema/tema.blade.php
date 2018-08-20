@extends('layouts.master')
@section('style')
@endsection
@section('content')
  @include('location/route')
  <div class="wrapper-theme">
    <div class="card  b-0 b-r-0">
      <div class="container">
        <div class="box bg-info">
          <div class="content">
            <div class="layer-img" style="background-image: url({{asset('assets/img/banner/bg-banner.jpg')}});height:350px;background-position: center;
                background-size: cover; background-attachment: scroll;">
              <div class="layer-bg bg-dark o-4 h-100">
                <h1 class="display-1">{{$ruta['nombre'][0]}}</h1>
              </div>
            </div>
            {{-- <img class="col-lg-12 p-0" height="350px" src="{{asset('assets/img/banner/bg-banner.jpg')}}" alt="" srcset=""> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection