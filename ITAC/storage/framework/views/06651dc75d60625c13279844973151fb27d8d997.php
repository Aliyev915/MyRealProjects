<?php $__env->startSection('content'); ?>
    <?php if(Session::has('msg')): ?>
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <?php echo Session('msg'); ?>

                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="/admin-user/certificate/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Students</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Course</th>
                                    <th>Student</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<$certificates->count();$i++): ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php echo e($i+1); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo e($certificates[$i]->code); ?>

                                        </td>
                                        <td class="py-1">
                                            <?php echo $certificates[$i]->student->course->title_az; ?>

                                        </td>
                                        <td>
                                            <?php echo $certificates[$i]->student->name_az.' '.$certificates[$i]->student->lastname_az; ?>

                                        </td>
                                        <td>
                                            <a href="/admin-user/certificate/delete/<?php echo e($certificates[$i]->id); ?>"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/certificates/index.blade.php ENDPATH**/ ?>