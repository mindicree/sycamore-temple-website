    <meta charset="utf-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>

    <!-- Reset and general stylings-->
    <?php include ('styles/reset.css') ?>
    <?php include ('styles/style.css') ?>
    <?php include ('styles/container.css') ?>

    <!-- Other stylings -->
    <?php
      foreach (glob('styles/*.css') as $filename) {
        include_once $filename;
      }
    ?>
