<?php $__env->startSection('content'); ?>

    <!-- slider-section start -->
    <section id="slider-section">
        <div class="owl-carousel owl-theme">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slider-item"
                    style="background-image: url(<?php echo e(asset('storage/images/sliders/' . $slider->image)); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-content">
                                    <h5 data-aos="zoom-in-up" data-aos-duration="1500">
                                        <?php echo e($header->{'caption_' . App::getLocale()}); ?></h5>
                                    <h2 data-aos="zoom-in-up" data-aos-duration="1500">
                                        <?php echo $header->{'title_' . App::getLocale()}; ?>

                                    </h2>
                                    <p data-aos="zoom-in-up" data-aos-duration="1500"><?php echo $header->{'description_' . App::getLocale()}; ?>

                                    </p>
                                    <div class="btn-animation" data-aos="fade-left" data-aos-duration="2500">
                                        <a href="" class="btn"><?php echo e(__('home.read_more')); ?></a>
                                        <div class="btn-after"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </section>
    <!-- slider-section end -->

    <!-- about-us-section start -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <div class="section-heading">
                            <div class="section-title"><?php echo __('home.about_us'); ?>

                                <img src="<?php echo e(asset('assets/img/circle_right.png')); ?>" alt="">
                            </div>
                            <h3>
                                <?php echo $about->{'title_' . App::getLocale()}; ?>

                            </h3>
                        </div>

                        <p>
                            <?php echo $about->{'description_' . App::getLocale()}; ?>

                        </p>
                        <div class="row m-t-20">
                            <div class="col-4">
                                <div class="sign">
                                    <img class="img-fluid" src="<?php echo e(asset('storage/images/' . $about->img_1)); ?>" alt="">
                                </div>
                                <div class="sign-text"><?php echo $about->signature; ?>

                                </div>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="btn-animation m-t-30">
                            <a href="/about" class="btn"><?php echo e(__('home.read_more')); ?></a>
                            <div class="btn-after"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="about-img">
                        <img class="img-fluid" src="<?php echo e(asset('storage/images/' . $about->img_2)); ?>" alt="">
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
                <div class="col-lg-3 col-4">
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
                <div class="col-lg-3 col-4">
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
                <div class="col-lg-3 col-4">
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
                                    <a
                                        href="/course/<?php echo e($course->id); ?>"><?php echo e($course->{'title_' . App::getLocale()}); ?></a>
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

    <!-- contact-section start -->

    <section id="contact-section" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-heading">
                        <div class="section-title"><?php echo e(__('home.about_us')); ?>

                        </div>
                        <h3>
                            <?php echo e(__('home.contact_us')); ?>

                        </h3>
                    </div>
                    <?php if(Session::has('error_message')): ?>
                        <div class="message" style="background:#f64b3c">
                            <p>
                                <?php echo e(Session('error_message')); ?>

                            </p>
                            <p class="close-icon">
                                <i class="fa fa-times"></i>
                            </p>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('success_message')): ?>
                        <div class="message" style="background:#46c35f">
                            <p>
                                <?php echo e(Session('success_message')); ?>

                            </p>
                            <p class="close-icon">
                                <i class="fa fa-times"></i>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="contact-form" data-aos="fade-up" data-aos-duration="1500">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <form action="/send" method="post" id="send_message">
                                    <?php echo csrf_field(); ?>
                                    <div class="contact-item icon-user"><input type="text" name="name"
                                            placeholder="<?php echo e(__('home.placeholder_name')); ?>" id=""></div>
                                    <div class="contact-item icon-mail"><input type="email" name="email"
                                            placeholder="<?php echo e(__('home.placeholder_email')); ?>" id=""></div>
                                    <div class="contact-item icon-pen">
                                        <textarea type="text" name="text" placeholder="<?php echo e(__('home.message')); ?>" id=""
                                            rows="10"></textarea>
                                    </div>
                                    <div class="btn-animation">
                                        <button class="btn"><?php echo e(__('home.send_message')); ?></button>
                                        <div class="btn-after"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact-section end -->


    <!-- call-section start -->

    <section id="call-section">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <img src="<?php echo e(asset('assets/img/call-man.png')); ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="call-content">
                        <h4><?php echo $bio->{'about_us_' . App::getLocale()}; ?></h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque delectus quibusdam tempora
                            adipisci quis corporis ex fugit neque commodi dolor.</p>
                        <h2><?php echo e($bio->phone_1); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- call-section end -->


    <!-- brands-section start -->

    <section id="service-section">
        <div class="container">
            <div class="section-heading">
                <h3>
                    <?php echo e(__('home.companies')); ?>

                </h3>
            </div>
            <div class="row">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item " data-aos="fade-up">
                            <div class="service-item-img">
                                <img src="<?php echo e(asset('assets/img/1.svg')); ?>" class="active-img" alt="">
                                <img src="<?php echo e(asset('assets/img/1-hover.svg')); ?>" class="d-active-img" alt="">
                            </div>
                            <div class="service-item-content" style="margin-top: -20px">
                                <h2 style="text-align: center;">
                                    <a href="/company/<?php echo e($company->id); ?>" style="color: #030303;text-decoration:none;text-transform:uppercase" ><?php echo e($company->{'name_' . App::getLocale()}); ?> </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- brands-section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/index.blade.php ENDPATH**/ ?>