
<head>
    <?php $__env->startSection('css'); ?>
    <?php $__env->stopSection(); ?> 
</head>
  <body>
    <?php $__env->startSection('title'); ?>
    <?php $__env->startSection('content_header'); ?>
    <a type="button" class="btn-lg btn-success" style="margin: 10px" id="button-addon1" href="<?php echo e(url('controlPeso/create')); ?>"><i class="fas fa-plus-square"></i></a>
    <a type="button" class="btn-lg btn-success" style="margin: 10px" id="button-addon1" href="<?php echo e(url('inactivos/controlPesos')); ?>"><i class="fas fa-recycle"></i></a>
    <a type="button" class="btn-lg btn-success float-right"  id="button-addon1" href="<?php echo e(url('exportar-excel-controlPeso')); ?>"><i class="fas fa-file-excel"></i></a>
    <a type="button" class="btn-lg btn-danger float-right"  id="button-addon1" href="<?php echo e(url('descarga-pdf-controlPeso')); ?>"><i class="fas fa-file-pdf"></i></a>
    <div class="card">
        <div class="card-body">
            <div class="titulo "><h1>Fichas de Controles de Pesos</h1></div>
          <table id="tabla" class="table table-striped table-bordered" style="width:100%">
            <thead>             
                <tr>
                    <th>Fecha de Registro</th>
                    <th>Código del Animal</th>
                    <th>Peso</th>
                    <th>Fecha de próximo control</th>
                    <th>Estado Actual</th> 
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>  
                <?php $__currentLoopData = $pesoC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
                <tr>
                    <td><?php echo e($i->date); ?></td>
                    <td ><?php echo e($i->animal); ?></td>
                    <td ><?php echo e($i->weigtht); ?></td>
                    <td ><?php echo e($i->date_r); ?></td>
                    <td ><?php echo e($i->actual_state); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('controlPeso.edit',$i->id)); ?>" ><i class="fas fa-edit"></i></a>                      
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaGanadero\resources\views/weigthC/index-weigthC.blade.php ENDPATH**/ ?>