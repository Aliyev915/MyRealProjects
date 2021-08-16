<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Student</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name_az"  value="<?php echo $student->name_az; ?>">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input class="form-control" type="text" name="lastname_az"  value="<?php echo $student->lastname_az; ?>">
                        </div>
                        <div class="form-group">
                            <label>Name EN</label>
                            <input class="form-control" type="text" name="name_en"  value="<?php echo $student->name_en; ?>">
                        </div>
                        <div class="form-group">
                            <label>Lastname EN</label>
                            <input class="form-control" type="text" name="lastname_en" value="<?php echo $student->lastname_en; ?>">
                        </div>
                        <div class="form-group">
                            <label>Name RU</label>
                            <input class="form-control" type="text" name="name_ru" value="<?php echo $student->name_ru; ?>">
                        </div>
                        <div class="form-group">
                            <label>Lastname RU</label>
                            <input class="form-control" type="text" name="lastname_ru" value="<?php echo $student->lastname_ru; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Passport Number</label>
                            <input type="text" class="form-control" name="passport" value="<?php echo e($student->passport); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo e($student->email); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo e($student->phone); ?>">
                        </div>
                        <div class="form-group">
                            <select class="js-example-basic-single" name="course" style="width: 100%;">
                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($course->title_az); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <img src="<?php echo e(asset('storage/images/students/'.$student->image)); ?>" width="200" height="250" alt="">
                        </div>
                        <button type="submit" class="btn btn-success d-block mt-5 mr-2" id="delete"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/students/edit.blade.php ENDPATH**/ ?>