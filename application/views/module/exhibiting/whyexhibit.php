<!-- Bootstrap 5 only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* ======================
    Global & Reset
    ====================== */
    body {
    font-family: Poppins, sans-serif;
    }

    .img-fluid {
    width: 100%;
    }

    :after,
    :before {
    box-sizing: border-box;
    }

    /* ======================
    Hero
    ====================== */
    .hero .carousel {
    width: 100%;
    min-height: 100vh;
    background-color: var(--background-color);
    position: relative;
    margin: 0;
    padding: 0;
    }

    @media (max-width: 1199px) {
    .hero .carousel {
        min-height: 30vh;
    }
    }

    /* ======================
    Sections
    ====================== */
    section,
    .section {
    color: var(--default-color);
    background-color: var(--background-color);
    padding: 10px 0;
    margin-bottom: 20px;
    scroll-margin-top: 85px;
    overflow: clip;
    }

    .section-title h2 {
    font-size: 50px;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 20px;
    position: relative;
    z-index: 2;
    }

    @media (max-width: 600px) {
    .section-title h2,
    .heading_style4 h2 span {
        font-size: 30px;
        font-weight: 500;
    }
    }

    /* ======================
    Heading Styles
    ====================== */
    .heading_style4 h2::after {
    content: "";
    background: #111;
    height: 2px;
    position: absolute;
    bottom: -30px;
    width: 130px;
    }

    .heading_style4.center h2::after {
    left: 50%;
    margin-left: -65px;
    }

    .heading_style4.left h2::after {
    left: 0;
    margin-left: 0;
    }

    /* ======================
    Portfolio
    ====================== */
    .portfolio .portfolio-content .portfolio-info h4 {
    font-size: 16px;
    padding: 5px 10px;
    font-weight: 400;
    color: #fff;
    background-color: var(--accent-color);
    display: inline-block;
    }

    .portfolio .portfolio-content .portfolio-info .preview-link,
    .portfolio .portfolio-content .portfolio-info .details-link {
    position: absolute;
    top: calc(50% - 14px);
    left: calc(50% - 40px);
    font-size: 40px;
    color: #fff;
    transition: 0.3s;
    line-height: 1.2;
    margin-left: 1.2rem;
    }

    /* ======================
    Features
    ====================== */
    .features {
    padding: 60px 10px 0;
    margin-bottom: -60px;
    }

    .features .video-box img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: auto;
    object-fit: cover;
    z-index: 1;
    }

    .features .icon-box .description {
    font-size: 16px;
    line-height: 24px;
    margin-bottom: 0;
    text-align: left;
    }

    /* FEATURES SECTION */
    .features-section {
      padding: 60px 10px;
      margin-bottom: 40px; /* kasih jarak normal */
    }

    .features-section .feature-icon img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }


    /* ======================
    FAQ
    ====================== */
    .faq .faq-container .faq-item {
    position: relative;
    padding: 10px;
    margin-bottom: 20px;
    background-color: color-mix(in srgb, var(--default-color), transparent 96%);
    overflow: hidden;
    transition: 0.3s;
    }

    .faq .faq-container .faq-item h3 {
    font-size: 26px;
    font-weight: 600;
    line-height: 24px;
    margin: 0 30px 0 32px;
    cursor: pointer;
    color: #000;
    transition: 0.3s;
    }

    .faq .faq-container .faq-active {
    background-color: color-mix(in srgb, var(--default-color), transparent 96%);
    transition: 0.3s;
    }

    .faq .faq-container .faq-active .faq-content {
    grid-template-rows: 1fr;
    visibility: visible;
    opacity: 1;
    padding-top: 10px;
    color: #000;
    }

    /* ======================
    Footer
    ====================== */
    .footer {
    color: var(--default-color);
    background-color: #000;
    font-size: 14px;
    }

    .footer .footer-top {
    border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .footer .footer-links {
    margin-bottom: 50px;
    text-align: left;
    }

    .footer-about {
    text-align: center;
    }

    .footer .copyright p {
    margin: 0 10px;
    }

    .social-links {
    position: relative;
    left: 21%;
    }

    @media (max-width: 600px) {
    .footer .footer-links,
    .footer .footer-about {
        margin-bottom: 0;
        text-align: left;
    }

    .footer .social-links {
        left: 0;
    }

    iframe {
        width: 100%;
        padding: 0;
        position: static;
    }
    }

    /* ======================
    Utilities
    ====================== */
    .scroll-top {
    position: fixed;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    width: 40px;
    height: 40px;
    background-color: #1c9356;
    border-radius: 4px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s;
    }

    .black {
    background: #111;
    margin-top: 3rem;
    }

    .mb-4 {
    margin-bottom: 1.5rem !important;
    }

    .text-light {
    color: rgba(var(--bs-light-rgb), var(--bs-text-opacity, 1)) !important;
    }

    
    /* start */

    /* Container untuk grid */
    .columns {
    display: flex;
    flex-wrap: wrap;
    margin: -10px; /* untuk jarak antar kolom */
    }

    /* Kolom per item */
    .column {
    flex: 0 0 33.333%; /* 3 kolom */
    padding: 10px;
    box-sizing: border-box;
    }

    /* Responsif: 2 kolom di tablet */
    @media (max-width: 992px) {
    .column {
        flex: 0 0 50%;
    }
    }

    /* Responsif: 1 kolom di HP */
    @media (max-width: 600px) {
        .column {
            flex: 0 0 100%;
        }
    }
    /* Here */
    .hero-section {
    position: relative;
    background-size: cover;
    background-position: center;
    height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 100, 0, 0.6);
    }

    .hero-content {
        max-width: 900px;       /* biar teks tidak terlalu melebar */
        color: #fff;            /* teks putih */
    }

    .hero-title {
        font-size: 2rem;        /* lebih besar */
        font-weight: 700;       /* bold */
        margin: 0 0 10px;
    }

    .hero-text {
        font-size: 1.2rem;
        font-weight: 600;       /* semi-bold agar konsisten tebal */
        line-height: 1.5;
        margin: 0;
    }


    


    /* Styling box
    .feature-box {
    border: 2px solid #2e7d32;
    border-radius: 8px;
    padding: 20px;
    background: #fff;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    }

    .feature-box h3 {
    font-weight: bold;
    color: #2e7d32;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .feature-box .icon {
    color: #2e7d32;
    font-size: 24px;
    } */

    /* ======================
    Show Features
    ====================== */

    .show-feature-section {
        padding: 50px 0;
        background: #f5f5f5;
        text-align: center;
    }
    .show-feature-section h2 {
        font-weight: bold;
        margin-bottom: 40px;
    }
    .show-feature-item {
        padding: 20px;
    }
    .show-feature-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .show-feature-item h5 {
        margin-top: 15px;
        font-size: 18px;
        font-weight: 500;
    }


    /* Horizontal Scroll Wrapper */
