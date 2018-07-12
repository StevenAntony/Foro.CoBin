<?php $__env->startSection('style'); ?>
    <style>
        #welcome .row{
            margin: 0;
        }
        #welcome .box-left{
            padding: 0 50px;
        }
        #welcome .col-left{
            background-color: #ffffff;
            height: 200px;
        }
        #welcome .box-right{
            padding-right: 50px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="welcome">
        <div class="box">
            <div class="contenedor">
                <div class="content">
                    <div style="height: 100px"></div>
                    <div class="d-flex jc-spaceBetween">
                        <div class="col">
                            <div class="box-left">
                                <div class="col-left" id="show-busqueda">
                                    <div class="loader"><div class="animation"></div></div>
                                    <div class="content-busqueda">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="width: 380px;">
                            <div class="box-right">
                                <div class="col-right">
                                    <div class="login-user"><button type="button" class="btn jc-center d-flex btn-login btn-default btn-success"><img src="<?php echo e(asset("assets/img/icons/svg/052-usuario-2.svg")); ?>" alt="" srcset="" width="25px" height="25px"><span class="small" style="display:block; margin-top: 4px">INICIAR SESIÒN</span></button></div>
                                    <br>
                                    <div class="login-user"><button type="button" class="btn jc-center d-flex btn-login btn-default btn-primary"><img src="<?php echo e(asset("assets/img/icons/svg/070-documento.svg")); ?>" alt="" srcset="" width="25px" height="25px"><span class="small" style="display:block; margin-top: 4px">REGISTRAR</span></button></div>
                                    <br>
                                    <div class="question-prominent">
                                        <div class="title-question text-center btn-secondary"><img src="<?php echo e(asset("assets/img/icons/svg/078-internet.svg")); ?>" alt="" srcset="" width="25px" height="25px"><span class="small" style="x">ULTIMAS PREGUNTAS</span></div>
                                        <div class="list-question">
                                            <ul class="box-question">
                                                <?php for($i = 0; $i <count($ultimaP['contRPT']) ; $i++): ?>
                                                    <li class="row">
                                                        <a href="#" class="question-item" style="width:100%; display:flex;">
                                                            <div class="avatar-user"><img src="<?php echo e(asset("assets/img/icons/svg/005-estudiante.svg")); ?>" alt="" srcset="" width="40px" height="40px"></div>
                                                            <div class="title-question-item">
                                                                <h6 class="title-question-bd"><?php echo e($ultimaP['data'][$i]->titulo_pre); ?></h6>
                                                                <h6 class="small user-question" style="color:#9aa0ac"><i class="ti-hand-point-right"></i> <?php echo e($ultimaP['data'][$i]->name); ?></h6>
                                                            </div>
                                                            <div class="time-date-question">
                                                                <h6 class="small time-date"><?php echo e($ultimaP['data'][$i]->fecha_pre); ?></h6>
                                                                <h6 class="small time-date"><?php echo e($ultimaP['data'][$i]->hora_pre); ?></h6>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>