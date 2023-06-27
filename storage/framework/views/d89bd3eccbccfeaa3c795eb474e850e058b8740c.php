
<?php $__env->startSection('content'); ?>
    
<form action="">
    <h3>Insert Book Form</h3>
     <label for="name">Nama</label> <input type="text" name="name" id="name"> <br>  <br>
     <label for="author">Author</label>  <input type="text" name="author" id="author"> <br> <br>
     <label for="synopsis">Synopsis</label> <input type="text" name="synopsis" id="synopsis"><br> <br>
     <label for="genre">Genre(s)</label> <input type="checkbox" name="genre" id="genre"><br> <br>
     <label for="price">Price</label> <input type="number" name="price" id="price"><br> <br>
     <label for="cover">Cover</label><input type="file" name="cover" id="cover"><br> 
        <input type="submit" value="insert">
     


</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\BookStore\resources\views/insert.blade.php ENDPATH**/ ?>