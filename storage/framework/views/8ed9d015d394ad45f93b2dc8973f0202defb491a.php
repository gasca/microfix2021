

<?php $__env->startSection('title', "Crear Usuario"); ?>

<?php $__env->startSection('content'); ?>

	<div class="card" class="mb-2">
		<h4 class="card-header">Datos del Solicitante</h4>
		<div class="card-body">
			



<form
	method="POST" 
	action="<?php echo e(route('users.store')); ?>"
	enctype="multipart/form-data"
	>
	
	<?php echo e(csrf_field()); ?>


  <div class="form-group">

		<label for="name">Nombre</label>
		<input type="text" name="nombre" class="form-control"  placeholder="" value= "<?php echo e(old('nombre')); ?>">
		<?php if($errors->has('nombre')): ?>
			<p><?php echo e($errors->first('nombre')); ?></p>
		<?php endif; ?>
  </div>
    <div class="form-group">

		<label for="name">Apellido Paterno</label>
		<input type="text" name="ap_paterno" class="form-control"  placeholder="" value= "<?php echo e(old('ap_paterno')); ?>">
		<?php if($errors->has('ap_paterno')): ?>
			<p><?php echo e($errors->first('ap_paterno')); ?></p>
		<?php endif; ?>
  </div>

   <div class="form-group">

		<label for="name">Apellido Materno</label>
		<input type="text" name="ap_materno" class="form-control"  placeholder="" value= "<?php echo e(old('ap_materno')); ?>">
		<?php if($errors->has('ap_materno')): ?>
			<p><?php echo e($errors->first('ap_materno')); ?></p>
		<?php endif; ?>
  </div>

  <div class="form-group">

	<label for="name">Curp</label>
	<input type="text" name="curp" class="form-control"  placeholder="" value= "<?php echo e(old('curp')); ?>">
	<?php if($errors->has('curp')): ?>
		<p><?php echo e($errors->first('curp')); ?></p>
	<?php endif; ?>
</div>

	

<div class="form-group">
	
		<label for="Direccion">Domicilio</label>	
		<input type="text" name="domicilio" class="form-control" placeholder=""   value= "<?php echo e(old('domicilio')); ?>">
		<?php if($errors->has('domicilio')): ?>
			<p><?php echo e($errors->first('domicilio')); ?></p>
		<?php endif; ?>
	
  	</div>

  <div class="form-group">
	
		<label for="Colonia">Colonia</label>	
		
		  <select class="form-control" name="colonia">
	 	  <option value="Villa San Angel">Villa San Angel</option>
	      <option value="Encanto">Encanto</option>
	    
	    </select>
		
  	</div>
		<div class="form-group">
	
		<label for="CP">Codigo Postal</label>	
		<input type="text" name="codigo_postal" class="form-control" placeholder=""   value= "<?php echo e(old('codigo_postal')); ?>">
		<?php if($errors->has('codigo_postal')): ?>
			<p><?php echo e($errors->first('codigo_postal')); ?></p>
		<?php endif; ?>
	
  		</div>

    <div class="form-group">
	
		<label for="Ciudad">Ciudad</label>	
		
		  <select class="form-control" name="ciudad">
	 	  <option value="Celaya">Celaya</option>
	      <option value="Irapuato">Irapuato</option>
	    
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


  <div class="form-group">

	<div class="mb-3">
		<label for="formFile" class="form-label">Foto del Alumno</label>
		<input class="form-control" name="foto" type="file" id="formFile">
	</div>
	
</div>

	<div class="form-group">

		<div class="mb-3">
			<label for="formFile" class="form-label">Curp</label>
			<input class="form-control" type="file" id="formFile">
		</div>
		
	</div>


		<button type="submit" class="btn btn-primary">Crear Usuario</button>	
	 
    <a href="<?php echo e(action('UserController@index')); ?>" class="btn btn-link"> Regresar a Lista </a>



</form>
	
		</div>
	</div>

<?php $__env->stopSection(); ?>




	


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\microfix2021\resources\views/users/create.blade.php ENDPATH**/ ?>