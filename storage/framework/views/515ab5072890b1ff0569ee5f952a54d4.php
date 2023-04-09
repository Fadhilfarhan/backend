<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>pass</th>
</tr>
<?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($a -> id); ?></td>
    <td><?php echo e($a -> nama); ?></td>
    <td><?php echo e($a -> email); ?></td>
    <td><?php echo e($a -> pass); ?></td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php /**PATH C:\applicationweb\brightpath\resources\views/test/index.blade.php ENDPATH**/ ?>