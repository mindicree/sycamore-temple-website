<!DOCTYPE html>
<html lang="en" dir="ltr">

  <!-- Header info from header.php -->
  <head>
    <title>Sycamore Temple COGIC | Contact Us</title>
    <?php include "comp-files\header.php"; ?>
    <style>
      #nav-contact { background-color: var(--green);}
      #nav-contact a { color: #fff;}
    </style>

  </head>

  <body>
    <div class="page-container">
      <div class="content">
        <!-- navigation from menu.php -->
        <?php include "comp-files\menu.php"; ?>



        <!-- Content Begins Here -->
        <h1>Contact Us</h1>

        <div class="form-container">
          <form class="contact" method="post" action="contact-form-send.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="10" cols="80" placeholder="Message..."></textarea>
            <input type="submit" name="submit" value="Submit" class="contact-form-submit" required>
          </form>
        </div>




        <!-- Content Ends Here -->




      </div>
      <!-- Footer from footer.php -->
      <?php include "comp-files/footer.php"; ?>
    </div>


  </body>
  <?php include "comp-files/scripts.php"; ?>
</html>
