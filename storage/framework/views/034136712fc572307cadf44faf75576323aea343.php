

<?php $__env->startSection('title', "Modificar Usuario"); ?>

<?php $__env->startSection('content'); ?>

	<div class="card">
		<h4 class="card-header">Datos del Usuario</h4>
		<div class="card-body">
			



<form method="POST" action="<?php echo e(url("/usuarios/{$user->id}")); ?>"> 
	
	<?php echo e(method_field('PUT')); ?>

	<?php echo e(csrf_field()); ?>

	
  <div class="form-group">

		<label for="name">Nombre</label>
		<input type="text" name="nombre" class="form-control"  placeholder="" value= "<?php echo e(old('nombre', $user->nombre)); ?>">
		<?php if($errors->has('nombre')): ?>
			<p><?php echo e($errors->first('nombre')); ?></p>
		<?php endif; ?>
  </div>
    <div class="form-group">

		<label for="name">Apellido Paterno</label>
		<input type="text" name="ap_paterno" class="form-control"  placeholder="" value= "<?php echo e(old('ap_paterno', $user->ap_paterno)); ?>">
		<?php if($errors->has('ap_paterno')): ?>
			<p><?php echo e($errors->first('ap_paterno')); ?></p>
		<?php endif; ?>
  </div>

   <div class="form-group">

		<label for="name">Apellido Materno</label>
		<input type="text" name="ap_materno" class="form-control"  placeholder="" value= "<?php echo e(old('ap_materno', $user->ap_materno)); ?>">
		<?php if($errors->has('ap_materno')): ?>
			<p><?php echo e($errors->first('ap_materno')); ?></p>
		<?php endif; ?>
  </div>

  <div class="form-group">

	<label for="name">Curp</label>
	<input type="text" name="curp" class="form-control"  placeholder="" value= "<?php echo e(old('curp', $user->curp)); ?>">
	<?php if($errors->has('curp')): ?>
		<p><?php echo e($errors->first('curp')); ?></p>
	<?php endif; ?>
</div>

	

<div class="form-group">
	
		<label for="Direccion">Domicilio</label>	
		<input type="text" name="domicilio" class="form-control" placeholder=""   value= "<?php echo e(old('domicilio', $user->domicilio)); ?>">
		<?php if($errors->has('domicilio')): ?>
			<p><?php echo e($errors->first('domicilio')); ?></p>
		<?php endif; ?>
	
  	</div>

  <div class="form-group">
	
		<?php	 $colonias = ['Encanto', 'Villa San Angel']; ?>
		<label for="Colonia">Colonia</label>	
		
		  <select class="form-control" name="colonia">

	 					<?php $__currentLoopData = $colonias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colonia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<?php if($user->colonia == $colonia): ?>

				  		<option value="<?php echo e($user->colonia); ?>" selected><?php echo e($user->colonia); ?></option>
				  	<?php else: ?>
						<option value=<?php echo e($colonia); ?>><?php echo e($colonia); ?></option>
					<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    
	    </select>

		
  	</div>

    <div class="form-group">

	
<?php 
				$ciudades = ['Celaya', 'Irapuato', 'Juventino Rosas'];
 ?>
	    	
	
		<label for="Ciudad">Ciudad</label>	
		
		  <select class="form-control" name="ciudad">
				<?php $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<?php if($user->ciudad == $ciudad): ?>
				  		<option value="<?php echo e($user->ciudad); ?>" selected><?php echo e($user->ciudad); ?></option>
				  	<?php else: ?>
						<option value=<?php echo e($ciudad); ?>><?php echo e($ciudad); ?></option>
					<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    
	    </select>

		
  	</div>


  		<div class="form-group">
	
		<label for="CP">Codigo Postal</label>	
		<input type="text" name="codigo_postal" class="form-control" placeholder=""   value= "<?php echo e(old('codigo_postal', $user->codigo_postal)); ?>">
		<?php if($errors->has('codigo_postal')): ?>
			<p><?php echo e($errors->first('codigo_postal')); ?></p>
		<?php endif; ?>
	
  		</div>
   <div class="form-group">
	
		<label for="phone">Telefono para llamarle</label>	
		<input type="input" name="telefono" class="form-control"  placeholder="" value= "<?php echo e(old('telefono', $user->telefono)); ?>" >
		<?php if($errors->has('telefono')): ?>
			<p><?php echo e($errors->first('telefono')); ?></p>
		<?php endif; ?>
		
  	</div>
  	 



  	<div class="form-group">
	
		<label for="correo">Correo</label>	
		<input type="text" name="correo" class="form-control" placeholder="" value= "<?php echo e(old('correo', $user->correo)); ?>">
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

  	
	<button type="submit" class="btn btn-primary">Actualizar Usuario</button>	
	 
    <a href="<?php echo e(action('UserController@index')); ?>" class="btn btn-link"> Regresar a Lista </a>



</form>
	

<?php $__env->stopSection(); ?>




		</div>
	</div>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\microfix2021\resources\views/users/edit.blade.php ENDPATH**/ ?>