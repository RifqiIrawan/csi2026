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
</style>

<script>
  function show(){
      $('#show_modal').modal('show');
  }
</script>

<section id="event_date" class="portfolio section">
  <div class="container style">
      <div class="row"> 
          <div class="col-lg-12 text-center mb-3">
              <p class="title">Hotel Booking</p>
          </div>
      </div>
      <div class="row">
          <?php foreach($data_hotel as $row){?>    
          <div class="col-lg-4 thumbnails" onclick="show()">
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
          <h4 class="modal-title">Add Data Visitor Information </h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                zxsad
              </div>
              <div class="col-lg-6">
                sadasda
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>