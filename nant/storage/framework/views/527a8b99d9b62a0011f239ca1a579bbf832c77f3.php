<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Settings</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-sm-6 offset-sm-3 my-4">
                        <?php if($setting != null): ?>
                            <img src="<?php echo e(asset('storage/images/' . $setting->logo)); ?>" alt="logo" width="150" height="200">
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6 offset-sm-3 my-4">
                        <?php if($setting != null): ?>
                            <img src="<?php echo e(asset('storage/images/' . $setting->partner_image)); ?>" alt="partner" width="150" height="200">
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        <?php $__errorArgs = ['logo'];
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
                        <label>Partner Image</label>
                        <input type="file" name="partner_image" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        <?php $__errorArgs = ['logo'];
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
                        <label for="exampleInputName1">Linkedin</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="linkedin"
                            placeholder="Linkedin" value="<?php if($setting !=null): ?> <?php echo e($setting->linkedin); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['linkedin'];
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
                        <label for="exampleInputEmail3">Facebook</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="facebook"
                            placeholder="Facebook" value="<?php if($setting !=null): ?> <?php echo e($setting->facebook); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['facebook'];
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
                        <label for="exampleInputPassword4">Instagram</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="instagram"
                            placeholder="Instagram" value="<?php if($setting !=null): ?> <?php echo e($setting->instagram); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['instagram'];
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
                        <label for="exampleInputCity1">Youtube</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="youtube" placeholder="Youtube"
                            value="<?php if($setting !=null): ?> <?php echo e($setting->youtube); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['youtube'];
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
                        <label for="exampleInputCity1">Adress AZ</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_az"
                            placeholder="Adress" value="<?php if($setting !=null): ?> <?php echo e($setting->adress_az); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_az'];
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
                        <label for="exampleInputCity1">Adress EN</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_en"
                            placeholder="Adress" value="<?php if($setting !=null): ?> <?php echo e($setting->adress_en); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_en'];
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
                        <label for="exampleInputCity1">Adress RU</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_ru"
                            placeholder="Adress" value="<?php if($setting !=null): ?> <?php echo e($setting->adress_ru); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['address_ru'];
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
                        <label for="exampleInputCity1">Phone 1</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_1" placeholder="Phone 1"
                            value="<?php if($setting !=null): ?> <?php echo e($setting->phone_1); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['phone_1'];
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
                        <label for="exampleInputCity1">Phone 2</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_2" placeholder="Phone 2"
                            value="<?php if($setting !=null): ?> <?php echo e($setting->phone_2); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['phone_2'];
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
                        <label for="exampleInputCity1">Phone 3</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_3" placeholder="Phone 3"
                            value="<?php if($setting !=null): ?> <?php echo e($setting->phone_3); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['phone_3'];
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
                        <label for="exampleInputCity1">Email</label>
                        <input type="email" class="form-control" id="exampleInputCity1" name="email" placeholder="Email"
                            value="<?php if($setting !=null): ?> <?php echo e($setting->email); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['email'];
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
                        <label for="exampleInputCity1">Copyright AZ</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_az"
                            placeholder="Copyright" value="<?php if($setting !=null): ?> <?php echo e($setting->copyright_az); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['copyright_az'];
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
                        <label for="exampleInputCity1">Copyright EN</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_en"
                            placeholder="Copyright" value="<?php if($setting !=null): ?> <?php echo e($setting->copyright_en); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['copyright_en'];
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
                        <label for="exampleInputCity1">Copyright RU</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_ru"
                            placeholder="Copyright" value="<?php if($setting !=null): ?> <?php echo e($setting->copyright_ru); ?> <?php endif; ?>" />
                        <?php $__errorArgs = ['copyright_ru'];
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
                        <label for="exampleInputCity1">About Us AZ</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_az"
                            placeholder="About us"><?php if($setting !=null): ?> <?php echo e($setting->about_us_az); ?> <?php endif; ?> </textarea>
                        <?php $__errorArgs = ['about_us_az'];
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
                        <label for="exampleInputCity1">About Us EN</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_en"
                            placeholder="About us"><?php if($setting !=null): ?> <?php echo e($setting->about_us_en); ?> <?php endif; ?> </textarea>
                        <?php $__errorArgs = ['about_us_en'];
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
                        <label for="exampleInputCity1">About Us RU</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_ru"
                            placeholder="About us"><?php if($setting !=null): ?> <?php echo e($setting->about_us_ru); ?> <?php endif; ?> </textarea>
                        <?php $__errorArgs = ['about_us_ru'];
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
                        <label for="exampleInputCity1">Map</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="map" value="<?php if($setting !=null): ?> <?php echo e($setting->map); ?> <?php endif; ?>"
                            placeholder="Map" />
                        <?php $__errorArgs = ['map'];
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
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    <a class="btn btn-light" href="/admin-user">Cancel</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/setting.blade.php ENDPATH**/ ?>