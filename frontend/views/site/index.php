<?php
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<main id="main">






  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us padd-section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="<?= Yii::$app->getHomeUrl(); ?>assets/img/bils.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
        </div>

        
        <div class="col-md-7 col-lg-5">
          <div class="about-content" data-aos="fade-left" data-aos-delay="100">


          <!-- pemanggilan visi -->
            <h1>Tentang Saya</h1>
            <?php foreach ($modelVisi as $val) : ?>
              <p>
                <?= $val->isi ?>
              </p>
              <ul class="list-unstyled">
              </ul>
            <?php endforeach; ?>




          <!-- pemanggilan misi -->
             <h1>Riwayat Pendididikan</h1>
            <?php foreach ($modelMisi as $val) : ?>
              <p>
                <?= $val->isi ?>
              </p>
              <ul class="list-unstyled">
              </ul>
            <?php endforeach; ?> 




          </div>
        </div>

      </div>
    </div>
  </section><!-- End About Us Section -->






  <!-- ======= Features Section ======= -->
  <section id="features" class="padd-section text-center">

    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <h2>Project</h2>
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-50 col-lg-50">
          <div class="feature-block">
            <img src="assets/img/svg/cloud-computing.svg" alt="img">


            <?php foreach ($modelStruktur as $val) : ?>
              <p>
                <?= $val->isi ?>
              </p>
              <ul class="list-unstyled">
              </ul>
            <?php endforeach; ?>



            <!-- <p>....</p> -->
          </div>
        </div>
  </section><!-- End Features Section -->




  <!-- ======= Screenshots Section ======= -->
  <!-- <section id="screenshots" class="padd-section text-center">

    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <h2>Gallery</h2> -->
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
      <!-- </div>
      <div class="screens-slider swiper">
        <div class="align-items-center">
        <?php foreach ($modelGambar as $val) : ?>
          <div class="swiper-slide"><img src="<?= Url::toRoute(['../../backend/web/uploads_gambar/' . $val->img]) ?>" ></div><br> 
<?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section> -->
  <!-- End Screenshots Section -->







  <!-- ======= Contact Section ======= -->
  <section id="contact" class="padd-section">

    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <h2>Contact</h2>
        <!-- <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="bi bi-geo-alt"></i>
              <p>Padang<br>Kos Musa Enda</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <p>fajryananabila16@gmail.com</p>
            </div>

            <div>
              <i class="bi bi-phone"></i>
              <p>081234567890</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->