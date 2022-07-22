<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-xl-6 col-lg-7">
        <img src="<?php echo ds_atcon_PLAGIN_URL . 'assets/img/about-img.jpg' ?>" class="img-fluid" alt="">
      </div>
      <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
        <h3>Voluptatem dignissimos provident</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <?php foreach ($abouts as $about) { ?>
          <div class="icon-box">
            <i class="bx bx-receipt"></i>
            <h4><?php echo $about->post_title; ?></h4>
            <p><?php echo $about->post_content ?></p>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>
</section><!-- End About Section -->