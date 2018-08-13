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
</head>
<body>
  <div class="wrapper-vitae">
    <header class="heder-vitae" style="background: url({{asset("assets/img/currilum/portada.jpg")}});background-position: center;background-repeat: no-repeat;background-size: cover;    background-attachment: fixed;height: 450px;">
      <div class="cover-layer">

      </div>
    </header>
  </div>
</body>
</html>
{{-- <a href="{{route('curriculumVitae.index',[14])}}">n</a> --}}