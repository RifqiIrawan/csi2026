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
    
<div class="modal fade" id="show_modal">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Info/add_information" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Data Visitor Information </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title 1</label>
            <input type="text" class="form-control" name="title1" id="title" placeholder="Entry Title" style="text-transform:capitalize">
          </div>
          <div class="form-group">
            <label class="form-label">Visiting <i class="mdi mdi-plus-box" onclick="add_input()"  style="position: absolute;margin-left: 10px;font-size: 20px;margin-top: -8px;color: darkgreen"></i></label>
            <table width="100%">
              <tbody id="add_input">
                <tr>                
                  <td>                    
                    <input type="hidden" class="form-control" name="ktg" style="margin-bottom:10px;" value="1" required>
                    <input type="text" class="form-control" name="logo[]" placeholder="Entry Text Icon/Logo" style="margin-bottom:10px;" required>
                    <input type="text" class="form-control" name="name[]" placeholder="Entry Name/Description" style="text-transform:capitalize" required>
                  </td>                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="form-group">
            <label class="form-label">Title 2</label>
            <input type="text" class="form-control" name="title2" placeholder="Entry Title" style="text-transform:capitalize">
          </div>
          <div class="form-group">
            <label class="form-label">Exhibition Hours <i class="mdi mdi-plus-box" onclick="add_input2()" style="position: absolute;margin-left: 10px;font-size: 20px;margin-top: -8px;color: darkgreen"></i></label>
            <table width="100%">
              <tbody id="add_input2">
                <tr>
                  <td>                  
                    <input type="hidden" class="form-control" name="ktg2" style="margin-bottom:10px;" value="2" required>
                    <input type="text" class="form-control" name="time[]" placeholder="Entry Exhibition Times/Hours" style="margin-bottom:10px;" required>
                    <input type="text" class="form-control" name="date[]" placeholder="Entry Exhibition Date" required>
                  </td>                  
                </tr>
              </tbody>
            </table>
          </div> 
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="descriptions" rows="9"></textarea>
          </div>    
          <div class="form-group">
            <label class="form-label">Link/URL Maps</label>
            <input type="text" class="form-control" name="url" placeholder="Entry Link/URL Maps" style="text-transform:capitalize">
          </div>   
          <div class="form-group">
            <label class="form-label">Status</label>
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="A" checked>
                <span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="P" >
                <span class="custom-control-label">Passive</span>
              </label>             
            </div>
          </div> 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary edit-btn"><i class="mdi mdi-content-save-settings"></i> Submit </button>
          <button type="button" class="btn btn-danger edit-btn" id="close"><i class="mdi mdi-close"></i> Cancel </button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
