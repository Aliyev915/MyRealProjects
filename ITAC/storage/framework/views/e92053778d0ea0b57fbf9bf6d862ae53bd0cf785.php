<?php $__env->startSection('content'); ?>
    <h1>Welcome <?php echo e(Auth::user()->username); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>