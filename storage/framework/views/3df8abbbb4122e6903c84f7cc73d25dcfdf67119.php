
<head>
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registration Form</title>
</head>
<body>
   
    <?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="/css/registrop.css">
    <link rel="stylesheet" type="text/css" href="/css/imagen.css">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card card-dark">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Editar Registro de Animales</h3>
            </div>
                <div class="container" id="registration-form">
                    <div class="image"></div>
                    <div class="frm">
                        <form action="<?php echo e(route('fichaAnimal.update', $animal->id)); ?>" method="POST" class="row g-3" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <center>
                                <div style="margin-top: 19px; ">
                                    <div class="card " style="width: 200px">
                                        <div id="imagenPreview"  >
                                          
                                                <img src=" <?php echo e($animal->url); ?>" id="imagenAct">
                                            
                                        </div>
                                </div>
                                  
                                    <input class= "form-control form-control-sm"  id="imagen" type="file" name="file" > 
                                    
                               
                                           
                             </center>
                            <div  class="col-md-6">
                                <label for="" class="form-label">Código Animal:</label>
                                <input type="text" class="form-control" id="codigoAnimal" name="codigo_animal" value="<?php echo e($animal->animalCode); ?>" onblur="upperCase()">
                            </div>
                            <div  class="col-md-6">
                                <label for="">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_n" name="fecha_nacimiento"  value="<?php echo e($animal->date); ?>">
                            </div>
                            <div  class="col-md-6">
                                <label for="">Raza:</label>
                                <select class="form-control" id="razas" name="raza"  value="<?php echo e($animal->race_id); ?>">
                                        <option selected></option>
                                    <?php $__currentLoopData = $raza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                        <option value="<?php echo e($i->id); ?>" <?php if($animal->race_id == $i->id ): ?> selected <?php endif; ?>><?php echo e($i->race_d); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div> 
                            <div  class="col-md-6">
                                <label for="">Sexo:</label>
                                <select class="form-control" id="inputPassword4" name="sexo" value="<?php echo e($animal->sex); ?>">
                                    <option selected></option>
                                    <option value="MACHO"   <?php if($animal->sex == "MACHO" ): ?> selected <?php endif; ?>>MACHO</option>
                                    <option value="HEMBRA"   <?php if($animal->sex == "HEMBRA" ): ?> selected <?php endif; ?>>HEMBRA</option>
                            </select>
                            </div> 
                            <div  class="col-md-6">
                                <label for="">Etapa:</label>
                                <select class="form-control" id="inputPassword4" name="etapa"  value="<?php echo e($animal->stage); ?>" >
                                    <option selected></option>
                                    <option value="TERNERA" <?php if($animal->stage == "TERNERA"): ?> selected <?php endif; ?>>TERNERA</option>
                                    <option value="VACONILLA" <?php if($animal->stage == "VACONILLA" ): ?> selected <?php endif; ?>>VACONILLA </option>
                                    <option value="VACA"   <?php if($animal->stage == "VACA" ): ?> selected <?php endif; ?>>VACA</option>
                                    <option value="TORO"   <?php if($animal->stage == "TORO" ): ?> selected <?php endif; ?>>TORO</option>
                                    <option value="TORETE" <?php if($animal->stage == "TORETE"): ?>selected <?php endif; ?> >TORETE</option>
                                    <option value="TERNERO"   <?php if($animal->stage == "TERNERO" ): ?> selected <?php endif; ?>>TERNERO</option>
                                    <option value="VAQUILLA"   <?php if($animal->stage == "VAQUILLA" ): ?> selected <?php endif; ?>>VAQUILLA</option>
                                    <option value="NOVILLO"   <?php if($animal->stage == "NOVILLO" ): ?> selected <?php endif; ?>>NOVILLO</option>
                            </select>
                            </div>
                        
                            <div  class="col-md-6">
                                <label for="">Origen:</label>
                                <select class="form-control" id="inputPassword4" name="origen" value="<?php echo e($animal->source); ?>">
                                    <option selected></option>
                                    <option value="NACIDO"   <?php if($animal->source == "NACIDO" ): ?> selected <?php endif; ?>>NACIDO</option>
                                    <option value="COMPRADO"   <?php if($animal->source == "COMPRADO" ): ?> selected <?php endif; ?>>COMPRADO</option>
                            </select>
                            </div>
                            <div  class="col-md-6">
                                <label for="">Edad-Meses:</label>
                                <input type="int" class="form-control" id="proveedor" name="edad" value="<?php echo e($animal->age_month); ?>">
                            </div>
                            <div  class="col-md-6">
                                <label for="">Estado de Salud:</label>
                                <select class="form-control" id="inputPassword4" name="estado_de_salud" value="<?php echo e($animal->health_condition); ?>">
                                    <option selected></option>
                                    <option value="SANO"   <?php if($animal->health_condition == "SANO" ): ?> selected <?php endif; ?>>SANO</option>
                                    <option value="ENFERMO"   <?php if($animal->health_condition == "ENFERMO" ): ?> selected <?php endif; ?>>ENFERMO</option>
                            </select>
                            </div>
                            <div  class="col-md-6">
                                <label for="">Embarazo:</label>
                                <select class="form-control" id="inputPassword4" name="estado_de_gestacion" value="<?php echo e($animal->gestation_state); ?>">
                                    <option selected></option>
                                    <option value="SI"  <?php if($animal->gestation_state == "SI" ): ?> selected <?php endif; ?>>SI</option>
                                    <option value="NO"  <?php if($animal->gestation_state == "NO" ): ?> selected <?php endif; ?>>NO</option>
                            </select>
                            </div>

                            
                            <div  class="col-md-6">
                                <label for="">Ubicación:</label>
                                <select class="form-control" id="" name="localizacion"   value="<?php echo e($animal->location_id); ?>">
                                        <option></option>
                                    <?php $__currentLoopData = $ubicacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                        <option value="<?php echo e($i->id); ?>" <?php if($animal->location_id == $i->id ): ?> selected <?php endif; ?> ><?php echo e($i->location_d); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div> 
                            <div class="col-md-6">
                                <label for="">Concebedido:</label>
                                <select class="form-control" id="inputPassword4" name="concebido" value="<?php echo e($animal->conceived); ?>">
                                    <option selected></option>
                                    <option value="MONTA"   <?php if( $animal->conceived == "MONTA"): ?> selected <?php endif; ?> >MONTA</option>
                                    <option value="INSIMINACIÓN ARTIFICIAL"   <?php if( $animal->conceived == "INSIMINACIÓN ARTIFICIAL"): ?> selected <?php endif; ?>>INSIMINACIÓN ARTIFICIAL</option>
                                    <option value="EMBRIONAL"   <?php if( $animal->conceived == "EMBRIONAL"): ?> selected <?php endif; ?>>EMBRIONAL</option>
                            </select>
                            </div>

                            <div  class="col-md-6">
                                <label for="">Estado Actual:</label>
                                <select class="form-control" id="inputPassword4" name="actual_state" value="<?php echo e($animal->actual_state); ?>">
                                    <option selected></option>
                                    <option value="DISPONIBLE" <?php if($animal->actual_state == "DISPONIBLE" ): ?> selected <?php endif; ?>>DISPONIBLE</option>
                                    <option value="VENDIDO"    <?php if($animal->actual_state == "VENDIDO" ): ?> selected <?php endif; ?>>VENDIDO</option>
                                    <option value="INACTIVO"   <?php if($animal->actual_state == "INACTIVO" ): ?> selected <?php endif; ?>>INACTIVO</option>
                                    <option value="REPRODUCIÓN"  <?php if($animal->actual_state == "REPRODUCIÓN" ): ?> selected <?php endif; ?>>REPRODUCIÓN</option>
                            </select>
                            </div>
                            <center>
                                    <div class="col-md-6-self-center" style="margin: 40px">
                                        
                                            <a type="submit" class="btn btn-secondary btn-lg"   href="<?php echo e(url('/fichaAnimal')); ?>">Cancelar</a>
                                            <button type="submit" class="btn btn-success btn-lg"  style="margin: 10px" href="<?php echo e(Redirect::to('/fichaAnimal')); ?>" >Guardar</button>
                    
                                    </div>
                            </center>
                        </form>
                    </div>
                </div>
    </div>
    
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
    <script>
          function upperCase() {
                var x=document.getElementById("codigoAnimal").value
                document.getElementById("codigoAnimal").value=x.toUpperCase()
            }
           

            document.getElementById("imagen").onchange=function(e){
                let reader= new FileReader();
                reader.readAsDataURL(e.target.files[0]);
                reader.onload=function(){
                    let imagenPreview=document.getElementById("imagenPreview");
                        image=document.createElement("img");
                        image.src=reader.result;

                        imagenPreview.innerHTML='';
                        imagenPreview.append(image);

                }
            }
    </script>
    <?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaGanadero\resources\views/file_animale/edit-animale.blade.php ENDPATH**/ ?>