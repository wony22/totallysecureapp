<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('updateuser', ['id'=> $users->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <h3><?php echo e($users->name); ?>'s User Detail</h3>
     <label for="name">Name  </label> <input type="text" name="name" id="name"> <br>
     <label for="email">Email </label> <input type="text" name="email" id="email"> <br>  <br>
    <input type="submit" value="Update">

</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My files\app\xampp\htdocs\BookStore\resources\views/manageuserdetail.blade.php ENDPATH**/ ?>