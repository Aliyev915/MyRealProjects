<?php $__env->startSection('content'); ?>

<div class="groupes" style="margin-bottom: 50px">
    <div class="container2">
        <h1 style="text-transform: uppercase"><?php echo e(__('home.gallery')); ?></h1>
    </div>
    <div class="container" style="display:block">
        <div class="row">
            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-6 my-2">
                    <img src="<?php echo e(asset('storage/images/galleries/' . $gallery->image)); ?>" style="width: 100%" alt="">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/gallery.blade.php ENDPATH**/ ?>