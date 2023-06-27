<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Hello ')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Welcome to this BookStore!')); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="d-block w-50 " >
        
        <table style="margin-bottom: 1rem;width:75rem;margin-top: 20px">
            <thead>
                <td>Cover</td>
                <td>Title</td>
                <td >Author</td>
            </thead>
            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr class="bg-secondary bg-opacity-25">
                    <td style="width:33%"><img src="<?php echo e(asset('storage/'.$book->file_path)); ?>" alt=""></td>
                    <td style="width:33%"><a href="<?php echo e(url("/bookdetail/{$book->id}")); ?>" style="text-decoration: none; color: black"><?php echo e($book->nama); ?></a></td>
                    <td style="width:33%"><?php echo e($book->author); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>No Data....</td>
                </tr>
            <?php endif; ?>

        </table>
        <?php echo e($books->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My files\app\xampp\htdocs\BookStore\resources\views/home.blade.php ENDPATH**/ ?>