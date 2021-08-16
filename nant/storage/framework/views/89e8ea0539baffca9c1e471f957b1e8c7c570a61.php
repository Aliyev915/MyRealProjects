<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Applies</h3>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Time</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $applies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($apply->id); ?></th>
                                    <td><?php echo e($apply->person->name); ?> <?php echo e($apply->person->lastname); ?></td>
                                    <td><?php echo e($apply->person->email); ?></td>
                                    <td><?php echo e($apply->person->phone); ?></td>
                                    <td><?php echo e(date('d/m h:i', strtotime($apply->time))); ?></td>
                                    <td>
                                        <a href="/admin-user/apply/detail/<?php echo e($apply->id); ?>"
                                            class="btn btn-primary mr-2"><i class="mdi mdi-table-edit"></i></a>
                                        <?php if($apply->read==false): ?>
                                        <a href="/admin-user/apply/read/<?php echo e($apply->id); ?>"
                                            class="btn btn-success mx-2"><i class="mdi mdi-eye"></i></a>
                                            <?php else: ?>
                                            <a href="/admin-user/apply/read/<?php echo e($apply->id); ?>"
                                                class="btn btn-success mx-2"><i class="mdi mdi-eye-off"></i></a>
                                        <?php endif; ?>
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/applies/index.blade.php ENDPATH**/ ?>