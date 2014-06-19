<!DOCTYPE html>
<html lang="id">
  <head>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="Hege Refsnes">
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Dental Zone</title><!--Bootstrap-->
    <link rel="icon" type="image/ico" href="<?php echo base_url('assets/images/dental-zone.png'); ?>"/>
    <link href="<?php echo base_url('assets/styles/style2.css'); ?>" rel="stylesheet">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries--><!--WARNING: Respond.js doesn't work if you view the page via file://--><!--[if lt IE 9]
    | <script src="js/html5shiv.js"></script>
    | <script src="js/respond.min.js"></script>-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-blue" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="<?php echo site_url('home'); ?>">
            <div class="brand-wrapper">
              <img alt="Dental Zone | Klinik Gigi Bandung" src="<?php echo base_url('assets/images/dental-zone.jpg'); ?>">
              <h1>
                Dental<br>Zone
              </h1>
            </div>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav main-header-nav">
            <li>
              <a href="<?php echo site_url('home'); ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo site_url('news'); ?>">News</a>
            </li>
            <li>
              <a href="<?php echo site_url('profile'); ?>">Profile</a>
            </li>
            <li>
              <a href="<?php echo site_url('treatments'); ?>">Treatments</a>
            </li>
            <li>
              <a href="<?php echo site_url('about-us'); ?>">About Us</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right social-header-nav hidden-sm">
            <li class="menu-label">
              follow us
            </li>
            <li>
              <a href="<?php echo $homepage->twitter; ?>" target="blank"><i class="fa fa-twitter-square"></i></a>
            </li>
            <li>
              <a href="<?php echo $homepage->facebook; ?>" target="blank"><i class="fa fa-facebook-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>