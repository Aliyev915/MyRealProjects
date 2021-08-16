    <?php if($certificate == null): ?>
        <div class="info">
            <p><?php echo e(__('home.not_found')); ?></p>
        </div>
    <?php else: ?>
        <table class="table table-striped">
            <tr>
                <th><?php echo e(__('home.name')); ?></th>
                <td><?php echo e($certificate->student->{"name_".App::getLocale()}); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.lastname')); ?></th>
                <td><?php echo e($certificate->student->{"lastname_".App::getLocale()}); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.passport')); ?></th>
                <td><?php echo e($certificate->student->passport); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.course')); ?></th>
                <td><?php echo e($certificate->student->course->{"title_".App::getLocale()}); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.continious')); ?></th>
                <td><?php echo e($certificate->feature->continuity); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.teorical')); ?></th>
                <td><?php echo e($certificate->feature->teorics); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.practical')); ?></th>
                <td><?php echo e($certificate->feature->practics); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.course_work')); ?></th>
                <td><?php echo e($certificate->feature->course_work); ?></td>
            </tr>
            <tr>
                <th><?php echo e(__('home.exam')); ?></th>
                <td><?php echo e($certificate->feature->exam); ?></td>
            </tr>
        </table>
        <a href="" class="btn look_certificate"><?php echo e(__('home.look_certificate')); ?></a>
        <a href="" class="btn indicator" style="display: none"><?php echo e(__('home.look_student_indicator')); ?></a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script>
        document.querySelector('.look_certificate').onclick = function(e) {
            e.preventDefault();
            let parents = document.querySelectorAll('.modal-body .form-group');
            let table = this.previousElementSibling;
            let img = document.createElement('img');
            img.setAttribute('src', "<?php echo e(asset('storage/images/certificate/' . $certificate->image)); ?>");
            table.innerHTML = '';
            this.style.display = 'none';
            document.querySelector('.indicator').style.display = 'inline-block';
            table.append(img);
        }
        $('.indicator').click(function(e) {
            e.preventDefault();
            let text=$('.form-control').val()
            $(this).css({
                'display':'none'
            })
            $.ajax({
                url: '/certificate/' + text,
                method: 'GET',
                success: function(resp) {
                    $('.modal-body .form-group').eq(1).html('');
                    $('.modal-body .form-group').eq(1).append(resp);
                }
            })
        });

    </script>
    <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/search-certificate.blade.php ENDPATH**/ ?>