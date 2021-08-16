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
                    <h4 class="card-title">About</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption" value="<?php if($about !=null): ?> <?php echo e($about->caption_az); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption ENG</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption_en" value="<?php if($about !=null): ?> <?php echo e($about->caption_en); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption_ru" value="<?php if($about !=null): ?> <?php echo e($about->caption_ru); ?> <?php endif; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title</label>
                            <textarea name="title"
                                id="editor"><?php if($about != null): ?><?php echo e($about->title_az); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description</label>
                            <textarea class="form-control" id="editor1" rows="5"
                                name="description"><?php if($about != null): ?><?php echo e($about->description_az); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title ENG</label>
                            <textarea name="title_en"
                                id="editor2"><?php if($about != null): ?><?php echo e($about->title_en); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description ENG</label>
                            <textarea class="form-control" id="editor3" rows="5"
                                name="description_en"><?php if($about != null): ?><?php echo e($about->description_en); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title RU</label>
                            <textarea name="title_ru"
                                id="editor4"><?php if($about != null): ?><?php echo e($about->title_ru); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description RU</label>
                            <textarea class="form-control" id="editor5" rows="5"
                                name="description_ru"><?php if($about != null): ?><?php echo e($about->description_ru); ?><?php endif; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Signature</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Signature"
                                name="signature" value="<?php if($about !=null): ?> <?php echo e($about->signature); ?> <?php endif; ?>" />
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sign Image</label>
                                    <input type="file" name="img_1" class="file-upload-default" accept="image/*" />
                                    <?php if($about != null): ?>
                                        <div class="col-sm-6">
                                            <img src="<?php echo e(asset('storage/images/'.$about->img_1)); ?>" height="150" width="150" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" />
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                            </button>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>About Image</label>
                                    <input type="file" name="img_2" class="file-upload-default" accept="image/*" />
                                    <?php if($about!=null): ?>
                                    <div class="col-sm-6">
                                        <img src="<?php echo e(asset('storage/images/'.$about->img_2)); ?>" height="150" width="150" alt="">
                                    </div>
                                    <?php endif; ?>
                                    <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" />
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/admin/settings/about.blade.php ENDPATH**/ ?>