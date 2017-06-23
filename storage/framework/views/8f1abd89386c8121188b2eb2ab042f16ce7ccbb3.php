<!-- Form -->
<?php echo Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']); ?>

  <input type="submit" class="btn btn-alert col-xs-12 red-text no-padding no-margin no-transform" name="" value="Delete">
<?php echo Form::close(); ?>

