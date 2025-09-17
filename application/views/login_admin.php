<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Administrator DFast</title>
  <link rel="icon" href="<?php echo base_url();?>assets/images/Dfast2.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/Dfast2.ico" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
</head>

<style type="text/css">
  .login-page, .register-page {
    -ms-flex-align: center;
    align-items: center;
    background-color: #e9ecef;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 80vh;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .login-card-body, .register-card-body {
    background-color: #fff;
    border-top: 0;
    color: #666;
    padding: 20px;
    margin-bottom: 20px;
  }
</style>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- <div class="login-logo">
    <a href="#"><b>Klinik Medika</b></a>
  </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><h3 style="text-align: center; font-size: 1rem;margin-top: -10px;"><b> <u>Login Administrator</u></b></h3></p>
      <form action="<?php echo base_url('proses_login'); ?>" method="post" style="margin-top: 25px;">
        <div class="input-group mb-3">
          <input type="hidden" class="form-control" name="login" value="admin">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
