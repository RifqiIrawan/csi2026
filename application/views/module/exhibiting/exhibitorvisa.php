<!-- Bootstrap 5 -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<style>
/* ======================
Global
====================== */
body {
  font-family: Poppins, sans-serif;
  color: #333;
  line-height: 1.7;
}

.img-fluid {
  width: 100%;
}

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

/* ======================
Content Section
====================== */
.content-section {
  padding: 70px 20px;
  background: #fff;
}

.content-section .container {
  max-width: 900px;
  margin: 0 auto;
}

.content-section h2 {
  font-weight: 700;
  font-size: 2rem;
  margin-bottom: 25px;
  color: #2e7d32;
  text-align: center;
}

.content-section p {
  font-size: 1.05rem;
  color: #555;
  text-align: justify;
  margin-bottom: 20px;
}

.content-section ul {
  margin: 15px 0 30px 20px;
  color: #444;
}

.content-section ul li {
  margin-bottom: 10px;
}

/* ======================
Show Feature Section
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
  flex: 0 0 auto;
  width: 250px;
  scroll-snap-align: center;
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

/* ======================
Horizontal Scroll
====================== */
.scroll-container {
  position: relative;
}

.scroll-wrapper {
  display: flex;
  gap: 1.5rem;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  padding-bottom: 1rem;
  scroll-behavior: smooth;
}

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

@media (max-width: 768px) {
  .show-feature-item {
    width: 200px;
  }
}

/* Arrow Buttons */
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

/* ======================
Logo Box
====================== */
.logo-box {
  padding: 10px;
  text-align: center;
}

.logo-box img {
  max-height: 100px;
  margin: auto;
}

.container-fluid {
    padding-left: 0;
    padding-right: 10px !important;
}
</style>

<!-- jQuery & Slick -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<main class="main">
  <!-- HERO SECTION -->
  <section class="hero-section" style="background-image: url('<?= $hero['background']; ?>');">
    <div class="hero-content">
      <h2 class="hero-title">EXHIBITOR VISA</h2>
    </div>
  </section>

  <!-- CONTENT SECTION -->
  <!-- <section class="content-section">
    <div class="container">
      <h2>About the Exhibitor Visa</h2>
      <p>
        The <strong>Exhibitor Visa</strong> is a special entry permit designed for companies and individuals participating 
        in international exhibitions, trade fairs, or conventions. This visa aims to simplify the process for exhibitors 
        who intend to bring products, promotional materials, or equipment across borders to showcase at officially 
        recognized events. It plays a crucial role in facilitating global business engagement, innovation sharing, 
        and cross-industry collaboration.
      </p>
      <p>
        Holding an Exhibitor Visa allows participants to legally enter the host country for a limited period 
        specifically related to exhibition activities. This includes booth setup, product presentation, 
        networking with visitors and clients, as well as attending business meetings arranged during the event.
      </p>
      <p>
        Generally, the Exhibitor Visa process requires an invitation letter from the event organizer, 
        proof of participation such as a booth confirmation, and supporting documents from the exhibitor’s 
        company. Depending on the host country’s regulations, applicants might also need to provide 
        evidence of accommodation, return tickets, and financial capability during their stay.
      </p>

      <h4>Key Benefits of the Exhibitor Visa:</h4>
      <ul>
        <li>Allows smooth participation in international trade fairs and exhibitions.</li>
        <li>Permits temporary importation of goods and marketing materials for display.</li>
        <li>Enables exhibitors to network with global buyers, distributors, and investors.</li>
        <li>Supports brand exposure and international business expansion efforts.</li>
      </ul>

      <p>
        By obtaining an Exhibitor Visa, participants gain access to valuable opportunities that go beyond 
        simple product display. It’s a gateway to establishing meaningful partnerships, understanding new 
        market trends, and strengthening international business relations. Whether you're a startup exploring 
        global markets or a leading manufacturer seeking visibility, this visa provides the legal and logistical 
        foundation for successful participation in world-class exhibitions.
      </p>
    </div>
  </section> -->

  <section class="content-section">
    <div class="container">
      <h2><?= $section['subtitle']; ?></h2>
      <?= $section['body_text']; ?>
    </div>
  </section>
</main>

<!-- Slick & Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

<script>
function scrollFeatures(direction) {
  const wrapper = document.getElementById('scrollWrapper');
  const scrollAmount = 300;
  wrapper.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
}

jQuery(document).ready(function($) {
  $('.paint-slider').slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000
  });
});
</script>
