<?php $__env->startSection('content'); ?>
    <!-- breadcrumb-section start -->
    <section id="poster-section" class="d-flex align-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="poster-content">
                        <div class="poster-navigation">
                            <ul>
                                <li><a href="#"><?php echo e(__('home.home')); ?></a></li>
                                <li><a class="active" href="#"><?php echo e(__('home.blog')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-section end -->

    <!-- blog-section start -->
    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-item">
                            <div class="blog-media">
                                <img height="400" src="<?php echo e(asset('storage/images/blogs/'.$blog->images->first()['image'])); ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <div class="blog-info">
                                    <ul>
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <span>by</span>
                                            <a href="#"><?php echo e($blog->user->fullname); ?></a>
                                        </li>
                                        <li>
                                            <i class="fa fa-comments"></i>
                                            <a href="#">
                                                Comments <?php echo e($blog->comments->count()); ?>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="blog-heading" style="text-transform: uppercase">
                                    <a href="/blog/<?php echo e($blog->slug); ?>">
                                        <?php echo e($blog->{"title_".App::getLocale()}); ?>

                                    </a>
                                </h2>
                                <p>
                                    <?php if(Str::length($blog->{"description_".App::getLocale()})>400): ?>
                                        <?php echo Str::substr($blog->{"description_".App::getLocale()}, 0, 400).'...'; ?>

                                        <?php else: ?>
                                        <?php echo $blog->{"description_".App::getLocale()}; ?>

                                    <?php endif; ?>
                                </p>
                                <div class="btn-animation">
                                    <a href="/blog/<?php echo e($blog->slug); ?>" class="btn">Read More</a>
                                    <div class="btn-after"></div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title"><?php echo e(__('home.search')); ?></h4>
                            <div class="sidebar-form">
                                <form action="/search">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" placeholder="SEARCH" autocomplete="off" id="search" name="search">
                                    <button class="form-submit-btn" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <div class="list-group"></div>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title"><?php echo e(__('home.follow_us')); ?></h4>
                            <ul class="sidebar-social">
                                <li>
                                    <a href="<?php echo e($bio->facebook); ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo e($bio->instagram); ?>"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo e($bio->twitter); ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title"><?php echo e(__('home.categories')); ?></h4>
                            <ul class="sidebar-category">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="/blog/category/<?php echo e($category->id); ?>"><?php echo e($category->{"name_".App::getLocale()}); ?> (<?php echo e($category->blogs->count()); ?>)</a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- blog-section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/category.blade.php ENDPATH**/ ?>