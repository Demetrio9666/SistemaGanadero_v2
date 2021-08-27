

<?php $__env->startSection('content_header'); ?>
        <div class="card card-dark">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-book-open"></i>
                <?php echo $__env->yieldContent('nombre_card'); ?></h3>
            </div>
            <div class="col-lg-3 col-6">
                <a type="button" class="btn btn-success" style="margin: 10px" id="button-addon1" href=<?php echo $__env->yieldContent('boton_atras'); ?>><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card">
                <div class="card-body">
                        <div class="titulo "><h1> <?php echo $__env->yieldContent('nombre_tabla'); ?></h1></div>
                        <?php echo $__env->yieldContent('tabla'); ?>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaGanadero\resources\views/layouts/baseTablasInactivas.blade.php ENDPATH**/ ?>