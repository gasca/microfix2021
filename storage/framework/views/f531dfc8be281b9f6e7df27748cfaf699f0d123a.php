

<?php $__env->startSection('title', "Registrar Equipo"); ?>

<?php $__env->startSection('content'); ?>

	<div class="card" class="mb-2">
		<h4 class="card-header">Datos de la Computadora</h4>
		<div class="card-body">
			

<?php if($errors->any()): ?>
	<div class="alert alert-danger">
			<h6>Por favor corrige los siguientes errores:</h6>

		 	<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>	
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
				
		
			</ul> 

	</div>

<?php endif; ?>

<form method="POST" action="<?php echo e(url('/computadora/crear')); ?>">
	
	<?php echo e(csrf_field()); ?>


  <div class="form-group">

		<label for="name">Marca</label>
		<input type="text" name="marca" class="form-control"  placeholder="" value= "<?php echo e(old('marca')); ?>">
		<?php if($errors->has('marca')): ?>
			<p><?php echo e($errors->first('marca')); ?></p>
		<?php endif; ?>
  </div>
    <div class="form-group">

		<label for="name">Modelo</label>
		<input type="text" name="modelo" class="form-control"  placeholder="" value= "<?php echo e(old('modelo')); ?>">
		<?php if($errors->has('modelo')): ?>
			<p><?php echo e($errors->first('modelo')); ?></p>
		<?php endif; ?>
  </div>

   <div class="form-group">

		<label for="name">SN</label>
		<input type="text" name="SN" class="form-control"  placeholder="" value= "<?php echo e(old('SN')); ?>">
		<?php if($errors->has('SN')): ?>
			<p><?php echo e($errors->first('SN')); ?></p>
		<?php endif; ?>
  </div>

	

<div class="form-group">
	
		<label for="Direccion">Memoria Ram</label>	
		<input type="text" name="Memoria_Ram" class="form-control" placeholder=""   value= "<?php echo e(old('Memoria_Ram')); ?>">
		<?php if($errors->has('Memoria_Ram')): ?>
			<p><?php echo e($errors->first('Memoria_Ram')); ?></p>
		<?php endif; ?>
	
  	</div>

  <div class="form-group">
	
		<label for="Colonia">Disco Duro HDD</label>	
		
		  <select class="form-control" name="Disco_Duro_HDD">
	 	  <option value="240">240</option>
	      <option value="480">480</option>
	    
	    </select>

		
  	</div>
		<div class="form-group">
	
		<label for="CP">Disco Duro SDD</label>	
		<input type="text" name="Disco_Duro_HDD" class="form-control" placeholder=""   value= "<?php echo e(old('Disco_Duro_HDD')); ?>">
		<?php if($errors->has('Disco_Duro_HDD')): ?>
			<p><?php echo e($errors->first('Disco_Duro_HDD')); ?></p>
		<?php endif; ?>
	
  		</div>

    <div class="form-group">
	
		<label for="Ciudad">Sistema Operativo</label>	
		
		  <select class="form-control" name="Sistema_Operativo">
	 	  <option value="Windwos 10">Windows 10</option>
    
	    </select>

		
  	</div>
   <div class="form-group">
	
		<label for="phone">Telefono para llamarle</label>	
		<input type="input" name="telefono" class="form-control"  placeholder="" value= "<?php echo e(old('telefono')); ?>" >
		<?php if($errors->has('telefono')): ?>
			<p><?php echo e($errors->first('telefono')); ?></p>
		<?php endif; ?>
		
  	</div>
  	 



  	<div class="form-group">
	
		<label for="correo">Correo</label>	
		<input type="text" name="correo" class="form-control" placeholder="" value= "<?php echo e(old('correo')); ?>">
		<?php if($errors->has('correo')): ?>
			<p><?php echo e($errors->first('correo')); ?></p>
		<?php endif; ?>
	
  	</div>



  <div class="form-group">
	
		<label for="password">Contraseña</label>	
		<input type="password" name="contrasena" class="form-control" placeholder="Mayor a 6 Caracteres">
		<?php if($errors->has('contrasena')): ?>
			<p><?php echo e($errors->first('contrasena')); ?></p>
		<?php endif; ?>
	   
  </div>

  	
	<button type="submit" class="btn btn-primary">Crear Usuario</button>	
	 
    <a href="<?php echo e(action('UserController@index')); ?>" class="btn btn-link"> Regresar a Lista </a>



</form>
	
		</div>
	</div>

<?php $__env->stopSection(); ?>




	


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\microfix2021\resources\views/computer/create.blade.php ENDPATH**/ ?>