<?php
$setting = App\Models\Setting::all()->first();
?>
<!-- ----- Header----- -->
<header>
    <div class="container">
        <img class="header_logo" src="<?php echo e(asset('storage/images/' . $setting->logo)); ?>">
        <nav>
            <div class="nav1">
                <a href="<?php echo e($setting->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="<?php echo e($setting->facebook); ?>" target="_blank" class="icon"><i class="fab
                            fa-facebook-f"></i></a>
                <a href="<?php echo e($setting->instagram); ?>" target="_blank" class="icon"><i class="fab
                            fa-instagram"></i></a>
                <a href="<?php echo e($setting->youtube); ?>" target="_blank" class="icon"><i class="fab fa-youtube"></i></a>
                <form action="/locale" method="POST" class="lang">
                    <?php echo csrf_field(); ?>
                    <select name="lang">
                        <?php if(App::getLocale() == 'en'): ?>
                            <option value="az">Aze</option>
                            <option value="en" selected>Eng</option>0
                            <option value="ru" >Ru</option>
                        <?php elseif(App::getLocale() == 'az'): ?>
                            <option value="az" selected>Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru">Ru</option>
                            <?php else: ?>
                            <option value="az">Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru" selected>Ru</option>
                        <?php endif; ?>
                    </select>
                </form>
            </div>
            <div class="nav2">
                <form action="/locale" method="POST" class="lang">
                    <?php echo csrf_field(); ?>
                    <select class="hidden" name="lang">
                        <?php if(App::getLocale() == 'en'): ?>
                            <option value="az">Aze</option>
                            <option value="en" selected>Eng</option>0
                            <option value="ru" >Ru</option>
                        <?php elseif(App::getLocale() == 'az'): ?>
                            <option value="az" selected>Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru">Ru</option>
                            <?php else: ?>
                            <option value="az">Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru" selected>Ru</option>
                        <?php endif; ?>
                    </select>
                </form>
                <ul>
                    <li><a href="/"><?php echo e(__('home.home')); ?></a></li>
                    <li><a href="/haqqimizda"><?php echo e(__('home.about')); ?></a></li>
                    <li><a href="/qalareya"><?php echo e(__('home.gallery')); ?></a></li>
                    <li><a href="/partnyorlar"><?php echo e(__('home.partners')); ?></a></li>
                    <li><a href="/vakansiyalar"><?php echo e(__('home.vacancy')); ?></a></li>
                    <li><a class="elaqe" href="/elaqe"><?php echo e(__('home.contact')); ?></a></li>
                </ul>
                <img class="menubar" src="<?php echo e(asset('./img/right-menu-bars.svg')); ?>" alt="">
                <input type="text" placeholder="Search...">
            </div>
        </nav>
    </div>
</header>

<?php $__env->startSection('valiation'); ?>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\nant\resources\views/layouts/header.blade.php ENDPATH**/ ?>