
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<style>
  /* === Bootstrap 5 Compatibility Layer for Bootstrap 4 === */

  /* Fix spacing utilities that don't exist in Bootstrap 4 */
  .me-2 { margin-right: .5rem !important; }
  .me-3 { margin-right: 1rem !important; }
  .ms-2 { margin-left: .5rem !important; }
  .ms-3 { margin-left: 1rem !important; }
  .mt-3 { margin-top: 1rem !important; }
  .mb-3 { margin-bottom: 1rem !important; }
  .mb-5 { margin-bottom: 3rem !important; }
  .gap-3 { gap: 1rem !important; }

  /* Text utilities */
  .text-primary { color: #0d6efd !important; }
  .text-success { color: #198754 !important; }

  /* Buttons (Bootstrap 5 color palette for consistency) */
  .btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
  }
  .btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
  }

  /* Cards adjustment */
  .tab-card {
    border: 1px solid #dee2e6;
    border-radius: .5rem;
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
  }

  /* === Bootstrap 5 `.row > *` gutter fix for Bootstrap 4 === */
  .row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
  }

  .row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y);
  }


  /* === Fix for <ul class="nav custom-tabs"> structure with multiple <a> inside one <li> === */
  .custom-tabs {
    display: flex;
    flex-wrap: nowrap;
    gap: 8px;
    border-bottom: 2px solid #dee2e6;
    background: #f8f9fa;
    padding: .5rem;
    border-radius: .5rem .5rem 0 0;
  }

  .custom-tab .row {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
  }
  /* Ensure all links inside the single <li> look like individual tab items */
  .custom-tabs .nav-item {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    border-bottom: none;
  }

  .custom-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    padding: .5rem 1rem;
    margin-right: .25rem;
    background-color: #f8f9fa;
    color: #495057;
    transition: all .15s ease-in-out;
    font-weight: 500;
  }

  .custom-tabs .nav-link:hover {
    background-color: #e9ecef;
    color: #0d6efd;
    border-color: #dee2e6 #dee2e6 #fff;
  }

  /* Active tab mimic Bootstrap 5 */
  .custom-tabs .nav-link.active {
    color: #0d6efd;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    font-weight: 600;
  }

  /* Fix icon spacing */
  .custom-tabs .nav-link i {
    margin-right: .4rem;
  }

  /* Optional: add soft shadow and rounded corners to tabs */
  .custom-tabs .nav-link.active {
    box-shadow: inset 0 -2px 0 #0d6efd;
  }


  /* Form labels & controls */
  .form-label {
    display: inline-block;
    margin-bottom: .5rem;
    font-weight: 500;
  }

  /* File input and text area styling improvements */
  .form-control {
    border-radius: .25rem;
  }

  .form-text {
    display: block;
    margin-top: .25rem;
    font-size: 0.875rem;
    color: #6c757d;
  }

  /* For radio button alignment */
  .d-flex { display: flex !important; }
  .align-items-center { align-items: center !important; }

  /* For DataTables border consistency */
  .table-bordered th, .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }

  /* Fix fade + show for tab-pane (Bootstrap 5 behavior) */
  .tab-pane {
    display: none;
  }
  .tab-pane.active,
  .tab-pane.show {
    display: block;
  }

  /* Fix .d-none & visibility classes if any conflict */ /* Remark this part do display logo coating show */
  /* .d-none { display: none !important; } */

  /* Mimic Bootstrap 5 outline button hover */
  .btn-outline-danger:hover,
  .btn-outline-primary:hover,
  .btn-outline-success:hover {
    color: #fff !important;
  }

  /* Make form inside card more consistent visually */
  .banner-form .card-body,
  .section1-form .card-body,
  .visainformation-form .card-body {
    padding: 1.5rem;
  }

  /* Align DataTable header */
  .table thead th {
    background-color: #f8f9fa;
    vertical-align: middle;
  }

  /* Image previews */
  .img-thumbnail {
    border-radius: .25rem;
    border: 1px solid #dee2e6;
    padding: .25rem;
  }

