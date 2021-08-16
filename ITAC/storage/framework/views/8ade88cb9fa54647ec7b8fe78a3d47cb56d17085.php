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
                                <li><a class="active" href="#"><?php echo e(__('home.contact')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

    <!-- contact-section start -->

    <section id="contact-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <div class="section-title">
                            <h3><?php echo e(__('home.about_us')); ?></h3>
                        </div>
                        <div class="about">
                            <p><?php echo $bio->{"about_us_".App::getLocale()}; ?></p>
                        </div>
                        <h4><?php echo e(__('home.address')); ?></h4>
                        <div class="address">
                            <i class="fas fa-map-marker"></i>
                            <p><?php echo e($bio->{"address_".App::getLocale()}); ?></p>
                        </div>
                        <h4><?php echo e(__('home.phone')); ?></h4>
                        <div class="address">
                            <i class="fas fa-phone"></i>
                            <p><?php echo e($bio->phone_1); ?></p>
                        </div>
                        <h4>Email</h4>
                        <div class="address">
                            <i class="fas fa-envelope"></i>
                            <p><?php echo e($bio->email); ?></p>
                        </div>
                        <div class="sosial">
                            <div class="facebook">
                                <a href="<?php echo e($bio->facebook); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="whatsapp">
                                <a href="/whatsapp/<?php echo e($bio->phone_1); ?>">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                            <div class="instagram">
                                <a href="<?php echo e($bio->instagram); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                                        <textarea type="text" rows="10" name="text" placeholder="<?php echo e(__('home.message')); ?>" id=""></textarea>
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

    <!-- brands-section start -->

    <section id="brands-section">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="brand-item"><img src="<?php echo e(asset('storage/images/companies/'.$company->image)); ?>" alt=""></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- brands-section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/contact.blade.php ENDPATH**/ ?>