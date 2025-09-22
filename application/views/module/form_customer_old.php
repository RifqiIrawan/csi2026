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

  function ubah(kode,nama,services,kategori,status){
    $("#kode").val(kode);
    $("#nama").val(nama);
    $("#services").val(services);
    $("#kategori").val(kategori);

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
        url: "<?php echo base_url()?>Form/hapus_customer",
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
              window.location = "form_customer";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Data Failed to be Deleted.",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "form_customer";
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
    var img = $('<img />', {src : pic}).css("width","900px","height","400px");
    img.appendTo('#get_image');
    $("#mdl_img").modal('show');
  }

  function export_customer(){    
    window.location.href="<?php echo base_url()?>Form/export_customer";
  }   
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Customer</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">From Customer</li> -->
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
            <button type="button" class="btn btn-success btn-lg" id="download" title="Download Excel" onclick="export_customer()">
              <i class="mdi mdi-file-excel"></i> Export Excel 
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
                    <th>Goods / Services</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_customer as $row) {
                      switch ($row->status) {
                        case 'A':
                          $stat="Active";
                        break; 
                        case 'P':
                          $stat="Passive";
                        break; 
                      }//end switch     
                      
                      switch ($row->kategori) {
                        case '1':
                          $kategori="Domestic Customer";
                        break; 
                        case '2':
                          $kategori="Overseas Customer";
                        break; 
                      }//end switch     
                      echo "<tr>";
                        echo "<td align=\"center\">".$no."</td>";
                        echo "<td align=\"\">".$row->nama."</td>";
                        echo "<td align=\"\">".ucwords($row->services)."</td>";
                        echo "<td align=\"\">".$kategori."</td>";
                        echo "<td align=\"center\">".$stat."</td>";    
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"ubah('".$row->id."','".$row->nama."'
                                ,'".$row->services."','".$row->kategori."','".$row->status."');\">
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
      <form method="post" action="<?php echo base_url(); ?>Form/tambah_customer" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Data Customer </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Category Customer</label>
              <select class="form-control" name="kategori" required>
                <option value="">- - Choose Category - -</option>
                <option value="1">Domestic Customer</option>
                <option value="2">Overseas Customer</option>
              </select>
          </div>
          <div class="form-group">
            <label class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="nama" Placeholder="Entry Customer Name" required>
          </div>
          <div class="form-group">
            <label class="form-label">Goods / Services</label>
            <input type="text" class="form-control" name="services" Placeholder="Entry Goods / Services" style="text-transform:capitalize" required>
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
      <form method="post" action="<?php echo base_url(); ?>Form/ubah_customer" id="frm_group_edit" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Customer </h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Category Customer</label>
              <input type="hidden" class="form-control" name="kode" id="kode" required>
              <select class="form-control" name="kategori" id="kategori" required>
                <option value="">- - Choose Category - -</option>
                <option value="1">Domestic Customer</option>
                <option value="2">Overseas Customer</option>
              </select>
          </div>
          <div class="form-group">
            <label class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
          <div class="form-group">
            <label class="form-label">Goods / Services</label>
            <input type="text" class="form-control" name="services" id="services" style="text-transform:capitalize" required>
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

<div class="modal fade" id="mdl_admin">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>userlogin/tambah_admin" id="frm_group">
        <div class="modal-customer">
          <h4 class="modal-title">Tambah Data Administrator </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Nama Administrator</label>
            <input type="text" class="form-control" name="nama" Placeholder="Input Nama" required>
          </div>
          <div class="form-group">
            <label class="form-label">Username</label>
            <input type="email" class="form-control" name="username" Placeholder="Username" required>
          </div>
          <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" Placeholder="Password" required>
          </div>          
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary edit-btn"  value="Simpan" name="Tambah"> 
          <input type="button" class="btn btn-danger edit-btn" id="close_admin" value="Batal" name="close">        
        </div>
      </form>
    </div>
  </div>
</div>