</style>
<style>/* TAB STYLING */
  .main-panel{
      padding-top: 50px !important
  }
  .custom-tabs {
    display: flex;
    flex-wrap: nowrap;
    gap: 8px;
    border-bottom: 2px solid #dee2e6;
    background: #f8f9fa;
    padding: .5rem;
    border-radius: .5rem .5rem 0 0;
  }

  .custom-tabs .nav-link {
    display: inline-flex;
    align-items: center;
    white-space: nowrap;
    color: #495057;
    border: none;
    background: transparent;
    padding: .5rem 1rem;
    border-radius: .5rem;
    transition: all 0.3s;
    font-weight: 500;
  }

  .custom-tabs .nav-link i {
    margin-right: 6px;
  }

  .custom-tabs .nav-link:hover {
    background: #e9ecef;
    color: #0d6efd;
  }

  .custom-tabs .nav-link.active {
    background: #0d6efd;
    color: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }

  /* CARD MODERN */
  .tab-card {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s;
  }

  .tab-card:hover {
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
  }

  /* FORM INPUT STYLING */
  .form-control, .form-check-input {
    border-radius: .5rem;
    box-shadow: none !important;
  }

  .form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 .2rem rgba(13,110,253,.25) !important;
  }

  .btn {
    border-radius: .5rem;
    padding: .5rem 1.2rem;
    font-weight: 500;
  }

  .tab-content {
    border: 0px !important;
  }

  .tab-content.mt-3 {
    border: 0px !important;
    padding: 0rem;
  }


  .banner-form { display: none; margin-top: 0px; }

  .content-banner { margin-top: 0px !important}

  .ellipsis {
    max-width: 200px;    /* lebar kolom bisa disesuaikan */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    vertical-align: middle;
  }


  /* Custom SweetAlert look */
  /* Rounded popup */
  .swal2-rounded {
      border-radius: 15px !important;
  }

  /* Title styling */
  .swal2-title-custom {
      font-size: 22px !important;
      font-weight: 700 !important;
      color: #333 !important;
      margin-bottom: 15px !important;
  }

  /* Message text styling */
  .swal2-text-custom {
      font-size: 25px !important;
      line-height: 1.6 !important;
      color: #444 !important;
  }
  /* Pastikan title Swal berwarna hitam */
  .swal2-title {
    color: #000 !important;
  }

  .ck-editor__editable_inline {
      min-height: 150px; /* set tinggi editor */
  }

  /* Data table css */
  .container-fluid {
      padding-left: 10px !important;
      padding-right: 10px !important;
  }

  /* Make DataTables full width */
  #bannerTable_wrapper,
  #bannerTable,
  #section1Table_wrapper,
  #section1Table,
  #visainformationTable_wrapper,
  #visainformationTable {
      width: 100% !important;
      box-sizing: border-box; /* ensures padding/border won't break full width */
  }

  /* Remove extra DataTables wrapper spacing */
  .dataTables_wrapper {
      margin: 0 !important;
      padding: 0 !important;
      width: 100%; /* ensure wrapper fills container */
      box-sizing: border-box;
  }

  .container-fluid {
    padding-left: 0 !important;
    padding-right: 10px !important;
  }

  .custom-tabs .nav-item {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    border-bottom: none;
    margin-left: 10px;
  }
  


</style>
<style>
  .wrap-text {
      white-space: normal !important;
      word-break: break-word !important;
      max-width: 600px;
  }

  .ellipsis {
      display: inline-block;
      max-width: 180px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
  }

</style>
</head>
<body>

<?php 
  $currentYear = date('Y'); 
  $startYear   = $currentYear - 2; 
  $endYear     = $currentYear + 4; 
?>

