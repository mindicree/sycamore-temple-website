<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Header info from header.php -->
  <head>
    <title>Sycamore Temple COGIC | Home</title>
    <?php include "comp-files/header.php"; ?>
    <style>
      #nav-home { background-color: var(--green);}
      #nav-home a { color: #fff;}
    </style>

  </head>

  <body>
    <div class="page-container">
      <div class="content">
        <!-- navigation from menu.php -->
        <?php include "comp-files/menu.php"; ?>

        <!-- Content Begins Here -->

        <!-- New Banner -->
        <div class="front-banner">
          <div class="banner-text-container">
            <h3>Sycamore Temple
              <span style="font-size: 42px;"><br>Church of God in Christ</span>
              <span style="text-decoration: underline; line-height: 1px; font-size: 35px;"><br>Services and Times </span>
              <h4>Sunday School: 09:45 a.m. <br> Morning Worship: 11:00 a.m. <br> YPWW: 7:00 p.m. </h4>
            </h3>
          </div>
          <img src="img\banner-image-2.png" alt="" id="banner-image">
        </div>

        <!-- Banner
        <div class="banner-wrapper-outer">
          <div class="banner-wrapper">
            <a href="#"><img src="img/banners/0.jpg" alt="" id="banner-0" class="banner" style="opacity: 1; z-index: 5;"></a>
            <a href="#"><img src="img/banners/1.jpg" alt="" id="banner-1" class="banner" style="opacity: 0; z-index: 4;"></a>
            <a href="#"><img src="img/banners/2.jpg" alt="" id="banner-2" class="banner" style="opacity: 0; z-index: 3;"></a>
            <a href="#"><img src="img/banners/3.jpg" alt="" id="banner-3" class="banner" style="opacity: 0; z-index: 2;"></a>
            <a href="#"><img src="img/banners/4.jpg" alt="" id="banner-4" class="banner" style="opacity: 0; z-index: 1;"></a>
            <a href="#"><img src="img/banners/5.jpg" alt="" id="banner-5" class="banner" style="opacity: 0; z-index: 0;"></a>
          </div>
        </div>
      -->

        <!-- Quick Links -->
        <div class="quick-links">
          <a href="#"><img src="img\quick-links\giving.jpg" alt="" class="quick-link"></a>
          <a href="#"><img src="img\quick-links\streaming.jpg" alt="" class="quick-link"></a>
          <a href="#"><img src="img\quick-links\learning.jpg" alt="" class="quick-link"></a>
        </div>

        <!-- Sycamore -->
        <div class="sycamore">
          <img src="img\assets\sycamore.jpg" alt="">
          <h6>"We're Better Together" <br><span class="quote"> - Sup. Samuel L Payne, Jr. </span></h6>
          <img src="img\assets\sycamore.jpg" alt=""></img>
        </div>
        <!-- Content Ends Here -->
      </div>
      <!-- Footer from footer.php -->
      <?php include "comp-files/footer.php"; ?>
    </div>


  </body>
  <!-- Scripts -->
  <?php include "comp-files/scripts.php"; ?>
</html>