.scroll-wrapper {
  display: flex;
  gap: 1.5rem;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  padding-bottom: 1rem;
  scroll-behavior: smooth; /* smooth scroll when using arrows */
}

/* Hide scrollbar on mobile, show styled on desktop */
.scroll-wrapper::-webkit-scrollbar {
  height: 8px;
}
.scroll-wrapper::-webkit-scrollbar-thumb {
  background: #aaa;
  border-radius: 4px;
}
.scroll-wrapper::-webkit-scrollbar-track {
  background: #f0f0f0;
}

.show-feature-item {
  flex: 0 0 auto;
  width: 250px; /* default size */
  scroll-snap-align: center;
}

@media (max-width: 768px) {
  .show-feature-item {
    width: 200px; /* smaller on mobile */
  }
}

/* Arrow buttons */
.scroll-btn {
  background: #2e7d32;
  border: none;
  color: #fff;
  font-size: 24px;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  transition: background 0.3s ease;
}
.scroll-btn:hover {
  background: #1b5e20;
}
.scroll-btn.left {
  left: -20px;
}
.scroll-btn.right {
  right: -20px;
}

/* Keep parent container relative for positioning arrows */
.scroll-container {
  position: relative;
}


.logo-box { padding: 10px; text-align: center; }
.logo-box img { max-height: 100px; margin: auto; }


