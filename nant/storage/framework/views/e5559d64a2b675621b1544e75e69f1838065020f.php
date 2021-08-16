<?php
    $setting = App\Models\Setting::all()->first();
?>
<?php $__env->startSection('content'); ?>
    <!-- ------- Banner --------- -->
    <div class="banner brend">
        <img src="<?php echo e(asset('storage/images/'.$setting->partner_image)); ?>" alt="">
    </div>
    <!-- --------- Brands ------- -->
    <div class="brands brend">
        <h1><?php echo e(__('home.partners')); ?></h1>
        <div class="container2">
            <div class="row">
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col col-1" style="min-height: auto; padding-bottom:0">
                        <a href="<?php echo e($partner->partner_site); ?>" target="_blank">
                            <div class="img" style="padding-left:0 ">
                                <img src="<?php echo e(asset('storage/images/partners/' . $partner->partner_logo)); ?>"
                                        style="width: 100%; height:100%; margin-left:-4%" alt="">
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/partner.blade.php ENDPATH**/ ?>