<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Distributions</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_az">Name AZ</label>
                                <input type="text" class="form-control" name="name_az" value="<?php echo e($district->name_az); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_en">Name EN</label>
                                <input type="text" class="form-control" name="name_en" value="<?php echo e($district->name_en); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_ru">Name RU</label>
                                <input type="text" class="form-control" name="name_ru" value="<?php echo e($district->name_ru); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectGender">Region</label>
                                <select class="form-control" id="exampleSelectGender" name="region">
                                    <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($regionDB->{'name_' . App::getLocale()} == $region->{'name_' . App::getLocale()}): ?>
                                            <option selected value="<?php echo e($region->{'name_' . App::getLocale()}); ?>">
                                                <?php echo e($region->{'name_' . App::getLocale()}); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($region->{'name_' . App::getLocale()}); ?>">
                                                <?php echo e($region->{'name_' . App::getLocale()}); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/distribution">Cancel</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/distributions/edit.blade.php ENDPATH**/ ?>