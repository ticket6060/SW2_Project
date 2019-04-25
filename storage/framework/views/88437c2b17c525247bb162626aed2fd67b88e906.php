<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title> Admin Panel </title>
</head>
<body>
<div class="container">
  <!-- user list -->
  <div class="col-md-offset-0 col-md-13">
    <br>
    <div class="row">
      <center> <h1> <b> Users List </b> </h1> </center>
      <br>
    </div> 

    <!-- error message using laravel errors -->
    
    <?php if(Session::has('success')): ?>
      <div class="alert alert-success">
        <strong>Success:</strong> <?php echo e(Session::get('success')); ?>

      </div>
    <?php endif; ?>

    
    <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
        <strong>Error:</strong>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="row"> 

      <form action="<?php echo e(route('admin.store')); ?>" method='POST'>
      <?php echo e(csrf_field()); ?>


        <div class="col-md-2">
          <input type="text" name='newUserName' class='form-control' placeholder="User Name">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserEmail' class='form-control' placeholder="Email">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserPassword' class='form-control' placeholder="Password">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserPhone' class='form-control'placeholder="Phone">
        </div>

        <div class="col-md-2">
          <input type="text" name='newUserAddress' class='form-control'placeholder="Address">
        </div>

        <div class="col-md-2">
          <input type="submit" class='btn btn-primary btn-block' value='Add User'>
        </div>

      </form>
    </div>

    
    <?php if(count($storedUsers) > 0): ?>
      <table class="table">
        <thead>
          <th>User #</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>

        <tbody>
          <?php $__currentLoopData = $storedUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storedUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th><?php echo e($storedUser->id); ?></th>
              <td><?php echo e($storedUser->name); ?></td>
              <td><?php echo e($storedUser->email); ?></td>
              <td><?php echo e($storedUser->password); ?></td>
              <td><?php echo e($storedUser->phone); ?></td>
              <td><?php echo e($storedUser->address); ?></td>
              <td>
                <a href="<?php echo e(route('admin.edit', ['users'=>$storedUser->id])); ?>" class='btn btn-primary'> Edit </a>
              </td>
              <td>
                <form action="<?php echo e(route('admin.destroy', ['user'=>$storedUser->id])); ?>" method='POST'>
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" name='_method' value='DELETE'>
                  <input type="submit" class='btn btn-danger' value='Delete'>
                </form>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    <?php endif; ?>

  </div>
</div>


</body>
</html>
<?php /* C:\Users\Amira ElShora\Desktop\project6060\resources\views/admin/userList.blade.php */ ?>