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
    
    <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="icon">
    <link href="<?php echo base_url();?>Website/assets/img/logo_title.png" rel="logo_title">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
     <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    
  
  <!--  Javascript -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
    
    <script type="text/javascript"  src="<?php echo base_url();?>assets/jquery-rupiah/rupiah.js"></script>

    <!-- <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script> -->
    <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url();?>assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/js/misc.js"></script>
    <script src="<?php echo base_url();?>assets/js/settings.js"></script>
    <script src="<?php echo base_url();?>assets/js/todolist.js"></script>    
    <script src="<?= base_url().'assets/js/sweetalert.min.js'?>"></script>
    <script src="<?php echo base_url();?>assets/js/file-upload.js"></script>    
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/ckeditor/ckeditor.js"></script>
    



    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/koperasi.png" /> -->
  </head>

  <style type="text/css">
    body, html {
        font-family: Arial, Helvetica, sans-serif;
        overflow-x: hidden;
        padding-right: 0 !important;
        background: #fff;
        font-size: 15px;
    }
    .navbar .navbar-menu-wrapper .navbar-toggler {
        border: 0;
        color: #6c7293;
        height: 70px;
        border-radius: 0px;
        position: absolute;
    }

    .navbar .navbar-menu-wrapper {
        background: white;
        transition: width 0.25s ease;
        -webkit-transition: width 0.25s ease;
        -moz-transition: width 0.25s ease;
        -ms-transition: width 0.25s ease;
        -webkit-box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.15);
        color: black;
        padding-left: 15px;
        padding-right: 15px;
        width: 100%;
        height: 70px;
    }

    /* @media screen and (max-width: 991px){
        .sidebar-offcanvas.active {
            left: 0;
        }
    } */

    .table-bordered th, .table-bordered td {
      border: 1px solid #c3c9cf;
      font-size: 12px;
      background: white;
    }

    .sidebar .nav .nav-item.active > .nav-link .menu-title {
      color: #000;
    } 

    .sidebar .nav .nav-item .nav-link i.menu-arrow {
      font: normal normal normal 24px / 1 "Material Design Icons";
      line-height: 1;
      font-size: 1rem;
      margin-left: auto;
      color: #000;
    }    
    
    .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
        font-size: 1.2rem;
        margin: -22px;
    }

    .sidebar .sidebar-brand-wrapper {
        transition: width 0.25s ease, background 0.25s ease;
        -webkit-transition: width 0.25s ease, background 0.25s ease;
        -moz-transition: width 0.25s ease, background 0.25s ease;
        -ms-transition: width 0.25s ease, background 0.25s ease;
        background: #ffffff;
        width: 244px;
        height: 70px;
    }

    .sidebar .nav .nav-item.active > .nav-link i {
        color: #000;
    }

    .sidebar .nav.sub-menu .nav-item .nav-link {
      color: #000;
      padding: 0.5rem 0.35rem;
      position: relative;
      font-size: 0.855rem;
      line-height: 1;
      height: auto;
      border-top: 0;
    } 

    .sidebar .nav.sub-menu .nav-item .nav-link.active {
      color: #000;
      background: transparent;
    }

    .sidebar .nav .nav-item .menu-icon {
      margin-right: 0.5rem;
      font-size: 0.8125rem;
      line-height: 1;      
      background: #032344;
      /* background: #14097a; */
      width: 31px;
      height: 31px;
      border-radius: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
    }

    .nav {
        display: block;
        flex-wrap: nowrap;
        padding-left: 0;
        /* margin-bottom: 0; */
        list-style: none;
        flex-direction: column-reverse;
        align-content: stretch;
        justify-content: center;
    }

    .img-xs{
        width:40px;
        height:35px;
    }

    .sidebar .sidebar-brand-wrapper .sidebar-brand img {
        width: calc(244px - 120px);
        max-width: 18%;
        height: 36px;
        margin: 5px 5px 10px;
        vertical-align: middle;
    }

    .border-left {
        border-left: 1px solid #fff !important;
    }

    .navbar .navbar-menu-wrapper .search input {
        background: #fff;
        padding: 13px 20px 11px 20px;
        border: 1px solid rgb(151 155 166 / 50%);
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        padding-left: 1.5rem;
        margin-bottom: 0;
        list-style: none;
    }
    .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
        position: absolute;
        font-size: 0.9rem;
        background: white;
        color: black;
        margin-top: 0;
        top: 60px;
        right: 0;
        width: -webkit-fill-available;
        left: auto;
        -webkit-box-shadow: 0px 0px 35px -3px #7f1e1e;
        -moz-box-shadow: 0px 0px 35px -3px black;
        box-shadow: 0px 0px 35px -3px #fff;
        padding: 0;
    }

    .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .navbar-profile .navbar-profile-name {
        white-space: nowrap;
        margin-left: 1rem;
        font-weight: 410;
    }

    .content-wrapper {
        background: #ffffff;
        padding: 1.875rem 1.75rem;
        width: 100%;
        -webkit-flex-grow: 1;
        flex-grow: 1;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 410;
        color: #0d0d0d;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .text-center {
        text-align: center !important;
        font-weight: 410;
    }

    @media (max-width: 767px){
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
            margin-left: 0.4rem;
            margin-right: 0.4rem;
        }
    }

    @media (max-width: 991px) {
      .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
          padding-left: 0px;
          padding-right: 1px;
          border-right: none;
      }

      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
        margin-bottom: 0;
        padding: 11px 13px;
        cursor: pointer;
        position: sticky;
        color: black;
        position: fixed;
        left: 60%;
        width: 35%;        
        margin-top: 12px;
      }
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #c3c9cf;
        border-radius: 0rem;
        color: black;
    }

    .sidebar {
        min-height: calc(100vh - 70px);
        background: #fff;
        font-weight: normal;
        padding: 0;
        color: black;
        border: 1px solid #c3c9cf;
        z-index: 11;
        transition: width 0.25s ease, background 0.25s ease;
        -webkit-transition: width 0.25s ease, background 0.25s ease;
        -moz-transition: width 0.25s ease, background 0.25s ease;
        -ms-transition: width 0.25s ease, background 0.25s ease;
    }

    .sidebar .nav {
      overflow: hidden;
      flex-wrap: nowrap;
      flex-direction: column;
      margin-bottom: 60px;
      padding-top: 40px;
    }

    .sidebar .nav .nav-item.active > .nav-link {
        background: initial;
        position: relative;
        color: black;
    }

    .sidebar .nav .nav-item .nav-link {
      color: black;
    }

    .section {
      color: var(--default-color);
      background-color: var(--background-color);
      padding: 0px 0;
      scroll-margin-top: 85px;
      overflow: clip;
    } 
    

    .footer {
      background: #ffffff;
      padding: 20px 1rem;
      transition: all 0.25s ease;
      -moz-transition: all 0.25s ease;
      -webkit-transition: all 0.25s ease;
      -ms-transition: all 0.25s ease;
      font-size: calc(0.875rem - 0.05rem);
      font-weight: 300;
      color: black;
      border-top: 1px solid #c3c9cf;
    }

    .text-muted, .preview-list .preview-item .preview-item-content p .content-category {
      color: #0d0d0d !important;
    }

    .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-category):not(.account-dropdown) > .nav-link {
      background: #00BFFF;
      color: #ffffff; 
    }
    
    .page-title {
      color: #000;
      font-size: 1.125rem;
      margin-bottom: 0;
    }

    .card .card-title {
      color: #000;
      margin-bottom: 1.125rem;
      text-transform: capitalize;
    }

    .table-responsive > .table-bordered {
      border: 1px solid #c3c9cf;
    }

    .table-bordered th, .table-bordered td {
      border: 1px solid #c3c9cf;
      font-size: 12px;
    }

    .table, .jsgrid .jsgrid-table {
      margin-bottom: 0;
      color: #000;
      border: 1px solid #c3c9cf;
    }

    .table, .jsgrid .jsgrid-table {
      margin-bottom: 0;
      color: #000;
    }

    .table thead th, .jsgrid .jsgrid-table thead th {
      text-align:center;
      border-bottom-width: 1px;
      font-weight: 700;
      color: #000;
    }

    .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu {
      padding: 0;
      margin-top: 1.25rem;
      background: #fff;
    }

    .sidebar .nav .nav-item.profile .profile-desc {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      padding: 0.6rem 1.17rem;
      line-height: 1.25;
      margin-top: -25px;
    }

    .dropdown-divider {
      height: 0;
      margin: 0.5rem 0;
      overflow: hidden;
      border-top: 1px solid #c3c9cf;
    }

    .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
      font-size: 1.2rem;
      margin: -10px;
    }

    div.dataTables_wrapper div.dataTables_length select {
      width: auto;
      display: inline-block;
      background: transparent;
      border: 1px solid #c3c9cf;
      color: black;
    }

    div.dataTables_wrapper div.dataTables_filter input {
      margin-left: 0.5em;
      display: inline-block;
      width: auto;
      background: white;
      border: 1px solid #c3c9cf;
    }

    .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a, .btn-group.open .dropdown-toggle, .fc .open.fc-button-group .dropdown-toggle, .btn:active, .fc button:active, .ajax-upload-dragdrop .ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper .swal2-styled:active, .wizard > .actions a:active, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover, .btn:visited, .fc button:visited, .ajax-upload-dragdrop .ajax-file-upload:visited, .swal2-modal .swal2-buttonswrapper .swal2-styled:visited, .wizard > .actions a:visited, a, a:active, a:checked, a:focus, a:hover, a:visited, body, button, button:active, button:hover, button:visited, div, input, input:active, input:focus, input:hover, input:visited, select, select:active, select:focus, select:visited, textarea, textarea:active, textarea:focus, textarea:hover, textarea:visited {
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      color: black;
    }


    .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page a {
      position: relative;
      display: block;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.25;
      color: #000;
      background-color: #fff;
      border: 1px solid #dee2e6;
    }

    /* table.dataTable.table-striped>tbody>tr.odd>* {
      box-shadow: none;
    } */

    table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>th.sorting_asc, 
    table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting_asc_disabled, 
    table.dataTable thead>tr>th.sorting_desc_disabled, table.dataTable thead>tr>td.sorting, 
    table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, 
    table.dataTable thead>tr>td.sorting_asc_disabled, table.dataTable thead>tr>td.sorting_desc_disabled {
      cursor: pointer;
      position: relative;
      padding-right: 26px;
      text-align: center;
    }

    .btop{     
      padding: 10px 10px 10px;
      border: 1px solid #c3c9cf;      
      border-bottom: 1px solid transparent;
    }

    .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
      margin-bottom: 0;
      padding: 11px 13px;
      cursor: pointer;
      background: #007bff;
      color:black;
    }

    .btn-primary:not(.btn-light):not(.btn-secondary), .wizard > .actions a:not(.btn-light):not(.btn-secondary) {
      color: #ffffff;
    }

    .bg-dark {
      background-color: #ffffff !important;
      border: 1px solid #c3c9cf;
    }

    .btn i, .fc button i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i, .wizard > .actions a i {
      margin-right: 0.25rem;
    }

    .btn, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a {
      padding: 0.65rem 0.65rem;      
      /* margin-bottom: 10px; */
    }

    .btn-color{
      background:#007bff;
    }

    table.dataTable>tbody>tr.child span.dtr-data {      
      margin-left: 10px;
    }

    .modal-content {
      position: relative;
      display: flex;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #c3c9cf;
      border-radius: 0.3rem;
      outline: 0;
      top:5rem;
    }

    .form-group {
      margin-bottom: 1rem;
      background: #fff;
      color: black;
    }

    .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint {
      border: 1px solid #c3c9cf;
      height: calc(2.25rem + 2px);
      font-weight: normal;
      font-size: 0.875rem;
      padding: 0.625rem 0.6875rem;
      background-color: #fff;
      border-radius: 2px;
      color: #000;
    }

    .modal-footer {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: flex-end;
      padding: 0.6875rem;
      border-top: 1px solid #c3c9cf;
      border-bottom-right-radius: calc(0.3rem - 1px);
      border-bottom-left-radius: calc(0.3rem - 1px);
    }

    .modal-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1rem 1rem;
      border-bottom: 1px solid #c3c9cf;
      border-top-left-radius: calc(0.3rem - 1px);
      border-top-right-radius: calc(0.3rem - 1px);
    }

    .modal-header .close {
      padding: 1rem 1rem;
      margin: -15px -10px -10px auto;
      background: #fff;
      color: black;
    }

    .modal-title {
      margin-bottom: 0;
      line-height: 1.5;
      color: #000;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
      top: inherit;
      left: 5px;
      height: 1em;
      width: 1em;
      margin-top: -2px;
      display: block;
      position: absolute;
      color: white;
      border: 0.15em solid white;
      border-radius: 1em;
      box-shadow: 0 0 0.2em #444;
      box-sizing: content-box;
      text-align: center;
      text-indent: 0 !important;
      font-family: "Courier New",Courier,monospace;
      line-height: 1em;
      content: "+";
      background-color: #0051ff;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
      margin-right: 0.5em;
      display: inline-block;
      color: #ffffff;
      content: "►";
    }

    table.dataTable>tbody>tr.child ul.dtr-details {
      display: inline-block;
      list-style-type: none;
      margin: 0 17px;
      padding: 0;
    }

    .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus, .tt-query:focus, .tt-hint:focus {
      background-color: #fff;        
      font-size: 13px;
    }

    .form-group label {
      font-size: 13px;
      line-height: 2;
      vertical-align: top;
    }

    .form-check .form-check-label input[type="radio"] + .input-helper:before {       
      width: 15px;
      height: 15px;
    }

    .form-check .form-check-label input[type="radio"] + .input-helper:after {
      width: 7px;
      height: 7px;
      background: white;
      top: 4px;
      left: 4px;      
    }

    .form-check .form-check-label {
      display: block;
      padding-left: 0.5rem;
      font-size: 13px;
      line-height: 1.5;
      color: #000;
    }

    .form-check {
      position: relative;
      display: block;
      margin-top: 30px;
      margin-bottom: 0px;
      /* left: -41%; */
      padding-left: 0;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before
    , table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
      margin-right: 0.5em;
      display: inline-block;
      color: #ffffff;
      content: "+";
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before
    , table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before {
      content: "+";
    }

    select.form-control, select.asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead, select.tt-query, select.tt-hint {
      padding: 0.4375rem 0.75rem;
      border: 1px solid #c3c9cf;
      color: #4b5564;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
      position: relative;
      width: 100%;
      padding-right: 0.75rem;
      padding-left: 0.75rem;
      padding: 5px;
    }

    .navbar .form-control, .navbar .asColorPicker-input, .navbar .dataTables_wrapper select
    , .dataTables_wrapper .navbar select, .navbar .jsgrid .jsgrid-table 
    .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row 
    .navbar input[type=text], .navbar .jsgrid .jsgrid-table .jsgrid-filter-row select
    , .jsgrid .jsgrid-table .jsgrid-filter-row .navbar select, .navbar .jsgrid .jsgrid-table 
    .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar input[type=number]
    , .navbar .select2-container--default .select2-selection--single, .select2-container--default .navbar 
    .select2-selection--single, .navbar .select2-container--default .select2-selection--single .select2-search__field
    , .select2-container--default .select2-selection--single .navbar .select2-search__field, .navbar .typeahead
    , .navbar .tt-query, .navbar .tt-hint {
      width: 100%;
      border-radius: 6px;
    }

    /* .table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
      vertical-align: middle;
      font-size: 0.875rem;
      line-height: 0.6;
      white-space: nowrap;
    } */

    .select2-results {
      display: block;
      background: white;
      color: black;
    }

    .select2-search--dropdown {
      display: block;
      padding: 4px;
      background: transparent;
    }

    .select2-container--default .select2-selection--single, .select2-container--default .select2-dropdown, .select2-container--default .select2-selection--multiple {
      border-color: #c3c9cf;
      background: white;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: black;
      line-height: 14px;
    }

    .hidetext { -webkit-text-security: disc; /* Default */ }

    .icn{
      margin-left: -7px;
      color:white;
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

    @media screen and (max-width: 991px) {
      .sidebar-offcanvas.active {
          /* right: 0; */
          left: 0;
      }
    } 
  </style>

  
  <script type="text/javascript">
    $(document).ready(function() {
      CKEDITOR.replace( 'keterangan' );
      CKEDITOR.replace( 'keterangan_edit' );
      $('#master_data').on("click", function() { 
      });

      $('#acc').on("click", function() { 
      });

      $('#upd').on("click", function() { 
      });

      $('#add_menu').on("click", function() { 
        $( "#get_menu" ).toggleClass( "active" );
      });

      $('#setting').on("click", function() { 
      });

      $('#post_logo').on("click", function() { 
        alert();
      });
      

      $('#search_form').on("change", function() { 
        var id = $("#search_form").val();
        window.location.href=""+id;
      });
      
      new DataTable('#example', {
         "responsive": true, 
              "bLengthChange": true,
              "aoColumnDefs": [{
                          'bSortable': true,
                          'aTargets': [0]
                      }],
                      "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                      "info":true,
                      /*"bFilter": false,*/
              "iDisplayLength": 25
      });

      new DataTable('#example2', {
         "responsive": true, 
              "bLengthChange": true,
              "aoColumnDefs": [{
                          'bSortable': true,
                          'aTargets': [0]
                      }],
                      "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                      "info":true,
                      /*"bFilter": false,*/
              "iDisplayLength": 25
      });

      new DataTable('#example3', {
         "responsive": true, 
              "bLengthChange": true,
              "aoColumnDefs": [{
                          'bSortable': true,
                          'aTargets': [0]
                      }],
                      "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                      "info":true,
                      /*"bFilter": false,*/
              "iDisplayLength": 25
      });
    });
  </script>

  <body>
    <div class="container-scroller">
      