<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/more.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- --------- MORE ------- -->
    <div class="container_more" style="position: relative; top:120px;">
        
        <p><?php echo e($partner->{'description_'.App::getLocale()}); ?></p>
        <iframe width="100%" height="500px" src="<?php echo e($partner->link); ?>"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        </iframe>
    </div>
    <div class="groupes resept project">
        <div class="container2">
            <h1><?php echo e(__('home.products')); ?></h1>
            <div class="content">
                <div class="row3" style="justify-content: center">
                    <?php $__currentLoopData = $partner->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="resept1" style="height: 100%; margin: 0 10px">
                        <img src="<?php echo e(asset('storage/images/partners/'.$gallery->image)); ?>" alt="">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/partner_detail.blade.php ENDPATH**/ ?>