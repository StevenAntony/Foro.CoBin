@extends('layouts.master')

@section('content')
  <div id="cuestionGen">
    <div class="container">
      <div class="box">
        <div class="card col-12">
          <form action="{{route('auth.ProcPregunGen')}}" method="post">
              @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label">CATEGORIA : </label>
                <div class="col-10">
                    <select class="form-control" id="selCategory" name="selCategory">

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">TEMA : </label>
                <div class="col-10">
                    <select class="form-control" id="selTheme" name="selTheme">

                    </select>
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
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            var Categoria = @json($selCat);
            var Tema = @json($selTem);
            // alert(Categoria.length)
            var opction = ""
            var opctTeme= ""
            for (let i = 0; i < Categoria.length; i++) {
                opction = opction + "<option>"+Categoria[i].nombre_cat+"</option>"
            }
            for (let i = 0; i < Tema.length; i++) {
                if (Tema[i].codigo_cat == Categoria[0].codigo_cat ) {
                    opctTeme = opctTeme + "<option>"+Tema[i].nombre_tem+"</option>"
                }
            }
            $('#selCategory').html(opction)
            $('#selTheme').html(opctTeme)
            $('#selCategory').click(function () {
                opctTeme = ""
                var cal = $('#selCategory').find('option:selected').val(),cod;
                for (let i = 0; i < Categoria.length; i++) {
                   if (cal == Categoria[i].nombre_cat) {
                       cod = Categoria[i].codigo_cat
                   }
                }
                for (let i = 0; i < Tema.length; i++) {
                    if (Tema[i].codigo_cat == cod ) {
                        opctTeme = opctTeme + "<option>"+Tema[i].nombre_tem+"</option>"
                    }
                }
                $('#selTheme').html(opctTeme)
            })
        });
    </script>
@endsection

