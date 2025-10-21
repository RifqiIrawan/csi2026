<style>
    .title{
        font-size: 28px;
        font-weight: 600;
        color: #000;
    }
    p {
        display: block;
        margin: 0 0 5px;
        font-weight: 400;
        line-height: 1.75;
        letter-spacing: normal;
        word-break: break-word;
        color: #000;
    }
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

    img{
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
</style>

<section class="inner-banner hero-section" style="background-image: url('<?php echo base_url("./assets/images/upload/header_news/".$data_header_news[0]->file_upload."");?>'); padding: 7.5rem 0 !important; background-size: cover; background-position: center;" data-desktop_image="https://coatingshow.com/bg-header.jpg" data-mobile_image="https://coatingshow.com/bg-header.jpg">
    <div class="container">
        <h2 class="text-light"><?php echo ucwords($data_header_news[0]->title);?></h2>
    </div>
</section>

<section class="generic-gallery-isotope mt-5">
    <div class="container">
        <div class="row mb-4">     
            <?php foreach($data_contact1 as $row){?>       
                <div class="col-lg-12 text-center">
                    <p>
                        <strong><?php echo ucwords($row->name)?>, <?php echo ucwords($row->position)?></strong><br>
                        <span>
                            
                        </span> <?php echo $row->hp?><br>
                        <span>
                            
                        </span>
                        <a style="color: #5cb468;" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>