<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Header info from header.php -->
  <head>
    <title>Sycamore Temple COGIC | Announcements</title>
    <?php include "comp-files/header.php"; ?>
    <style>
      #nav-events { background-color: var(--green);}
      #nav-events a { color: #fff;}
    </style>

  </head>

  <body>
    <div class="page-container">
      <!-- navigation from menu.php -->
      <?php include "comp-files/menu.php"; ?>

      <div class="content">

        <!-- Content Begins Here -->
        <h1>Announcements</h1>

        <div class="event-list">
          <?php foreach (glob('events/*.php') as $filename) {
            include_once $filename;
          }
          ?>
        </div>
        <!--Get All Events from events folder -->



        <!-- Content Ends Here -->




      </div>
      <!-- Footer from footer.php -->
      <?php include "comp-files/footer.php"; ?>
    </div>


  </body>
  <?php include "comp-files/scripts.php"; ?>
</html>