<div class="container-fluid mt-4">
  <div class="row">
    <ul class="nav custom-tabs" id="formTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-banner" data-bs-toggle="tab" href="#content-banner" role="tab">
          <i class="fa fa-list"></i> Banner
        </a>
        <a class="nav-link" id="tab-content" data-bs-toggle="tab" href="#content-content" role="tab">
          <i class="fa fa-tags"></i> Content
        </a>
        <a class="nav-link" id="tab-visainformation" data-bs-toggle="tab" href="#content-visainformation" role="tab">
          <i class="fa fa-ellipsis-h"></i> Visa Information
        </a>
        <a class="nav-link" id="tab-testimonial" data-bs-toggle="tab" href="#content-testimonial" role="tab">
          <i class="fa fa-comment-dots me-1"></i> Testimonial
        </a>
      </li>
    </ul>
    <!-- Tab Content -->
    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">

        <!-- TAB 1: Banner -->
        <div class="tab-pane fade show active" id="content-banner" role="tabpanel">
          <button id="addBannerBtn" class="btn btn-success mb-3">Add Banner</button>

          <!-- DataTable -->
          <table id="bannerTable" class="display table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Year</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>1</td>
                <td>Sample Banner</td>
                <td><img src="https://via.placeholder.com/150x50" alt="Banner" style="width:150px;"></td>
                <td>https://example.com</td>
                <td>Active</td>
                <td>This is a sample banner</td>
                <td>
                  <button class="btn btn-sm btn-primary">Edit</button>
                  <button class="btn btn-sm btn-danger">Delete</button>
                </td>
              </tr> -->
            </tbody>
          </table>

          <!-- Banner Form -->
          <div id="bannerFormContainer" class="banner-form">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Banner Configuration</h5>
                <form action="<?= base_url('exhibiting/why-exhibit-banner-add') ?>" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label class="form-label">Banner Year</label>
                    <select class="form-control" name="banneryear" required>
                      <option value="">-- Select Banner Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>" <?= ($y == $currentYear) ? 'selected' : ''; ?>>
                          <?= $y; ?>
                        </option>
                      <?php endfor; ?>
                    </select>
                  </div>  
                
                  <div class="mb-3">
                    <label class="form-label">Banner Title</label>
                    <input type="text" class="form-control" name="bannertitle" placeholder="Enter Banner Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Subtitle</label>
                    <textarea class="form-control" rows="4" name="bannersubtitle" placeholder="Enter banner subtitle"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="bannerimage" accept="image/*" > <!-- required -->
                    <small class="form-text text-muted">Recommended size: 1200x400px</small>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Link</label>
                    <input type="url" class="form-control" name="bannerlink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="bannerStatus" id="bannerActive" value="active" checked>
                    <label for="bannerActive" class="mb-0">Active</label>
                    <input type="radio" name="bannerStatus" id="bannerPassive" value="inactive">
                    <label for="bannerPassive" class="mb-0">Passive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="button" id="backBannerBtn" class="btn btn-outline-danger">Back</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Banner Edit Form -->
          <div id="bannerEditFormContainer" class="banner-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Banner</h5>
                <form id="editBannerForm" action="<?= base_url('exhibiting/why-exhibit-banner-update') ?>" method="post" enctype="multipart/form-data">
                  
                  <!-- Hidden field for Banner ID -->
                  <input type="hidden" name="id" id="editBannerId">

                  <div class="mb-3">
                    <label class="form-label">Banner Year</label>
                    <select class="form-control" name="banneryear" id="editBannerYear" required>
                      <option value="">-- Select Banner Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>  

                  <div class="mb-3">
                    <label class="form-label">Banner Title</label>
                    <input type="text" class="form-control" name="bannertitle" id="editBannerTitle" placeholder="Enter Banner Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Subtitle</label>
                    <textarea class="form-control" rows="4" name="bannersubtitle" id="editBannerSubtitle" placeholder="Enter banner subtitle"></textarea>
                  </div>

                  <!-- <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="bannerimage" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 1200x400px</small>
                    <div class="mt-2">
                      <img id="editBannerPreview" src="" alt="Current Banner" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div> -->

                  <div class="mb-3">
                      <label class="form-label">Banner Image</label>
                      <input type="file" class="form-control" name="image" id="editBannerImage" accept="image/*">
                      <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                      <div class="mt-2">
                          <img id="editBannerPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                      </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Link</label>
                    <input type="url" class="form-control" name="bannerlink" id="editBannerLink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="bannerStatus" id="editBannerActive" value="active">
                    <label for="editBannerActive" class="mb-0">Active</label>
                    <input type="radio" name="bannerStatus" id="editBannerInactive" value="inactive">
                    <label for="editBannerInactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditBannerBtn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>


        </div>
        
        <!-- TAB 2: Section -->
        <div class="tab-pane fade" id="content-content" role="tabpanel">
          <button id="addSection1Btn" class="btn btn-success mb-3">Add Section</button>

          <!-- DataTable -->
          <table id="section1Table" class="display table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Year</th>
                <!-- <th>Title</th> -->
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

          <!-- Section Add Form -->
          <div id="section1FormContainer" class="section1-form d-none mt-3">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-success">Add Section</h5>
                <form id="addSection1Form" action="<?= base_url('exhibiting/why-exhibit-section-add') ?>" method="post" enctype="multipart/form-data">

                  <div class="mb-3">
                    <label class="form-label">Section Year</label>
                    <select class="form-control" name="addsectionyear" id="addSection1Year" required>
                      <option value="">-- Select Section Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Title</label>
                    <input type="text" class="form-control" name="addsectiontitle" id="addSection1Title" placeholder="Enter Section Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Description</label>
                    <textarea class="form-control" rows="4"
                      name="addsectiondescription"
                      id="addSection1Description"
                      rows="4" 
                      placeholder="Enter Section Description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Image</label>
                    <input type="file" class="form-control" name="addsectionimage" id="addSection1Image" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="addSection1Preview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="addsectionStatus" id="addSection1Active" value="active" checked>
                    <label for="addSection1Active" class="mb-0">Active</label>
                    <input type="radio" name="addsectionStatus" id="addSection1Inactive" value="inactive">
                    <label for="addSection1Inactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-success me-2">Add</button>
                  <button type="button" id="backSection1Btn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>


          <!-- Section Edit Form -->
          <div id="section1EditFormContainer" class="section1-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Section</h5>
                <form id="editSection1Form" action="<?= base_url('exhibiting/why-exhibit-section-update') ?>" method="post" enctype="multipart/form-data">

                  <input type="hidden" name="id" id="editSection1Id">

                  <div class="mb-3">
                    <label class="form-label">Section Year</label>
                    <select class="form-control" name="sectionyear" id="editSection1Year" required>
                      <option value="">-- Select Section Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Title</label>
                    <input type="text" class="form-control" name="sectiontitle" id="editSection1Title" placeholder="Enter Section Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Description</label>
                    <textarea class="form-control" rows="4"
                      name="sectiondescription"
                      id="editSection1Description"
                      placeholder="Enter Section Description"></textarea>
                  </div>


                  <div class="mb-3">
                    <label class="form-label">Section Image</label>
                    <input type="file" class="form-control" name="sectionimage" id="editSection1Image" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="editSection1Preview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="sectionStatus" id="editSection1Active" value="active">
                    <label for="editSection1Active" class="mb-0">Active</label>
                    <input type="radio" name="sectionStatus" id="editSection1Inactive" value="inactive">
                    <label for="editSection1Inactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditSection1Btn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- TAB 3: Visa Information -->
        <div class="tab-pane fade" id="content-visainformation" role="tabpanel">
          <!-- DataTable -->
          <table id="visainformationTable" class="display table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          
          <!-- Section Edit Form -->
          <div id="visainformationEditFormContainer" class="visainformation-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Visa Information</h5>
                <form id="editVisaInformationForm" action="<?= base_url('exhibiting/why-exhibit-visa-update') ?>" method="post" enctype="multipart/form-data">

                  <input type="hidden" name="id" id="visainformationId">

                  <div class="mb-3">
                    <label class="form-label">Visa Information Title</label>
                    <input type="text" class="form-control" name="visainformationtitle" id="visainformationTitle" placeholder="Enter Visa Information Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Visa Information Description</label>
                    <textarea class="form-control" rows="4"
                      name="visainformationdescription"
                      id="editVisaInformationDescription"
                      placeholder="Enter Visa Information Description"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelvisainformationBtn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- TAB 4: Testimonial -->
        <div class="tab-pane fade" id="content-testimonial" role="tabpanel">
          <button id="addTestimonialBtn" class="btn btn-success mb-3">Add Testimonial</button>

          <!-- DataTable -->
          <table id="testimonialTable" class="display table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Author</th>
                <th>Position</th>
                <th>Company</th>
                <th>Testimonial</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

          <!-- Testimonial Form -->
          <div id="testimonialFormContainer" class="testimonial-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Testimonial Configuration</h5>
                <form action="<?= base_url('exhibiting/why-exhibit-testimonial-add') ?>" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="testimonialAuthor" class="form-label">Author Name</label>
                    <input type="text" id="testimonialAuthor" class="form-control" name="testimonialauthor" placeholder="Enter author's name" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label for="testimonialPosition" class="form-label">Position / Title</label>
                    <input type="text" id="testimonialPosition" class="form-control" name="testimonialposition" placeholder="Enter position or title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label for="testimonialCompany" class="form-label">Company</label>
                    <input type="text" id="testimonialCompany" class="form-control" name="testimonialcompany" placeholder="Enter company name" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label for="testimonialText" class="form-label">Testimonial</label>
                    <textarea id="testimonialText" class="form-control" rows="4" name="testimonialtext" placeholder="Write the testimonial here"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="testimonialOrder" class="form-label">Display Order</label>
                    <input type="text" id="testimonialOrder" class="form-control" name="testimonialorder" placeholder="Optional: Enter display order or URL">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="testimonialStatus" id="testimonialActive" value="1" checked>
                    <label for="testimonialActive" class="mb-0">Active</label>
                    <input type="radio" name="testimonialStatus" id="testimonialPassive" value="0">
                    <label for="testimonialPassive" class="mb-0">Inactive</label>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="button" id="backTestimonialBtn" class="btn btn-outline-danger">Back</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Testimonial Edit Form -->
          <div id="testimonialEditFormContainer" class="testimonial-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Testimonial</h5>
                <form id="editTestimonialForm" action="<?= base_url('exhibiting/why-exhibit-testimonial-update') ?>" method="post" enctype="multipart/form-data">
                  
                  <!-- Hidden field for Testimonial ID -->
                  <input type="hidden" name="id" id="editTestimonialId">

                  <div class="mb-3">
                    <label for="editTestimonialAuthor" class="form-label">Author Name</label>
                    <input type="text" class="form-control" name="testimonialauthor" id="editTestimonialAuthor" placeholder="Enter author name" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label for="editTestimonialPosition" class="form-label">Position / Title</label>
                    <input type="text" class="form-control" name="testimonialposition" id="editTestimonialPosition" placeholder="Enter position or title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label for="editTestimonialCompany" class="form-label">Company</label>
                    <input type="text" class="form-control" name="testimonialcompany" id="editTestimonialCompany" placeholder="Enter company name" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                      <label for="editTestimonialText" class="form-label">Testimonial</label>
                      <textarea class="form-control" rows="4"
                        name="testimonialtext"
                        id="editTestimonialText"
                        placeholder="Write the testimonial here"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="editTestimonialOrder" class="form-label">Display Order</label>
                    <input type="text" class="form-control" name="testimonialorder" id="editTestimonialOrder" placeholder="Optional: Enter display order or URL">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="testimonialstatus" id="editTestimonialActive" value="1">
                    <label for="editTestimonialActive" class="mb-0">Active</label>
                    <input type="radio" name="testimonialstatus" id="editTestimonialInactive" value="0">
                    <label for="editTestimonialInactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditTestimonialBtn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- jQuery + DataTables + Bootstrap JS Bundle -->
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script>

  let sectionEditor, visainformationEditor, testimonialEditor;

  // 2️⃣ Inisialisasi CKEditor
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#editSection1Description'))
      .then(editor => {
        sectionEditor = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));

    ClassicEditor
      .create(document.querySelector('#editVisaInformationDescription'))
      .then(editor => {
          visainformationEditor = editor;
          console.log('Editor 2 ready');
      })
      .catch(error => console.error(error));
      
    ClassicEditor
      .create(document.querySelector('#editTestimonialText'))
      .then(editor => {
          testimonialEditor = editor;
          console.log('Editor 2 ready');
      })
      .catch(error => console.error(error));
  });

