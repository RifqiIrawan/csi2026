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
        height: 200px;
        background-image: url('foto.jpg');
        background-size: cover;     /* gambar memenuhi area */
        background-position: center;/* fokus tengah */
        background-repeat: no-repeat;
        border: 1px solid gainsboro;
    }
</style>

<section id="event_date" class="portfolio section">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 text-center">
                <p class="title">Carousel</p>
            </div>
        </div>
        <div class="row">
            <?php foreach($data_carousel as $row){?>    
            <div class="col-lg-4">
                <img src="<?php echo base_url();?>assets/images/upload/carousel/<?php echo $row->file_upload?>" class="img-fluid">
            </div>    
            <?php } ?>       
        </div>
    </div>
</section>