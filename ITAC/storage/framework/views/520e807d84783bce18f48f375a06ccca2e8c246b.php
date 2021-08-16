<?php
    $bio=App\Models\Bio::first();
?>
<nav>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="<?php echo e(asset('storage/images/bio/'.$bio->logo)); ?>" width="65" alt="">
                </div>
                <div class="vegan">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <ul class="nav-links">
                    <li><a href="/"><?php echo app('translator')->get('home.home'); ?></a></li>
                    <li><a href="/about"><?php echo app('translator')->get('home.about'); ?></a></li>
                    <li><a href="/blog"><?php echo app('translator')->get('home.blog'); ?></a></li>
                    <li><a href="/contact"><?php echo e(__('home.contact')); ?></a></li>
                </ul>

                <div class="lang">
                    <ul>
                        <li><a href="/locale/az">
                                <img src="<?php echo e(asset('assets/img/azerbaijan.png')); ?>" alt="">
                            </a></li>
                        <li><a href="/locale/en">
                                <img src="<?php echo e(asset('assets/img/english.png')); ?>" alt="">
                            </a></li>
                        <li><a href="/locale/ru">
                                <img src="<?php echo e(asset('assets/img/russian.png')); ?>" alt="">
                            </a></li>
                    </ul>
                </div>
                <div class="check">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal"><?php echo e(__('home.certificate')); ?>

                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="GET" id="certificate">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('home.check')); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for=""><?php echo e(__('home.check_certificate')); ?></label>
                                            <input type="text" class="form-control" placeholder="Code" name="code">
                                        </div>
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal"><?php echo e(__('home.close')); ?></button>
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('home.check')); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/layouts/header.blade.php ENDPATH**/ ?>