<?php $__env->startSection('content'); ?>
    <!-- -------- GROUPES --------- -->
    <div class="groupes resept project">
        <div class="container2">
            <h1><?php echo e(__('home.projects')); ?></h1>
            <div class="content">
                <div class="row3">
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="resept1">
                            <img src="<?php echo e(asset('storage/images/projects/' . $project->image)); ?>" alt="">
                            <a class="row3-col1" href="#"><?php echo e($project->{'title_' . App::getLocale()}); ?></a>
                            <p><span><i class="far fa-clock"></i><?php echo e(date('d.m.Y', strtotime($project->time))); ?></span></p>
                            <p><?php echo e($project->{'description_' . App::getLocale()}); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/project.blade.php ENDPATH**/ ?>