<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h3><?php echo e($message->name); ?></h3>
                </div>
                <div class="card-body">
                    <p><?php echo e($message->text); ?></p>
                </div>
            </div>
            <div class="mt-4">
                <a href="" class="btn btn-danger">Delete</a>
                <a href="/admin-user/message" class="btn btn-secondary">Back</a>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/messages/detail.blade.php ENDPATH**/ ?>