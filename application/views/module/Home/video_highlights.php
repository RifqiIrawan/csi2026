

<style>
    .title{
        font-size: 28px;
        font-weight: 600;
        color: #000;
        margin-bottom: 15px;
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
        <div class="row mt-3">
            <?php foreach($data_highlights as $row){
            ?>   
                 
            <div class="col-lg-4">
                <p class="title text-center">
                    <?php echo ucwords($row->title)?>
                </p>
                <!-- <img src="<?php echo base_url();?>assets/images/upload/carousel/<?php echo $row->file_upload?>" class="img-fluid"> -->
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                    <iframe 
                        src="https://www.youtube.com/embed/<?php echo $row->url?>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen
                        style="position: absolute; top:0; left:0; width:100%; height:100%;">
                    </iframe>
                </div>                
                <p class="mt-3">
                    <?php echo $row->description?>
                </p>
            </div>    
            <?php } ?>       
        </div>
    </div>
</section>