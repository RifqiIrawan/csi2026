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
    font-size: 50px;
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
      padding: 0px 0px 0px;
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

  .max-lines2 {
    display: block;/* or inline-block */
    text-overflow: ellipsis;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 4em;
    /* line-height: 1.8em; */
  }

  .max-lines3 {
    display: block;/* or inline-block */
    text-overflow: ellipsis;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 6.5em;
    /* line-height: 1.8em; */
  }

  .team .member img {
    margin: 0px 0px 20px 0px;
    min-height: 300px;
  }

  .member-content p{
    /* text-align:left; */
    font-family: Poppins, sans-serif;
    margin-top: -12px;
  }
</style>


<?php 
  if($this->session->flashdata('simpan')){
    echo '<script type="text/javascript">
            $(document).ready(function(){
              swal({
                  title: "Save Success",
                  text: "Data Saved Successfully.",
                  icon: "success",
                  timer: 3000,
                  button: true
              }).then(function() {      
              });                   
            });
          </script>';
  }
  if($this->session->flashdata('tidak')){
    echo    '<script type="text/javascript">
                $(document).ready(function(){
                    swal({
                      title: "Failed",
                      text: "Data Failed to Save.",
                      icon: "error",
                      timer: 3000,
                      button: true
                    }).then(function() {
                    });
                });
            </script>';
    }

    if($this->session->flashdata('ubah')){
        echo    '<script type="text/javascript">
                    $(document).ready(function(){
                      swal({
                        title: "Update Success",
                        text: "Data Successfully Updated.",
                        icon: "info",
                        timer: 3000,
                        button: true
                      }).then(function() {
                      });
                    });
                </script>';
      }
    if($this->session->flashdata('tidak_ubah')){
      echo    '<script type="text/javascript">
                  $(document).ready(function(){
                    swal({
                        title: "Update Failed",
                        text: "Data Failed to Update.",
                        icon: "error",
                        timer: 3000,
                        button: true
                    }).then(function() {
                    });
                  });
                </script>';
    }
