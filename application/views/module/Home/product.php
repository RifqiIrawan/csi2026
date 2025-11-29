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

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Product Sector</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">From news</li> -->
    </ol>
    </nav>
  </div>
    <div class="row ">
        <div class="col-lg-12">
            <button type="button" class="btn btn-info btn-lg" id="show_data" >
              <i class="mdi mdi-format-list-bulleted"></i> Show Data &nbsp;
            </button>
            <button type="button" class="btn btn-success btn-lg" id="update_title" >
              <i class="mdi mdi-repeat"></i> Update Header &nbsp;
            </button>
        </div>
      <div class="col-lg-12">
        <div class="car" id="add_data">
          <div class="card-body btop">                    
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mdl" >
              <i class="mdi mdi-account-plus"></i> Add &nbsp;
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive"  id="tbl_data">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Product Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_product as $row) {
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
                        echo "<td align=\"\">".ucwords(strtolower($row->name))."</td>";
                        echo "<td align=\"center\">".$row->position."</td>";  
                        echo "<td align=\"center\"><i class=\"mdi mdi-folder-image\" style=\"font-size: 16px;cursor:pointer\" onclick=\"show_image('".$row->file_upload."');\"></td>";
                        echo "<td align=\"center\">".$row->description."</td>";      
                        echo "<td align=\"center\">".$stat."</td>";  
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"upd('".$row->id."','".$row->name."','".$row->status."','".preg_replace('/\r\n|\r|\n/', '',$row->description)."','".$row->position."','".$row->file_upload."');\">
                                    <i class=\"mdi mdi-table-edit icn\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Delete\" onclick=\"del('".$row->id."','".$row->file_upload."')\">
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
            
            <div class="table-responsive"  id="tbl_title">
              <table id="example2" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Title Name</th>    
                    <th>Status</th>                   
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_product as $row) {
                      if($row->status_header == 0){
                        $s_h = "Active";
                      }else{
                        $s_h = "Passive";
                      }
                      if($row->header_title !="" || !empty($row->header_title) && $row->status_header == 0){
                        echo "<tr>";
                          echo "<td align=\"center\">".$no."</td>";
                          echo "<td align=\"\">".$row->header_title."</td>";
                          echo "<td align=\"center\">".$s_h."</td>";
                          echo "<td align=\"center\">
                                  <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"upd2('".$row->id."','".$row->header_title."','".$row->status_header."');\">
                                      <i class=\"mdi mdi-table-edit icn\"></i>
                                  </button>                               
                                </td>";   
                        echo "</tr>";  
                      }                   
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
      <form method="post" action="<?php echo base_url(); ?>Home/add_product" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Product Sector </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Product Sector Name</label>
            <input type="text" class="form-control" name="name" maxlength="30" Placeholder="Entry Product Name" style="text-transform:capitalize" required>
          </div>  
          <div class="form-group">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-control" name="file" required>
          </div>
          <div class="form-group">
            <label class="form-label">Position</label>
            <input type="number" class="form-control" name="position" Placeholder="Entry Position" style="text-transform:capitalize" required>
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
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="descriptions" rows="9"></textarea>
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
      <form method="post" action="<?php echo base_url(); ?>Home/update_product" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Product Sector </h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Product Sector Name</label>
            <input type="hidden" class="form-control" name="code" id="code">
            <input type="text" class="form-control" name="name" maxlength="30" id="name" style="text-transform:capitalize" required>
          </div>
          <div class="form-group">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-control" name="file">
            <input type="hidden" class="form-control" name="file_edit" id="file_edit">
          </div>
          <div class="form-group">
            <label class="form-label">Position</label>
            <input type="number" class="form-control" name="position" id="position" required>
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
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="descriptions_edit" id="descriptions" rows="9"></textarea>
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

<div class="modal fade" id="mdl_edit2">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Home/update_product2" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Header Product Sector</h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title</label>
            <input type="hidden" class="form-control" name="code" id="code2">
            <input type="text" class="form-control" name="header_title" id="header_title" required>
          </div>  
          <div class="form-group">
            <label class="form-label">Status</label>
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="0" id="0">
                <span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="1" id="1">
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



<script type="text/javascript">  
  $(document).ready(function() {
    $("#tbl_title").css("display","none");
    $("#show_data").show();
    CKEDITOR.replace( 'descriptions' , {
      customConfig : '/custom/ckeditor_config.js'
    });

    CKEDITOR.replace( 'descriptions_edit' , {
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
    
    $("#update_title").on('click', function() {     
      $("#tbl_title").css("display","block");
      $("#tbl_data").css("display","none");
      $("#add_data").hide();
    });

    $("#show_data").on('click', function() {    
      $("#tbl_data").show(); 
      $("#show_data").show();
      $("#add_data").show();
      $("#tbl_title").css("display","none");
    });
  });

  function upd(code,name,status,description,position,file){
    $("#code").val(code);
    $("#name").val(name);
    $("#position").val(position);
    $("#file_edit").val(file);
    var desc = description;
    CKEDITOR.instances.descriptions.setData(desc);
    var status='#'+status;
    $(status).prop("checked", true);
    $('#mdl_edit').modal('show');    
  }
  
  function upd2(code,header,status){
    $("#code2").val(code);
    $("#header_title").val(header);  

    var status='#'+status;
    $(status).prop("checked", true);
    $('#mdl_edit2').modal('show');    
  }
  
  function del(code,img){
    var code = code;
    if (confirm("Do you want to delete this data?")) {
      $.ajax({
        url: "<?php echo base_url()?>Home/delete_product",
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
              window.location = "Product";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Delete Data Failed.",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "Product";
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
    var folder = "./assets/images/upload/product/";
    var pic = "."+folder+""+file;
    var img = $('<img />', {src : pic});
    img.appendTo('#get_image');
    $("#mdl_img").modal('show');
  }
</script>