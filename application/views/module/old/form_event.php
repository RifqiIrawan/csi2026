<?php 
  if($this->session->flashdata('simpan')){
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
  if($this->session->flashdata('tidak')){
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

    if($this->session->flashdata('ubah')){
        echo    '<script type="text/javascript">
                    $(document).ready(function(){
                      swal({
                        title: "Update Success",
                        text: "Data Successfully Updated.",
                        icon: "info",
                        timer: 3000,
                        button: true
                      }).then(function() {
                      });
                    });
                </script>';
      }
    if($this->session->flashdata('tidak_ubah')){
      echo    '<script type="text/javascript">
                  $(document).ready(function(){
                    swal({
                        title: "Update Failed",
                        text: "Data Failed to Update.",
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
</style>

<script type="text/javascript">  
  $(document).ready(function() {
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

  function ubah(kode,nama,status,posisi){
    $("#kode").val(kode);
    $("#nama").val(nama);
    $("#posisi").val(posisi);
    // $("#ket").val(ket);

    if(status.length === 0){
      var status = "P";
    }else{      
      var status='#'+status;
    }
    $(status).prop("checked", true);
    $('#mdl_edit').modal('show');    
  }
  
  function hapus(kode){
    var kode = kode;
    if (confirm("Do you want to delete this data?")) {
      $.ajax({
        url: "<?php echo base_url()?>Form/hapus_event",
        type: 'post',
        data: {'kode' : kode},
        success: function (data) {
          console.log(data);
          if(data === "OK"){
            swal({
                title: "Delete Success",
                text: "Data Deleted Successfully.",
                icon: "success",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "form_event";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Data Failed to be Deleted.",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "form_event";
            });
          }
        },
        error: function () {
          alert("Data Failed to be Deleted.");
        }
      });
    }else{
      alert(kode + " Data Failed to be Deleted.");
    }
  }

  function validasiEkstensi(){
    var inputFile = document.getElementById('file');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Sorry, only format image JPG, JPEG, PNG');
        inputFile.value = '';
        return false;
    }
  }

  function validasiEkstensi2(){
    var inputFile = document.getElementById('file2');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.JPG|\.JPEG|\.PNG)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Sorry, only format image JPG, JPEG, PNG');
        inputFile.value = '';
        return false;
    }
  }

  function show_image(file,folder){
    var pic = folder+""+file;
    var img = $('<img />', {src : pic}).css("height","200px");
    img.appendTo('#get_image');
    $("#mdl_img").modal('show');
  }
  
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Event</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">From event</li> -->
    </ol>
    </nav>
  </div>
    <div class="row ">
      <div class="col-lg-12">
        <div class="car">
          <div class="card-body btop">                    
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mdl" >
              <i class="mdi mdi-account-plus"></i> Add Data &nbsp;
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
                    <th>Title Name</th>
                    <th>Position</th>
                    <th>Upload</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_event as $row) {
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
                        echo "<td align=\"\">".ucwords(strtolower($row->nama))."</td>";
                        echo "<td align=\"center\">".$row->urut."</td>";
                        echo "<td align=\"center\"><i class=\"mdi mdi-folder-image\" style=\"cursor:pointer;\" title=\"Show Image\" onclick=\"show_image('".$row->file_name."','".$row->folder_name."')\"></i></td>";
                        echo "<td align=\"center\">".$stat."</td>";    
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"ubah('".$row->id."','".$row->nama."'
                                ,'".$row->status."','".$row->position."');\">
                                    <i class=\"mdi mdi-table-edit icn\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Delete\" onclick=\"hapus('".$row->id."')\">
                                    <i class=\"mdi mdi-delete-sweep icn\"></i>
                                </button>
                              </td>";   
                        echo "<td align=\"center\">".$row->description."</td>";    
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
      <form method="post" action="<?php echo base_url(); ?>Form/tambah_event" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Data Event </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title Name</label>
            <input type="text" class="form-control" name="nama" Placeholder="Entry Title Name" style="text-transform:capitalize" required>
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="file" id="file" onchange="return validasiEkstensi()">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Position Image</label>
            <input type="number" class="form-control" name="posisi" Placeholder="Entry Position Image" required>
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
            <textarea class="form-control" name="keterangan" rows="9"></textarea>
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
      <form method="post" action="<?php echo base_url(); ?>Form/ubah_event" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Event </h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title Name</label>
            <input type="hidden" class="form-control" name="kode" id="kode">
            <input type="text" class="form-control" name="nama" id="nama" style="text-transform:capitalize" required>
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="file" id="file2" onchange="return validasiEkstensi2()" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Position Image</label>
            <input type="number" class="form-control" name="posisi" id="posisi" required>
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
            <textarea class="form-control" name="keterangan_edit" rows="9"></textarea>
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
  <div class="modal-dialog modal-lg">
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