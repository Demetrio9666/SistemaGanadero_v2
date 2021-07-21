
<head>
    <?php $__env->startSection('css'); ?>
        
    <?php $__env->stopSection(); ?> 
</head>
  <body>
   
    <?php $__env->startSection('title'); ?>
  
    
  
    <?php $__env->startSection('content_header'); ?>
    <a type="button" class="btn-lg btn-success" style="margin: 10px" id="button-addon1" href="<?php echo e(url('confRaza/create')); ?>"><i class="fas fa-plus-square"></i></a>
    <a type="button" class="btn-lg btn-success" style="margin: 10px" id="button-addon1" href="<?php echo e(url('inactivos/Razas')); ?>"><i class="fas fa-recycle"></i></a>
    <div class="card">
        <div class="card-body">
          <table id="tabla" class="table table-striped table-bordered" style="width:100%">
            <thead>             
                <tr>
                    <th>Nombre de la Raza</th>
                    <th>Porcentaje</th>
                    <th>Estado Actual</th> 
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>  
                <?php $__currentLoopData = $raza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
                <tr>
                    <td ><?php echo e($i->race_d); ?></td>
                    <td><?php echo e($i->percentage); ?></td>
                    <td ><?php echo e($i->actual_state); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('confRaza.edit',$i->id)); ?>" ><i class="fas fa-edit"></i></a> 
                    </td>  
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           
        </table>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
    <?php $__env->startSection('js'); ?>
         
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaGanadero\resources\views/race/index-race.blade.php ENDPATH**/ ?>