<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid;
}
</style>
</head>
<body>

<h2>Add a border to a table:</h2>

<table>
  <tr>
    <th>ID</th>
    <th>YEAR</th>
    <th>SEMESTER</th>
    <th>DEPARTMENT</th>
    <th>PROGRAM</th>
    <th>PDF</th>
</tr>
</tr>
</tr>
</tr>
  </tr>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <tr>
    <td><?php echo e($data->id); ?></td>
    <td><?php echo e($data->year); ?></td>
    <td><?php echo e($data->semester); ?></td>
    <td><?php echo e($data->department); ?></td>
    <td><?php echo e($data->program); ?></td>
    <td><?php echo e($data->pdf); ?></td>

  </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\syllabus\Syllabus\resources\views/welcome.blade.php ENDPATH**/ ?>