<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">applys</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $applies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($apply->read==false): ?>
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            <?php echo e($apply->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $apply->name; ?> <?php echo e($apply->lastname); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo e($apply->email); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo e($apply->course->{"title_".App::getLocale()}); ?>

                                        </td>
                                        <td>
                                            <a href="/admin-user/apply/read/<?php echo e($apply->id); ?>" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="/admin-user/apply/delete/<?php echo e($apply->id); ?>"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php else: ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php echo e($apply->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $apply->name; ?> <?php echo e($apply->lastname); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo e($apply->email); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo e($apply->course->{"title_".App::getLocale()}); ?>

                                        </td>
                                        <td>
                                            <a href="/admin-user/apply/read/<?php echo e($apply->id); ?>" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye-off"></i>
                                            </a>
                                            <a href="/admin-user/apply/delete/<?php echo e($apply->id); ?>"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/applies.blade.php ENDPATH**/ ?>