<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Non Active Users</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="py-1">
                                        <?php echo e($user->id); ?>

                                    </td>
                                    <td class="py-1">
                                        <?php echo $user->name; ?>

                                    </td>
                                    <td class="py-1">
                                        <?php echo $user->email; ?>

                                    </td>
                                    <td>
                                        <a href="/admin-user/user/activate/<?php echo e($user->id); ?>"
                                            class="btn btn-primary mr-2">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/admin-user/user/delete/<?php echo e($user->id); ?>" class="btn btn-danger mr-2">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/users/index.blade.php ENDPATH**/ ?>