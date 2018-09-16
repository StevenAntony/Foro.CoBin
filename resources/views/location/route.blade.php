<div class="location-route">
  <div class="container">
    <div class="d-flex ai-center">
      <div class="col-12">
        <div class="box ai-center overflow-auto overflow-auto-info" style="display:-webkit-box;overflow-y: hidden">
          @for ($i = 0; $i < count($ruta['nombre']) ; $i++)
            @if ($ruta['direct'][$i] == 'foro.categoria')
              @if (($i%2 == 0))
                <div class="pl-1"> <span class="soan tags-route"><a class="" href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-1],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a>  </span></div>
              @else
                <div class="pl-1"><span class="tags-route"><label for="">{{$ruta['nombre'][$i]}}</label></span></div>
              @endif
            @else
              @if ($ruta['direct'][$i] == 'foro.categoria.tema')
                @if (($i%2 == 0))
                  <div class="pl-1  pr-4"><span class="tags-route"><a class="" href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-3],$ruta['nombre'][$i-2],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a> </span></div>
                @else
                  <div class="pl-1"><span class="tags-route"><label for="">{{$ruta['nombre'][$i]}}</label></span></div>
                @endif
              @else
                <div class="pl-1"><span class="tags-route"><a class="" href="{{route($ruta['direct'][$i])}}">{{$ruta['nombre'][$i]}} </a>  </span></div>
              @endif
            @endif
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>