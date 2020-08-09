<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Header info from header.php -->
  <head>
    <title>Sycamore Temple COGIC | Home</title>
    <?php include "comp-files\header.php"; ?>
    <style media="screen">
      #nav-home { background-color: #0e4d44;}
      #nav-home a { color: #fff;}
    </style>

  </head>

  <body>
    <div class="page-container">
      <div class="content">
        <!-- navigation from menu.php -->
        <?php include "comp-files\menu.php"; ?>

        <!-- Content Begins Here -->

        <!-- Banner -->
        <div class="banner-wrapper">
          <a href="#"><img src="img\banners\0.jpg" alt="" id="banner"></a>
        </div>

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
        </div>
        <!-- Content Ends Here -->
      </div>
      <!-- Footer from footer.php -->
      <?php include "comp-files/footer.php"; ?>
    </div>


  </body>
  <?php include "comp-files/scripts.php"; ?>
</html>
