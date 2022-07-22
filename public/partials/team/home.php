<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title">
      <h2>Team</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

        <?php foreach ($teams as $team) { ?>
          <div class="col-xl-3 col-lg-4 col-md-6" >
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $team->post_title; ?></h4>
                  <span><?php echo $team->post_content ?></span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->