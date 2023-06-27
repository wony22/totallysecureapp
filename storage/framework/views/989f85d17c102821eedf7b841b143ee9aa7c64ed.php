<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <?php 
        date_default_timezone_set("Asia/Jakarta");
        ?>
  <div class="container-fluid p-5 bg-primary text-white">
    <div class="d-flex justify-content-between">
        <h2>BookStore</h2>
        <div class="d-flex justify-content-between ">
            <div class="pr-2"><h2>Register</h2></div>
            <div class="pl-2"><h2>Login</h2></div>
            
        </div>
    </div>
  </div>
  
  <div class="container">
      
        <?php echo $__env->yieldContent('content'); ?>
        
  
  </div>
  <div class="container p-1 bg-primary text-white">
      <small>Current Date and time: <?php echo date('D , F j, Y h:i A'); ?>
      </small>
  
  <div class="text-center">
    <small>Copyright &copy  <?php echo date("Y"); ?> Book Store </small>
</div>
  </div>
  <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html><?php /**PATH D:\Xampp\htdocs\BookStore\resources\views/Template.blade.php ENDPATH**/ ?>