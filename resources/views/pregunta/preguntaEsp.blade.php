@extends('layouts.master')

@section('content')
  <div id="cuestionGen">
    <div class="container">
      <div class="box">
        <br>
        <div class="page-title">
              <div class="title_left">
                <h3 class="h5">PREGUNTAR</h3>
              </div>
            </div>
        <div class="card col-12">
          <div class="box-p">
              <form class="d-flex" action="{{route('auth.ProcPregunEsp')}}" method="post">
              @csrf
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">CATEGORIA : </span></label>
                        <div class="col-sm-8">
                          <input type="text" class="bg-info b-0 b-r-0 text-white form-control" name="" disabled value="{{$data['categoria']}}" id="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">TEMA : </span></label>
                        <div class="col-sm-8">
                          <input type="hidden" name="codigo_tem" value="{{$data['codigo']}}">
                          <input type="text" class="form-control b-0 b-r-0 bg-info text-white" name="" disabled value="{{$data['nombre']}}" id="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-4"></div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">TITULO : </span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="textTitle" placeholder="Titulo debe ser corto y directo......">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-4"></div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">DESCRIPCIÓN : </span></label>
                        <div class="col-sm-8">
                            <textarea class="form-control b-r-0" name="textDecription" id="descripText" cols="30" rows="2" placeholder="Describa de que trata la pregunta que se a realizado en el titulo......"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-4"></div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">DESCRIPCIÓN EN CODIGO : </span></label>
                        <div class="col-sm-8">
                            <textarea class="form-control b-r-0" name="textDecriptionCode" id="descripCode" cols="30" rows="2" placeholder=" /**No Funciona la Funcion*/
                            function codigficar(){
                            return true;
                            }"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-4"></div>
                    <div class="form-group row jc-flexEnd ai-center" style="height: 100%">
                        <div class="">
                            <button type="submit" class="btn btn-default btn-info b-r-0">PREGUNTAR</button>
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection