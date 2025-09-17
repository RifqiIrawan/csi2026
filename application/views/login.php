<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT. Kelie Chemical Word</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- End layout styles -->
    <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="icon">
    <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="logo_title">
  </head>
  <style>
    .auth.login-bg {
      background: #fff;
      background-size: cover;
      background-image: url('<?php echo base_url();?>Website/assets/img/slide1.jpg');
    }

    .card {
      position: relative;
      display: flex;   
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border-radius: 0.25rem;
      color: #000;
    }

    .text-left {
      text-align: center!important;
    }

    .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint {
      border: 1px solid #c9c9c9;
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
      margin-bottom: 1rem;
      text-transform: capitalize;
      margin-top: 0px;
    }

    .mb-3, .template-demo .circle-progress-block, .my-3 {
      margin-bottom: 1.5rem !important;
    }

    .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus, .tt-query:focus, .tt-hint:focus {
      background-color: #fff;        
      font-size: 13px;
      color: black;
    }

    ::placeholder {
      color: red;
      opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12 -18 */
      color: red;
    }
  </style>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login Admin</h3>
                <form action="<?php echo base_url(); ?>cek_login" method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placaholder="Username" >
                  </div>
                  <div class="form-group">
                    <label>Password </label>
                    <input type="password" class="form-control" name="password" placaholder="Password">
                  </div>
                  <!-- <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div> -->
                  <div class="text-center" style="margin-top:35px;">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <!-- <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div> -->
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