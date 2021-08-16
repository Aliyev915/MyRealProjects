<?php
    $bio=App\Models\Bio::first();
?>
<!-- footer-section start -->
<section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="footer-title">
            <h4><?php echo e(__('home.contact_us')); ?></h4>
          </div>
          <div class="footer-links footer-contact">
            <ul>
              <li>
                <i class="fa fa-phone"></i>
                <span>
                  <?php echo e($bio->phone_1); ?>

                </span>
              </li>
              <li>
                <i class="fa fa-phone"></i>
                <span>
                  <?php echo e($bio->phone_2); ?>

                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-title">
            <h4><?php echo e(__('home.link')); ?></h4>
          </div>
          <div class="footer-links">
            <ul>
              <li><a href="/about"><i class="fa fa-chevron-right"></i><?php echo e(__('home.about')); ?></a></li>
              <li><a href="/blog"><i class="fa fa-chevron-right"></i><?php echo e(__('home.blog')); ?></a></li>
              <li><a href="/contact"><i class="fa fa-chevron-right"></i><?php echo e(__('home.contact_us')); ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-sm-6">
          <div class="footer-title">
            <h4><?php echo e(__('home.subscribe')); ?></h4>
          </div>
          <p>Pellentesque quis volutpat odio, rhoncus tempor tellus. Proin condimentum turpis.</p>
          <div class="footer-form">
            <form action="/subscribe">
                <input type="text"  placeholder="Your email" name="email">
                <input type="submit" value="GO">
            </form>
          </div>
          <div class="footer-social">
            <span><?php echo e((__('home.follow'))); ?>:</span>
            <a href="<?php echo e($bio->facebook); ?>"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo e($bio->twitter); ?>"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo e($bio->instagram); ?>"><i class="fa fa-instagram"></i></a>
            <a href="<?php echo e($bio->email); ?>"><i class="fa fa-google"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="footer-copyright">
            <p>© <?php echo e(__('home.copyright')); ?></p>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- footer-section end -->
<?php /**PATH C:\xampp\htdocs\ITAC\resources\views/layouts/footer.blade.php ENDPATH**/ ?>