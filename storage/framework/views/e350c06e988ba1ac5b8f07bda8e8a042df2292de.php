<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(URL::to('public/css/app.css')); ?>">
 
    <title>Laravel Excel Import csv and XLS file in Database</title>
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        padding: 5%
    }
</style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">
            Laravel Excel/CSV Import
        </h2>
 
        <?php if( Session::has('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong><?php echo e(Session::get('success')); ?></strong>
    </div>
    <?php endif; ?>
 
    <?php if( Session::has('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong><?php echo e(Session::get('error')); ?></strong>
    </div>
    <?php endif; ?>
 
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <div>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>
 
<form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    Choose your xls/csv File : <input type="file" name="file" class="form-control">
 
    <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
</form>
 
</div>
</body>
</html>