
<?php $__env->startSection('nombre_regitro'); ?>
         Registro Antibiótico
<?php $__env->stopSection(); ?>
<?php $__env->startSection('formulario'); ?>
<form action="<?php echo e(route('confAnt.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">Nombre del Antibiótico:</label>
        <input type="text" class="form-control <?php echo e($errors->has('antibiotic_d') ? 'is-invalid':''); ?>" id="antibiotic_d" name="antibiotic_d"  value="<?php echo e(old('antibiotic_d')); ?>" onblur="upperCase()">
        <?php $__errorArgs = ['antibiotic_d'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Fecha Elaboración:</label>
        <input type="date" class="form-control <?php echo e($errors->has('date_e') ? 'is-invalid':''); ?>" id="fecha_e" name="date_e" value="<?php echo e(old('date_e')); ?>">
        <?php $__errorArgs = ['date_e'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="">Fecha Caducidad:</label>
        <input type="date" class="form-control <?php echo e($errors->has('date_c') ? 'is-invalid':''); ?>" id="fecha_c" name="date_c" value="<?php echo e(old('date_c')); ?>">
        <?php $__errorArgs = ['date_c'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>  
    <div class="form-group">
        <label for="">Proveedor:</label>
        <input type="text" class="form-control <?php echo e($errors->has('supplier') ? 'is-invalid':''); ?>" id="supplier" name="supplier" value="<?php echo e(old('supplier')); ?>" onblur="upperCase()">
        <?php $__errorArgs = ['supplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="invalid-feedback"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>  
    <div  class="form-group">
        <label for="">Estado Actual:</label>
        <select class="form-control" id="inputPassword4" name="actual_state" value="<?php echo e(old('actual_state')); ?>">
            <option value="DISPONIBLE">DISPONIBLE</option>
            <option value="INACTIVO">INACTIVO</option>
         </select>
    </div>  
    <center>
        <div class="form-group"style="margin: 40px">
            <a type="submit" class="btn btn-secondary btn" href="<?php echo e(url('/confAnt')); ?>">Cancelar</a>
            <button type="submit" class="btn btn-success btn"  href="<?php echo e(Redirect::to('/confAnt')); ?>" >Guardar</button>
        </div>
    </center>   
   
</form>
<?php $__env->stopSection(); ?>



















<?php echo $__env->make('antibiotic.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaGanadero\resources\views/antibiotic/create-antibiotic.blade.php ENDPATH**/ ?>