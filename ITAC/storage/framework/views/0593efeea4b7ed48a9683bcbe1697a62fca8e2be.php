<?php $__env->startSection('content'); ?>
    <!-- poster-section start -->
    <section id="poster-section" class="d-flex align-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="poster-content">
                        <div class="poster-navigation">
                            <ul>
                                <li><a href="#"><?php echo e(__('home.home')); ?></a></li>
                                <li><a class="active" href="#"><?php echo e(__('home.course')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

    <!-- blog-section start -->
    <section id="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <div class="blog-details-img">
                        <img src="<?php echo e(asset('storage/images/courses/' . $course->image)); ?>" alt="">
                    </div>
                    <div class="blog-details-content">
                        <div class="details">
                            <h2>
                                <?php echo $course->{'title_' . App::getLocale()}; ?>

                            </h2>
                            <p>
                                <?php echo $course->{'about_' . App::getLocale()}; ?>

                            </p>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="blog-links">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal1">
                                        <?php echo e(__('home.apply')); ?>

                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="/apply" method="GET">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('home.apply')); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control"
                                                                value="<?php echo e($course->id); ?>" name="course">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Name"
                                                                name="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Lastname"
                                                                name="<?php echo e(__('home.lastname')); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="<?php echo e(__('home.phone')); ?>"
                                                                name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><?php echo e(__('home.close')); ?></button>
                                                        <button type="submit" class="btn btn-primary"><?php echo e(__('home.apply')); ?></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- blog-section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/course-detail.blade.php ENDPATH**/ ?>