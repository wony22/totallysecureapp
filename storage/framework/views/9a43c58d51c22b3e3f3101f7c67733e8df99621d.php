<?php $__env->startSection('content'); ?>

<form action="" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <h3>Insert Genre Form</h3>
     <label for="name">Name</label> <input type="text" name="name" id="name"> <br>  <br>
    <input type="submit" value="insert">

</form>

<div class="container d-flex justify-content-center">
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">Task Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($genres->genres); ?> </td>
                <td>
                    <form action="<?php echo e(route('genredetail', ['id'=> $genres->id])); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-secondary">
                         View Detail
                        </button>
                        </form>
                </td>

                <td>
                    <form action="" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">
                          Delete
                        </button>
                        </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

      </table>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\My files\app\xampp\htdocs\BookStore\resources\views/addgenre.blade.php ENDPATH**/ ?>