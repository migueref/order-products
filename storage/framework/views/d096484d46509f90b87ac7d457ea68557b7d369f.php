<?php $__env->startSection('content'); ?>
  <?php echo Form::open(['url' => '/products/', 'method' => 'POST', 'class' => 'inline-block']); ?>

    Nombre del producto:
    <?php echo e(Form::text('name','',['class'=>'form-control'])); ?>


    descripción del producto:
    <?php echo e(Form::textarea('description','',['class'=>'form-control'])); ?>


    Precio del producto:
    <?php echo e(Form::text('price','',['class'=>'form-control'])); ?>


    Categoría del producto:
    <?php echo e(Form::select('category_id',$categories,['class'=>'form-control'])); ?>

    <input type="submit" class="btn btn-success" value="guardar">
  <?php echo Form::close(); ?>


  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>