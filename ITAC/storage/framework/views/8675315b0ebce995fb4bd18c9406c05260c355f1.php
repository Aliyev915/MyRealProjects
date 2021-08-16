<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form action="/certificate/code" method="GET" style="margin: 100px 0" id="certificate">
                    <div class="form-group">
                        <label for="">Axtar</label>
                        <input type="text" name="code" class="form-control" placeholder="Axtar">
                        <button class="btn " type="submit">Axtar</button>
                    </div>
                </form>
            </div>
            <div class="offset-md-3 col-md-6">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITAC\resources\views/certificate.blade.php ENDPATH**/ ?>