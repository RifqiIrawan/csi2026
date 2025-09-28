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
    Company Profile
   ====================== */
.btn-gradient {
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    color: #fff;
}
.btn-gradient:hover {
    opacity: 0.9;
    color: #fff;
}

.exhibitor-card {
    background: #fff;
    transition: transform 0.2s ease-in-out;
}
.exhibitor-card:hover {
    transform: translateY(-5px);
}

.logo-wrapper {
    width: 160px;
    height: 120px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
}
.logo-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}





</style>

<!-- Slick CSS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<main class="main">
  <section>
    <div class="container my-4">
        <div class="row border-bottom pb-3 mb-4">
            <div class="col">
                <h2 class="fw-bold"><?= $company->company_name ?></h2>
                <p class="text-muted">Stand <?= $company->stand_no ?></p>
            </div>
        </div>

        <div class="row">
            <!-- Left Content -->
            <div class="col-lg-8 mb-4">
                <p><?= nl2br($company->long_description) ?></p>

                <?php if (!empty($company->website_url)): ?>
                    <p><a href="<?= $company->website_url ?>" target="_blank"><?= $company->website_url ?></a></p>
                <?php endif; ?>

                <!-- <p><strong>Contact:</strong> <?= $company->contact_name ?></p> -->
                <div class="card border-0 shadow-sm rounded-3 mt-3" style="max-width: 400px;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-person-circle text-primary fs-2 me-3"></i>
                            <div>
                                <small class="text-muted d-block">Contact Person</small>
                                <strong><?= $company->contact_name ?></strong>
                            </div>
                        </div>

                        <?php if (!empty($company->contact_email)): ?>
                            <p class="mb-2 d-flex align-items-center">
                                <i class="bi bi-envelope text-secondary me-2"></i>
                                <a href="mailto:<?= $company->contact_email ?>" class="text-decoration-none">
                                    <?= $company->contact_email ?>
                                </a>
                            </p>
                        <?php endif; ?>

                        <?php if (!empty($company->contact_phone)): ?>
                            <p class="mb-2 d-flex align-items-center">
                                <i class="bi bi-telephone text-secondary me-2"></i>
                                <a href="tel:<?= $company->contact_phone ?>" class="text-decoration-none">
                                    <?= $company->contact_phone ?>
                                </a>
                            </p>
                        <?php endif; ?>

                        <?php if (!empty($company->address)): ?>
                            <p class="mb-0 d-flex align-items-start">
                                <i class="bi bi-geo-alt text-secondary me-2"></i>
                                <span><?= nl2br($company->address) ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <br>
                <div class="col mt-3 text-center">
                    <a href="<?= base_url('exhibiting/exhibitor-list') ?>" class="btn btn-outline-primary d-inline-flex align-items-center rounded-pill px-4 shadow-sm">
                        <i class="bi bi-arrow-left me-2"></i> Back to Exhibitors
                    </a>
                </div>

            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4 text-center">
                <div class="exhibitor-card border p-3 rounded shadow-sm my-3 text-center">
                    <div class="logo-wrapper mb-3">
                        <?php if (!empty($company->logo)): ?>
                            <img src="<?= $company->logo ?>" 
                                alt="<?= $company->name ?>" 
                                class="img-fluid mx-auto d-block"
                                style="max-height:120px; width:auto; object-fit:contain;">
                        <?php endif; ?>
                    </div>
                    <!-- <h5 class="mt-2"><?= $company->name; ?></h5>
                    <p class="text-muted"><?= $company->stand_no; ?></p>
                    
                    <?php if (!empty($company->website_url)): ?>
                        <a href="<?= $company->website_url ?>" target="_blank" class="btn btn-dark btn-sm">
                            Visit Website
                        </a>
                    <?php endif; ?> -->
                </div>


                <div class="d-grid gap-2">
                    <?php if ($company->website_url): ?>
                        <a href="<?= $company->website_url ?>" target="_blank" class="btn btn-dark">Website</a>
                    <?php endif; ?>
                    <?php if ($company->linkedin_url): ?>
                        <a href="<?= $company->linkedin_url ?>" target="_blank" class="btn btn-primary">LinkedIn</a>
                    <?php endif; ?>
                    <?php if ($company->twitter_url): ?>
                        <a href="<?= $company->twitter_url ?>" target="_blank" class="btn btn-info text-white">Twitter</a>
                    <?php endif; ?>
                    <?php if ($company->facebook_url): ?>
                        <a href="<?= $company->facebook_url ?>" target="_blank" class="btn btn-primary">Facebook</a>
                    <?php endif; ?>
                    <?php if ($company->youtube_url): ?>
                        <a href="<?= $company->youtube_url ?>" target="_blank" class="btn btn-danger">YouTube</a>
                    <?php endif; ?>
                    <?php if ($company->instagram_url): ?>
                        <a href="<?= $company->instagram_url ?>" target="_blank" class="btn btn-gradient">Instagram</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>


  </section>
</main>
