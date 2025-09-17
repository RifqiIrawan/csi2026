<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $company_name?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="icon">
  <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="logo_title">

  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> -->
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

</head>

<style>
  body {
    color: var(--default-color);
    background-color: var(--background-color);
    font-family: var(--default-font);
    font-family: Poppins, sans-serif;
  }
  .header {
    color: #ffffff;
    background-color: rgba(0, 0, 0, .95);
    padding: 15px 0;
    transition: all 0.5s;
    z-index: 997;
  }

  .header .logo img {
    max-height: 45px;
    margin-right: 8px;
  }

  @media (min-width: 1200px) {
    .navmenu li:hover>a, .navmenu .active, .navmenu .active:focus {
        /* color:#1c9356; */
        color:#fff;
    }
  }

  @media (min-width: 1200px) {
    .navmenu a, .navmenu a:focus {
      color: #ffffff;
      padding: 15px 20px;
      font-size: 15px;
      font-family: var(--nav-font);
      font-weight: 500;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }
  }

  .hero .carousel {
    width: 100%;
    min-height: 100vh;
    padding: 0;
    margin: 0;
    background-color: var(--background-color);
    position: relative;
  }

  .dark-background {
  --background-color: transparent;
      
  }

  @media (max-width: 1199px) {
    .hero .carousel {
      width: 100%;
      min-height: 30vh;
      padding: 0;
      margin: 0;
      background-color: var(--background-color);
      position: relative;
    }
  }

  .footer {
    color: var(--default-color);
    background-color: black;
    font-size: 14px;
    position: relative;
  }
  
  .section-title h2 { 
    font-size: 50px;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 20px;
    padding-bottom: 0;
    position: relative;
    z-index: 2;
  }

  .heading_style4.center h2::after {
    margin-left: -65px;
    left: 50%;
  }

  .heading_style4 h2::after {
    background: #111;
    height: 2px;
    left: 0;
    position: absolute;
    bottom: -30px;
    width: 130px;
    margin-left: 0;
  }

  .heading_style1:before, .heading_style3 h2::after, .heading_style4 h2::after, .section-header.heading_style2::after {
    content: "";
  }

  :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  .heading_style4 h2 span, .heading_style5 span, .sub_total span, #navigation .nav.navbar-nav a:hover, .top-search .search-btn:hover, #navigation .nav.navbar-nav li .sub-menu li a:hover, .intro_restaurant .intro_text span, .color_icon .fa, .icon_div, .testimonial_footer:after, .post_meta ul li a:hover, .widgets_icon, .footer_top ul li a:hover, .footer_top ul li a:hover:after, .rec_info .rec_meta a:hover, #footer .rec_info a h6:hover, .follow_us ul li a:hover, .footer_style_6 nav ul li a:hover, .footer_style_6 .footer-style-bottom ul li a:hover, .social_group_style3 li a:hover, .experience_list h6, .filter_project_menu li a:hover, .filter_project_menu li.active a, .top-icon i, .portfolio-tab ul li a:hover, .portfolio-tab ul li.active a, .video-play a:hover, .author-text i, ul.page-numbers .page-numbers.next:hover, ul.page-numbers .page-numbers.next:focus, ul.page-numbers .page-numbers.prev:hover, ul.page-numbers .page-numbers.prev:focus, .post_elements ul li a:hover, .post_tags a, .comming-soon-right-header, .intro_restaurant .intro_text span, .heading_style5 span, .menu_list li .menu_price, .restro_menu .btn.outline, .event-schudule h6 a, .header_style3 #navigation .nav.navbar-nav li > a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6 {
    color: #1c9356;
    fill: #1c9356;
    font-size: 28px;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 20px;
    padding-bottom: 0;
    position: relative;
    z-index: 2;
  }

  @media (max-width: 600px) {
    .section-title h2 , .heading_style4 h2 span {
      font-size: 30px;
      font-weight: 500;
    }
  }

  .portfolio .portfolio-content .portfolio-info .preview-link, .portfolio .portfolio-content .portfolio-info .details-link {
    position: absolute;
    left: calc(50% - 40px);
    font-size: 40px;
    top: calc(50% - 14px);
    color: #fff;
    transition: 0.3s;
    line-height: 1.2;
    margin-left: 1.2rem;
  }

  .bi::before, [class^="bi-"]::before, [class*=" bi-"]::before {
    display: inline-block;
    font-family: bootstrap-icons !important;
    font-style: normal;
    font-weight: normal !important;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    text-align: center;
    vertical-align: -.125em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .features .video-box img {
    position: absolute;
    inset: 0;
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    z-index: 1;
  }

  .features .icon-box .description {
    line-height: 24px;
    font-size: 16px;
    margin-bottom: 0;
    text-align: left;
  }

  .heading_style4.left h2::after {
    margin-left: 0px;
    left: 0%;
  }

  .img-fluid {        
    width: 100%;
  }

  .features{
    padding: 60px 10px 0px;
    margin-bottom: -60px;
  }

  /* .g-4, .gy-4 {
    --bs-gutter-y: 1.5rem;
    padding: 0px 20px 0px;
  } */

  html:not(.no-js) [data-aos^=zoom][data-aos^=zoom].aos-animate {
    opacity: 1;
    -webkit-transform: translateZ(0) scale(1);
    transform: translateZ(0) scale(1);
    /* min-height: 240px; */     
  }

  .portfolio .portfolio-content .portfolio-info h4 {
    font-size: 16px;
    padding: 5px 10px;
    font-weight: 400;
    color: #ffffff;
    display: inline-block;
    background-color: var(--accent-color);
  }

  .black{
    background: #111;
    margin-top: 3rem;
  }

  .faq .faq-container .faq-item h3 {
    font-weight: 600;
    font-size: 26px;
    line-height: 24px;
    margin: 0 30px 0 32px;
    transition: 0.3s;
    cursor: pointer;
    color: black;
  }

  .faq .faq-container .faq-active .faq-content {
    grid-template-rows: 1fr;
    visibility: visible;
    opacity: 1;
    padding-top: 10px;
    color: black;
  }

  .faq .faq-container .faq-active {
    background-color: color-mix(in srgb, var(--default-color), transparent 96%);
    transition: 0.3s;
  }

  .faq .faq-container .faq-active h3, .faq .faq-container .faq-active h3:hover, .faq .faq-container .faq-active .faq-toggle, .faq .faq-container .faq-active .faq-icon, .faq .faq-container .faq-active .faq-content {
    color: #000;
  }

  .faq .faq-container .faq-item {
    background-color: 
    color-mix(in srgb, var(--default-color), transparent 96%);
    position: relative;
    padding: 10px;
    margin-bottom: 20px;
    overflow: hidden;
    transition: 0.3s;
  } 

  .table>thead {
    vertical-align: bottom;
    text-align: center;
    background: gainsboro;
  }

  tbody, td, tfoot, th, thead, tr {
    border-color: #cacaca;
    border-style: solid;
    border-width: 0;
  }
  
  .scroll-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    background-color: #1c9356;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
  }

  .stats .stats-item span {
    font-size: 48px;
    display: block;
    color: #1c9356;
    font-weight: 700;
  }

  .contact3 ul {
    margin-bottom: 25px;
  }

  .list-style-none {
    margin: 0;
    padding: 10px;
    list-style: none;
    text-align: left;
    margin-left: 10px;
  }
  .map {
    position: relative;
    margin-top: 0px;
  }

  input[type=text], input[type=password], input[type=number], input[type=email], input[type=url], input[type=search], select, textarea {
    background: #fff;
    border: 2px solid #d9d9d9;
    border-radius: 0;
    box-shadow: none;
    color: #888;
    font-size: 16px;
    height: 60px;
    line-height: 30px;
    padding: 0 15px;
    width: 100%;
  }

  textarea.form-control {
    padding: 15px;
    height: 160px;
    border: 2px solid #d9d9d9;
  }
  
  .contact .php-email-form button[type=submit] {
    color: var(--contrast-color);
    background: var(--accent-color);
    border: 0;
    padding: 10px 30px;
    transition: 0.4s;
    border-radius: 4px;
    font-weight: 400;
    margin: auto;
    padding: 15px 50px;
    color: #fff;
    line-height: 30px;
    width: -webkit-fill-available;
  }

  iframe {
    border: 0;
    height: 225px;
  }

  .secondary-bg {
    background-color: #111 !important;
    color: #fff;
    position: relative;
  }

  .footer .footer-links {
    margin-bottom: 50px;
    text-align: left;
  }

  .footer .footer-top {
    border-top: 1px solid 
    color-mix(in srgb, var(--default-color), transparent 90%);
  }

  .footer_top {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .footer_widgets {
    flex: 0 0 auto;
    margin: 80px auto;
  }

  .footer-about{
    text-align: center;
  }

  @media (max-width: 600px) {
    .footer .footer-links {
      margin-bottom: 0px;
      text-align: left;
      /* margin-left: 10px; */
    }

    .footer .footer-about {
      margin-bottom: 0px;
      text-align: left;
      /* margin-left: 10px; */
    }

    .footer .social-links{
      position: relative;
      left:0%;
    }

    iframe {
      padding: 10px 20px 0px;
      position: initial;
      width: -webkit-fill-available;
    }

    .con_partner{
      width: max-content;
      position: relative;
    }

    .portfolio .portfolio-content {
      position: relative;
      overflow: hidden;
      text-align: center;
    }
  }

  .social-links{
    position: relative;
    left:21%;
  }

  .footer .copyright p {
    margin: 0px 10px;
  }
  
  .img-partner{    
    max-height: 175px;
  }

  .img-event{    
    max-height: 278px;
    max-width: 380px;
  }

  .max-lines {
    display: block;/* or inline-block */
    text-overflow: ellipsis;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 3.6em;
    /* line-height: 1.8em; */
  }

    section, .section {
        color: var(--default-color);
        background-color: var(--background-color);
        padding: 0px 0;
        scroll-margin-top: 85px;
        overflow: clip;
    }
</style>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url("dashboard");?>" class="logo d-flex align-items-center">
        <img width="215" height="50" src="<?php echo base_url($folder."".$logo);?>" alt="<?php echo base_url($nick_name);?>">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown"><a href="<?php echo base_url();?>dashboard"><span>Home</span></a>
            <ul>
              <li><a href="<?php echo base_url();?>dashboard/#about">Company Profile</a></li>
              <li><a href="<?php echo base_url();?>dashboard/#partners">Partners</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url();?>dashboard/#product">Products and Services</a></li>
          <li><a href="<?php echo base_url();?>dashboard/#event">Events</a></li> 
          <li><a href="<?php echo base_url();?>dashboard/#news">News Update</a></li> 
          <li><a href="<?php echo base_url();?>dashboard/#contact">Contact Us</a></li> 
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <?php 
        $n = 1;
        $row = $data_event_update->row();  
        $file = $row->folder_name."".$row->file_name;
        $img = "".$file."";

        $explode = explode(" ",$row->nama);
        $exp = $explode;

        if($n > 1){
          $style = 'style = "margin-top:-60px;"';
        }else{
          $style = "";
        }
    ?> 

    <div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-12">
              <h1>Event</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="service-details" class="service-details section" style="margin-top:-30px;margin-bottom: 3rem;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo base_url($img);?>" alt="" class="img-fluid services-img">            
          </div>
          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <h3><?php echo $row->nama; ?></h3>
          </div><br>
          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <p>
            <?php echo $row->description; ?>
            </p>
          </div><br><br>
        </div>

      </div>

    </section>


  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 footer-about">
          <img width="215" height="50" src="<?php echo base_url($folder."".$logo);?>" class="attachment-full size-full" alt="">
          <div class="social-links d-flex mt-3">
            <?php 
              foreach($data_sosmed as $row_sosmed){ 
            ?> 
            <a href="<?php echo $row_sosmed->url ?>" title="<?php echo ucwords($row_sosmed->nama)?>"><i class="<?php echo "bi bi-".$row_sosmed->icon;?>"></i></a>
            <?php } ?>
          </div>
        </div>
        
        <div class="col-lg-1 col-md-3 footer-links">
        </div>
        <div class="col-lg-3 col-md-3 footer-links">
          <p>
            <strong  class="text-left">
              <?php echo $company_name?>
            </strong><br>
            <?php echo $address?>
          </p>
        </div>

        <div class="col-lg-1 col-md-3 footer-links">
        </div>

        <div class="col-lg-3 footer-links">
          <p>Phone: <a href="tel:"<?php echo $phone?>><?php echo $phone?></a><br>
            Fax: <a href="tel:"<?php echo $fax?>><?php echo $fax?></a><br>
            email : <a href="mailto:"<?php echo $email?>><?php echo $email?></a><br>
            Website: <a href="<?php echo $website?>"><?php echo $website?></a>
          </p>
        </div>
      </div><br>
    </div>

    <div class="container copyright text-center mt-4">
    <p>Copyright © <?php echo date('Y');?> <?php echo $company_name?>. All Right Reserved.</p>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
</body>

<script src="<?php echo base_url();?>Website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?php echo base_url();?>Website/assets/vendor/php-email-form/validate.js"></script> -->
<script src="<?php echo base_url();?>Website/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/js/main.js"></script>

</html>