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

  function ubah(kode,nama,urut,status){
    $("#kode").val(kode);
    $("#nama").val(nama);
    $("#urut").val(urut);

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
        url: "<?php echo base_url()?>Form/hapus_product",
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
              window.location = "form_product";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Data Failed to be Deleted.",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "form_product";
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
    var img = $('<img />', {src : pic}).css("width","auto","height","200px","text-align","center");
    img.appendTo('#get_image');
    $("#mdl_img").modal('show');
  }
  
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Profile</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li> -->
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
                    <th>Company Name</th>
                    <th>Nick Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Fax</th>
                    <th>Website</th>
                    <th>Location</th>
                    <th>Status</th>
                    <!-- <th>Logo</th>-->
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_profile as $row) {
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
                        echo "<td align=\"\">".$row->company_name."</td>";
                        echo "<td align=\"center\">".$row->nick_name."</td>";
                        echo "<td align=\"center\">".$row->address."</td>";
                        echo "<td align=\"center\">".$row->phone."</td>";
                        echo "<td align=\"center\">".$row->email."</td>";
                        echo "<td align=\"center\">".$row->fax."</td>";
                        echo "<td align=\"center\">".$row->website."</td>";
                        echo "<td align=\"center\">".$row->gmaps."</td>";
                        echo "<td align=\"center\">".$stat."</td>";    
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"ubah();\">
                                    <i class=\"mdi mdi-table-edit icn\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Delete\" onclick=\"hapus('".$row->id."')\">
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
      <form method="post" action="<?php echo base_url(); ?>Form/tambah_profile" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Data Profile </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company" Placeholder="Entry Company Name" required>
          </div>
          <div class="form-group">
            <label>Logo</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="file" id="file" onchange="return validasiEkstensi()">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Nick Name</label>
            <input type="text" class="form-control" name="nick" Placeholder="Entry Nick Name" style="text-transform:capitalize" required>
          </div>
          <div class="form-group">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address" rows="6" Placeholder="Entry Address" required></textarea>
          </div>
          <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" Placeholder="Entry Phone" required>
          </div>
          <div class="form-group">
            <label class="form-label">Fax</label>
            <input type="text" class="form-control" name="fax" Placeholder="Entry Fax" required>
          </div>
          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" Placeholder="Entry Email" required>
          </div>
          <div class="form-group">
            <label class="form-label">Website</label>
            <input type="text" class="form-control" name="website" Placeholder="Entry Website" required>
          </div>
          <div class="form-group">
            <label class="form-label">Maps</label>
            <input type="text" class="form-control" name="maps" Placeholder="Entry Maps" required>
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
      <form method="post" action="<?php echo base_url(); ?>Form/ubah_profile" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Profile </h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title Name</label>
            <input type="text" class="form-control" name="kode" id="kode">
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
            <label class="form-label">Position</label>
            <input type="number" class="form-control" name="urut" id="urut" required>
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