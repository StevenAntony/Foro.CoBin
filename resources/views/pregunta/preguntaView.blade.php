@extends('layouts.master')
@section('style')
  <style>
    .bg-greenDark{
      background: #125759;
    }
    .bg-initial{
      background: #f5f8fa;
    }
  </style>
@endsection
@section('content')
  @include('location/route')
  <div class="question-view">
    <div class="box">
      <div class="container">
        <div class="content">
          <div class="d-flex">
            <div class="w-5"></div>
            <div class="col p-0">
              <div class="card b-0">
                <div class="card-header bg-dark b-0 b-r-0">
                  <h5 class="text-light"><a href="">¿{{$pregunta[0]->titulo_pre}}?</a></h5>
                  <span class="small text-muted-app">{{$pregunta[0]->nameuserpre}}</span>
                  <div class="blockquote-footer text-right">
                      10 de Agosto de 2018
                  </div>
                </div>
                <div class="card-body p-0 pb-4 pt-4">
                  <div class="w-100 bg-initial">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-nav-right bg-white" role="tablist" id="myTabs">
                        <li role="presentation" class=""><a href="#descripcion" data-toggle="tab" aria-expanded="true" class="bg-initial small f-bold d-block pt-2 pb-2 pl-4 pr-4">DESCRIPCION</a></li>
                        <li role="presentation" class=""><a href="#codigo" data-toggle="tab" aria-expanded="false" class="small f-bold d-block pt-2 pb-2 pl-4 pr-4">CODIGO</a></li>
                        {{-- <li role="presentation" class=""><a href="#comentarios" data-toggle="tab" aria-expanded="false" class="small f-bold d-block pt-2 pb-2 pl-4 pr-4">COMENTARIOS</a></li> --}}
                        {{-- <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li> --}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pl-4">
                        <div role="tabpanel" class="tab-pane fade active show" id="descripcion">
                            <b></b>
                            <p class="small">
                              {{$pregunta[0]->descripcion_pre}}
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="codigo">
                            <b></b>
                            <p class="">
                              {{$pregunta[0]->descripcionCode_pre}}
                            </p>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane fade" id="comentarios">
                            <b>Message Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div> --}}
                        {{-- <div role="tabpanel" class="tab-pane fade" id="settings">
                            <b>Settings Content</b>
                            <p>
                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                        </div> --}}
                    </div>
                  </div>
                </div>
              </div>
              {{-- {{dd($pregunta)}} --}}
              @php
                  $i = 1;
              @endphp
              @if($pregunta[0]->codigo_resp != null)
                @foreach ($pregunta as $p)
                  <hr>
                  <div class="b-r-0 card">
                    <div class="b-r-0 b-0 card-header bg-greenDark text-white">
                      <div class="box">
                        <div class="content">
                          <span class="small f-bold text-uppercase">Respuesta N° {{$i}}</span>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-0 pb-4 pt-4">
                      <div class="box">
                        <div class="content">
                          <div class="d-flex">
                            <div class="col-lg-6 pb-4"><span class="cs-avatar cs-avatar-sm"><img src="{{asset("assets/img/icons/svg/".$p->avatarresp.".svg")}}" alt="" sizes="" srcset="" width="20px" height="20px"></span><span class="ml-1 tag bg-success">{{$p->nameuserresp}}</span></div>
                            <div class="text-right col-lg-6"><span class="small">{{$p->puntajeresp}}</span></div>
                            <div class="w-100 bg-initial">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tab-nav-right bg-white" role="tablist" id="myTabs{{$i}}">
                                    <li role="presentation" class=""><a href="#descripcion{{$i}}" data-toggle="tab" aria-expanded="true" class="bg-initial small f-bold d-block pt-2 pb-2 pl-4 pr-4">DESCRIPCION</a></li>
                                    <li role="presentation" class=""><a href="#codigo{{$i}}" data-toggle="tab" aria-expanded="false" class="small f-bold d-block pt-2 pb-2 pl-4 pr-4">CODIGO</a></li>
                                    {{-- <li role="presentation" class=""><a href="#comentarios" data-toggle="tab" aria-expanded="false" class="small f-bold d-block pt-2 pb-2 pl-4 pr-4">COMENTARIOS</a></li> --}}
                                    {{-- <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li> --}}
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content pl-4">
                                    <div role="tabpanel" class="tab-pane fade active show" id="descripcion{{$i}}">
                                        <b></b>
                                        <p class="small">
                                          {{$p->descripcion_resp}}
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="codigo{{$i}}">
                                        <b></b>
                                        <p class="">
                                            {{$p->descripcionCode_resp}}
                                        </p>
                                    </div>
                                    {{-- <div role="tabpanel" class="tab-pane fade" id="comentarios">
                                        <b>Message Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div> --}}
                                    {{-- <div role="tabpanel" class="tab-pane fade" id="settings">
                                        <b>Settings Content</b>
                                        <p>
                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                            sadipscing mel.
                                        </p>
                                    </div> --}}
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @php
                      $i += 1;
                  @endphp
                @endforeach
              @else
                  no hay respuestas
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    $(document).ready(function () {
      var a = $('#myTabs a[href="#descripcion"]')
      var b = $('#myTabs a[href="#codigo"]')



      a.click(function (e) {
        e.preventDefault()
        var attr = a.attr('aria-expanded')
        if (attr == 'false') {
          a.addClass('bg-initial')
          b.removeClass('bg-initial')
          a.attr('aria-expanded','true')
          b.attr('aria-expanded','false')
        }
      })

      b.click(function (e) {
        e.preventDefault()
        var attr = b.attr('aria-expanded')
        if (attr == 'false') {
          b.addClass('bg-initial')
          a.removeClass('bg-initial')
          b.attr('aria-expanded','true')
          a.attr('aria-expanded','false')
        }
      })


    });
  </script>
@endsection