<!-- Bootstrap 5 only -->
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
   Sections
   ====================== */
section,
.section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
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
   Exhibitor Cards
   ====================== */
.exhibitor-card {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  padding: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-bottom: 20px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.exhibitor-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 14px rgba(0,0,0,0.15);
}

/* Wrapper gambar agar selalu center */
.exhibitor-card .logo-wrapper {
  width: 100%;
  height: 120px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

.exhibitor-card img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  display: block;
}

/* Nama perusahaan */
.exhibitor-card h5 {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 4px;
  color: #222;
}

/* Booth number */
.exhibitor-card p {
  font-size: 0.95rem;
  color: #666;
  margin: 0;
}

/* Rapatkan jarak antar kolom */
.row.no-gutter-tight {
  margin-left: -5px;
  margin-right: -5px;
}
.row.no-gutter-tight > [class*='col-'] {
  padding-left: 5px;
  padding-right: 5px;
}

.col-md-4.col-sm-6.col-12 {
  margin-bottom: 20px; /* atau sesuai kebutuhan */
}


/* Fix: Pastikan teks tidak membesar di hover + beri padding kanan & kiri */
.exhibitor-card h5,
.exhibitor-card:hover h5,
.exhibitor-card a:hover h5 {
  font-size: 1.1rem !important;
  font-weight: 600;
  color: #222;
  margin-bottom: 4px;
  padding: 0 10px; /* ✅ Tambah padding kiri-kanan */
  transition: color 0.2s ease;
}

/* Opsional: efek hover hanya ubah warna teks */
.exhibitor-card:hover h5 {
  color: #007bff; /* atau sesuaikan warna */
}


</style>
<style>
    /* ======================
    Hero Section
    ====================== */
    .hero-section {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 350px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
    }

    .hero-content {
        max-width: 900px;
    }

    .hero-title {
        font-size: 2rem;
        font-weight: 700;
        margin: 0;
        color: white;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 1.6rem;
        }
    }
    

    .title {
        font-size: 28px;
        font-weight: 600;
        color: #000;
    }

</style>
<!-- Slick CSS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<main class="main">

  <!-- HERO SECTION -->
  <!-- <section class="hero-section" style="background-image: url('<?= $hero['background']; ?>');">
      <div class="hero-content">
      </div>
  </section> --> 
  <!-- di hide si om -->

  
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center mt-4 mb-4">
            <p class="title"><?= $hero['button_text']; ?></p>
        </div>
      </div>
    </div>
    <!-- Container grid hanya 9 kolom dan center -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row no-gutter-tight">
            <?php foreach ($exhibitors as $ex): ?>
              <!-- <div class="col-md-4 col-sm-6 col-12 text-center"> -->
              <diV class = "col-md-4 col-sm-6 col-12 text-center mb-4">
                <a href="<?= $ex['menu_controller'] ?>" class="text-decoration-none">
                    <div class="exhibitor-card">
                    <div class="logo-wrapper">
                        <img src="<?= $ex['logo']; ?>" alt="<?= $ex['name']; ?>">
                    </div>
                    <h5 class="mt-2"><?= $ex['name']; ?></h5>
                    <p><?= $ex['booth']; ?></p>
                    </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
