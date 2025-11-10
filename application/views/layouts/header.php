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
  <link href="<?php echo base_url();?>Website/assets/img/logo_csi.png" rel="logo_csi">
  <link href="<?php echo base_url();?>Website/assets/css/maps.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>Website/assets/css/main.css" rel="stylesheet">  
  <link rel="stylesheet" href="<?php echo base_url();?>./assets/coatingshow/font-icons.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>./assets/coatingshow/animate.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>./assets/coatingshow/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://coatingshow.com/css/font-icons.css" type="text/css">
  <link rel="stylesheet" href="https://coatingshow.com/css/animate.css" type="text/css">
  <link rel="stylesheet" href="https://coatingshow.com/css/magnific-popup.css" type="text/css"> -->
  <script src="<?php echo base_url();?>Website/assets/js/sweetalert.min.js"></script>
  <script src="<?php echo base_url();?>./assets/coatingshow/lazysizes.min.js"></script>
</head>

<style>
    .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
      --bs-gutter-x: 2rem;
      --bs-gutter-y: 0;
      width: 100%;
      padding-right: calc(var(--bs-gutter-x) * .5);
      padding-left: calc(var(--bs-gutter-x) * .5);
      margin-right: auto;
      margin-left: auto;
      color: #000;
    }
    .media-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
      margin-top: 30px;
    }
    /* Previous button  */
    .media-carousel .carousel-control.left 
    {
      left: -12px;
      background-image: none;
      background: none repeat scroll 0 0 #222222;
      border: 4px solid #FFFFFF;
      border-radius: 23px 23px 23px 23px;
      height: 40px;
      width : 40px;
      margin-top: 30px
    }
    /* Next button  */
    .media-carousel .carousel-control.right 
    {
      right: -12px !important;
      background-image: none;
      background: none repeat scroll 0 0 #222222;
      border: 4px solid #FFFFFF;
      border-radius: 23px 23px 23px 23px;
      height: 40px;
      width : 40px;
      margin-top: 30px
    }
    /* Changes the position of the indicators */
    .media-carousel .carousel-indicators 
    {
      right: 50%;
      top: auto;
      bottom: 0px;
      margin-right: -19px;
    }
    /* Changes the colour of the indicators */
    .media-carousel .carousel-indicators li 
    {
      background: #c0c0c0;
    }
    .media-carousel .carousel-indicators .active 
    {
      background: #333333;
    }
    .media-carousel img
    {
      width: 250px;
      height: 100px
    }

    body {
      font-size: 1rem;
      font-weight: 400;
      font-style: normal;
      color: #000;
      margin: 0;
      overflow-x: hidden
    }

    body,h1,h2,h3,h4,h5,h6 {
      /* color: var(--default-color);
      background-color: var(--background-color); */
      /* font-family: var(--default-font);
      font-family: Poppins, sans-serif; */
      font-family: Montserrat, sans-serif;
      line-height: normal      
    }

    p {
      display: block;
      margin: 0 0 15px;
      font-weight: 400;
      line-height: 1.75;
      letter-spacing: normal;
      word-break: break-word
    }
    .header {
        color: #000;
        background-color: #ffffff;
        padding: 15px 0;
        transition: all 0.5s;
        z-index: 997;
        border-bottom: 1px solid gainsboro;
    }

    .header .logo img {
      max-height: 45px;
      margin-right: 8px;
    }

    @media (min-width: 1200px) {
      .navmenu li:hover>a, .navmenu .active, .navmenu .active:focus {
          color:#1c9356;
          /* color:#fff; */
      }
    }

    @media (min-width: 1200px) {
      .navmenu a, .navmenu a:focus {
        color: #000;
        padding: 15px 15px;
        font-size: 15px;
        font-family: var(--nav-font);
        font-weight: 700;
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
    
    .section-title { 
      font-size: 1.75rem;
      font-weight: 700;
      text-transform: capitalize;
      margin-bottom: 40px;
      padding-bottom: 0;
      position: relative;
      z-index: 2;
      color: #000;
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
      font-size: 46px;
      font-weight: 600;
      text-transform: capitalize;
      margin-bottom: 20px;
      padding-bottom: 0;
      position: relative;
      z-index: 2;
    }

    @media (max-width: 600px) {
      .section-title h2 , .heading_style4 h2 span {
        font-size: 30px;
        font-weight: 600;
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
      background-color: #0d6efd;
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }

    .stats .stats-item span {
        font-size: 2.25rem;
        display: block;
        color: #ffffff;
        font-weight: 700;
    }

    .stats .stats-item p {
      color: #fff;
      padding: 0;
      margin: 0;
      font-family: var(--heading-font);
      font-size: 15px;
      font-weight: 600;
    }

    .stats .stats-item {
      padding: 30px;
      width: 100%;
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
      margin-top: 10px;
      margin-left: 20px;
      width: max-content;
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
      height: 180px;
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
      display: flex;
      justify-content: center; /* horizontal */
      align-items: center;
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

    .img-product{
      height: 150px;
     
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;       /* biar bisa ke baris berikutnya */
      justify-content: center; /* rata tengah seluruh isi */
      gap: 20px;             /* jarak antar gambar */
      text-align: center;
    }

    .gallery-item {
      width: 200px;          /* ukuran tiap kotak */
    }

    .gallery-item img {
      width: 100%;
      height: 150px;
      object-fit: cover;     /* gambar tidak gepeng */
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .gallery-item img:hover {
      transform: scale(1.05);
    }

    .gallery-item p {
      margin-top: 8px;
      font-weight: 500;
    }

    .section-title span {
      position: relative;
      top: 5px;
      color: black;
      font-weight: 400;
      text-transform: capitalize;
    }

    .section-title .description-title {
      position: absolute;
      top: 4px;
      color: 
      color-mix(in srgb, var(--heading-color), transparent 95%);
      left: 0;
      right: 0;
      z-index: 1;
      font-weight: 700;
      font-size: 52px;
      text-transform: uppercase;
      line-height: 1;
    }

    /* strong {
      color: black;
      font-weight: 400;
      text-transform: capitalize;
    } */

    section, .section {
      color: var(--default-color);
      background-color: var(--background-color);
      padding: 15px 0;
      scroll-margin-top: 85px;
      overflow: clip;
    }

    /* h1, h2, h3, h4, h5, h6 {
      color: #000;
      font-weight: 700;
    } */

    .footer {
      color: black;
      /* background-color: black; */
      font-size: 15px;
      position: relative;
      background: url(./Website/assets/img/ftr.jpg);
      /* background-repeat: no-repeat; */
    }

    @media (max-width: 600px) {
      .stats .stats-item {
        padding: 30px;
        width: 100%;
      }
      
      .fa{
        margin-left: -15px;
      }
    }

    
  .sponsors-section .slide-logo img {
    max-width: 100%;
    height: auto;
  }

  .slide-logo a {
      height: auto;
  }

  .fl-module img {
      max-width: 100%;
      height: auto;
  }


  .rowsel {
      border: 1px solid rgba(0, 0, 0, .1);
      background: #fff;
      padding: 0.938rem;
      height: 200px;
      width: fit-content;
      aspect-ratio: 3/2;
      ;
  }
  .owl-carousel .owl-item img {
      width: 80%;
      border: 1px solid rgba(0, 0, 0, .1);
      background: #fff;
      padding: 0.938rem;
      height: 200px;
      width: fit-content;
      /* aspect-ratio: 3/2; */
      object-fit: initial;
  }

  .menu-item:hover>.menu-link,
  .menu-item.current>.menu-link {
      color: #FFBC00 !important;
  }

  .sub-menu-container .menu-item>.menu-link {
      color: black;
  }

  #primary-menu-trigger,
  #page-menu-trigger {
      display: -ms-flex;
      display: flex;
      opacity: 1;
      pointer-events: auto;
      z-index: 5;
      cursor: pointer;
      font-size: 0.875rem;
      width: 20%;
      height: 47px;
      position: relative;
      left: 5%;
      /* top: -1%; */
      line-height: 90px;
      justify-content: center;
      align-items: center;
      -webkit-transition: opacity .3s ease;
      transition: opacity .3s ease;
  }

  .svg-trigger {
      width: 100px;
      height: 100px;
      cursor: pointer;
      -webkit-tap-highlight-color: transparent;
      transition: transform 400ms;
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  .top-phone {
      background-color: #FFBC00;
      border-radius: 50px;
      color: #fff;
      font-weight: bold;
      padding: 10px 14px;
      border-radius: 50px;
  }

  .top-phone:hover {
    background-color: #5B9D0A;
    color: #FFF;
  }



  .owl-carousel .animated {
    -webkit-animation-duration: 1000ms;
    animation-duration: 1000ms;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  .owl-carousel .owl-animated-in {
      z-index: 0;
  }

  .owl-carousel .owl-animated-out {
      z-index: 1;
  }

  .owl-carousel .fadeOut {
      -webkit-animation-name: fadeOut;
      animation-name: fadeOut;
  }

  @-webkit-keyframes fadeOut {
      0% {
          opacity: 1;
      }

      100% {
          opacity: 0;
      }
  }

  @keyframes fadeOut {
      0% {
          opacity: 1;
      }

      100% {
          opacity: 0;
      }
  }

  .owl-height {
      -webkit-transition: height 500ms ease-in-out;
      -o-transition: height 500ms ease-in-out;
      transition: height 500ms ease-in-out
  }

  .owl-carousel {
      display: none;
      -webkit-tap-highlight-color: transparent;
      position: relative;
      z-index: 1;
      width: 100%;
  }

  .owl-carousel .owl-stage {
      position: relative;
      -ms-touch-action: pan-Y;
  }

  .owl-carousel .owl-stage::after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0
  }

  .owl-carousel .owl-stage-outer {
      position: relative;
      overflow: hidden;
      -webkit-transform: translate3d(0, 0, 0);
  }

  .owl-carousel.owl-loaded {
      display: block
  }

  .owl-carousel.owl-loading {
      display: block;
      min-height: 100px;
      background: no-repeat center center;
  }

  .owl-carousel .owl-refresh .owl-item {
      display: none
  }

  .owl-carousel .owl-item {
      position: relative;
      min-height: 1px;
      float: left;
      -webkit-tap-highlight-color: transparent;
      -webkit-touch-callout: none;
  }

  .owl-carousel .owl-item img {
      display: block;
      width: 100%;
      -webkit-transform-style: preserve-3d;
  }

  .slider-element .owl-carousel .owl-item img {
      -webkit-transform-style: preserve-3d;
  }

  .owl-carousel .owl-nav.disabled,
  .owl-carousel .owl-dots.disabled {
      display: none;
  }

  .owl-nav .owl-prev,
  .owl-nav .owl-next,
  .owl-dot,
  .owl-dots button {
      cursor: pointer;
      cursor: hand;
      padding: 0;
      border: 0;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  .owl-carousel.owl-loaded {
      display: block;
  }

  .owl-carousel.owl-loading {
      opacity: 0;
      display: block;
  }

  .owl-carousel.owl-hidden {
      opacity: 0;
  }

  .mega-menu-content .owl-carousel.owl-hidden {
      opacity: 1;
  }

  .owl-carousel.owl-refresh .owl-item {
      display: none;
  }

  .owl-carousel.owl-drag .owl-item {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  .owl-carousel.owl-grab {
      cursor: move;
      cursor: -webkit-grab;
      cursor: -o-grab;
      cursor: -ms-grab;
      cursor: grab;
  }

  .owl-carousel.owl-rtl {
      direction: rtl;
  }

  .owl-carousel.owl-rtl .owl-item {
      float: right;
  }

  .no-js .owl-carousel {
      display: block;
  }

  .owl-carousel .owl-item .owl-lazy {
      opacity: 0;
      -webkit-transition: opacity 400ms ease;
      -o-transition: opacity 400ms ease;
      transition: opacity 400ms ease
  }

  .owl-carousel .owl-item img {
      transform-style: preserve-3d
  }

  .owl-carousel .owl-video-wrapper {
      position: relative;
      height: 100%;
      background: #111
  }

  .owl-carousel .owl-video-play-icon {
      position: absolute;
      height: 64px;
      width: 64px;
      left: 50%;
      top: 50%;
      margin-left: -32px;
      margin-top: -32px;
      background: url("images/icons/play.png") no-repeat;
      cursor: pointer;
      z-index: 1;
      -webkit-backface-visibility: hidden;
      -webkit-transition: scale 100ms ease;
      -o-transition: scale 100ms ease;
      transition: scale 100ms ease;
  }

  .owl-carousel .owl-video-play-icon:hover {
      -webkit-transition: scale(1.3, 1.3);
      -o-transition: scale(1.3, 1.3);
      transition: scale(1.3, 1.3)
  }

  .owl-carousel .owl-video-playing .owl-video-play-icon,
  .owl-carousel .owl-video-playing .owl-video-tn {
      display: none
  }

  .owl-carousel .owl-video-tn {
      opacity: 0;
      height: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      -webkit-background-size: contain;
      -moz-background-size: contain;
      -o-background-size: contain;
      background-size: contain;
      -webkit-transition: opacity 400ms ease;
      -o-transition: opacity 400ms ease;
      transition: opacity 400ms ease
  }

  .owl-carousel .owl-video-frame {
      position: relative;
      z-index: 1;
      height: 100%;
      width: 100%;
  }


  /* Owl Carousel - Controls
  -----------------------------------------------------------------*/

  .owl-carousel .owl-dots,
  .owl-carousel .owl-nav {
      text-align: center;
      -webkit-tap-highlight-color: transparent;
      line-height: 1;
  }

  /* Owl Carousel - Controls - Arrows
  -----------------------------------------------------------------*/

  .owl-carousel .owl-nav [class*=owl-] {
      position: absolute;
      top: 50%;
      margin-top: -18px;
      left: -36px;
      zoom: 1;
      width: 36px;
      height: 36px;
      line-height: 32px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      color: #666;
      background-color: #FFF;
      font-size: 18px;
      border-radius: 50%;
      opacity: 0;
      -webkit-transition: all .3s ease;
      -o-transition: all .3s ease;
      transition: all .3s ease;
  }

  .owl-carousel.with-carousel-dots .owl-nav [class*=owl-] {
      margin-top: -38px;
  }

  .slider-element .owl-nav [class*=owl-],
  .owl-carousel-full .owl-nav [class*=owl-] {
      margin-top: -30px;
      left: 0 !important;
      height: 60px;
      line-height: 60px;
      border: none;
      color: #EEE;
      background-color: rgba(0, 0, 0, 0.4);
      font-size: 28px;
      border-radius: 0 3px 3px 0;
  }

  .owl-carousel-full .with-carousel-dots .owl-nav [class*=owl-] {
      margin-top: -50px;
  }

  .owl-carousel .owl-nav .owl-next {
      left: auto;
      right: -36px;
  }

  .slider-element .owl-nav .owl-next,
  .owl-carousel-full .owl-nav .owl-next {
      left: auto !important;
      right: 0 !important;
      border-radius: 3px 0 0 3px;
  }

  .owl-carousel:hover .owl-nav [class*=owl-] {
      opacity: 1;
      left: -18px;
  }

  .owl-carousel:hover .owl-nav .owl-next {
      left: auto;
      right: -18px;
  }

  .owl-carousel .owl-nav [class*=owl-]:hover {
      background-color: #0D6EFD !important;
      color: #FFF !important;
      text-decoration: none;
  }

  .owl-carousel .owl-nav .disabled {
      display: none !important;
  }


  /* Owl Carousel - Controls - Dots
  -----------------------------------------------------------------*/

  .owl-carousel .owl-dots .owl-dot {
      display: inline-block;
      zoom: 1;
      width: 8px;
      height: 8px;
      margin: 30px 4px 0 4px;
      opacity: 0.5;
      border-radius: 50%;
      background-color: #0D6EFD;
      -webkit-transition: all .3s ease;
      -o-transition: all .3s ease;
      transition: all .3s ease;
  }

  .owl-carousel .owl-dots .owl-dot.active,
  .owl-carousel .owl-dots .owl-dot:hover {
      opacity: 1;
  }

  .hero .carousel-item {    
    margin-top: -30px;
  }

  .text-white {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
  }
  .text-center {
    text-align: center !important;
  }

  .copyright{
    font-size: 14px;
    font-weight: 700;
    color: white;
  }
  .footer .copyright {
    padding: 0px 0px 20px;
    border-top: 0px solid color-mix(in srgb, var(--default-color), transparent 0%);
  }

  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    border-radius: 15%;
    border: 2px solid
    color-mix(in srgb, var(--default-color), transparent 0%);
    font-size: 16px;
    color: 
    color-mix(in srgb, var(--default-color), transparent 20%);
    margin-right: 10px;
    transition: 0.3s;
  }

  @media (max-width: 600px) {
    .footer .social-links {
      position: relative;
      display: flex;
      justify-content: center; /* horizontal */
      align-items: center;
    }
  }

  @media (max-width: 600px) {
    .footer .footer-about {
        margin-bottom: 0px;
        text-align: center;
        /* margin-left: 10px; */
    }
  }
  
  .border-gradient {
    border: 2px solid transparent;
    border-image: linear-gradient(to bottom, #0C5E65, #4ED4A9);
    border-image-slice: 1;
    border-radius: 8px; /* opsional, untuk sudut lembut */
  }
    
</style>


<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url("dashboard");?>" class="logo d-flex align-items-center">
            <img width="190" height="70" src="<?php echo base_url("./Website/assets/img/logo-2.png");?>" >
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <?php foreach ($data_menu as $row): ?>
              <?php
                // Tentukan URL untuk menu utama
                $main_href = !empty($row->url) ? base_url($row->url) : 'javascript:void(0)';
              ?>
              <li class="dropdown">
                <a href="<?= $main_href ?>">
                  <span><?= htmlspecialchars($row->name, ENT_QUOTES, 'UTF-8') ?></span>
                </a>
                <ul>
                  <?php
                    $submenu = $this->db->query("
                      SELECT *
                      FROM submenu
                      WHERE menu_id = '".$row->id."'
                    ")->result();

                    foreach ($submenu as $rw):
                      $sub_href = !empty($rw->url) ? base_url($rw->url) : 'javascript:void(0)';
                  ?>
                    <li>
                      <a href="<?= $sub_href ?>">
                        <?= strtoupper(htmlspecialchars($rw->sub_name, ENT_QUOTES, 'UTF-8')) ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endforeach; ?>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        </div>
    </header>

  <main class="main">

