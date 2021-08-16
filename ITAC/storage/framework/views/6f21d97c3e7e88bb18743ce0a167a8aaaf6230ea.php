<?php if($blogs != null): ?>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <a href="blog/<?php echo e($blog->slug); ?>"><?php echo Str::substr($blog->title_en, 0, 20).'...'; ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/search.blade.php ENDPATH**/ ?>