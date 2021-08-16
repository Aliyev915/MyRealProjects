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
                                <li><a class="active" href="#"><?php echo e(__('home.blog')); ?></a></li>
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
                <div class="col-lg-8 col-12">
                    <div class="blog-details-img">
                        <img src="<?php echo e(asset('storage/images/blogs/' . $blog->images->first()['image'])); ?>" alt="">
                    </div>
                    <div class="blog-details-content">
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
                                        <?php echo e(__('home.comment')); ?> <?php echo e($blog->comments->where('is_verified',true)->count()); ?>

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="details">
                            <h2>
                                <?php echo $blog->{'title_' . App::getLocale()}; ?>

                            </h2>
                            <p>
                                <?php echo $blog->{'description_' . App::getLocale()}; ?>


                            </p>
                            <blockquote>
                                <p>
                                    <?php echo $blog->{'quote_' . App::getLocale()}; ?>

                                </p>
                            </blockquote>
                            <?php for($i = 1; $i < $blog->images->count(); $i++): ?>
                                <div class="details-img"><img
                                        src="<?php echo e(asset('storage/images/blogs/' . $blog->images[$i]->image)); ?>" alt="">
                                </div>
                            <?php endfor; ?>
                            <div class="row">
                                <div class="col-5">
                                    <div class="blog-links">
                                        <h5>Social Share</h5>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-section">
                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row my-2">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="user">
                                            <img src="<?php echo e(asset('assets/img/user.jpg')); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-8">
                                        <div class="comment-info">
                                            <p><?php echo e($comment->name); ?></p>
                                            <p><?php echo e(date('d/m/Y', strtotime($comment->time))); ?></p>
                                        </div>
                                        <div class="comment-text">
                                            <p><?php echo e($comment->text); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="comment-form">
                            <h3><?php echo e(__('home.submit_comment')); ?></h3>
                            <form action="/comment" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="comment-item">
                                    <i class="fa fa-pencil"></i>
                                    <textarea type="text" name="text" id="" placeholder="Type your comment..."></textarea>
                                </div>
                                <div class="comment-item">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" id="" placeholder="Type your name...">
                                </div>
                                <div class="comment-item">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" name="email" id="" placeholder="Type your email...">
                                </div>
                                <div class="comment-item">
                                    <input type="hidden" name="blog" value="<?php echo e($blog->id); ?>" id=""
                                        placeholder="Type your email...">
                                </div>
                                <div class="comment-item">
                                    <input type="submit" value="<?php echo e(__('home.submit_comment')); ?>">
                                </div>
                            </form>
                        </div>
                    </div>

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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/blog-detail.blade.php ENDPATH**/ ?>