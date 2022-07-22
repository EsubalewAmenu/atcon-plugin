<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">

        <div class="row no-gutters">

        <?php for ($i = 0; $i < count($steps); $i++) { ?>
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
            <span>0<?php echo ($i+1); ?></span>
            <h4><?php echo $steps[$i]->post_title; ?></h4>
            <p><?php echo $steps[$i]->post_content ?></p>
          </div>
            <?php } ?>


        </div>

      </div>
    </section><!-- End Steps Section -->
