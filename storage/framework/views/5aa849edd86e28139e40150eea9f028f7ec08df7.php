<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foro-CoBin</title>
        <!-- Icons -->
        
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <!-- reusable -> librerias -->
        <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/reusable.style.css')); ?>">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout/style.master.css')); ?>">
        <?php echo $__env->yieldContent('style'); ?>
    </head>
    <body>

        <div class="wrapper">
          <!--cabecera general-->
          <header id="header">
            <div class="box">
              <div class="head-top">
                <div class="container">
                  <div class="content">
                    <div class="row jc-spaceBetween ai-center">
                      <div class="col-sm-2">
                        <div class="box">
                          <div class="col-left">
                            <a href="<?php echo e(route('foro.index')); ?>" title="Foro CoBin"><span class="sigla-web">CB</span><span class="name-web">CoBin</span></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="box">
                          <div class="col-right d-flex jc-flexEnd" style="height: 70px;">
                            <a href="#" class="network"><span class="ti-facebook"></span></a>
                            <a href="#" class="network"><span class="ti-twitter-alt"></span></a>
                            <a href="#" class="network"><span class="ti-instagram"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--==============================-->
              <div class="head-center">
               <div class="container">
                 <div class="content">
                   <div class="row ai-center jc-spaceBetween">
                     <div class="col-lg-3">
                      <div class="box">
                        <div class="col-left">
                          <span class="title">Foro</span>
                        </div>
                      </div>
                     </div>
                     <div class="">
                       <div class="box">
                         <div class="col-right">
                           <nav class="nav">
                             <ul class="options d-flex">
                               <li class="option-item"><label>Lenguajes</label>
                                 <ul class="sub-options">
                                    <?php $__currentLoopData = $categoria['Lenguajes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="sub-option-item"><a href="#"><?php echo e($c->nombre_categ); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                               </li>
                               <li class="option-item"><label>Sistema Operativo</label>
                                 <ul class="sub-options">
                                    <?php $__currentLoopData = $categoria['SistOper']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="sub-option-item"><a href="#"><?php echo e($c->nombre_categ); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                               </li>
                               <li class="option-item"><label>Base Datos</label>
                                 <ul class="sub-options">
                                    <?php $__currentLoopData = $categoria['BaseDatos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="sub-option-item"><a href="#"><?php echo e($c->nombre_categ); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                               </li>
                               <li class="option-item"><label>Herramientas</label>
                                 <ul class="sub-options">
                                    <?php $__currentLoopData = $categoria['Herramientas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="sub-option-item"><a href="#"><?php echo e($c->nombre_categ); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                               </li>
                             </ul>
                           </nav>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <!--==============================-->
              <div class="head-bottom">
                <div class="container">
                  <div class="content">
                    <div class="row ai-center">
                      <div class="col-lg-12">
                        <?php $__currentLoopData = $ruta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span><?php echo e($r); ?> / </span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div id="contain-all">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>

        <!-- Bootstrap -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