</script>
<script>
  var base_url = "<?= base_url(); ?>";

  $(document).ready(function() {
    var $bannerTableWrapper = $('#bannerTable_wrapper');
    var $bannerForm = $('#bannerFormContainer');
    var $addBannerBtn = $('#addBannerBtn');
    var $backBannerBtn = $('#backBannerBtn');
    // Initialize DataTable
    // Initialize DataTable with AJAX
    var bannerTable = $('#bannerTable').DataTable({
        responsive: true,
        processing: true,   // show processing indicator
        serverSide: true,   // kalau pakai server-side processing
        ajax: {
            url: base_url + "exhibiting/why-exhibit-datatable", // ganti dengan route CI kamu
            type: "POST"
        },
        dataType: 'json',
        order: [[1, "asc"]],
        columns: [
            { data: "no" },
            { data: "content_year" },
            { data: "title" },
            { data: "subtitle" },
            { data: "file_path" },
            { data: "status" },
            {
              data: null,
              orderable: false,
              render: function (data, type, row) {
                  return `
                      <button class="btn btn-sm btn-primary editBanner" data-id="${row.id}" title="Edit">
                          <i class="bi bi-pencil-square"></i>
                      </button>
                      <button class="btn btn-sm btn-danger deleteBanner" data-id="${row.id}" title="Delete">
                          <i class="bi bi-trash"></i>
                      </button>
                  `;
              }
            }
        ],
        columnDefs: [
          {
            targets: 3, // index kolom Subtitle (0 = No, 1 = Year, 2 = Title, 3 = Subtitle)
            render: function(data, type, row) {
              if (type === 'display') {
                return '<span class="ellipsis" title="'+data+'">'+data+'</span>';
              }
              return data;
            }
          }
        ]
        // lengthChange: true,
        // pageLength: 25,
        // scrollX: true,
        // lengthMenu: [[10,25,50,100,-1],[10,25,50,100,"All"]],
        // info: true
    });

    // 🔹 Baru ambil wrapper setelah DataTable selesai inisialisasi
    var $bannerTableWrapper = $('#bannerTable_wrapper');

    $addBannerBtn.on('click', function() {
        $bannerForm.removeClass('d-none').hide().slideDown();
        $bannerTableWrapper.addClass('d-none'); // sekarang pasti ada
        $(this).hide();
    });

    $backBannerBtn.on('click', function() {
        $bannerForm.slideUp(function() {
            $bannerForm.addClass('d-none');
        });
        $bannerTableWrapper.removeClass('d-none').hide().slideDown();
        $addBannerBtn.show();
    });


    // Activate tab from URL hash
    var hash = window.location.hash;
    if(hash){
      var triggerEl = document.querySelector('.nav-link[href="'+hash+'"]');
      if(triggerEl){
          var tab = new bootstrap.Tab(triggerEl);
          tab.show();
      }
    }

    // Update URL hash saat ganti tab
    const tabEls = document.querySelectorAll('#formTabs a[data-bs-toggle="tab"]');
    tabEls.forEach(function(tabEl) {
        tabEl.addEventListener('shown.bs.tab', function (event) {
            history.replaceState(null, null, event.target.getAttribute('href'));
        });
    });
  });

  $(document).on('click', '.editBanner', function() {
    let id = $(this).data('id');

    // Example: Fetch banner data from API (adjust URL)
    $.getJSON("<?= base_url('exhibiting/why-exhibit-banner-get-data/') ?>" + id, function(data) {
        $("#editBannerId").val(data.id);
        $("#editBannerYear").val(data.content_year);
        $("#editBannerTitle").val(data.title);
        $("#editBannerSubtitle").val(data.subtitle);
        $("#editBannerLink").val(data.link);

        if (data.status === "active") {
            $("#editBannerActive").prop("checked", true);
        } else {
            $("#editBannerInactive").prop("checked", true);
        }

        if (data.image) {
            $("#editBannerPreview").attr("src", data.image).show();
        } else {
            $("#editBannerPreview").hide();
        }

        // Show edit form
        $("#bannerFormContainer").addClass("d-none");
        $("#bannerEditFormContainer").removeClass("d-none");

        // hide table + button add
        $('#bannerTable_wrapper').hide();
        $('#addBannerBtn').hide();

        $('#bannerEditFormContainer').show();
    });
  });

  // Cancel button
  $("#cancelEditBannerBtn").click(function() {
      $("#bannerEditFormContainer").addClass("d-none");
      $("#bannerFormContainer").removeClass("d-none");

      // show table + button add
      $('#bannerTable_wrapper').show();
      $('#addBannerBtn').show();
  });

  

  <?php
    $flashdata_all = $this->session->flashdata();

    if (!empty($flashdata_all)) {
        foreach ($flashdata_all as $type => $msg) {
            if (!empty($msg)) {
                $typeEscaped = addslashes($type);
                $title = ucfirst($typeEscaped);
                $msgEscaped = addslashes($msg);

                // Custom button color per type
                switch ($typeEscaped) {
                    case 'success':
                        $btnColor = '#28a745'; // green
                        break;
                    case 'warning':
                        $btnColor = '#f39c12'; // orange
                        break;
                    case 'info':
                        $btnColor = '#3498db'; // blue
                        break;
                    case 'error':
                    default:
                        $btnColor = '#e74c3c'; // red
                        break;
                }

                echo "
                
                console.log('Flashdata => type: {$typeEscaped}, message: {$msgEscaped}');
                console.log('Flashdata => type: {$typeEscaped}, message: {$title}');

                Swal.fire({
                    icon: '{$typeEscaped}',
                    title: '{$title}',
                    html: '{$msgEscaped}',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '{$btnColor}',
                    width: 450,
                    padding: '2em',
                    background: '#fff',
                    customClass: {
                        popup: 'swal2-rounded',
                        title: 'swal2-title-custom',
                        htmlContainer: 'swal2-text-custom'
                    }
                });
                ";
            }
        }
    }
  ?>

  // Preview image sebelum upload
  $("#editBannerImage").on("change", function(){
      const [file] = this.files;
      if (file) {
          $("#editBannerPreview").attr("src", URL.createObjectURL(file)).show();
      }
  });
  
  $('#editBannerForm').on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: base_url + "exhibiting/why-exhibit-banner-update",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
            if (res.success) {
                Swal.fire("Success!", res.message, "success");

                // hide edit form, show table & button add
                $("#bannerEditFormContainer").hide();
                $('#bannerTable_wrapper').show();
                $('#addBannerBtn').show();

                // reload datatable
                $('#bannerTable').DataTable().ajax.reload();
            } else {
                Swal.fire("Error!", res.message, "error");
            }
        },
        error: function() {
            Swal.fire("Error!", "Terjadi kesalahan server.", "error");
        }
    });
  });


  $(document).on('click', '.deleteBanner', function() {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: 'This banner will be permanently deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'exhibiting/why-exhibit-banner-delete/' + id,
                type: 'POST',
                dataType: 'json',
                success: function(res) {
                    Swal.fire({
                        icon: res.status,
                        title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                        text: res.message
                    });
                    if (res.status === 'success') {
                        // $('#bannerTable').DataTable().ajax.reload(null, false);
                        bannerTable.ajax.reload(null, false); 
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Failed to connect to server', 'error');
                }
            });
        }
    });
  });
