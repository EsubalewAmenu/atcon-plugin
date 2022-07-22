<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
        <ul class="nav nav-tabs flex-column">

          <?php foreach ($features as $feature) { ?>
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                <h4><?php echo $feature->post_title; ?></h4>
                <p><?php echo $feature->post_content ?></p>
              </a>
            </li>
          <?php } ?>

        </ul>
      </div>
      <div class="col-lg-7 ml-auto" data-aos="fade-left">
        <div class="tab-content">
          <?php foreach ($features as $feature) { ?>
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($feature->ID), 'thumbnail_size'); ?>
                <img src="<?php echo $src[0] ?>" alt="" class="img-fluid">
              </figure>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->
