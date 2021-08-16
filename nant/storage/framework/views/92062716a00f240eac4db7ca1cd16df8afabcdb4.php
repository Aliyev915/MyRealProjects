<?php $__env->startSection('ckeditor'); ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');
        CKEDITOR.replace('summary-ckeditor3');
        CKEDITOR.replace('summary-ckeditor4');
        CKEDITOR.replace('summary-ckeditor5');
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vacancies</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Position AZ</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="position_az" placeholder="Position" value="<?php echo e($vacancy->position_az); ?>" />
                        <?php $__errorArgs = ['position_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Position EN</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="position_en" placeholder="Position" value="<?php echo e($vacancy->position_en); ?>" />
                        <?php $__errorArgs = ['position_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Company</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="company" placeholder="Company" value="<?php echo e($vacancy->company); ?>" />
                        <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Experience</label>
                                <input type="number" class="form-control" id="exampleInputName1" name="experience" placeholder="experience" min="0" max="10" value="<?php echo e($detail->experience); ?>"/>
                                <?php $__errorArgs = ['experience'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger my-3"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Salary</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="salary" placeholder="salary" value="<?php echo e($detail->salary); ?>" />
                                <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger my-3"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Education AZ</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="education_az" placeholder="Education" value="<?php echo e($detail->education_az); ?>" />
                        <?php $__errorArgs = ['education_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Education EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="education_en" placeholder="Education" value="<?php echo e($detail->education_en); ?>" />
                        <?php $__errorArgs = ['education_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Responsibilities AZ</label>
                        <textarea class="form-control" id="summary-ckeditor" name="responsibility_az"><?php echo e($detail->responsibility_az); ?></textarea>
                        <?php $__errorArgs = ['responsibility_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Responsibilities EN</label>
                        <textarea class="form-control" id="summary-ckeditor1" name="responsibility_en">
                            <?php echo e($detail->responsibility_en); ?>

                        </textarea>
                        <?php $__errorArgs = ['responsibility_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Requirements AZ</label>
                        <textarea class="form-control" id="summary-ckeditor2" name="requirement_az">
                            <?php echo e($detail->requirement_az); ?>

                        </textarea>
                        <?php $__errorArgs = ['requirement_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Requirements EN</label>
                        <textarea class="form-control" id="summary-ckeditor3" name="requirement_en">
                            <?php echo e($detail->requirement_en); ?>

                        </textarea>
                        <?php $__errorArgs = ['requirement_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Guarantees AZ</label>
                        <textarea class="form-control" id="summary-ckeditor4" name="guarantee_az">
                            <?php echo e($detail->guarantee_az); ?>

                        </textarea>
                        <?php $__errorArgs = ['guarantee_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Guarantees EN</label>
                        <textarea class="form-control" id="summary-ckeditor5" name="guarantee_en">
                            <?php echo e($detail->guarantee_en); ?>

                        </textarea>
                        <?php $__errorArgs = ['guarantee_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Work Graphic AZ</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="graphic_az" placeholder="Work Graphic" value="<?php echo e($detail->graphic_az); ?>" />
                        <?php $__errorArgs = ['graphic_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Work Graphic EN</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="graphic_en" placeholder="Work Graphic" value="<?php echo e($detail->graphic_en); ?>" />
                        <?php $__errorArgs = ['graphic_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger my-3"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Region</label>
                        <select class="form-control" id="exampleSelectGender" name="region">
                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($vacancy->region->{'name_'.App::getLocale()}==$region->{'name_'.App::getLocale()}): ?>
                                    <option selected value="<?php echo e($region->{'name_'.App::getLocale()}); ?>"><?php echo e($region->{'name_'.App::getLocale()}); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($region->{'name_'.App::getLocale()}); ?>"><?php echo e($region->{'name_'.App::getLocale()}); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/vacancy">Cancel</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/vacancies/edit.blade.php ENDPATH**/ ?>