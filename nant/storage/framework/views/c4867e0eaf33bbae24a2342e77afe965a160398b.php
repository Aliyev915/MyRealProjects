<?php
$setting = App\Models\Setting::all()->first();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Nant.az</title>
    <link rel="stylesheet" href="./css/loading.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="icon" href="./img/colored_logo_nant.png">
</head>

<body onload="setTimeout(myFunction, 1500);">
    <div class="loading">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="refresh">
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
                        <a href="<?php echo e($setting->youtube); ?>" target="_blank" class="icon"><i
                                class="fab fa-youtube"></i></a>
                        <form action="/locale" method="POST">
                            <?php echo csrf_field(); ?>
                            <select class="hidden" name="lang">
                                <?php if(App::getLocale() == 'en'): ?>
                                    <option value="az">Aze</option>
                                    <option value="en" selected>Eng</option>0
                                    <option value="ru">Ru</option>
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
                        <form action="/locale" method="POST">
                            <?php echo csrf_field(); ?>
                            <select class="hidden" name="lang">
                                <?php if(App::getLocale() == 'en'): ?>
                                    <option value="az">Aze</option>
                                    <option value="en" selected>Eng</option>0
                                    <option value="ru">Ru</option>
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


        <!-- -------- Tarix --------- -->
        <div class="tarix">
            <div class="container2">
                <div class="azerbaycan">
                    <div style="margin-top: 170px;" class="content nant-content">
                        <h3><?php echo e(__('home.company_nant')); ?></h3>
                        <br>
                        

                        <p><?php echo e($setting->{'about_us_' . App::getLocale()}); ?></p>

                    </div>
                    <div class="map">
                        <?php for($i = 0; $i < $regions->count(); $i++): ?>
                            <div class="area-<?php echo e($i + 1); ?>">
                                <img src="<?php echo e(asset($regions[$i]->image)); ?>" alt="">
                                <div class="icon <?php echo e(Str::lower($regions[$i]->name_en)); ?>">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <!-- Pop-up box -->
                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="<?php echo e(Str::lower($region->name_en)); ?>" class="popup-parent">
                        <div class="popup">
                            <?php if($region->name_en!='Baku'): ?>
                                <h1><?php echo e($region->{'name_' . App::getLocale()}); ?> <?php echo e(__('home.region')); ?></h1>
                                <?php else: ?>
                                <h1><?php echo e(__('home.center')); ?></h1>
                            <?php endif; ?>
                            <div class="melumat" style="flex-wrap: wrap">
                                    <?php $__currentLoopData = $region->districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-12" style="width: 33%">
                                            <p><i class="fas fa-check-circle"></i><span class="müdir"><?php echo e($district->name_az); ?></span></p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button class="close close<?php echo e($region->name_en); ?>" draggable="true">&times;</button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div id="karabag" class="popup-parent">
                    <div class="popup">
                        <h1>Qarabağ <?php echo e(__('home.region')); ?></h1>
                        <div class="melumat">
                            <p><i class="fas fa-exclamation-circle"></i></p>
                            <p><?php echo e(__('home.karabakh')); ?>!</p>
                        </div>
                        <button class="close closeKarabakh" draggable="true">&times;</button>
                    </div>
                </div>
                <div id="naxcivan" class="popup-parent">
                    <div class="popup">
                        <h1><?php echo e($region->{'name_'.App::getLocale()}); ?> <?php echo e(__('home.region')); ?></h1>
                        <div class="melumat">
                            <p><i class="fas fa-users"></i></p>
                            <p><?php echo e(__('home.sub')); ?></p>
                        </div>
                        <button class="close closeNakhchivan" draggable="true">&times;</button>
                    </div>
                </div>

                <h1><?php echo e(__('home.about')); ?></h1>
                <?php for($i = 0; $i < $abouts->count(); $i++): ?>
                    <?php if($i % 2 == 0): ?>
                        <div class="history_row_1 nant" style="margin-top: -25px">
                            <div class="main">
                                <div class="image" style="margin-top: 50px">
                                    <img src="<?php echo e(asset('storage/images/abouts/' . $abouts[$i]->image)); ?>">
                                </div>
                                
                            </div>
                            <div class="content">
                                <h3><?php echo e($abouts[$i]->{'title_' . App::getLocale()}); ?></h3>
                                <br>
                                <p><?php echo $abouts[$i]->{'description_' . App::getLocale()}; ?></p>
                            </div>
                        </div>
                        <?php if($i == 1): ?>
                            <div class="dotted_line_1"></div>
                        <?php elseif($i != $abouts->count()-1): ?>
                            <div class="dotted_line_3"></div>
                        <?php endif; ?>
                    <?php else: ?>
                        <!-- -------- Pobeda --------- -->
                        <?php if($i != $abouts->count() - 1): ?>
                            <div class="history_row_2 pobeda" style="margin-top: -140px">
                                <div class="main">
                                    <div class="image">
                                        <img class="pobeda_mehsul_1"
                                            src="<?php echo e(asset('storage/images/abouts/' . $abouts[$i]->image)); ?>" alt="">
                                    </div>
                                    
                                </div>
                                <div class="content">
                                    <h3><?php echo e($abouts[$i]->{'title_' . App::getLocale()}); ?></h3>
                                    <br>
                                    <?php if(Str::length($abouts[$i]->{'description_' . App::getLocale()}) < 500): ?>
                                        <p><?php echo $abouts[$i]->{'description_' . App::getLocale()}; ?></p>
                                    <?php else: ?>
                                        <p><?php echo Str::substr($abouts[$i]->{'description_' . App::getLocale()}, 0, 500); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="history_row_2 pobeda" style="margin-top: -140px;margin-bottom:50px">
                                <div class="main">
                                    <div class="image">
                                        <img class="pobeda_mehsul_1"
                                            src="<?php echo e(asset('storage/images/abouts/' . $abouts[$i]->image)); ?>" alt="">
                                    </div>
                                    
                                </div>
                                <div class="content">
                                    <h3><?php echo e($abouts[$i]->{'title_' . App::getLocale()}); ?></h3>
                                    <br>
                                    <?php if(Str::length($abouts[$i]->{'description_' . App::getLocale()}) < 500): ?>
                                        <p><?php echo $abouts[$i]->{'description_' . App::getLocale()}; ?></p>
                                    <?php else: ?>
                                        <p><?php echo Str::substr($abouts[$i]->{'description_' . App::getLocale()}, 0, 500); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($i != $abouts->count() - 1): ?>
                            <div class="dotted_line_2"></div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endfor; ?>

            </div>
        </div>


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
                                            <p><?php echo e($setting->{'adress_' . App::getLocale()}); ?></p>
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
                        <a href="#"><img src="<?php echo e(asset('storage/images/' . $setting->logo)); ?>"></a>
                    </div>
                    <div class="social">
                        <a href="<?php echo e($setting->linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php echo e($setting->facebook); ?>" target="_blank" class="icon"><i class="fab
                                    fa-facebook-f"></i></a>
                        <a href="<?php echo e($setting->instagram); ?>" target="_blank" class="icon"><i class="fab
                                    fa-instagram"></i></a>
                        <a href="<?php echo e($setting->youtube); ?>" target="_blank" class="icon"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="copy">
                    <div class="hr"></div>
                    <p><?php echo e($setting->{'copyright_' . App::getLocale()}); ?></p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        var ref = document.querySelector(".refresh");
        var load = document.querySelector(".loading");
        ref.style.display = "none";

        function myFunction() {
            ref.style.display = "block";
            load.style.display = "none";
        }
    </script>
    <script src="./script/index.js"></script>
    <script src="./script/map.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).on('click', '.nav2 ul li', function() {
            $(this).addClass('active').siblings().removeClass('active');
        })
        $('form select').change(function() {
            $(this).parent().trigger('submit');
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\nant\resources\views/about.blade.php ENDPATH**/ ?>