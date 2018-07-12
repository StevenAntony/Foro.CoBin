<div class="location-route">
  <div class="container">
    <div class="d-flex ai-center">
      <div class="col-12">
        <div class="box">
          <?php for($i = 0; $i < count($ruta['nombre']) ; $i++): ?>
            <?php if($ruta['direct'][$i] == 'foro.categoria'): ?>
              <?php if(($i%2 == 0)): ?>
                <span class=""><a class="tags-route" href="<?php echo e(route($ruta['direct'][$i],[$ruta['nombre'][$i-1],$ruta['nombre'][$i]])); ?>"><?php echo e($ruta['nombre'][$i]); ?></a> / </span>
              <?php else: ?>
                <span class="tags-route"><?php echo e($ruta['nombre'][$i]); ?>  </span>
              <?php endif; ?>
            <?php else: ?>
              <span><a class="tags-route" href="<?php echo e(route($ruta['direct'][$i])); ?>"><?php echo e($ruta['nombre'][$i]); ?> </a>  </span>
            <?php endif; ?>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</div>