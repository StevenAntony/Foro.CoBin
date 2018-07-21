@extends('layouts.master')

@section('content')
  <div id="cuestionGen">
    <div class="container">
      <div class="box">
        <div class="card col-12">
          <form action="{{route('auth.ProcPregunGen')}}" method="post">
              @csrf
            <div class="col-lg-6">
                <div class="form-group row">
                    <label class="col-4 col-form-label">CATEGORIA : </label>
                    <div class="col-8">
                        <div class="group-button-s">
                            <button type="button" class="btn-danger btn btn-desing-s" aria-selected="false" aria-roledescription="select">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach (json_decode($selCat) as $s)
                                    @if ($i == 0)
                                        {{$s->nombre_cat}}
                                    @endif
                                    @php
                                        $i = $i + 1;
                                    @endphp
                                @endforeach
                            </button>
                            <select class="form-control select-desing-s" id="selCategory" name="selCategory">
                                @foreach (json_decode($selCat) as $s)
                                    <option value="{{json_encode($s->codigo_cat)}}">{{$s->nombre_cat}}</option>
                                @endforeach
                            </select>
                            <ul class="list-select" aria-expanded="false" rol="select">
                                @foreach (json_decode($selCat) as $s)
                                    <li class="item-list" aria-selected="false">{{$s->nombre_cat}}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">TEMA : </label>
                <div class="col-10">
                    {{-- <button type="button" class="btn-success btn-theme btn btn-desing-s" aria-selected="false" aria-roledescription="select"></button> --}}
                    <select class="form-control" id="selTheme" name="selTheme">
                            {{-- @foreach (json_decode($selTem) as $s)
                                        <option value="">{{$s->nombre_tem}}</option>
                                    @endforeach --}}
                    </select>
                        {{-- <ul class="list-select" aria-expanded="false" rol="select">
                                    <li class="item-list" aria-selected="true"></li>
                                </ul> --}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">TITULO : </label>
                <div class="col-10">
                    <input type="text" class="form-control" name="textTitle" placeholder="Titulo debe ser corto y directo......">
                    {{-- <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> --}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">DESCRIPCIÓN : </label>
                <div class="col-10">
                    <textarea class="form-control" name="textDecription" id="descripText" cols="30" rows="10" placeholder="Describa de que trata la pregunta que se a realizado en el titulo......"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">DESCRIPCIÓN EN CODIGO : </label>
                <div class="col-10">
                    <textarea class="form-control" name="textDecriptionCode" id="descripCode" cols="30" rows="10" placeholder=" /**No Funciona la Funcion*/
                    function codigficar(){
                      return true;
                    }"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-default btn-success">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- <script src="../../../public/assets/js/script.form.js"></script> --}}
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            var Categoria = JSON.parse(@json($selCat));
            var Tema = JSON.parse(@json($selTem));


        });
    </script>
@endsection

