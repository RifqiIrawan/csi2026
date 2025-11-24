<style>
    .title{
        font-size: 28px;
        font-weight: 600;
        color: #000;
        text-transform:uppercase;
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
        height: 200px;
        background-image: url('foto.jpg');
        background-size: cover;     /* gambar memenuhi area */
        background-position: center;/* fokus tengah */
        background-repeat: no-repeat;
        border: 1px solid gainsboro;
    }

    .footer {
        color: black;
        /* background-color: black; */
        font-size: 15px;
        position: relative;
        background: url('<?php echo $data_footer; ?>');
        /* background-repeat: no-repeat; */
    }
</style>

<section id="event_date" class="portfolio section">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 text-center mb-3">
                <p class="title">Visitor Information</p>
            </div>
        </div>
        <div class="row">
            <!-- <?php foreach($data_information as $row){?>    
            <div class="col-lg-4">
                <img src="<?php echo base_url();?>assets/images/upload/carousel/<?php echo $row->file_upload?>" class="img-fluid ">
            </div>    
            <?php } ?>        -->
            <div class="col-lg-6">
                <p style="font-size:23px;font-weight:500"><b><?php echo $data_information[0]->title1?></b></p>
                <?php foreach($data_information as $row){
                    $sql = $this->db->query("SELECT * from information_detail   
                                            where id_header = '".$row->code."'
                                            order by id asc")->result();
                    foreach($sql as $row2){
                ?> 
                    <p style="margin-top: 5px;">
                        <span><i class="<?php echo "bi bi-".$row2->icon;?>" style="color:#20B2AA;-webkit-text-stroke: 1px currentColor;"></i> 
                        <span style="margin-left:15px;"><?php echo $row2->text?></span>
                    </p>
                    
                <?php 
                    }
                ?>

                <p><?php echo $data_information[0]->description?></p>                
                <p style="font-size:23px;font-weight:500"><b><?php echo $data_information[0]->title2?></b></p>
                <?php
                    $sql3 = $this->db->query("SELECT * from information_hours   
                                        where id_header = '".$row->code."'
                                        order by id asc")->result();
                    foreach($sql3 as $row3){
                ?>
                    <p style="margin-top: 5px;">
                        <span><i class="bi bi-clock" style="color:#20B2AA;-webkit-text-stroke: 1px currentColor;"></i> 
                        <span style="margin-left:15px;"><?php echo $row3->times?></span>
                        <span style=""><?php echo "(".$row3->date_text.")";?></span>
                    </p>
                <?php
                        }
                    } 
                ?>   
            </div>
            <div class="col-lg-6">
                <?php echo $data_information[0]->link_maps?>
            </div>
        </div><br><br>
    </div>
</section>