</style>
<!-- Slick CSS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<main class="main">
    <!-- HERO SECTION -->
    <section class="hero-section" style="background-image: url('<?= $hero['background']; ?>');">
        <!-- <div class="hero-overlay"></div> -->
            <div class="hero-content">
                <h2 class="hero-title">WHY</h2>
                <p class="hero-text">
                    Exhibiting at Coating Show will provide your company with the perfect platform 
                    to showcase your latest products and services to a range of local and international attendees.
                </p>
            </div>

    </section>

    <section>
        <div class="container mt-4">
            <h3><?= $section1['subtitle']; ?></h3>

            <?= $section1['body_text']; ?>
            <!-- body_img -->
            <?php if (!empty($section1['body_img'])): ?>
                <div style="text-align: center; margin-top: 20px;">
                    <img src="<?= $section1['body_img']; ?>" 
                        alt="Macro Economic Indicators Table" 
                        style="max-width: 100%; height: auto; border:1px solid #ccc; padding:5px;">
                </div>
            <?php endif; ?>

        </div>

    </section>

    <section>
        <div class="container mt-4">
            <h3><?= $section2['subtitle']; ?></h3>

            <?= $section2['body_text']; ?>
            <!-- body_img -->
            <?php if (!empty($section2['body_img'])): ?>
                <div style="text-align: center; margin-top: 20px;">
                    <img src="<?= $section2['body_img']; ?>" 
                        alt="Macro Economic Indicators Table" 
                        style="max-width: 100%; height: auto; border:1px solid #ccc; padding:5px;">
                </div>
            <?php endif; ?>

            <div style="text-align: center;">
                <?php if (!empty($visainformation['subtitle'])): ?>
                    <h3 style="font-weight: bold; margin: 40px auto; max-width: 800px;"><?= $visainformation['subtitle']; ?></h3>
                <?php endif; ?>

                <?= $visainformation['body_text']; ?>
                <a class="btn primary-btn" 
                    href="https://evisa.imigrasi.go.id/" 
                    style="background-color: #4CAF50; 
                            color: white; 
                            padding: 12px 30px; 
                            text-decoration: none; 
                            font-weight: bold; 
                            border-radius: 5px; 
                            display: inline-block; 
                            margin: 20px 0;" 
                    target="_blank">
                    Apply for Visa
                </a>
                <p style="margin-top: 15px;">
                    <strong>The organizer is not responsible for those who enter the show with incorrect visas.</strong>
                </p>
            </div>

        </div>

        <div style="background-color: #66A80F; padding: 40px 20px; text-align: center; color: white;">
            <div style="display: flex; justify-content: center; gap: 80px; flex-wrap: wrap;">
                <?php foreach ($paint_stats as $stat): ?>
                    <?php if (!empty($stat['value']) && !empty($stat['label'])): ?>
                        <div style="min-width: 150px;">
                            <div style="font-size: 40px; font-weight: bold; margin-bottom: 10px;">
                                <?= $stat['value']; ?>
                            </div>
                            <div style="font-size: 16px;">
                                <?= $stat['label']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>

        <h3 class="text-center"><b>PAINT MANUFACTURERS</b></h3>
        <div class="paint-slider">
            <?php foreach ($paint_manufacturers as $paint): ?>
                <div class="logo-box">
                    <a href="<?= $paint['link'] ?>" target="_blank">
                        <img src="<?= $paint['logo'] ?>" alt="<?= $paint['name'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center"><strong>And Many More...</strong></p>
    </section>

    <section>

        <h3 class="text-center"><b>INK MANUFACTURERS</b></h3>
        <div class="paint-slider">
            <?php foreach ($paint_manufacturers as $paint): ?>
                <div class="logo-box">
                    <a href="<?= $paint['link'] ?>" target="_blank">
                        <img src="<?= $paint['logo'] ?>" alt="<?= $paint['name'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center"><strong>And Many More...</strong></p>
        


    </section>

    <section id="customer" class="faq section">
        <div class="container section-title center" >
        <!-- <div class="description-title">Our Customer</div> -->
        <h3>SUPPORTED BY</h3>
        </div>

        <div class="container mb-3">
            <div class="row justify-content-left">
                <div class="col-lg-12">

                <div class="container">
                    <div id="media-partner-carousel" class="owl-carousel owl-carousel1 image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-autoplay="5000" data-items-sm="8" data-items-md="6" data-items-lg="6" data-items-xl="4">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                        <?php 
                            foreach($data_support as $row5){ 
                            $file5 = $row5->folder_name."".$row5->file_name;
                            $img5 = "".$file5."";
                        ?> 
                            
                        <div class="owl-item">
                            <div class="oc-item" style="text-align:center">
                            <a href="<?php echo $row5->url ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo base_url($img5); ?>" class="day rowsel" title="<?php echo ucwords($row5->name); ?>" alt="<?php echo ucwords($row5->name);?>">
                            </a>
                            <!-- <h7><?php echo $row4->nam5?></h7> -->
                            </div>
                        </div>                          
                        <?php } ?>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                        <i class="icon-angle-left"></i>
                        </button>
                    <button type="button" role="presentation" class="owl-next">
                        <i class="icon-angle-right"></i>
                    </button></div>
                    <div class="owl-dots disabled"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

</main>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function scrollFeatures(direction) {
    const wrapper = document.getElementById('scrollWrapper');
    const scrollAmount = 300; // how much to scroll per click
    wrapper.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }

var jq = jQuery.noConflict();
jq(document).ready(function(){
    jq('.paint-slider').slick({
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2000
    });
});

</script>


</html>