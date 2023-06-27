<?php $__env->startSection('content'); ?>

<div class="d-block w-100">
    <h3 class="head"> <?php echo e($books->nama); ?> Book Detail</h3>
    <div class="d-flex align-content-start justify-content-start">
        <div >
            <img src="<?php echo e(asset('storage/'.$books->file_path)); ?>" alt="">
        </div>
        <div >
            <p>Name: <?php echo e($books->nama); ?></p>
            <p>Author: <?php echo e($books->author); ?></p>
            <p>Synopsis: <?php echo e($books->synopsis); ?></p>
            <p>Genre[s]: </p>
            <p>Price: IDR.<?php echo e($books->price); ?></p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My files\app\xampp\htdocs\BookStore\resources\views/bookdetail.blade.php ENDPATH**/ ?>