<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 py-5" style="border: 1px solid #F64B3C ">
                <?php if(Session::has('error_message')): ?>
                    <div class="text-center">
                        <p class="text-danger"><?php echo e(Session('error_message')); ?></p>
                    </div>
                    <a href="/" class="btn btn-block mt-5">Geri Qayıt</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/confirmation.blade.php ENDPATH**/ ?>