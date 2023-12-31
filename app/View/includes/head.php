<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YouEvent</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
    type='text/css'>

  <?php
  $path = "./assets/css/";

  $assetsToLoad = [
    "bootstrap.min.css",
    "font-awesome.min.css",
    "elegant-icons.css",
    "owl.carousel.min.css",
    "magnific-popup.css",
    "slicknav.min.css",
    "style.css",
  ];

  foreach ($assetsToLoad as $v) {
    echo "<link rel='stylesheet' href='{$path}{$v}' type='text/css'>\n";
  }
  ?>

</head>