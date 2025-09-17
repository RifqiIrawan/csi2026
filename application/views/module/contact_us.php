<?php 
  if($this->session->flashdata('simpan')){
    echo "<script>alert('Data berhasil disimpan')</script>";
  }
  if($this->session->flashdata('tidak')){
    echo "<script>alert('Data tidak berhasil disimpan')</script>";
  }
  if($this->session->flashdata('ada')){
    echo "<script>alert('Maaf, Kode user sudah ada didatabase')</script>";
  }
  if($this->session->flashdata('ubah')){
    echo "<script>alert('Data berhasil diubah')</script>";
  }
  if($this->session->flashdata('tidak_ubah')){
    echo "<script>alert('Data tidak berhasil diubah')</script>";
  }
  if($this->session->flashdata('hapus')){
    echo "<script>alert('Data berhasil dihapus.')</script>";
  }
  if($this->session->flashdata('tidak_hapus')){
    echo "<script>alert('Hapus data tidak berhasil.')</script>";
  }
  if($this->session->flashdata('gagal')){
    echo "<script>alert('Gagal merubah data.')</script>";
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
  });

  function ubah(id,kode,nama){
    $("#kode").val(id);
    $("#kode_unit").val(kode);
    $("#nama").val(nama);
    $('#mdl_edit').modal('show');    
  }
  
  function hapus(kode){
    var kode = kode;
    if (confirm("Ingin menghapus data ini?")) {
      $.ajax({
        url: "<?php echo base_url()?>Unit/hapus",
        type: 'post',
        data: {'kode' : kode},
        success: function () {
          alert('Data berhasil dihapus');
          window.location.href='Unit';
        },
        error: function () {
          alert('Data tidak berhasil dihapus');
        }
      });
    }else{
      alert(kode + " tidak berhasil dihapus");
    }
  }

  function export_excel(){    
    window.location.href="<?php echo base_url()?>Form/export_excel";
  }
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"> <b>Contact Us</b> </h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
      <li class="breadcrumb-item active" aria-current="page">Contact Us</li> -->
    </ol>
    </nav>
  </div>
  <div class="row ">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-left" style="margin-bottom: -20px;margin-top: -10px;">
          <button type="button" class="btn btn-success btn-lg" id="download" title="Download Excel" onclick="export_excel()">
            <i class="mdi mdi-file-excel"></i> Export Excel 
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th width="1%">No</th>
                  <th width="20%">Name</th>
                  <th width="15%">Email</th>
                  <th width="15%">Subject</th>
                  <th>Message</th>
                  <!-- <th width="15%">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;
                  foreach ($data_contact_us as $row) {            
                    echo "<tr>";
                      echo "<td align=\"center\">".$no."</td>";
                      echo "<td>".$row->name."</td>";
                      echo "<td>".$row->email."</td>";
                      echo "<td>".ucwords(strtolower($row->subject))."</td>";
                      echo "<td>".ucwords(strtolower($row->message))."</td>";
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
