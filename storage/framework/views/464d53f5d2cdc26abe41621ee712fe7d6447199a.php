
<?php $__env->startSection('content'); ?>


<?php if(auth()->guard()->check()): ?>
    Hi, <?php echo e(Auth::user()->name); ?>

    
    <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
    <input type="submit" value=Logout>
</form>
<?php else: ?>

<form action="/login" method="post">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" id="email" placeholder="email"  value="<?php echo e(Cookie::get('bookstorecookie') != null ? Cookie::get('bookstorecookie') : ''); ?>">
    <input type="password" name="password" id="password" placeholder="password">
    <input type="checkbox" name="remember" id="remember">Remember Me
    <input type="submit" value="Login">
</form>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\BookStore\resources\views/login.blade.php ENDPATH**/ ?>