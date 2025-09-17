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
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koperasi Argo Manunggal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/koperasi.png" />
  </head>

<style>
  .auth.login-bg {
    background: #F8F8FF;
    background-size: cover;
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid grey;
    border-radius: 0.25rem;
    color: black;
  }

  .text-left {
    text-align: center!important;
  }

  .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint {
    border: 1px solid #656870;
    height: calc(2.25rem + 2px);
    font-weight: normal;
    font-size: 0.875rem;
    padding: 0.625rem 0.6875rem;
    background-color: #ffffff;
    border-radius: 2px;
    color: #000000;
  } 

  .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
    content: "";
    width: 16px;
    height: 16px;
    border-radius: 2px;
    border: solid #949494;
    border-width: 2px;
    -webkit-transition: all;
    -moz-transition: all;
    -ms-transition: all;
    background: white;
    -o-transition: all;
    transition: all;
    transition-duration: 0s;
    -webkit-transition-duration: 250ms;
    transition-duration: 250ms;
    position: absolute;
    top: 2px;
    left: 0;
  }

  .form-check .form-check-label {
    display: block;
    padding-left: 0.625rem;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #000;
  }

  .auth .forgot-pass {
    font-size: 0.875rem;
    text-align: right;
    color: #000;
    margin-top: 5px;
  }

  .auth .sign-up a {
    color: #000;
    margin-left: 7px;
  }
  .card .card-body {
    padding: 0rem 0rem;
  }
  .pl-5, .px-5 {
    padding-left: 1rem !important;
  }

  .pr-5, .px-5 {
    padding-right: 1rem !important;
  }

  .card .card-title {
    color: #000;
    margin-bottom: 1.5rem;
    text-transform: capitalize;
    margin-top: -25px;
  }

  .mb-3, .template-demo .circle-progress-block, .my-3 {
    margin-bottom: 1.5rem !important;
  }

  .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus, .tt-query:focus, .tt-hint:focus {
    background-color: #fff;        
    font-size: 13px;
    color: black;
  }
</style>

<script>
  function back(){
    window.location.href="<?php echo base_url(); ?>Registrasi/Login";
  }
</script>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Registrasi Akun Koprasi</h3>
                <form action="<?php echo base_url(); ?>Registrasi/tambah" method="post">
                  <div class="form-group">
                    <label>NIK Karyawan/Anggota</label>
                    <input type="text" class="form-control" name="nik" placaholder="NIK" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Karyawan/Anggota</label>
                    <input type="text" class="form-control" name="nama" placaholder="Nama Karyawan/Anggota" required>
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="email" class="form-control" name="username" placaholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" placaholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control" name="hp" placaholder="No. HP" required>
                  </div>              
                  <div class="text-center" style="margin-top:25px;">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" >Submit</button>
                  </div>
                  <div class="text-center" style="margin-top:-20px;">
                    <button type="button" class="btn btn-danger btn-block enter-btn" onclick="back()">Kembali</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url();?>assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/js/misc.js"></script>
    <script src="<?php echo base_url();?>assets/js/settings.js"></script>
    <script src="<?php echo base_url();?>assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>