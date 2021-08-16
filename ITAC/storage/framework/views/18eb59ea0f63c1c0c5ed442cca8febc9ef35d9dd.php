<?php $__env->startSection('ckeditor'); ?>
<?php $__env->startSection('ckeditor'); ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');

    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bio</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Phone"
                            name="phone_1" value="<?php if($bio !=null): ?> <?php echo e($bio->phone_1); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['phone_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Other Phone</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Other phone"
                            name="phone_2" value="<?php if($bio !=null): ?> <?php echo e($bio->phone_2); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['phone_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress"
                            name="address_az" value="<?php if($bio !=null): ?> <?php echo e($bio->address_az); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_az'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress EN</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress EN"
                            name="address_en" value="<?php if($bio !=null): ?> <?php echo e($bio->address_en); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress RU</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress RU"
                            name="address_ru" value="<?php if($bio !=null): ?> <?php echo e($bio->address_ru); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Facebook</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Facebook"
                            name="facebook" value="<?php if($bio !=null): ?> <?php echo e($bio->facebook); ?> <?php endif; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Instagram</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Instagram"
                            name="instagram" value="<?php if($bio !=null): ?> <?php echo e($bio->instagram); ?> <?php endif; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Twitter</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Twitter"
                            name="twitter" value="<?php if($bio !=null): ?> <?php echo e($bio->twitter); ?> <?php endif; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword4" placeholder="Email"
                            name="email" value="<?php if($bio !=null): ?> <?php echo e($bio->email); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">About us</label>
                        <textarea name="about" id="summary-ckeditor" rows="10"><?php if($bio!=null): ?><?php echo e($bio->about_us_az); ?><?php endif; ?></textarea>
                        <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">About us EN</label>
                        <textarea name="about_en" id="summary-ckeditor1" rows="10"><?php if($bio!=null): ?><?php echo e($bio->about_us_en); ?><?php endif; ?></textarea>
                        <?php $__errorArgs = ['about_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">About us RU</label>
                        <textarea name="about_ru" id="summary-ckeditor2" rows="10"><?php if($bio!=null): ?><?php echo e($bio->about_us_ru); ?><?php endif; ?></textarea>
                        <?php $__errorArgs = ['about_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="logo" class="file-upload-default" accept="image/*" />
                                <?php if($bio != null): ?>
                                    <div class="col-sm-6">
                                        <img src="<?php echo e(asset('storage/images/bio/'.$bio->logo)); ?>" height="150" width="150" alt="">
                                    </div>
                                <?php endif; ?>
                                <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image" />
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                        </button>
                                    </span>
                                </div>
                                <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="mt-3 text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/settings/bio.blade.php ENDPATH**/ ?>