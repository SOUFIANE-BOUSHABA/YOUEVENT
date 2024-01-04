<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YouEvent</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
    type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>

  <?php
  $base_url = "http://localhost/";
  $path = "YOUEVENT/public/assets/css/";

  $assets = [
    "bootstrap.min.css",
    "font-awesome.min.css",
    "elegant-icons.css",
    "owl.carousel.min.css",
    "magnific-popup.css",
    "slicknav.min.css",
    "style.css",
  ];

  foreach ($assets as $v) {
    ?>
    <link rel="stylesheet" href="<?= $base_url . $path . $v ?>" type="text/css">
    <?php
  }
  ?>

</head>