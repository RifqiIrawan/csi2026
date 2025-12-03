<style>
    .title{
        font-size: 36px;
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
        max-width: 100%;
        height: auto;   /* jaga proporsi */
        display: block; /* hilangkan whitespace bawah pada inline images */
    }

    section{
        margin-top: 150px;
    }
</style>

<section id="event_date" class="portfolio section">
    <div class="container">
        <div class="row">     
            <div class="col-lg-3"></div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12 mb-1">
                        <p class="title">
                            <?php echo ucwords($data_book_stand[0]->title)?>
                        </p>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <a href="<?php echo base_url();?>assets/images/upload/book_stand/<?php echo $data_book_stand[0]->upload_file?>" download="" class="btn btn-primary" style="padding: 10px 40px;border-radius: 20px;width: fit-content;margin-top:-10px"><b>Download Contract Form</b></a>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $data_book_stand[0]->description?>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <img src="<?php echo base_url();?>assets/images/upload/book_stand/<?php echo $data_book_stand[0]->file_name?>" alt="Foto contoh" class="img-fluid">
                    </div>
                    <div class="col-lg-12">
                        <?php echo $data_book_stand[0]->description2?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>