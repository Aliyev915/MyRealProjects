<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Company Delete</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" disabled value="<?php echo $company->name_az; ?>">
                        </div>
                        <div class="form-group">
                            <label>Name EN</label>
                            <input class="form-control" type="text" disabled value="<?php echo $company->name_en; ?>">
                        </div>
                        <div class="form-group">
                            <label>Name RU</label>
                            <input class="form-control" type="text" disabled value="<?php echo $company->name_ru; ?>">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <img src="<?php echo e(asset('storage/images/companies/'.$company->image)); ?>" width="200" height="250" alt="">
                        </div>
                        <button type="submit" class="btn btn-danger d-block mt-5 mr-2" id="delete"> Delete </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('validation'); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>
    <script>
        $('form').submit(function(e) {
            e.preventDefault();
            swal({
                    title: "Are you sure to delete this item?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Item was deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => {
                            document.querySelector('.forms-sample').submit()
                        }, 1200);
                    } else {
                        swal("Item wasn't deleted!", {
                            icon: "error"
                        });
                    }
                });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/companies/delete.blade.php ENDPATH**/ ?>