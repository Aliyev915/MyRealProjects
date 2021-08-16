<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Text</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($message->read==false): ?>
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            <?php echo e($message->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $message->name; ?>

                                        </td>
                                        <td class="py-1">
                                            <?php if(Str::length($message->text)<=50): ?>
                                            <?php echo e($message->text); ?>

                                            <?php else: ?>
                                            <?php echo e(Str::substr($message->text, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/<?php echo e($message->id); ?>"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/<?php echo e($message->id); ?>" class="btn btn-success mr-2">
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
                                            <?php if(Str::length($message->text)<=50): ?>
                                            <?php echo e($message->text); ?>

                                            <?php else: ?>
                                            <?php echo e(Str::substr($message->text, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/<?php echo e($message->id); ?>"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/<?php echo e($message->id); ?>" class="btn btn-success mr-2">
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/messages/index.blade.php ENDPATH**/ ?>