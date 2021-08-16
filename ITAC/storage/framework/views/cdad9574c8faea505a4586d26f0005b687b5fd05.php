<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Certificate Create</h4>
                    <form class="forms-sample" id="form_data" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Student</label>
                            <select class="js-example-basic-single" name="student" style="width: 100%;">
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($student->name_az); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="file-upload-default" accept="image/*" />
                            <div class="input-group col-sm-12" style="height: 30px;">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                </span>
                            </div>
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger error-text my-3 image_error"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Continious</label>
                            <span style="float: right"></span>
                            <input type="range" class="form-control-range" name="continuity" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Teorical Knowledge</label>
                            <span style="float: right"></span>
                            <input type="range" class="form-control-range" name="teorics" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Practical Knowledge</label>
                            <span style="float: right"></span>
                            <input type="range" class="form-control-range" name="practics" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Course Work</label>
                            <span style="float: right"></span>
                            <input type="range" class="form-control-range" name="course_work" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Exam</label>
                            <span style="float: right"></span>
                            <input type="range" class="form-control-range" name="exam" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Begin</label>
                            <input type="date" class="form-control-range" name="begining_time" id="formControlRange">
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">End</label>
                            <input type="date" class="form-control-range" name="last_time" id="formControlRange">
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/certificates/create.blade.php ENDPATH**/ ?>