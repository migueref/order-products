<div class="container">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
      <h3><?php echo e($product->name); ?></h3>
      <p><?php echo e($product->description); ?></p>
      <button class="btn btn-warning" name="button">aAgregar al carrito</button>
      <?php echo $__env->make('products.delete',['product'=>$product], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
