<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portofolio Bila</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/img/UNP.png" rel="icon">
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= Yii :: $app->getHomeUrl();?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v4.7.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <h1><a href="index.html"><span>Portofolio<br></span>Fajriana Nabila</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about-us">About Me</a></li>
          <li><a class="nav-link scrollto" href="#features">Project</a></li>
          <!-- <li><a class="nav-link scrollto" href="#screenshots">Gallery</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Hello I'am Fajriana Nabila</h1><br>
      <!-- <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2> -->
      <!-- <img src="<?= Yii::$app->getHomeUrl();?>assets/img/bils.png" alt="" data-aos="zoom-out" data-aos-delay="100"> -->
      <!-- <a href="#get-started" class="btn-get-started scrollto">Get Started</a> -->
      <!-- <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div> -->
    </div>
  </section><!-- End Hero Section -->

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= $content ?>
    </div>
</main>
<footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Fajriana Nabila</a>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p> -->

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/vendor/aos/aos.js"></script>
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= Yii :: $app->getHomeUrl();?>assets/js/main.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
