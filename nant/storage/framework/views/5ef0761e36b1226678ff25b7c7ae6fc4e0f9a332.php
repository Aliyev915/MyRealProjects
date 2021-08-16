<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success_message')): ?>
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <?php echo Session('success_message'); ?>

                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Message</h3>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($message->read == false): ?>
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            <?php echo e($message->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $message->name; ?>

                                        </td>
                                        <td class="py-1">
                                            <?php if(Str::length($message->message) <= 50): ?>
                                                <?php echo e($message->message); ?>

                                            <?php else: ?>
                                                <?php echo e(Str::substr($message->message, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/<?php echo e($message->id); ?>"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/<?php echo e($message->id); ?>"
                                                class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php echo e($message->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $message->name; ?>

                                        </td>
                                        <td class="py-1">
                                            <?php if(Str::length($message->message) <= 50): ?>
                                                <?php echo e($message->message); ?>

                                            <?php else: ?>
                                                <?php echo e(Str::substr($message->message, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/<?php echo e($message->id); ?>"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/<?php echo e($message->id); ?>"
                                                class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye-off"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/messages/index.blade.php ENDPATH**/ ?>