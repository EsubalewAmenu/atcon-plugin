<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-xl-6 col-lg-7" data-aos="fade-right">
        <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
        <h3>Voluptatem dignissimos provident</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
            <?php foreach ($abouts as $about) { ?>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4><?php echo $about->post_title; ?></h4>
              <p><?php echo $about->post_content ?></p>
            </div>
            <?php } ?>


        <div class="icon-box" data-aos-delay="200">
          <i class="bx bx-cube-alt"></i>
          <h4>Ullamco laboris nisi</h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End About Section -->