?>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url("dashboard");?>" class="logo d-flex align-items-center">
        <img width="215" height="50" src="<?php echo base_url($folder."".$logo);?>" alt="<?php echo base_url($nick_name);?>">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown"><a href="#"><span>Home</span></a>
            <ul>
              <li><a href="#about">Company Profile</a></li>
              <li><a href="#partners">Partners</a></li>
            </ul>
          </li>
          <li><a href="#product">Products and Services</a></li>
          <li><a href="#event">Events</a></li> 
          <li><a href="#news">News Update</a></li> 
          <li><a href="#contact">Contact Us</a></li> 
          <!--<li><a href="#about">Company Profile</a></li>
          <li><a href="#services">Products and Services</a></li>
          <li><a href="#customer">Customer</a></li>
          <li><a href="#contact">Contact Us</a></li>          -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide carousel-fade active" data-bs-ride="carousel" data-bs-interval="5000">     
        <?php foreach($data_slide as $row){ 
          $file = $row->folder_name."".$row->file_name;
          $img = "".$file."";

          if($row->urut == 1){
            $act = "active";
          }else{            
            $act = "";
          }
        ?> 
        <div class="carousel-item <?php echo $act; ?>">
          <img src="<?php echo base_url($img); ?>">
        </div>
        <?php } ?>        
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"></ol>
      </div>
    </section><br><br><br>

    <section id="partners" class="portfolio section">
      <div class="container section-title heading_style4 center" data-aos="fade-up">
        <span class="description-title">Our Partners</span>
        <h2>Our <span>Partners</span></h2>
      </div>

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row gy-4 isotope-container" data-aos-delay="200">
            <?php 
              foreach($data_slide2 as $row2){ 
                $file2 = $row2->folder_name."".$row2->file_name;
                $img2 = "".$file2."";
            ?> 
            <div class="col-lg-3 col-md-1 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <!-- <img src="<?php echo base_url();?>Website/assets/img/portfolio/client1.jpg" class="img-fluid" alt=""> -->
                <a href="<?php echo $row2->url ?>" class="stretched-link" target="_blank"></a>
                <img src="<?php echo base_url($img2); ?>" class="img-fluid con_partner img-partner" alt="">
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section><br><br><br>

    <section id="about" class="features section">
      <?php 
        $n = 1;
        foreach($data_slide3 as $row3){ 
        $file3 = $row3->folder_name."".$row3->file_name;
        $img3 = "".$file3."";

        $explode = explode(" ",$row3->nama);
        $exp = $explode;

        if($n > 1){
          $style = 'style = "margin-top:-60px;"';
        }else{
          $style = "";
        }
      ?> 
      <div class="container section-title heading_style4 left" <?php echo $style ?>>        
        <div class="row gy-4">
          <div class="col-xl-5 col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo base_url($img3);?>" class="img-fluid" alt="">
          </div>
          <div class="col-xl-7 col-lg-6 d-flex flex-column justify-content-center px-lg-5 container section-title heading_style4 center" data-aos-delay="200">
            <div style="text-align:left;margin-left:15px" >
              <h2><?php echo $exp[0];?><span>&nbsp; <?php echo $exp[1];?></span></h2>              
            </div>
            <div class="icon-box d-flex position-relative" style="margin:15px;margin-top: 35px; text-align: left;">
              <div>
                <p class="description">
                  <?php echo $row3->description; ?>
                </p>
              </div>
            </div><br>
          </div>          
        </div>
      </div>        
      <?php
        $n++; 
        } 
      ?>    
    </section><br><br><br>

    <section id="product" class="portfolio section">
      <div class="container section-title heading_style4 center" data-aos="fade-up">
        <span class="description-title">Our Products and Services</span>
        <h2>Our <span>Products</span> and <span>Services</span></h2>
      </div>
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <?php 
            foreach($data_slide4 as $row4){ 
              $file4 = $row4->folder_name."".$row4->file_name;
              $img4 = "".$file4."";
              $explode4 = explode(".",$row4->file_name);
              $exp4 = $explode4;
          ?> 
          <div class="row gy-4 isotope-container" data-aos-delay="200">
            <div class="col-lg-2 col-md-3 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <?php if($exp4[1] == "pdf"){?>                  
                  <iframe class="responsive" src="<?php echo $file4."#toolbar=0&navpanes=0&scrollbar=0'frameBorder='0'scrolling='none'";?>"  frameborder="0" allowfullscreen="" webkitallowfullscreen=""></iframe>
                  <!-- <embed src="<?php echo $file4?>" type="application/pdf" class="img-fluid responsive"> -->
                  <!-- <object width="400" type="application/pdf" data="<?php echo $file4?>?#zoom=85&scrollbar=0&toolbar=0&navpanes=0"></object> -->
                <?php }else{ ?>                
                  <img src="<?php echo base_url($img4); ?>" class="img-fluid" alt="">
                <?php } ?>
                <div class="portfolio-info">
                  <h4><?php echo $row4->nama?></h4>
                  <!-- <p>Chem Cleaner Brochure</p> -->
                  <a href="<?php echo base_url($img4); ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <section id="event" class="team section">
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <span class="description-title">Event</span>
        <h2>Event</h2>
      </div>
      <div class="container">             
        <div class="row">
          <?php 
            foreach($data_event as $row5){
              $id5 = $row5->id; 
              $file5 = $row5->folder_name."".$row5->file_name;
              $img5 = "".$file5."";
          ?> 
          <div class="col-lg-4 col-md-6 d-flex aos-init aos-animate" data-aos-delay="100">
            <div class="member">
              <img src="<?php echo base_url($img5); ?>" class="img-fluid img-event " alt="">
              <div class="member-content max-lines3">
                <h4><a href="<?php echo base_url("event/event_update/".$id5);?>" class=""><?php echo $row5->nama?></a></h4>
                <p class="konten_text">
                  <!-- Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut -->
                  <?php echo $row5->description?>
                </p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>        
      </div>
    </section>

    <section id="news" class="services section">
      <div class="container section-title heading_style4 center">
        <span class="description-title">News Update</span>
        <h2>News <span>Update</span></h2>
      </div>
      <div class="container">
        <div class="row gy-4">
          <?php 
            foreach($data_news as $row6){ 
              $id6 = $row6->id;
              $file6 = $row6->folder_name."".$row6->file_name;
              $img6 = "".$file6."";
          ?> 
          <div class="col-md-6 aos-init">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-globe icon flex-shrink-0"></i>
              <div class="max-lines2">
                <h4 class="title"><a href="<?php echo base_url("news/info_news/".$id6);?>" title="Info News"><?php echo ucwords($row6->nama)?></a></h4>
                <p class="description max-lines"><?php echo $row6->description?></p>
              </div>
            </div>
          </div>    
          <?php } ?>     
        </div>
      </div>
    </section>  <br><br><br>

    <section id="customer" class="faq section">
      <div class="container section-title heading_style4 center" data-aos="fade-up">
        <span class="description-title">Our Customer</span>
        <h2>Our <span>Customer</span></h2>
      </div>

      <div class="container">
        <div class="row justify-content-left">
          <div class="col-lg-12">
            <div class="faq-container">
              <div class="faq-item" data-aos-delay="200">
                <!-- <i class="faq-icon bi bi-question-circle"></i> -->
                <h3>Domestic Customer</h3>
                <div class="faq-content">
                  <div style="min-height:10px"><hr><br>
                    <table class="table table-bordered">
                      <thead class="table-active">
                        <tr>
                          <th width="5%">NO</th>
                          <th>CUSTOMER</th>
                          <th>GOODS / SERVICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $nt = 1;
                          foreach($tbl_dom as $r_tbl){
                            echo "<tr>
                                    <td align=\"center\">".$nt."</td>
                                    <td>".$r_tbl->nama."</td>
                                    <td>".$r_tbl->services."</td>
                                  </tr>";
                            $nt++;
                          }
                        ?>
											</tbody>
                    </table>
                  </div>                 
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item" data-aos-delay="300">
                <h3>Overseas Customer</h3>
                <div class="faq-content">
                  <div style="min-height:10px"><hr><br>
                    <table class="table table-bordered">
                      <thead class="table-active">
                        <tr>
                          <th>NO</th>
                          <th>CUSTOMER</th>
                          <th>GOODS / SERVICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $nt2 = 1;
                          foreach($tbl_over as $r_tbl2){
                            echo "<tr>
                                    <td align=\"center\">".$nt2."</td>
                                    <td>".$r_tbl2->nama."</td>
                                    <td>".$r_tbl2->services."</td>
                                  </tr>";
                            $nt2++;
                          }
                        ?>
										  </tbody>
                    </table>
                  </div>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br>

    <section id="contact" class="contact section">
      <div class="container section-title heading_style4 center" data-aos="fade-up">
        <span class="description-title">Contact Us</span>
        <h2>Contact <span>Us</span></h2>
      </div><br><br><br>
      
      <div class="container section-title heading_style4 left">        
        <div class="row gy-4">
          <div class="col-xl-6 col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <form action="<?php echo base_url(); ?>Dashboard/submit_form" method="post" class="php-email-form" data-aos-delay="200" style="margin: 20px;">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-xl-6 col-lg-6" data-aos-delay="200">
            <ul class="list-style-none">
              <li>Email : <a href="mailto:contact@keliechem.com"><?php echo $email?></a></li>
              <li>Phone: <a href="tel:+62214532003"><?php echo $phone?></a></li><br>
              <li>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</li><br>
              <li>We are open from 9AM – 5PM week days.</li>
            </ul>
            <div class="map">
			        <iframe src="<?php echo trim($gmaps)?>" width="600" height="195" frameborder="0" style="border:0" allowfullscreen=""></iframe>		  
            </div>
          </div>          
        </div>
      </div> <br>
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

<script src="<?php echo base_url();?>Website/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Website/assets/js/jquery.cookie.min.js"></script>
<script type="text/javascript">  
  $(document).ready(function() {      
    $.getJSON('https://ipinfo.io/json', function(data) {
      var ip = JSON.stringify(data["ip"], null, 2);
      var city = JSON.stringify(data["city"], null, 2);
      var country = JSON.stringify(data["country"], null, 2);
      var loc = JSON.stringify(data["loc"], null, 2);
      var org = JSON.stringify(data["org"], null, 2);
      var timezone = JSON.stringify(data["timezone"], null, 2);
      //console.log(JSON.stringify(data, null, 2));
      //console.log(ip+" - "+city+" - "+country+" - "+loc+" - "+org+" - "+timezone);

      $.ajax({
          url: "<?php echo base_url()?>Login/save_ip_visitor",
          type: 'post',
          data: {ip : ip, city : city, country : country, loc : loc, org : org, timezone : timezone},
          success: function (data) {
            //console.log(data);      
          }
      });  
    });
  });  
</script>

</html>