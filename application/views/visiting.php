<!-- Bootstrap 5 only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
  .navbar .nav-link,
  .navbar .nav-link:hover,
  .navbar .nav-link:focus {
    text-decoration: none !important;
  }
</style>
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
        margin-top: 150px;
    }

    .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    /* background: rgba(0, 100, 0, 0.6); */
    }

    .hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    }

    .hero-btn {
    display: inline-block;
    padding: 12px 30px;
    border: 2px solid #fff;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    text-decoration: none !important;
    transition: all 0.3s ease;
    }

    .hero-btn:hover {
    background: #fff;
    color: #2e7d32;
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
  overflow-x: hidden;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  /* padding-bottom: 1rem; */
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

.footer {
  color: black;
  /* background-color: black; */
  font-size: 15px;
  position: relative;
  background: url(../Website/assets/img/footer.jpg);
  /* background-repeat: no-repeat; */
}

.scroll-btn.right {
  right: -5%;
}

.scroll-btn.left {
    left: -36px;
}

.hero-text {
  display: block;
  margin-bottom: 15px;
  font-weight: 600; /* bold */
  line-height: 1.75;
  letter-spacing: normal;
  word-break: break-word;
  color: #ffffff;
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


<main class="main">
    <!-- HERO SECTION -->
    <section class="hero-section" style="background-image: url('<?= $hero['background']; ?>');">
        <div class="hero-overlay"></div>
            <div class="hero-content">
                <a href="<?= $hero['button_link']; ?>" class="hero-btn">
                    <?= $hero['button_text']; ?>
                </a>
                <p class="hero-text">
                    <?= $hero['button_subtext']; ?>
                </p>
            </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="features-grid">
            <?php foreach ($features as $f): ?>
                <div class="feature-icon">
                    <!-- <img src="<?= $f['icon']; ?>" alt="<?= $f['title']; ?>"> -->
                    <img src="<?= $f['icon']; ?>" alt="<?= $f['title']; ?>" style="width:1000px; height:auto; display:block; margin:0 auto;">
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SHOW FEATURES (HORIZONTAL SCROLL) -->
    <section id="show-features" class="show-feature-section py-5">
      <div class="container">
        <h2 class="text-center mb-4">Show Features</h2>

        <div class="scroll-container">
          <!-- Left Button -->
          <button class="scroll-btn left" onclick="scrollFeatures(-1)">
            <i class="bi bi-chevron-left"></i>
          </button>

          <div class="scroll-wrapper" id="scrollWrapper">
            <?php foreach ($show_features as $sf): ?>
              <div class="show-feature-item text-center">
                <img src="<?= $sf['image'] ?>" alt="<?= $sf['title'] ?>" class="img-fluid rounded shadow">
                <h5 class="mt-3"><?= $sf['title'] ?></h5>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- Right Button -->
          <button class="scroll-btn right" onclick="scrollFeatures(1)">
            <i class="bi bi-chevron-right"></i>
          </button>
        </div>
      </div>
    </section>

</main>

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
</script>


</html>