</script>
<script>
  $(document).ready(function() {

    var base_url = "<?= base_url(); ?>";

    // SECTION VARIABLES
    var $sectionTableWrapper = $('#section1Table_wrapper');
    var $sectionFormContainer = $('#section1FormContainer');
    var $addSectionBtn = $('#addSection1Btn');
    var $backSectionBtn = $('#backSection1Btn');

    // Hide form on load
    $sectionFormContainer.addClass('d-none');

    // Initialize Section DataTable
    var sectionTable = $('#section1Table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + "exhibiting/why-exhibit-section-datatable",
            type: "POST"
        },
        dataType: 'json',
        order: [[1, "asc"]],
        columns: [
            { data: "no" },
            { data: "content_year" },
            // { data: "title" },
            { data: "subtitle" },
            { data: "body_text" },
            { data: "file_path" },
            { data: "status" },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary editSection" data-id="${row.id}" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger deleteSection" data-id="${row.id}" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    `;
                }
            }
        ],
        columnDefs: [
            {
                targets: 3, // Subtitle
                render: function(data, type, row) {
                    if (type === 'display') {
                        return '<span class="ellipsis" title="'+data+'">'+data+'</span>';
                    }
                    return data;
                }
            }
        ]
    });
    // Setelah DataTable siap, ambil wrapper-nya
    $sectionTableWrapper = $('#section1Table_wrapper');

   // === EVENT TOMBOL ADD SECTION ===
  $addSectionBtn.on('click', function () {
    $sectionTableWrapper.hide();
    $addSectionBtn.hide();
    $sectionFormContainer.removeClass('d-none').hide().fadeIn(200);
  });

      $backSectionBtn.on('click', function() {
        $sectionFormContainer.slideUp(function() {
            $sectionFormContainer.addClass('d-none');
        });
        $sectionTableWrapper.removeClass('d-none').hide().slideDown();
        $addSectionBtn.show();
    });

    // ============ EDIT SECTION ============
    $(document).on('click', '.editSection', function() {
        let id = $(this).data('id');

        $.getJSON(base_url + "exhibiting/why-exhibit-content-get-data/" + id, function(data) {
            $("#editSection1Id").val(data.id);
            $("#editSection1Year").val(data.content_year);
            $("#editSection1Title").val(data.title);
            // $("#editSection1Description").val(data.body_text);
            // Dengan ini ✅
            if (sectionEditor) {
              sectionEditor.setData(data.body_text || '');
            }

            if (data.status === "active") {
                $("#editSection1Active").prop("checked", true);
            } else {
                $("#editSection1Inactive").prop("checked", true);
            }

            if (data.image) {
                $("#editSection1Preview").attr("src", data.image).show();
            } else {
                $("#editSection1Preview").hide();
            }

            // Show edit form
            $("#section1FormContainer").addClass("d-none");
            $("#section1EditFormContainer").removeClass("d-none");

            // Hide table & add button
            $('#section1Table_wrapper').hide();
            $('#addSection1Btn').hide();
        });
    });

    // Cancel Edit
    $("#cancelEditSection1Btn").click(function() {
        $("#section1EditFormContainer").addClass("d-none");
        $("#section1FormContainer").removeClass("d-none");

        $('#section1Table_wrapper').show();
        $('#addSection1Btn').show();
    });

    // Image preview
    $("#editSection1Image").on("change", function(){
        const [file] = this.files;
        if (file) {
            $("#editSection1Preview").attr("src", URL.createObjectURL(file)).show();
        }
    });

    // Submit Edit Form
    $('#addSection1Form').on('submit', function(e) {
        
        e.preventDefault(); // <-- prevent default form submission
        
        var formData = new FormData(this);

        $.ajax({
            url: base_url + "exhibiting/why-exhibit-section-add",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(res) {
              console.log("ANJING GOVERMENT",res);
              // return false;
                if (res.success) {

                    Swal.fire("Success!", res.message, "success").then(() => {
                        window.location.href = base_url + "exhibiting/why-exhibit-settings";
                    });
                    // $("#section1EditFormContainer").hide();
                    // $('#section1Table_wrapper').show();
                    // $('#addSection1Btn').show();

                    // sectionTable.ajax.reload();
                } else {
                    Swal.fire("Error!", res.message, "error");
                }
            },
            error: function(err) {
                console.log("ERR ANJING GOVERMENT",err);
                // return false;
                Swal.fire("Error!", "Terjadi kesalahan server.", "error");
            }
        });
    });

    // Submit Edit Form
    $('#editSection1Form').on('submit', function(e) {
        e.preventDefault(); // <-- prevent default form submission
        
        var formData = new FormData(this);

        $.ajax({
            url: base_url + "exhibiting/why-exhibit-section-update",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(res) {
              console.log("ANJING",res);
              // return false;
                if (res.success) {

                    Swal.fire("Success!", res.message, "success").then(() => {
                        window.location.href = base_url + "exhibiting/why-exhibit-settings";
                    });
                    // $("#section1EditFormContainer").hide();
                    // $('#section1Table_wrapper').show();
                    // $('#addSection1Btn').show();

                    // sectionTable.ajax.reload();
                } else {
                    Swal.fire("Error!", res.message, "error");
                }
            },
            error: function(err) {
                console.log("ERR ANJING",err);
                // return false;
                Swal.fire("Error!", "Terjadi kesalahan server.", "error");
            }
        });
    });

    // Delete Section
    $(document).on('click', '.deleteSection', function() {
        const id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'This section will be permanently deleted!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + 'exhibiting/why-exhibit-section-delete/' + id,
                    type: 'POST',
                    dataType: 'json',
                    success: function(res) {
                        Swal.fire({
                            icon: res.status,
                            title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                            text: res.message
                        });
                        if (res.status === 'success') {
                            sectionTable.ajax.reload(null, false);
                        }
                    },
                    error: function() {
                        Swal.fire('Error', 'Failed to connect to server', 'error');
                    }
                });
            }
        });
    });

  });
</script>
<script>
  $(document).ready(function() {

    var base_url = "<?= base_url(); ?>";

    // SECTION VARIABLES
    var $visainformationTableWrapper = $('#visainformationTable_wrapper');
    var $visainformationFormContainer = $('#visainformationFormContainer');
    var $addVisaInformationBtn = $('#visainformationBtn');
    // var $backSectionBtn = $('#backSection1Btn');

    // Hide form on load
    $visainformationFormContainer.addClass('d-none');

    // Initialize Section DataTable
    var sectionTable = $('#visainformationTable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + "exhibiting/why-exhibit-visa-datatable",
            type: "POST"
        },
        dataType: 'json',
        order: [[1, "asc"]],
        columns: [
            { data: "no"
              , width: "5%"
            },
            { data: "subtitle"
              , width: "10%"
            },
            {
                data: "body_text",
                className: "text-start",
                render: function(data) {
                    // Jika data kosong, return kosong saja
                    if (!data) return "";

                    // Truncate
                    return data.length > 50 ? data.substr(0, 100) + '...' : data;
                }
            },
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary editVisaInformation" data-id="${row.id}" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    `;
                }
            }
        ],
        columnDefs: [
            {
                targets: 3, // Subtitle
                render: function(data, type, row) {
                    if (type === 'display') {
                        return '<span class="ellipsis" title="'+data+'">'+data+'</span>';
                    }
                    return data;
                }
            }
        ]
    });
    // Setelah DataTable siap, ambil wrapper-nya
    $visainformationTableWrapper = $('#visainformationTable_wrapper');
    
   // === EVENT TOMBOL ADD SECTION ===
    $addVisaInformationBtn.on('click', function () {
      $visainformationTableWrapper.hide();
      $addVisaInformationBtn.hide();
      $visainformationFormContainer.removeClass('d-none').hide().fadeIn(200);
    });

    // $backSectionBtn.on('click', function() {
    //   $visainformationFormContainer.slideUp(function() {
    //       $visainformationFormContainer.addClass('d-none');
    //   });
    //   $visainformationTableWrapper.removeClass('d-none').hide().slideDown();
    //   $addVisaInformationBtn.show();
    // });

    // ============ EDIT VISA INFORMATION ============
    $(document).on('click', '.editVisaInformation', function() {
        let id = $(this).data('id');

        $.getJSON(base_url + "exhibiting/why-exhibit-visa-get-data/" + id, function(data) {
            $("#visainformationId").val(data.id);
            $("#visainformationTitle").val(data.subtitle);
            if (visainformationEditor) {
              visainformationEditor.setData(data.body_text || '');
            }

            // Show edit form
            $("#visainformationFormContainer").addClass("d-none");
            $("#visainformationEditFormContainer").removeClass("d-none");

            // Hide table & add button
            $('#visainformationTable_wrapper').hide();
            $('#visainformationBtn').hide();
        });
    });

    // Cancel Edit
    $("#cancelvisainformationBtn").click(function() {
        $("#visainformationEditFormContainer").addClass("d-none");
        $("#visainformationFormContainer").removeClass("d-none");

        $('#visainformationTable_wrapper').show();
        $('#visainformationBtn').show();
    });

    // Image preview
    $("#editSection1Image").on("change", function(){
        const [file] = this.files;
        if (file) {
            $("#editSection1Preview").attr("src", URL.createObjectURL(file)).show();
        }
    });

    // Submit Edit Form
    $('#editVisaInformationForm').on('submit', function(e) {
        e.preventDefault(); // <-- prevent default form submission
        
        var formData = new FormData(this);

        $.ajax({
            url: base_url + "exhibiting/why-exhibit-section-update",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(res) {
              console.log("ANJING",res);
              // return false;
                if (res.success) {

                    Swal.fire("Success!", res.message, "success").then(() => {
                        window.location.href = base_url + "exhibiting/why-exhibit-settings";
                    });
                    // $("#visainformationEditFormContainer").hide();
                    // $('#visainformationTable_wrapper').show();
                    // $('#visainformationBtn').show();

                    // sectionTable.ajax.reload();
                } else {
                    Swal.fire("Error!", res.message, "error");
                }
            },
            error: function(err) {
                console.log("ERR ANJING",err);
                // return false;
                Swal.fire("Error!", "Terjadi kesalahan server.", "error");
            }
        });
    });

  });
