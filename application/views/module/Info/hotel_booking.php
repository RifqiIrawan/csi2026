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
    /* .img-fluid{       
        width: 100%;
        background-size: cover;     
        background-position: center;
        background-repeat: no-repeat;
        border: 1px solid gainsboro;
        margin-bottom: 30px;
    } */

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

    /* img{
        background-size: cover;        
        background-position: center;   
        background-repeat: no-repeat;  
        background-attachment: fixed;  
        width: -webkit-fill-available;
    } */
</style>

<script>
    function show(title,file,email,contact,url){
        var file = file;
        var folder = "./assets/images/upload/hotel/";
        var pic = "."+folder+""+file;
        var img = $('<img />', {src : pic});
        $('#get_image').empty();
        img.appendTo('#get_image');
        $("#title_modal").text(title);
        $("#btn1").html("<a href=\""+url+"\" target=\"_blank\" class=\"btn btn-primary m-3\"><i class=\"bi bi-info-circle\"></i>&nbsp; <b>More Info</b></a>");
        $("#btn2").html("<a href=\"mailto:"+email+"\" target=\"_blank\" class=\"btn btn-primary m-3\"><i class=\"bi bi-envelope\"></i>&nbsp; <b>Booking Here</b></a>");
        $("#btn3").html("<a href=\"https://wa.me/"+contact+"\" target=\"_blank\" class=\"btn btn-primary m-3\"><i class=\"bi bi-telephone\"></i>&nbsp; <b>Booking Here</b></a>");


        $('#show_modal').modal('show');
    }   

    function hide_modal(){
        $('#show_modal').modal('hide');
    }   
</script>

<section id="event_date" class="portfolio section">
  <div class="container style">
      <div class="row"> 
          <div class="col-lg-12 text-center mb-3">
              <p class="title">Booking Hotel</p>
          </div>
      </div>
      <div class="row">
          <?php foreach($data_hotel as $row){?>    
          <div class="col-lg-4 thumbnails" onclick="show('<?php echo $row->title?>','<?php echo $row->file_upload?>','<?php echo $row->email?>','<?php echo $row->contact?>','<?php echo $row->url?>')">
              <img src="<?php echo base_url();?>assets/images/upload/hotel/<?php echo $row->file_upload?>" class="img-fluid" alt="<?php echo $row->title?>">
              <p class="title-hotel ctg" style="cursor:pointer" onclick="window.open('<?php echo $row->url?>', '_blank')"><?php echo $row->title?></p>
          </div>    
          <?php } ?>       
      </div>
  </div>
</section>
<div class="modal fade" id="show_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="title_modal"></span></h4>
                <button type="button" class="close" onclick="hide_modal();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-lg-5 mt-5">
                    <p id="btn1" style="text-align:center">                       
                    </p>
                    <p id="btn2" style="text-align:center">                    
                    </p>
                    <p id="btn3" style="text-align:center">                        
                    </p>
                </div>
                <div class="col-lg-7" id="get_image">
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>