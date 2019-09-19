<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <title><?= get_titulo(); ?></title>

  <?php $home = get_template_directory_uri(); ?>

  <link rel="stylesheet" href="<?= $home ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/component.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/owl.theme.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/vegas.min.css">
  <link rel="stylesheet" href="<?= $home ?>/assets/css/style.css">

  <script src="<?= $home ?>/assets/js/jquery.js"></script>
  <script src="<?= $home ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?= $home ?>/assets/js/vegas.min.js"></script>
  <script src="<?= $home ?>/assets/js/modernizr.custom.js"></script>
  <script src="<?= $home ?>/assets/js/toucheffects.js"></script>
  <script src="<?= $home ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?= $home ?>/assets/js/smoothscroll.js"></script>
  <script src="<?= $home ?>/assets/js/wow.min.js"></script>
  <script src="<?= $home ?>/assets/js/custom.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

  <div class="preloader">
       <div class="sk-spinner sk-spinner-pulse"></div>
  </div>