<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Comments</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Text</th>
                                    <th>Blog</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($comment->is_verified==false): ?>
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            <?php echo e($comment->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $comment->name; ?>

                                        </td>
                                        <td>
                                            <?php echo e($comment->email); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php if(Str::length($comment->text)<=50): ?>
                                            <?php echo e($comment->text); ?>

                                            <?php else: ?>
                                            <?php echo e(Str::substr($comment->text, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($comment->blog->{"title_".App::getLocale()}); ?>

                                        </td>
                                        <td>
                                            <a href="/admin-user/comment/activate/<?php echo e($comment->id); ?>"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="/admin-user/comment/delete/<?php echo e($comment->id); ?>" class="btn btn-success mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php else: ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php echo e($comment->id); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $comment->name; ?>

                                        </td>
                                        <td>
                                            <?php echo e($comment->email); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php if(Str::length($comment->text)<=50): ?>
                                            <?php echo e($comment->text); ?>

                                            <?php else: ?>
                                            <?php echo e(Str::substr($comment->text, 0, 50)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($comment->blog->{"title_".App::getLocale()}); ?>

                                        </td>
                                        <td>
                                            <a href="/admin-user/comment/delete/<?php echo e($comment->id); ?>" class="btn btn-success mr-2">
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

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/comment.blade.php ENDPATH**/ ?>