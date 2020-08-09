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

    <!-- navigation from menu.php -->
    <?php include "comp-files\menu.php"; ?>

    <!-- Content Begins Here -->

    <!-- Banner -->
    <a href="#"><img src="img\banners\0.jpg" alt="" id="banner"></a>

    <!-- Quick Links -->
    <div class="quick-links">
      <a href="#"><img src="img\quick-links\giving.jpg" alt="" class="quick-link"></a>
      <a href="#"><img src="img\quick-links\streaming.jpg" alt="" class="quick-link"></a>
      <a href="#"><img src="img\quick-links\learning.jpg" alt="" class="quick-link"></a>
    </div>

    <!-- Sycamore -->
    <div class="sycamore">
      <img src="img\assets\sycamore.jpg" alt="">
      <h6><br>"We're Better Together"<br><h5>- Sup. Samuel L Payne, Jr.</h5></h6>
    </div>



    <!-- Content Ends Here -->

    <!-- Footer from footer.php -->
    <?php include "comp-files/footer.php"; ?>

  </body>
  <?php include "comp-files/scripts.php"; ?>
</html>
