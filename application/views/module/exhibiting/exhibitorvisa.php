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

</style>

<!-- Slick CSS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<main class="main">

    <!-- Banner -->
    <div class="banner"
        style="background: url('<?= !empty($banner->file_path) ? base_url($banner->file_path) : base_url("assets/images/default-banner.jpg") ?>') 
                center/cover no-repeat; height: 250px; display:flex; align-items:center; justify-content:center;">
        <h1 class="text-white fw-bold bg-dark bg-opacity-50 px-4 py-2 rounded">
            Exhibitor Visa
        </h1>
    </div>

    <!-- Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4 text-center">Visa Information for Exhibitors</h2>

                <?php if (!empty($profile->description)): ?>
                    <p class="lead"><?= nl2br($profile->description); ?></p>
                <?php else: ?>
                    <p class="text-muted text-center">Description is not available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>
</main>
