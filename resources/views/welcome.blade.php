{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foro-CoBin</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->

        <style>
            html, body {
                background-colo r: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html> --}}

@extends('layouts.master')
@section('style')
    <style>
        #welcome .row{
            margin: 0;
        }
        #welcome .box-left{
            padding: 0 50px;
        }
        #welcome .col-left{
            background-color: #ffffff;
            height: 200px;
        }
        #welcome .box-right{
            padding-right: 50px;
        }
    </style>
@endsection
@section('content')
    <div id="welcome">
        <div class="box">
            <div class="contenedor">
                <div class="content">
                    <div style="height: 100px"></div>
                    <div class="d-flex jc-spaceBetween">
                        <div class="col">
                            <div class="box-left">
                                <div class="col-left" id="show-busqueda">
                                    <div class="animation"></div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="width: 380px;">
                            <div class="box-right">
                                <div class="col-right">
                                    <div class="login-user"><button type="button" class="btn jc-center d-flex btn-login btn-default btn-success"><img src="{{asset("assets/img/icons/svg/052-usuario-2.svg")}}" alt="" srcset="" width="25px" height="25px"><span class="small" style="display:block; margin-top: 4px">INICIAR SESIÒN</span></button></div>
                                    <br>
                                    <div class="login-user"><button type="button" class="btn jc-center d-flex btn-login btn-default btn-primary"><img src="{{asset("assets/img/icons/svg/070-documento.svg")}}" alt="" srcset="" width="25px" height="25px"><span class="small" style="display:block; margin-top: 4px">REGISTRAR</span></button></div>
                                    <br>
                                    <div class="question-prominent">
                                        <div class="title-question text-center btn-secondary"><img src="{{asset("assets/img/icons/svg/078-internet.svg")}}" alt="" srcset="" width="25px" height="25px"><span class="small" style="x">ULTIMAS PREGUNTAS</span></div>
                                        <div class="list-question">
                                            <ul class="box-question">
                                                @for ($i = 0; $i <count($ultimaP['contRPT']) ; $i++)
                                                    <li class="row">
                                                        <a href="#" class="question-item" style="width:100%; display:flex;">
                                                            <div class="avatar-user"><img src="{{asset("assets/img/icons/svg/005-estudiante.svg")}}" alt="" srcset="" width="40px" height="40px"></div>
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
    {{-- <script>
        $(".group-search").click(function () {
            alert("sa")
          });
    </script> --}}
@endsection