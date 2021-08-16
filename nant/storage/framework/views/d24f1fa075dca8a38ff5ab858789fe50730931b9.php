<?php
    $setting = App\Models\Setting::all()->first();
?>
<!-- -------- FOOTER --------- -->
<footer>
    <div class="container3">
        <div class="footer_col_1">
            <h2><?php echo e(__('home.contact')); ?></h2>
            <section class="contact" id="contact">
                <div class="content">
                    <div class="contactInfo">
                        <div class="contactInfoBx">

                            <div class="box">
                                <div class="icon">
                                    <i class="fas
                                                fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <h3><?php echo e(__('home.adress')); ?></h3>
                                    <p><?php echo e($setting->{'adress_'.App::getLocale()}); ?></p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">
                                    <h3><?php echo e(__('home.phone')); ?></h3>
                                    <p><?php echo e($setting->phone_1); ?></p>
                                    <p><?php echo e($setting->phone_2); ?></p>
                                    <p><?php echo e($setting->phone_3); ?></p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p><?php echo e($setting->email); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="footer_col_2">
            <h2><?php echo e(__('home.about')); ?></h2>
            <ul>
                <li><a href="/"><?php echo e(__('home.home')); ?></a></li>
                <li><a href="/haqqimizda"><?php echo e(__('home.about')); ?></a></li>
                <li><a href="/qalareya"><?php echo e(__('home.gallery')); ?></a></li>
                <li><a href="/partnyorlar"><?php echo e(__('home.partners')); ?></a></li>
                <li><a href="/vakansiyalar"><?php echo e(__('home.vacancy')); ?></a></li>
                <li><a class="elaqe" href="/elaqe"><?php echo e(__('home.contact')); ?></a></li>
            </ul>
        </div>
        <div class="footer_col_3">
            <div class="footer_logo">
                <a href="#"><img src="<?php echo e(asset('storage/images/'.$setting->logo)); ?>"></a>
            </div>
            <div class="social">
                <a href="<?php echo e($setting->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="<?php echo e($setting->facebook); ?>" target="_blank" class="icon"><i class="fab
                                fa-facebook-f"></i></a>
                <a href="<?php echo e($setting->instagram); ?>" target="_blank" class="icon"><i class="fab
                                fa-instagram"></i></a>
                <a href="<?php echo e($setting->youtube); ?>" target="_blank" class="icon"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="copy">
            <div class="hr"></div>
            <p><?php echo e($setting->{'copyright_'.App::getLocale()}); ?></p>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\nant\resources\views/layouts/footer.blade.php ENDPATH**/ ?>