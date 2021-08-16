<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/css/vendor.bundle.base.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet"
        href="<?php echo e(asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/style.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/favicon.png')); ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="offset-md-3 col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Login Form</h4>
                                <p class="card-description" style="text-align: center">Login form layout</p>
                                <?php if(Session::has('error_message')): ?>
                                    <div class="text-danger my-3"><?php echo Session('error_message'); ?></div>
                                <?php endif; ?>

                                <form class="forms-sample" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email</label>
                                        <div>
                                            <input type="email" class="form-control" id="exampleInputEmail2"
                                                placeholder="Email" name="email" />
                                        </div>
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
                                    <div class="form-group ">
                                        <label for="exampleInputPassword2">Password</label>
                                        <div>
                                            <input type="password" class="form-control" id="exampleInputPassword2"
                                                placeholder="Password" name="password" />
                                        </div>
                                        <?php $__errorArgs = ['password'];
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
                                    <button type="submit" class="btn btn-primary mt-4 btn-block"> Login </button>
                                    <div class="register-side mt-3" style="text-align: center">
                                        <p>Don't you have an account?
                                            <a href="/register">Register</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('admin/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('admin/assets/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.fillbetween.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/vendors/flot/jquery.flot.pie.js')); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('admin/assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/misc.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('admin/assets/js/dashboard.js')); ?>"></script>
    <!-- End custom js for this page -->
    <script src="<?php echo e(asset('admin/assets/js/file-upload.js')); ?>"></script>

    <script src="<?php echo e(asset('admin/assets/js/select2.js')); ?>"></script>

    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/auth/login.blade.php ENDPATH**/ ?>