<?php 
  if($this->session->flashdata('save')){
    echo '<script type="text/javascript">
            $(document).ready(function(){
              swal({
                  title: "Save Success",
                  text: "Data Saved Successfully.",
                  icon: "success",
                  timer: 3000,
                  button: true
              }).then(function() {      
              });                   
            });
          </script>';
  }
  if($this->session->flashdata('not_save')){
    echo    '<script type="text/javascript">
                $(document).ready(function(){
                    swal({
                      title: "Failed",
                      text: "Data Failed to Save.",
                      icon: "error",
                      timer: 3000,
                      button: true
                    }).then(function() {
                    });
                });
            </script>';
    }

    if($this->session->flashdata('update')){
        echo    '<script type="text/javascript">
                    $(document).ready(function(){
                      swal({
                        title: "Update Success",
                        text: "Update Data Successfully.",
                        icon: "info",
                        timer: 3000,
                        button: true
                      }).then(function() {
                      });
                    });
                </script>';
      }
    if($this->session->flashdata('not_update')){
      echo    '<script type="text/javascript">
                  $(document).ready(function(){
                    swal({
                        title: "Update Failed",
                        text: "Update Data Failed.",
                        icon: "error",
                        timer: 3000,
                        button: true
                    }).then(function() {
                    });
                  });
                </script>';
    }
?>
<style type="text/css">
  .icn{
    margin-left: -7px;
    color:black;
  }
  .bw{
    width: 25px;
  }
  .btn-edit-icn{
    background: #00d25b;
  }

  .btn-hapus-icn{
    background:#F70D1A;
    margin-left:0px;
  }

  .edit-btn{        
    min-height: 35px;
  }
  .btn-admin, .btn-group-lg > .btn, .fc .btn-group-lg > 
  button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload
  , .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled
  , .wizard > .actions .btn-group-lg > a {      
    padding: 0.65rem 0.65rem;
    background: #00d25b;
  }

  .modal-body img {
    object-fit: contain;
  }
  img{
    width: 100%;
    
    /* background-image: url('foto.jpg'); */
    background-size: cover;       /* kunci: cover */
    background-position: center;  /* posisi fokus gambar */
    background-repeat: no-repeat;
  }
