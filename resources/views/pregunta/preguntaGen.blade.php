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
              <form class="d-flex" action="{{route('auth.ProcPregunGen')}}" method="post">
              @csrf
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">CATEGORIA : </span></label>
                        <div class="col-sm-8">
                            <div class="group-button-s">
                                <button type="button" class="btn-info btn btn-desing-s" aria-selected="false" aria-roledescription="select">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach (json_decode($selCat) as $s)
                                        @if ($i == 0)
                                            @php
                                                $codigoCat = $s->codigo_cat;
                                            @endphp
                                            <span>{{$s->nombre_cat}}</span>
                                        @endif
                                        @php
                                            $i = $i + 1;
                                        @endphp
                                    @endforeach
                                    <span class="ti-angle-down"></span>
                                </button>
                                <select class="form-control select-desing-s" id="selCategory" name="selCategory">
                                    @foreach (json_decode($selCat) as $s)
                                        <option value="{{$s->codigo_cat}}">{{$s->nombre_cat}}</option>
                                    @endforeach
                                </select>
                                <ul class="list-select" id="item-list-categ" aria-expanded="false" rol="select">
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach (json_decode($selCat) as $s)
                                        @if ($i == 0)
                                        {{-- activateItem --}}
                                        {{-- <span class="ti-check"></span> --}}
                                             <li class="item-list " aria-selected="false"><span class="text">{{$s->nombre_cat}}</span> </li>
                                        @else
                                            <li class="item-list" aria-selected="false"><span class="text">{{$s->nombre_cat}}</span></li>
                                        @endif
                                        @php
                                            $i = $i + 1;
                                        @endphp
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">TEMA : </span></label>
                        <div class="col-sm-8">
                            <div class="group-button-s">
                                <button type="button" id="btnTema" class="btn-primary btn-theme btn btn-desing-s" aria-selected="false" aria-roledescription="select">
                                    @php
                                        $ban = 0;
                                    @endphp
                                    @foreach (json_decode($selTem) as $s)
                                        @if ($s->codigo_cat == $codigoCat)
                                            @if ($ban == 0)
                                                <span>{{$s->nombre_tem}}</span>
                                            @endif
                                            @php
                                                $ban = $ban + 1;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <span class="ti-angle-down"></span>
                                </button>
                                <select class="form-control select-desing-s" id="selTheme" name="selTheme">
                                        @foreach (json_decode($selTem) as $s)
                                            @if ($s->codigo_cat == $codigoCat)
                                                <option value="{{$s->codigo_tem}}">{{$s->nombre_tem}}</option>
                                            @endif
                                        @endforeach
                                </select>
                                <ul class="list-select" id="item-list-tema" aria-expanded="false" rol="select">
                                    @foreach (json_decode($selTem) as $s)
                                        @if ($s->codigo_cat == $codigoCat)
                                        <li class="item-list itemlist-tema" aria-selected="false">{{$s->nombre_tem}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-4"></div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"><span class="f-bold small">TITULO : </span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="textTitle" placeholder="Titulo debe ser corto y directo......">
                            {{-- <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> --}}
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


  {{-- <script src="../../../public/assets/js/script.form.js"></script> --}}
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            var Categoria = JSON.parse(@json($selCat));
            var set = {
                cat : $('#item-list-categ'),
                listTem :$("#item-list-tema"),
                listTemItem: $('#item-list-tema .itemlist-tema'),
                selCat: $('#selCategory'),
                selTema: $('#selTheme'),
                buttonTema: $('#btnTema')
            }
            var Tema = JSON.parse(@json($selTem));

            function handleOwnTheme() {
                set.cat.click(function () {
                    var codigoCat = set.selCat.find('option:selected').val(),
                        optionTem = "",
                        itemListtem = "",
                        btnTem = "",
                        banEvt = 0
                    for (let i = 0; i < Tema.length; i++) {
                        if (codigoCat == Tema[i].codigo_cat) {
                            if (banEvt == 0) {
                                btnTem = '<span>'+Tema[i].nombre_tem+ '</span>' + '<span class="ti-angle-down"></span>'
                                banEvt = 1
                            }
                            optionTem = optionTem + '<option value="'+Tema[i].codigo_tem+'">'+Tema[i].nombre_tem+'</option>'
                            itemListtem = itemListtem + '<li class="item-list itemlist-tema" aria-selected="false">'+Tema[i].nombre_tem+'</li>'
                        }
                    }
                    set.buttonTema.html(btnTem)
                    set.listTem.html(itemListtem)
                    set.selTema.html(optionTem)
                    handleOwnShowOption()
                })
            }

            function handleOwnShowOption() {
                $('#item-list-tema .itemlist-tema').each(function (index,element) {
                    var e = $(this)
                    e.click(function () {
                        set.buttonTema.html(e.text())
                         $('#selTheme option').eq(index).prop('selected', true)
                        var val = $('#selTheme').find('option:selected').val()
                    })
                })
            }

            handleOwnTheme()
        });
    </script>
@endsection

