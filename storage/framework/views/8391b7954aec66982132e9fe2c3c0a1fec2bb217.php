<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Foro-CodBin</title>
        <!-- Icons -->
        <link rel="icon" href="<?php echo e(asset('assets/img/logo/conbin2.png')); ?>" type="image/x-icon" >
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <!-- reusable -> librerias -->
        <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/reusable.style.css')); ?>">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout/style.master.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/welcome.style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/home.style.css')); ?>">
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
                      <!--col-sm-2-->
                      <div class="">
                        <div class="box">
                          <div class="col-left">
                            <a href="<?php echo e(route('foro.index')); ?>" title="Foro-CodBin - Encuentra respuestas a tus dudas"><span class="logo-web"><img src="<?php echo e(asset('assets/img/logo/conbin2.png')); ?>" alt=""></span></a>
                          </div>
                        </div>
                      </div>
                      <!--col-sm-3-->
                      <div class="">
                        <div class="box">
                          <div class="col-right d-flex jc-flexEnd ai-center" style="height: 70px;">
                            <div class="ini-session"><button type="button" class="btn btn-default btn-sesion"><img src="<?php echo e(asset("assets/img/icons/svg/057-login-4.svg")); ?>" alt="triangle with all three sides equal" sizes="" srcset="" width="20px" height="20px"> Iniciar Sesion</button></div>
                            <div class="register-has"><button type="button" class="btn btn-default btn-register">Registrar</button></div>
                            
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
                   <div class="d-flex layer ai-center jc-spaceBetween">
                     <div class="col" style="position: relative">
                      <div class="box">
                        <div class="col-left">
                          
                          <div class="form-search-group">
                            <input type="search" autocomplete="true" name="" id="input-search" placeholder="Buscar....">
                            <button type="button" id="sumit-search" class="btn-search btn btn-default">
                              <i class="ti-search"></i>
                              
                            </button>
                          </div>
                        </div>
                      </div>
                     </div>
                     <div class="">
                       <div class="box">
                         <div class="col-right">
                           <div class="menu-burger">
                             <img class="icon-burger show-icon-burger" state='true' src="<?php echo e(asset("assets/img/icons/svg/067-menu-3.svg")); ?>" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             <img class="icon-burger hidden-icon-burger" state='false' src="<?php echo e(asset("assets/img/icons/svg/082-cancelar.svg")); ?>" alt="triangle with all three sides equal" sizes="" srcset="" width="25px" height="25px">
                             
                           </div>
                          <div id="content-burger" active="false">
                            <nav class="nav walpper-burger jc-flexEnd">
                              <ul class="options">
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Lenguajes <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      <?php $__currentLoopData = $categoria['Lenguajes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="sub-option-item"><a href="<?php echo e(route('foro.categoria',['Lenguajes',$c->nombre_categ])); ?>"><?php echo e($c->nombre_categ); ?></a></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Sistema Operativo <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      <?php $__currentLoopData = $categoria['SistOper']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="sub-option-item"><a href="<?php echo e(route('foro.categoria',['Sistema Operativo',$c->nombre_categ])); ?>"><?php echo e($c->nombre_categ); ?></a></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Base Datos <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      <?php $__currentLoopData = $categoria['BaseDatos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="sub-option-item"><a href="<?php echo e(route('foro.categoria',['Base Datos',$c->nombre_categ])); ?>"><?php echo e($c->nombre_categ); ?></a></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                                </li>
                                <li class="option-item" state='hidden'><label class="d-flex jc-spaceBetween">Herramientas <i class="ti-angle-down"></i></label>
                                  <ul class="sub-options">
                                      <?php $__currentLoopData = $categoria['Herramientas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="sub-option-item"><a href="<?php echo e(route('foro.categoria',['Herramientas',$c->nombre_categ])); ?>"><?php echo e($c->nombre_categ); ?></a></li>
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
              </div>
              <!--==============================-->
              
            </div>
          </header>

          <!--Contenido General-->
          <div id="contain-all">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>

        <!-- Bootstrap -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/layout/script.master.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/layout/script.busqueda.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/script.more.js')); ?>"></script>
        <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
