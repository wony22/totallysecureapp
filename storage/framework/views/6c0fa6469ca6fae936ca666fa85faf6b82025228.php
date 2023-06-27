
<?php $__env->startSection('content'); ?>


<form action="" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Enter your name"> <br>
    <input type="text" name="email" placeholder="Enter your email"> <br>
    <input type="password" name="password" placeholder="Enter your password"> <br>
    <input type="password" name="password_confirmation" placeholder="Confirmation Password"> <br>
    <button type="submit">Register</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\BookStore\resources\views/register.blade.php ENDPATH**/ ?>