

<?php $__env->startSection('title', "Usuario {$user->id}"); ?>

<?php $__env->startSection('content'); ?>

<h1> Usuarios #<?php echo e($user->id); ?> </h1>

<p>Nombre del usuario: <?php echo e($user->nombre); ?></p>
<p>Email del usuario: <?php echo e($user->correo); ?></p>
<img src="/storage/<?php echo e($user->archivo->foto); ?>" alt="">

<p>
    
    <a href="<?php echo e(route('users.index')); ?>"> Regresar a Lista </a>
</p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\microfix2021\resources\views/users/show.blade.php ENDPATH**/ ?>