<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Coating Show</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>Website/assets/img/logo_csi.png" rel="icon">
  <link href="<?php echo base_url();?>Website/assets/img/logo_csi.png" rel="logo_title">
  
  <!-- Fonts -->
  <link href="<?php echo base_url();?>Website/assets/css/maps.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>Website/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url();?>Website/assets/css/main.css" rel="stylesheet">  
  <script src="<?php echo base_url();?>Website/assets/js/sweetalert.min.js"></script>
  <!-- Header CSS File -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="<?php echo base_url("dashboard");?>" class="logo d-flex align-items-center">
            <img width="190" height="70" src="<?php echo base_url($folder."coating_show.png");?>" alt="<?php echo base_url($nick_name);?>">
            </a>
            <nav id="navmenu" class="navmenu">
            <ul>
                <li class="dropdown"><a href="#"><span>Home</span></a>
                <ul>
                    <li><a href="<?php echo base_url("dashboard#about");?>">Exhibiting</a></li>
                    <li><a href="<?php echo base_url("dashboard#partners");?>">Visiting</a></li>
                </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Visiting</span></a>
                <ul>
                    <li><a href="<?php echo base_url("visiting");?>">WHY VISIT</a></li>
                    <li><a href="<?php echo base_url("visiting");?>">CONFERENCE SCHEDULE</a></li>
                </ul>
                </li>
                <li><a href="#product">Information</a></li>
                <li><a href="#product">Contact</a></li>
                <li><a href="#product">News Upadate </a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>