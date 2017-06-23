<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="col-xs-12">
      <?php $__currentLoopData = $shopping_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($product->name); ?> $<?php echo e($product->price); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-xs-12">
      número de productos <?php echo e($productsSize); ?>

      total a pagar:<?php echo e($total); ?>

    </div>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-md-4">
        <img style="height:150px;" class="col-xs-12" src="/images/products/<?php echo e($product->image); ?>"
    alt="img-responsive" />
        <h3><?php echo e($product->name); ?></h3>
        <h3><?php echo e($product->price); ?></h3>
        <p><?php echo e($product->description); ?></p>

        <?php echo Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class' => 'inline-block']); ?>

          <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
          <input type="hidden" name="product_name" value="<?php echo e($product->name); ?>">
          <input type="hidden" name="product_price" value="<?php echo e($product->price); ?>">
          <input type="hidden" name="product_description" value="<?php echo e($product->description); ?>">
          <label>cantidad:</label>
          <input type="number" name="qty" >
          <input type="submit" class="col-xs-12 btn btn-success" name="" value="Agregar al carrito">
          <a onclick ="eliminarProducto(<?php echo e($product->id); ?>)"class="btn btn-danger">Eliminar</a>
        <?php echo Form::close(); ?>



      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="col-xs-12">
      <?php echo e($products->links()); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>