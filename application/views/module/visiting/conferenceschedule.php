<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

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
    </style>
    </head>
    <body>

    <main class="main">
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-4">
                            <?php foreach ($programs as $prog): ?>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="program-card">
                                    <span class="badge-type <?= strtolower($prog['program_type']) === 'seminar' ? 'badge-seminar' : 'badge-workshop' ?>">
                                        <?= strtoupper($prog['program_type']); ?>
                                    </span>

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

                                    <div class="mt-auto text-center">
                                        <a href="<?= $prog['program_register_link']; ?>" class="btn btn-register">
                                        REGISTER HERE <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
