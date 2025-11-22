<!-- Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
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

    </style>
    <style>
    /* ====== General ====== */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9ff;
        color: #333;
    }

    h5, h6 {
        font-weight: 600;
    }

    /* ====== Card Style ====== */
    .program-card {
        border: 1px solid #00c4cc;
        border-radius: 16px;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        padding: 24px;
        position: relative;
    }

    .program-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    }

    .badge-type {
        position: absolute;
        top: 16px;
        right: 16px;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 12px;
    }

    .badge-seminar {
        background-color: #e91e63;
        color: #fff;
    }

    .badge-workshop {
        background-color: #ff4081;
        color: #fff;
    }

    .program-card .icon-text {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 4px;
    }

    .program-card .icon-text i {
        color: #00bcd4;
        margin-right: 8px;
    }

    .program-card .fw-semibold i {
        color: #00bcd4; /* cyan */
    }
    .program-card h5 {
        color: #d81b60;
        font-size: 1.05rem;
        line-height: 1.4;
        margin: 16px 0 12px 0;
    }

    .program-card p {
        font-size: 0.9rem;
        margin-bottom: 8px;
    }

    .btn-register {
        background-color: #4a148c;
        color: #fff;
        font-weight: 600;
        border-radius: 30px;
        padding: 10px 20px;
        transition: 0.3s;
    }

    .btn-register:hover {
        background-color: #6a1b9a;
        color: #fff;
    }

    .text-secondary {
        color: #777 !important;
    }

    .footer {
      color: black;
      /* background-color: black; */
      font-size: 15px;
      position: relative;
      background: url(../Website/assets/img/footer.jpg);
      /* background-repeat: no-repeat; */
    }
    </style>
    <style>
        .modern-carousel {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .carousel-track {
            display: flex;
            gap: 25px;
            animation: autoScroll 18s linear infinite;
        }

        .carousel-item {
            min-width: 250px;
        }

        .feature-card {
            background: #fff;
            border-radius: 18px;
            padding: 15px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            transition: transform 0.4s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .feature-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 14px;
        }

        .feature-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }

        /* .title {
        font-weight: 600;
        color: #333;
        } */

        .title {
            font-size: 28px;
            font-weight: 600;
            color: #000;
        }

        /* Animation untuk bergerak ke kanan otomatis */
        @keyframes autoScroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
        }

    </style>
    </head>
    <body>
    
    <main class="main">
        <!-- HERO SECTION -->
        <!--
        <section class="hero-section" style="background-image: url('<?= $hero['background']; ?>');">
            <div class="hero-content">
            </div>
        </section>
        -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center mt-4 mb-4">
                        <p class="title"><?= $hero['button_text']; ?></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-4">
                            <?php foreach ($programs as $prog): ?>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="program-card">
                                        <!-- <span class="badge-type <?= strtolower($prog['program_type']) === 'seminar' ? 'badge-seminar' : 'badge-workshop' ?>">
                                            <?= strtoupper($prog['program_type']); ?>
                                        </span> -->

                                        <div class="icon-text">
                                            <i class="bi bi-calendar-date"></i>
                                            <?= date('l, d F Y', strtotime($prog['program_date'])); ?>
                                        </div>
                                        <div class="icon-text">
                                            <i class="bi bi-clock"></i>
                                            <?= date('H:i', strtotime($prog['program_start_time'])) . ' - ' . date('H:i', strtotime($prog['program_end_time'])); ?> WIB
                                        </div>

                                        <h5><?= $prog['program_title']; ?></h5>

                                        <?php if (!empty($prog['speaker_name'])): ?>
                                            <p class="mb-1 fw-semibold">
                                                <i class="bi bi-person-circle"></i> Speaker :
                                            </p>
                                            <p class="text-secondary mb-2">
                                            <?= $prog['speaker_name']; ?>
                                            <?= !empty($prog['speaker_organization']) ? ' - ' . $prog['speaker_organization'] : ''; ?>
                                            </p>
                                        <?php endif; ?>

                                        <p class="mb-1 fw-semibold">
                                            <i class="bi bi-geo-alt me-1"></i> Location :
                                        </p>
                                        <p class="text-secondary mb-4"><?= $prog['program_location']; ?></p>
                                        <!--
                                        <div class="mt-auto text-center">
                                            <a href="<?= base_url('visiting/conference-schedule-validation/' . $prog['program_id']); ?>" 
                                                class="btn btn-register">
                                                REGISTER HERE <i class="bi bi-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="show-features" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold">Show Features</h2>

                <div class="modern-carousel">
                    <div class="carousel-track" id="carouselTrack">

                        <?php foreach ($show_features as $sf): ?>
                            <div class="">
                                <div class="feature-card">

                                    <?php if (!empty($sf['file_path'])): ?>
                                        <?php 
                                            $imgUrl = base_url() . $sf['file_path'];
                                            // Remove accidental colon after domain
                                            $imgUrl = str_replace('local:/', 'local/', $imgUrl);
                                        ?>
                                        <img src="<?= $imgUrl ?>" alt="Feature Image" class="feature-image">

                                    <?php endif; ?>

                                    <!-- <?php if (!empty($sf['title'])): ?>
                                        <h5 class="title mt-3"><?= $sf['title'] ?></h5>
                                    <?php endif; ?> -->

                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </section>


    </main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    const track = document.getElementById("carouselTrack");

    let scrollAmount = 0;
    let speed = 1; // lebih besar = lebih cepat

    function autoScroll() {
        scrollAmount += speed;
        track.scrollLeft = scrollAmount;

        // Jika sudah mencapai akhir, reset ke awal
        if (scrollAmount >= track.scrollWidth - track.clientWidth) {
            scrollAmount = 0;
        }

        requestAnimationFrame(autoScroll);
    }

    autoScroll();


</script>
<script>
    <?php
        $flashdata_all = $this->session->flashdata();

        if (!empty($flashdata_all)) {
            foreach ($flashdata_all as $type => $msg) {
                if (!empty($msg)) {
                    $typeEscaped = addslashes($type);
                    $title = ucfirst($typeEscaped);
                    $msgEscaped = addslashes($msg);

                    // Custom button color per type
                    switch ($typeEscaped) {
                        case 'success':
                            $btnColor = '#28a745'; // green
                            break;
                        case 'warning':
                            $btnColor = '#f39c12'; // orange
                            break;
                        case 'info':
                            $btnColor = '#3498db'; // blue
                            break;
                        case 'error':
                        default:
                            $btnColor = '#e74c3c'; // red
                            break;
                    }

                    echo "
                    
                    console.log('Flashdata => type: {$typeEscaped}, message: {$msgEscaped}');
                    console.log('Flashdata => type: {$typeEscaped}, message: {$title}');

                    Swal.fire({
                        icon: '{$typeEscaped}',
                        title: '{$title}',
                        html: '{$msgEscaped}',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '{$btnColor}',
                        width: 450,
                        padding: '2em',
                        background: '#fff',
                        customClass: {
                            popup: 'swal2-rounded',
                            title: 'swal2-title-custom',
                            htmlContainer: 'swal2-text-custom'
                        }
                    });
                    ";
                }
            }
        }
    ?>

</script>
