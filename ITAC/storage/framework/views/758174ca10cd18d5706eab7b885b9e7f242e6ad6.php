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
                                <li><a class="active" href="#"><?php echo e(__('home.about')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

<!-- about-us-section start -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about-content">
                    <div class="section-heading">
                        <div class="section-title"><?php echo $about->{"caption_".App::getLocale()}; ?>

                            <img src="<?php echo e(asset('assets/img/circle_right.png')); ?>" alt="">
                        </div>
                        <h3>
                            <?php echo $about->{"title_".App::getLocale()}; ?>

                        </h3>
                    </div>

                    <p>
                        <?php echo $about->{"description_".App::getLocale()}; ?>

                    </p>
                    <div class="row m-t-20">
                        <div class="col-4">
                            <div class="sign">
                                <img class="img-fluid" src="<?php echo e(asset('storage/images/'.$about->img_1)); ?>" alt="">
                            </div>
                            <div class="sign-text"><?php echo $about->signature; ?>

                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="btn-animation m-t-30">
                        <a href="" class="btn"><?php echo e(__('home.read_more')); ?></a>
                        <div class="btn-after"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="about-img">
                    <img class="img-fluid" src="<?php echo e(asset('storage/images/'.$about->img_2)); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about-us-section end -->

    <!-- counter-section start -->
    <section id="counter-section">
        <div class="container">
            <div class="row align-end">
                <div class="col-md-3 col-sm-12">
                    <div class="counter-img"><img src="<?php echo e(asset('assets/img/count-main.png')); ?>" alt=""></div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="<?php echo e(asset('assets/img/icon.png')); ?>" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p><?php echo e(__('home.student_count')); ?></p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="<?php echo e(asset('assets/img/icon2.png')); ?>" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p><?php echo e(__('home.worker_count')); ?></p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="<?php echo e(asset('assets/img/icon3.png')); ?>" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p><?php echo e(__('home.annual_income')); ?></p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-section end -->

    <!-- service-section start -->
    <section id="service-section">
        <div class="container">
            <div class="row just-center">
                <div class="col-10">
                    <div class="section-heading">
                        <div class="section-title">
                            <img src="<?php echo e(asset('assets/img/circle_Left.png')); ?>" alt="">
                            <?php echo e(__('home.about_us')); ?>

                            <img src="<?php echo e(asset('assets/img/circle_right.png')); ?>" alt="">
                        </div>
                        <h3>
                            <?php echo e(__('home.about_header')); ?>

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item " data-aos="fade-up">
                            <div class="service-item-img">
                                <img src="<?php echo e(asset('assets/img/1.svg')); ?>" class="active-img" alt="">
                                <img src="<?php echo e(asset('assets/img/1-hover.svg')); ?>" class="d-active-img" alt="">
                            </div>
                            <div class="service-item-content">
                                <h5>
                                    <a href="/course/<?php echo e($course->id); ?>"><?php echo e($course->{'title_' . App::getLocale()}); ?></a>
                                </h5>
                                <p>
                                    <?php if(Str::of($course->{'description_' . App::getLocale()})->length() > 150): ?>
                                        <?php echo Str::substr($course->{'description_' . App::getLocale()}, 0, 150) . '...'; ?>

                                    <?php else: ?>
                                        <?php echo $course->{'description_' . App::getLocale()}; ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- brands-section start -->

    <section id="brands-section">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="brand-item"><img src="<?php echo e(asset('storage/images/companies') . '/' . $company->image); ?>"
                            alt=""></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- brands-section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/about.blade.php ENDPATH**/ ?>