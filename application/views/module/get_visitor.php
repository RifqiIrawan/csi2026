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
  function export_visitor(){    
    window.location.href="<?php echo base_url()?>Form/export_visitor";
  }    
</script>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"> <b>Visitor Website</b> </h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <!-- <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
      <li class="breadcrumb-item active" aria-current="page">Visitor Web</li> -->
    </ol>
    </nav>
  </div>
    <div class="row ">
      <div class="col-lg-12">
        <!-- <div class="car">
            <div class="card-body btop">                    
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mdl" >
                <i class="mdi mdi-account-plus"></i> Tambah 
              </button>
            </div>
        </div> -->
        <div class="card">
          <div class="card-body text-left" style="margin-bottom: -20px;margin-top: -10px;">
            <button type="button" class="btn btn-success btn-lg" id="download" title="Download Excel" onclick="export_visitor()">
              <i class="mdi mdi-file-excel"></i> Export Excel 
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Vendor Name</th>
                    <th>IP</th>
                    <th>City</th>
                    <th>Timezone</th>
                    <th>Location</th>
                    <!-- <th width="15%">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_visitor as $row) {            
                      echo "<tr>";
                        echo "<td align=\"center\">".$no."</td>";
                        echo "<td>".$row->vendor."</td>";
                        echo "<td>".$row->ip4."</td>";
                        echo "<td>".ucwords(strtolower($row->city))."</td>";
                        echo "<td>".ucwords(strtolower($row->timezone))."</td>";
                        echo "<td align=\"center\">".$row->lokasi."</td>";
                        // echo "<td align=\"center\">
                        //         <button type=\"button\" class=\"btn btn-edit-icn bw\" title=\"Ubah Data\" onclick=\"ubah('".$row->id."','".$row->ip."','".$row->city."','".$row->timezone."');\">
                        //             <i class=\"mdi mdi-table-edit icn\"></i>
                        //         </button>
                        //         <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Hapus Data\" onclick=\"hapus('".$row->id."')\">
                        //             <i class=\"mdi mdi-delete-sweep icn\"></i>
                        //         </button>
                        //         </td>";        
                        // echo "</tr>";
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
