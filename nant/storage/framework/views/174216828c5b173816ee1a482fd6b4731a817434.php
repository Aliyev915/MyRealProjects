<?php $__env->startSection('content'); ?>
    <div class="nant_video">
        <video style="width: 100%; margin: 0 auto; display:block" autoplay muted loop>
            <source src="<?php echo e(asset('Nant_version 2 light.mp4')); ?>">
        </video>
        <div class="sound">
            <i class="fas fa-volume-mute"></i>
            <i class="fas fa-volume-up"></i>
        </div>
    </div>
    <?php if(Session::has('error_message')): ?>
        <div class="alert-box" style="background-color: #cf0000">
            <p><?php echo Session('error_message'); ?></p>
            <div class="cancel">
                <i class="fas fa-times"></i>
            </div>
        </div>
    <?php endif; ?>

    <!-- --------- Brands ------- -->
    


    <!-- -------- GROUPES --------- -->
    <div class="groupes">
        <div class="container2">
            <h1 style="text-transform: uppercase"><?php echo e(__('home.gallery')); ?></h1>
        </div>
        <div class="row container2">
            <div class="col-md-12 mx-auto mt-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <?php for($i =0 ; $i <ceil($galleries->count()/3) ; $i++): ?>
                            <?php if($i==0): ?>
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <?php else: ?>
                                <li data-target="#myCarousel" data-slide-to="<?php echo e($i); ?>"></li>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <?php for($i = 0; $i < ceil($galleries->count() / 3); $i++): ?>
                            <?php if($i == 0): ?>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php $__currentLoopData = $galleries->skip($i * 3)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-sm-4">
                                                <div class="img-box">
                                                    <img src="<?php echo e(asset('storage/images/galleries/' . $gallery->image)); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php $__currentLoopData = $galleries->skip($i * 3)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-sm-4">
                                                <div class="img-box">
                                                    <img src="<?php echo e(asset('storage/images/galleries/' . $gallery->image)); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="counter">
            <div class="fr-count">
                <i class="fas fa-people-carry"></i>
                <div class="counter-value" data-count="<?php echo e($counter->worker); ?>">0</div>
                <p class="m-0"><?php echo e(__('home.workers_count')); ?></p>
            </div>
            <div class="fr-count">
                <i class="fas fa-handshake"></i>
                <div class="counter-value" data-count="<?php echo e($partners->count()); ?>">0</div>
                <p class="m-0"><?php echo e(__('home.partners_count')); ?></p>
            </div>
            <div class="fr-count">
                <i class="fas fa-users"></i>
                <div class="counter-value" data-count="<?php echo e($counter->customer); ?>">0</div>
                <p class="m-0"><?php echo e(__('home.customer_count')); ?></p>
            </div>
            <div class="fr-count">
                <i class="fas fa-building"></i>
                <div class="counter-value" data-count="<?php echo e($counter->branch); ?>">0</div>
                <p class="m-0"><?php echo e(__('home.branch_count')); ?></p>
            </div>
            <div class="fr-count">
                <i class="fas fa-tasks"></i>
                <div class="counter-value" data-count="<?php echo e($counter->autopark); ?>">0</div>
                <p class="m-0"><?php echo e(__('home.projects')); ?></p>
            </div>
        </div>

        
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ajax'); ?>
    <script>
        setTimeout(() => {
            document.querySelector('.alert-box').style.display = 'none'
        }, 10000);
        let mute = document.querySelector('.fa-volume-mute');
        let sound = document.querySelector('.fa-volume-up');
        let video = document.querySelector('.nant_video video');
        if (video.muted === true) {
            sound.style.display = 'none';
            mute.style.display = 'inline-block';
        } else {
            sound.style.display = 'inline-block';
            mute.style.display = 'none';
        }
        mute.onclick = function() {
            video.muted = false;
            sound.style.display = 'inline-block';
            mute.style.display = 'none';
        }

        sound.onclick = function() {
            video.muted = true;
            mute.style.display = 'inline-block';
            sound.style.display = 'none';
        }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .nant_video {
            position: relative;
            width: 64%;
            margin: 140px auto 30px;
            padding-right: 15px;
        }

        .nant_video .sound i {
            bottom: 10%;
            right: 10%;
            position: absolute;
            color: white;
            font-size: 25px;
        }

        @media  screen and (max-width:992px) {
            .nant_video {
                width: 80%;
            }
        }

        .brands .right {
            position: absolute;
            left: 0% !important;
            top: 0% !important;
            height: 100% !important;
            width: 98% !important;
            transition: 0.6s;
            overflow: hidden;
        }

        .brands .left {
            width: 98% !important;
            height: 100% !important;
            position: absolute;
            top: 0% !important;
            left: 0% !important;
        }

        .groupes.resept {
            padding-top: 0 !important;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/home.blade.php ENDPATH**/ ?>