<style>
    .title{
        font-size: 28px; 
        font-weight: 600;
        color: #000;
    }
    /* p {
        display: block;
        margin: 0 0 5px;
        font-weight: 400;
        line-height: 1.75;
        letter-spacing: normal;
        word-break: break-word;
        color: #000;
    } */
    .img-fluid{       
        width: 100%;
        /* background-image: url('foto.jpg'); */
        background-size: cover;     /* gambar memenuhi area */
        background-position: center;/* fokus tengah */
        background-repeat: no-repeat;
        border: 1px solid gainsboro;
        margin-bottom: 30px;
    }

    .styel{
        min-height: 350px;
    }

    .ctg {
        background-image: linear-gradient(to right, #fff, #fff 50%, #fff 50%);
        background-size: 200% 100%;
        background-position: -100%;
        display: inline-block;
        padding: 5px 0px 40px;
        position: absolute;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s 
        ease-in-out;
        text-align: center;
    }

    .title-hotel{
        color: #fff;
        font-size: 1.2em;
        align-self: center;
        position: absolute;
        z-index: 10;
        text-align: center;        
        font-weight: 600;
    }
    .thumbnails {
        width: calc(100% / 3);
        margin: 0px;
        display: flex;
        justify-content: center;
        position: relative;
        overflow: hidden;
        transition: transform .3s;
    }

    @media (min-width: 992px) {
        .modal-lg, .modal-xl {
            --bs-modal-width: 1000px;
        }
    }
    .modal-body img {
        object-fit: contain;
    }

    img .card-img-top{
        background-size: cover;        /* Gambar menutupi seluruh area */
        background-position: center;   /* Posisi gambar di tengah */
        background-repeat: no-repeat;  /* Tidak diulang */
        background-attachment: fixed;  /* Gambar diam saat scroll (opsional) */
        width: -webkit-fill-available;
    }
    .text-light {
        --bs-text-opacity: 1;
        color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
        font-weight: 700;
    }

    input[type=text], input[type=password], input[type=number], input[type=email], input[type=url], input[type=search], select, textarea {
        background: #fff;
        border: 2px solid #d9d9d9;
        border-radius: 0;
        box-shadow: none;
        color: #888;
        font-size: 16px;
        height:30px; 
        line-height: 0px;
        padding: 10px;
        width: 100%;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        color: var(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
        transition: border-color .15s 
        ease-in-out, box-shadow .15s 
        ease-in-out;
    }

    /* coating show */
    .btn-default {
        background: #5cb468 !important;
        width: 100%;
        color: #fff !important;
        font-weight: 700 !important;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
        font-size: 14px;
    }

    .card {
        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
        border: none;
        margin-bottom: 30px;
    }

    .card-img, .card-img-bottom, .card-img-top {
        width: 100%;
        max-height: 250px;
        min-height: 250px;
    }

    .card:hover {
        transform: scale(1.05);
        transition: all 1s ease;
        z-index: 999;
    }

    .card-01 .card-body {
        position: relative;
        padding-top: 15px;
        padding-bottom: 15px;
        min-height: 220px;
    }

    h5{
        font-weight: 700;
    }

    .card-01 .badge-box {
        position: absolute;
        top: -20px;
        left: 50%;
        width: 100px;
        height: 100px;
        margin-left: -50px;
        text-align: center;
    }

    .card-01 .badge-box i {
        background: #006EFF;
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 20px;
    }

    .card-01 .height-fix {
        height: 455px;
        overflow: hidden;
    }

    .card-01 .height-fix .card-img-top {
        width: auto;
    }

    .main-nav>ul>li>a,
    .main-nav>ul>li.submenu:after {
        color: #2a2a2a !important;
    }

    .white-btn {
        color: #2a2a2a !important;
        border: 2px solid #2a2a2a !important;
    }

    .ket h4,
    .ket p {
        color: #2a2a2a !important;
    }

    sponsors-section .slide-logo img {
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
        aspect-ratio: 3/2;
        object-fit: contain;
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

    .footer {
        color: black;
        /* background-color: black; */
        font-size: 15px;
        position: relative;
        background: url('<?php echo $data_footer; ?>');
        /* background-repeat: no-repeat; */
    }
    section{
        margin-top: 150px;
    }
</style>

<section class="inner-banner hero-section" style="background-image: url('<?php echo base_url("./assets/images/upload/header_news/".$data_header_news[0]->file_upload."");?>'); padding: 7.5rem 0 !important; background-size: cover; background-position: center;" data-desktop_image="<?php echo base_url("./assets/images/upload/header_news/".$data_header_news[0]->file_upload."");?>" data-mobile_image="<?php echo base_url("./assets/images/upload/header_news/".$data_header_news[0]->file_upload."");?>">
    <div class="container">
        <h2 class="text-light"><?php echo ucwords($data_header_news[0]->title);?></h2>
    </div>
</section>

<section class="generic-gallery-isotope mt-4">
    <div class="container">
        <div class="row">
            <?php foreach($data_news_update as $row){?>
                <div class="col-lg-3">
                    <div class="card card-01">
                        <img class="card-img-top" src="<?php echo base_url("./assets/images/upload/news_update/".$row->file_upload."");?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $row->title;?></h5>
                            <p class="card-text text-center"><?php echo $row->date_news;?></p>
                           
                        </div>
                        <div class="card-body" style="min-height: 10px;">
                            <a href="<?php echo base_url("News_Update/".$row->id);?>" class="btn btn-default text-uppercase" target="_blank">Read
                                More</a>
                        </div>
                    </div>
                </div>  
            <?php }?>                                  
        </div>
    </div>
</section>