</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/vendors/ckeditor/ckeditor.js"></script>
<script type="text/javascript">  
  $(document).ready(function() {
    CKEDITOR.replace( 'title' , {
      customConfig : '/custom/ckeditor_config.js'
    });

    CKEDITOR.replace( 'title_edit' , {
      customConfig : '/custom/ckeditor_config.js'
    });

    CKEDITOR.replace( 'subtitle' , {
      customConfig : '/custom/ckeditor_config.js'
    });

    CKEDITOR.replace( 'subtitle_edit' , {
      customConfig : '/custom/ckeditor_config.js'
    });


    $('#close').on('click', function() {    
      window.location.reload()   
    });
    $('#close_edit').on('click', function() {   
      window.location.reload()
    });  
    $('#close_admin').on('click', function() {   
      window.location.reload()
    });  
    $(".modal").on("hidden.bs.modal", function() {      
      window.location.reload()
    });
  });

  function upd(code,title,subtitle,button,file,status){
    $("#code").val(code);
    $("#title").val(title);
    $("#subtitle").val(subtitle);
    $("#button").val(button);
    $("#file_edit").val(file);    
    $.ajax({
      url: "<?php echo base_url()?>Home/search_text",
      type: 'post',
      data: {'code' : code,'text':'swiper'},
      success: function (data) {
        var jsn = JSON.parse(data);
        //console.log(jsn);        
        // var desc = description;
        CKEDITOR.instances.title_edit.setData(jsn.title);
        CKEDITOR.instances.subtitle_edit.setData(jsn.subtitle);
      }
    });
    // $("#ket").val(ket);

    // if(status.length === 0){
    //   var status = "P";
    // }else{      
       var status='#'+status;
    // }
    $(status).prop("checked", true);
    $('#mdl_edit').modal('show');    
  }
  
  function del(code,img){
    if (confirm("Do you want to delete this data?")) {
      $.ajax({
        url: "<?php echo base_url()?>Home/delete_banner",
        type: 'post',
        data: {'code' : code, 'img' : img},
        success: function (data) {
        //   console.log(data);
          if(data === "OK"){
            swal({
                title: "Delete Success",
                text: "Delete Data Successfully.",
                icon: "success",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "Banner_Header";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Delete Data Failed.",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "Banner_Header";
            });
          }
        },
        error: function () {
          alert("Data Failed to be Deleted.");
        }
      });
    }else{
      alert(code + " Data Failed to be Deleted.");
    }
  }  

  function show_image(file){
    var folder = "./assets/images/upload/swiper/";
    var pic = "."+folder+""+file;
    var img = $('<img />', {src : pic});
    img.appendTo('#get_image');
    $("#mdl_img").modal('show');
  }
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Banner Header</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">From news</li> -->
    </ol>
    </nav>
  </div>
    <div class="row ">
      <div class="col-lg-12">
        <div class="car">
          <div class="card-body btop">                    
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mdl" >
              <i class="mdi mdi-account-plus"></i> Add &nbsp;
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Button Action</th>
                    <th>File</th>
                    <th>Status</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_banner as $row) {
                      switch ($row->status) {
                        case 'A':
                          $stat="Active";
                        break; 
                        case 'P':
                          $stat="Passive";
                        break; 
                      }//end switch               
                      echo "<tr>";
                        echo "<td align=\"center\">".$no."</td>";
                        echo "<td align=\"\">".preg_replace('/\r\n|\r|\n/', '',$row->title)."</td>";
                        echo "<td align=\"\">".preg_replace('/\r\n|\r|\n/', '',$row->subtitle)."</td>";
                        echo "<td align=\"\">".$row->button."</td>";
                        echo "<td align=\"center\"><i class=\"mdi mdi-folder-image\" style=\"font-size: 16px;cursor:pointer\" onclick=\"show_image('".$row->image."');\"></td>";
                        echo "<td align=\"center\">".$stat."</td>";  
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"upd('".$row->id."','".preg_replace('/\r\n|\r|\n/', '',$row->title)."','".preg_replace('/\r\n|\r|\n/', '',$row->subtitle)."','".$row->button."','".$row->image."','".$row->status."');\">
                                    <i class=\"mdi mdi-table-edit icn\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Delete\" onclick=\"del('".$row->id."','".$row->image."')\">
                                    <i class=\"mdi mdi-delete-sweep icn\"></i>
                                </button>
                              </td>";   
                      echo "</tr>";                     
                      $no++;
                    }  
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>           
</div>

<div class="modal fade" id="mdl">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Home/add_banner" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Banner Header </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title</label>
            <textarea class="form-control" name="title" rows="9"></textarea>
          </div> 
          <div class="form-group">
            <label class="form-label">Subtitle</label>
            <textarea class="form-control" name="subtitle" rows="9"></textarea>
          </div> 
          <div class="form-group">
            <label class="form-label">Button Action</label>
            <input type="text" class="form-control" name="button" required>
          </div> 
          <div class="form-group">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-control" name="file" required>
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
          <input type="submit" class="btn btn-primary edit-btn" value="Submit" name="Tambah"> 
          <input type="button" class="btn btn-danger edit-btn" id="close" value="Cancel" name="close">        
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mdl_edit">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Home/update_banner" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Banner Header</h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title</label>
            <input type="hidden" class="form-control" name="code" id="code">
            <textarea class="form-control" name="title_edit" rows="9"></textarea>
          </div> 
          <div class="form-group">
            <label class="form-label">Subtitle</label>
            <textarea class="form-control" name="subtitle_edit" rows="9"></textarea>
          </div> 
          <div class="form-group">
            <label class="form-label">Button Action</label>
            <input type="text" class="form-control" name="button" id="button">
          </div> 
          <div class="form-group">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-control" name="file">
            <input type="hidden" class="form-control" name="file_edit" id="file_edit">
          </div>      
          <div class="form-group">
            <label class="form-label">Status</label>
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="A" id="A">
                <span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="P" id="P">
                <span class="custom-control-label">Passive</span>
              </label>             
            </div>
          </div>    
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary edit-btn"  value="Submit" name="Ubah"> 
          <input type="button" class="btn btn-danger edit-btn" id="close_edit" value="Cancel" name="close">        
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="mdl_img">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Show Image </h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 text-center" id="get_image"></div>
        </div>         
      </div>
    </div>
  </div>
</div>