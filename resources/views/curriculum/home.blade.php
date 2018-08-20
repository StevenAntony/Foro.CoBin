<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- {{$user}} --}}
  <title>Curriculo| {{$user[0]->name}}</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- reusable -> librerias -->
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/reusable.style.css')}}">
  <!-- STYLE -->
  <link rel="stylesheet" href="{{asset('assets/css/curriculum/style.css')}}">
</head>
<body>
  <div class="wrapper-vitae">
    <header class="header-vitae" style="background: url({{asset("assets/img/currilum/portada.jpg")}});background-position: bottom;background-repeat: no-repeat;background-size: cover;    background-attachment: fixed;height: 80vh;">
      <div class="cover-layer">
        <div class="box">
          <div class="container">
            <div class="box-header">
              <div class="content">
                <div class="d-flex jc-spaceBetween">
                  <div class="w-1">
                    <a href="{{route('foro.index')}}"><span class="h4 text-white">Cod<strong>Bin</strong></span></a>
                  </div>
                  <div class="w-2">
                    {{-- outline --}}
                    <button type="button" class="btn btn-default btn-info b-r-0"><span class="f-bold txt-contactar small">CONTACTAR</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-center">
              <h2 class="mt-4 display-5 f-bold text-white text-center" style="font-family:sans-serif;">DESARROLLO WEB</h2>
              <h4 class="m-auto pt-3 col-lg-8 h5 lh-5  ff-calibri text-white text-center">Me enfoco en desarrollar sitios web o sistemas web con las nuevas tecnologias de desarrollo y teniendo en cuenta con la mayor seguridad contra ataques informaticos. </h4>
            </div>
            <div class="box-footer">

            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</body>
</html>
{{-- <a href="{{route('curriculumVitae.index',[14])}}">n</a> --}}