@extends('layouts.master')

@section('content')
{{--  style="background-image: url({{asset('assets/img/banner/cta-banner.jpg')}});background-position: center;
    background-size: cover;
    background-attachment: fixed;" --}}
  <div class="cover-category">
    <div class="box">
      <div class="">
        <div class="content">
          <div class="d-flex flex-cover ai-center" style="height: 400px">
            <div class="col-lg-6" style="background-image: url({{asset('assets/img/banner/category.jpg')}});background-position: center;
  background-size: cover; background-attachment: fixed;height: 400px;padding: 0;"><div class="layer-category"><h1 class="display-3 text-name text-white">{{$descripcionCat[0]->nombre_cat}}</h1></div></div>
            <div class="col-lg-6 p-0 h-100">
              <div class="card bg-gradient-danger b-r-0 b-0 h-100 card-img-holder text-white">
                <div class="card-body">
                  <h4 class="font-weight-bold h5 mb-3" style="text-transform: uppercase;">{{$descripcionCat[0]->area_cat}}
                    <i class="mdi mdi-24px float-right ti-bookmark"></i>
                  </h4>
                  <h2 class="mb-5">$ 15,0000</h2>
                  <h6 class="card-text">Increased by 60%</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- cta-banner --}}
  @include('location/route')
@endsection