<?php
$messages = App\Models\Message::all()
    ->where('read', false)
    ->take(3)
    ->sortDesc();
$applies = App\Models\Apply::all()
    ->where('read', false)
    ->take(3)
    ->sortDesc();
?>
<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img
                src="<?php echo e(asset('admin/assets/images/logo-mini.svg')); ?>" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
            <i class="mdi mdi-menu"></i>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="mdi mdi-newspaper"></i>
                    <?php if($applies->count() != 0): ?><span class="count count-varient1"><?php echo e($applies->count()); ?></span><?php endif; ?>

                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
                    aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <?php $__currentLoopData = $applies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item preview-item">
                            <div class="preview-item-content">
                                <p class="mb-0" style="font-weight: 500"> <?php echo e($apply->name); ?> <?php echo e($apply->lastname); ?> <span class="text-small text-muted">apply on</span> <?php echo e($apply->course->title_en); ?>

                                <span class="text-small text-muted">course</span>
                                </p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0"><a href="/admin-user/apply">View all applies</a></p>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="mdi mdi-email-outline"></i>
                    <?php if($messages->count() != 0): ?><span class="count count-varient2">
                            <?php echo e($messages->count()); ?> </span><?php endif; ?>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <?php if($messages->count() == 0): ?>
                        <div class="preview-item">
                            <div class="preview-item-content flex-grow">No unread messages</div>
                        </div>
                    <?php else: ?>
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="message/detail/<?php echo e($message->id); ?>" class="dropdown-item preview-item">
                                <div class="preview-item-content flex-grow">
                                    <span class="badge badge-pill badge-success"><?php echo e($message->name); ?></span>
                                    <p class="text-small text-muted ellipsis mb-0">
                                        <?php echo e(Str::substr($message->text, 0, 25)); ?></p>
                                </div>
                                <p class="text-small text-muted align-self-start">
                                    <?php echo e(date('d/m h:i', strtotime($message->time))); ?> </p>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <h6 class="p-3 mb-0">
                            <a href="/admin-user/message">See all messages</a>
                        </h6>
                    <?php endif; ?>
                </div>
            </li>
            <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right ml-lg-auto">

            <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                    <img class="nav-profile-img mr-2" alt=""
                        src="<?php echo e(asset('admin/assets/images/faces/face1.jpg')); ?>" />
                    <span class="profile-name"><?php echo e(Auth::user()->fullname); ?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                    <a class="dropdown-item" href="/logout">
                        <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>