</script>
<script>
  var base_url = "<?= base_url(); ?>";

  $(document).ready(function () {

    // DOM Cache
    const $testimonialTableWrapper = $('#testimonialTable_wrapper');
    const $TestimonialForm = $('#testimonialFormContainer');
    const $addTestimonialBtn = $('#addTestimonialBtn');
    const $backTestimonialBtn = $('#backTestimonialBtn');

    // INIT DATATABLE
    const testimonialTable = $('#testimonialTable').DataTable({
        responsive: true,
        autoWidth: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + "exhibiting/why-exhibit-testimonial-datatable",
            type: "POST"
        },
        dataType: 'json',
        order: [[1, "asc"]],
        columns: [
            { data: "no", width: "5%" },
            { data: "testimonial_author", width: "15%" },
            { data: "testimonial_position", width: "15%" },
            { data: "testimonial_company", width: "15%" },
            {
                data: "testimonial_message",
                render: function (data, type, row) {
                    return `<div style="
                        white-space: normal !important;
                        word-break: break-word !important;
                        overflow-wrap: break-word !important;
                        max-width: 450px;
                    ">${data}</div>`;
                }
            },
            { data: "testimonial_order", width: "5%" },
            {
                data: "testimonial_status",
                render: function (val) {
                    return val == 1
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-secondary">Inactive</span>';
                }
            },
            {
                data: null,
                orderable: false,
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary editTestimonial" data-id="${row.id}" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger deleteTestimonial" data-id="${row.id}" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    `;
                }
            }
        ]
    });

    // FIX: ketika pindah tab, update width DataTables
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
        setTimeout(() => {
            testimonialTable.columns.adjust().responsive.recalc();
        }, 10);
    });

    // SHOW FORM
    $addTestimonialBtn.on('click', function () {
        $('#testimonialTable_wrapper').hide();
        $testimonialTableWrapper.hide();
        $addTestimonialBtn.hide();
        $('#testimonialFormContainer').removeClass('d-none').fadeIn(200);
    });

    // BACK TO TABLE
    $backTestimonialBtn.on('click', function () {
      $TestimonialForm.slideUp(500, function () {
      $TestimonialForm.addClass('d-none');
      $testimonialTableWrapper.slideDown(500);
      $('#testimonialTable_wrapper').show();
      $addTestimonialBtn.show();
    });
    });

    // ACTIVATE TAB IF HASH EXISTS
    const hash = window.location.hash;
    if (hash) {
        const triggerEl = document.querySelector('.nav-link[href="' + hash + '"]');
        if (triggerEl) new bootstrap.Tab(triggerEl).show();
    }

    // UPDATE URL HASH ON TAB SWITCH
    document.querySelectorAll('#formTabs a[data-bs-toggle="tab"]').forEach(tabEl => {
        tabEl.addEventListener('shown.bs.tab', event => {
            history.replaceState(null, null, event.target.getAttribute('href'));
        });
    });
  });

  $(document).on('click', '.editTestimonial', function() {
    let id = $(this).data('id');

    // Example: Fetch banner data from API (adjust URL)
    $.getJSON("<?= base_url('exhibiting/why-exhibit-testimonial-get-data/') ?>" + id, function(data) {


        $("#editTestimonialAuthor").val(data.testimonial_author);
        $("#editTestimonialPosition").val(data.testimonial_position);
        $("#editTestimonialCompany").val(data.testimonial_company);
        $("#editTestimonialOrder").val(data.testimonial_order);
        // $("#editTestimonialText").val(data.testimonial_message || '');

        if (testimonialEditor) {
          testimonialEditor.setData(data.testimonial_message || '');
        }

        if (data.testimonial_status === "1") {
            $("#editTestimonialActive").prop("checked", true);
        } else {
            $("#editTestimonialInactive").prop("checked", true);
        }

        // Show edit form
        $("#testimonialFormContainer").addClass("d-none");
        $("#testimonialEditFormContainer").removeClass("d-none");

        // hide table + button add
        $('#testimonialTable_wrapper').hide();
        $('#addTestimonialBtn').hide();

        $('#testimonialEditFormContainer').show();
    });
  });

  // Cancel button
  $("#cancelEditTestimonialBtn").click(function() {
      $("#testimonialEditFormContainer").addClass("d-none");
      $('#testimonialTable_wrapper').show();
      $('#addTestimonialBtn').show();
  });

  // Preview image sebelum upload
  $("#editBannerImage").on("change", function(){
      const [file] = this.files;
      if (file) {
          $("#editBannerPreview").attr("src", URL.createObjectURL(file)).show();
      }
  });
  
  $('#editTestimonialForm').on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: base_url + "exhibiting/why-exhibit-banner-update",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
            if (res.success) {
                Swal.fire("Success!", res.message, "success");

                // hide edit form, show table & button add
                $("#bannerEditFormContainer").hide();
                $('#testimonialTable_wrapper').show();
                $('#addTestimonialBtn').show();

                // reload datatable
                $('#testimonialTable').DataTable().ajax.reload();
            } else {
                Swal.fire("Error!", res.message, "error");
            }
        },
        error: function() {
            Swal.fire("Error!", "Terjadi kesalahan server.", "error");
        }
    });
  });


  $(document).on('click', '.deleteTestimonial', function() {
    const id = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: 'This banner will be permanently deleted!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'exhibiting/why-exhibit-testimonial-delete/' + id,
                type: 'POST',
                dataType: 'json',
                success: function(res) {
                    Swal.fire({
                        icon: res.status,
                        title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                        text: res.message
                    });
                    if (res.status === 'success') {
                        // $('#testimonialTable').DataTable().ajax.reload(null, false);
                        testimonialTable.ajax.reload(null, false); 
                    }
                },
                error: function() {
                    Swal.fire('Error', 'Failed to connect to server', 'error');
                }
            });
        }
    });
  });
</script>
</body>
</html>
