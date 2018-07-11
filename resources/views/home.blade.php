@extends('layouts.master')

@section('content')
    <div id="home">
      {{-- <img src="{{asset('assets/img/banner/3.jpg')}}" alt="" sizes="" srcset=""> --}}
      <div class="cover-home" style="background-image: url({{asset('assets/img/banner/3.jpg')}});height:450px;">
        <div class="box">
          <div class="container">
            <div class="content">
              <div class="d-flex ai-center" style="height: 450px">
                <div class="col-lg-6">
                  <div class="col-left">
                    <p class="lema-web">Encuentra las Respuestas a tus Dudas.</p>
                  </div>
                </div>
                <div class="col-lg-6 ">
                  <div class="user-score d-flex jc-center">
                    <div class="card" style="height: 300px;width: 300px;">
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
      <div class="wrapper-home-categori">
        <div class="box">
          <div class="d-flex">
            <div class="col-lg-4"><img src="{{asset('assets/img/icons/svg/003-usuario-3.svg')}}" alt="" srcset="" width="100%" height="100%"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
    <script>
      // var a = @json($score)
    </script>
@endsection