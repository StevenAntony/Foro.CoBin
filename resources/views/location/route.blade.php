<div class="location-route">
  <div class="container">
    <div class="d-flex ai-center">
      <div class="col-12">
        <div class="box">
          @for ($i = 0; $i < count($ruta['nombre']) ; $i++)
            @if ($ruta['direct'][$i] == 'foro.categoria')
              @if (($i%2 == 0))
                <span class=""><a class="tags-route" href="{{route($ruta['direct'][$i],[$ruta['nombre'][$i-1],$ruta['nombre'][$i]])}}">{{$ruta['nombre'][$i]}}</a> / </span>
              @else
                <span class="tags-route">{{$ruta['nombre'][$i]}}  </span>
              @endif
            @else
              <span><a class="tags-route" href="{{route($ruta['direct'][$i])}}">{{$ruta['nombre'][$i]}} </a>  </span>
            @endif
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>