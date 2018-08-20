<div class="location-route">
  <div class="container">
    <div class="d-flex ai-center">
      <div class="col-12">
        <div class="box">
          @for ($i = 0; $i < count($ruta['nombre']) ; $i++)
            @if ($ruta['direct'][$i] == 'foro.categoria')
              @if (($i%2 == 0))
                <span class=""><a class="tags-route" href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-1],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a>  </span>
              @else
                <span class="tags-route"><label for="">{{$ruta['nombre'][$i]}}</label></span>
              @endif
            @else
              @if ($ruta['direct'][$i] == 'foro.categoria.tema')
                @if (($i%2 == 0))
                  <span class=""><a class="tags-route" href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-3],$ruta['nombre'][$i-2],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a> / </span>
                @else
                  <span class="tags-route"><label for="">{{$ruta['nombre'][$i]}}</label></span>
                @endif
              @else
                <span><a class="tags-route" href="{{route($ruta['direct'][$i])}}">{{$ruta['nombre'][$i]}} </a>  </span>
              @endif
            @endif
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>