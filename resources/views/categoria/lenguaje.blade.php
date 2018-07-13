@extends('layouts.master')

@section('content')
  <div class="cover-category" style="background-image: url({{asset('assets/img/banner/cta-banner.jpg')}});background-position: center;
    background-size: cover;
    background-attachment: fixed;">
    <div class="box">
      <div class="container">
        <div class="content">
          <div class="d-flex flex-cover ai-center" style="height: 350px">

          </div>
        </div>
      </div>
    </div>
  </div>
{{-- cta-banner --}}
  @include('location/route')
@endsection