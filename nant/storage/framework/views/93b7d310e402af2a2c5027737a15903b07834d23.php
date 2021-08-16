<?php $__env->startSection('content'); ?>
    <h3>Hello, <?php echo e(Auth::user()->name); ?></h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>