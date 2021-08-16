<?php $__env->startSection('ckeditor'); ?>
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    CKEDITOR.replace('editor5');

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Header Settings</h4>
                    <form class="forms-sample" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption"
                                placeholder="Caption" value="<?php if($header !=null): ?> <?php echo e($header->caption_az); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption ENG</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption_en"
                                placeholder="Caption" value="<?php if($header !=null): ?> <?php echo e($header->caption_en); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption_ru"
                                placeholder="Caption" value="<?php if($header !=null): ?> <?php echo e($header->caption_ru); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title</label>
                            <textarea name="title" id="editor3" cols="30"
                                rows="10"><?php if($header != null): ?><?php echo $header->title_az; ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title ENG</label>
                            <textarea name="title_en" id="editor1" cols="30"
                                rows="10"><?php if($header != null): ?><?php echo $header->title_en; ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title RU</label>
                            <textarea name="title_ru" id="editor2" cols="30"
                                rows="10"><?php if($header != null): ?><?php echo $header->title_ru; ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea rows="10" name="description"
                                id="editor"><?php if($header != null): ?><?php echo e($header->description_az); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description ENG</label>
                            <textarea rows="10" name="description_en"
                                id="editor5"><?php if($header != null): ?><?php echo e($header->description_en); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description RU</label>
                            <textarea rows="10" name="description_ru"
                                id="editor4"><?php if($header != null): ?><?php echo e($header->description_ru); ?><?php endif; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/settings/header.blade.php ENDPATH**/ ?>