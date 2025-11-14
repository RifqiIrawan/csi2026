
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<style>
  /* Spacing utilities */
  .mb-0 { margin-bottom: 0 !important; }
  .mb-3 { margin-bottom: 1rem !important; }
  .mt-2 { margin-top: 0.5rem !important; }

  /* Gap utility */
  .gap-3 { gap: 1rem !important; }

  /* Display & flex */
  .d-flex { display: flex !important; }
  .align-items-center { align-items: center !important; }

  /* Form Label */
  .form-label {
    display: inline-block;
    margin-bottom: 0.5rem;
    font-weight: 600;
  }

  /* Input Form */
  .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }

  .form-control:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(13,110,253,.25);
  }

  /* Text small */
  .form-text {
    font-size: 0.875em;
  }

  .text-muted {
    color: #6c757d !important;
  }

  /* Image thumbnail */
  .img-thumbnail {
    padding: .25rem;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: .375rem;
    max-width: 100%;
    height: auto;
  }

</style>
<style>
  /* TAB STYLING */
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
    width: 100%;  
  }

  .custom-tab .row {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
  }

  .custom-tabs .nav-item {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    border-bottom: none;
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

  .banner_whyvisit-form { display: none; margin-top: 0px; }

  .content-banner-whyvisit { margin-top: 0px !important }

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
  #banner_whyvisitTable_wrapper,
  #banner_whyvisitTable,
  #section1Table_whyvisit_wrapper,
  #section1Table_whyvisit,
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
        <a class="nav-link active" id="tab-banner_whyvisit" data-bs-toggle="tab" href="#content-banner-whyvisit" role="tab">
          <i class="fa fa-list"></i> Banner Why Visit
        </a>
        <a class="nav-link" id="tab-content-whyvisit" data-bs-toggle="tab" href="#content-content-whyvisit" role="tab">
          <i class="fa fa-tags"></i> Content Why Visit
        </a>
        <!-- <a class="nav-link" id="tab-content_whyvisit" data-bs-toggle="tab" href="#content-content_whyvisit" role="tab">
          <i class="fa fa-tags"></i> Content
        </a> -->
        <a class="nav-link" id="tab-visainformation" data-bs-toggle="tab" href="#content-visainformation" role="tab">
          <i class="fa fa-ellipsis-h"></i> Show Features
        </a>
      </li>
    </ul>
    <!-- Tab Content -->
    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">

        <!-- TAB 1: Banner Why Visit -->
        <div class="tab-pane fade show active" id="content-banner-whyvisit" role="tabpanel">
          <button id="addBannerWhyvisitBtn" class="btn btn-success mb-3">Add Banner Why Visit</button>

          <!-- DataTable -->
          <table id="banner_whyvisitTable" class="display table table-bordered">
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
            </tbody>
          </table>

          <!-- Banner Why Visit Form -->
          <div id="banner_whyvisitFormContainer" class="banner-form  d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Banner Why Visit Configuration</h5>
                <form action="<?= base_url('visiting/why-visit-banner-add') ?>" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label class="form-label">Banner Year</label>
                    <select class="form-control" name="banner_whyvisityear" required>
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
                    <input type="text" class="form-control" name="banner_whyvisittitle" placeholder="Enter Banner Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Subtitle</label>
                    <textarea class="form-control" rows="4"
                      name="banner_whyvisitsubtitle"
                      id="add_banner_whyvisitsubtitle"
                      placeholder="Enter Section Description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="banner_whyvisitimage" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 1200x400px</small>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Link</label>
                    <input type="url" class="form-control" name="banner_whyvisitlink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="banner_whyvisitStatus" id="banner_whyvisitActive" value="active" checked>
                    <label for="banner_whyvisitActive" class="mb-0">Active</label>
                    <input type="radio" name="banner_whyvisitStatus" id="banner_whyvisitPassive" value="inactive">
                    <label for="banner_whyvisitPassive" class="mb-0">Passive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="button" id="backBannerWhyvisitBtn" class="btn btn-outline-danger">Back</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Banner Why Visit Edit Form -->
          <div id="banner_whyvisitEditFormContainer" class="banner-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Banner Why Visit</h5>
                <form id="editBannerWhyvisitForm" action="<?= base_url('visiting/why-visit-banner-update') ?>" method="post" enctype="multipart/form-data">
                  
                  <!-- Hidden field for Banner ID -->
                  <input type="hidden" name="id" id="editBannerWhyvisitId">

                  <div class="mb-3">
                    <label class="form-label">Banner Year</label>
                    <select class="form-control" name="banner_whyvisityear" id="editBannerWhyvisitYear" required>
                      <option value="">-- Select Banner Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>  

                  <div class="mb-3">
                    <label class="form-label">Banner Title</label>
                    <input type="text" class="form-control" name="banner_whyvisittitle" id="editBannerWhyvisitTitle" placeholder="Enter Banner Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Subtitle</label>
                    <textarea class="form-control" rows="4"
                      name="banner_whyvisitsubtitle"
                      id="editBannerWhyvisitsubtitle"
                      placeholder="Enter Section Description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="image" id="editBannerWhyvisitImage" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                        <img id="editBannerWhyvisitPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Link</label>
                    <input type="url" class="form-control" name="banner_whyvisitlink" id="editBannerWhyvisitLink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="banner_whyvisitStatus" id="editBannerWhyvisitActive" value="active">
                    <label for="editBannerWhyvisitActive" class="mb-0">Active</label>
                    <input type="radio" name="banner_whyvisitStatus" id="editBannerWhyvisitInactive" value="inactive">
                    <label for="editBannerWhyvisitInactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditBannerWhyvisitBtn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>

        </div>

        <!-- TAB 2: Content (Why Visit) -->
        <div class="tab-pane fade" id="content-content-whyvisit" role="tabpanel">
            <button id="addSection1Btn_whyvisit" class="btn btn-success mb-3">Add Content Why Visit</button>

            <!-- DataTable -->

            <table id="section1Table_whyvisit" class="display table table-bordered w-100">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Year</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>

            <!-- Section Add Form -->
            <div id="section1FormContainer_whyvisit" class="section1-form d-none mt-3">
                <div class="card tab-card">
                <div class="card-body">
                    <h5 class="mb-3 text-success">Content Why Visit Configuration</h5>
                    <form id="addSection1Form_whyvisit" action="<?= base_url('exhibiting/why-exhibit-section-add') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Section Year</label>
                        <select class="form-control" name="addsectionyear" id="addSection1Year_whyvisit" required>
                        <option value="">-- Select Section Year --</option>
                        <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                            <option value="<?= $y; ?>"><?= $y; ?></option>
                        <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Title</label>
                        <input type="text" class="form-control" name="addsectiontitle" id="addSection1Title_whyvisit" placeholder="Enter Section Title" required style="text-transform:capitalize">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Description</label>
                        <textarea class="form-control" rows="4"
                        name="addsectiondescription"
                        id="addSection1Description_whyvisit"
                        placeholder="Enter Section Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Image</label>
                        <input type="file" class="form-control" name="addsectionimage" id="addSection1Image_whyvisit" accept="image/*">
                        <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                        <div class="mt-2">
                        <img id="addSection1Preview_whyvisit" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                        </div>
                    </div>

                    <div class="mb-3 d-flex gap-3 align-items-center">
                        <input type="radio" name="addsectionStatus" id="addSection1Active_whyvisit" value="active" checked>
                        <label for="addSection1Active_whyvisit" class="mb-0">Active</label>
                        <input type="radio" name="addsectionStatus" id="addSection1Inactive_whyvisit" value="inactive">
                        <label for="addSection1Inactive_whyvisit" class="mb-0">Inactive</label>
                    </div>

                    <button type="submit" class="btn btn-success me-2">Add</button>
                    <button type="button" id="backSection1Btn_whyvisit" class="btn btn-outline-danger">Cancel</button>
                    </form>
                </div>
                </div>
            </div>

            <!-- Section Edit Form -->
            <div id="section1EditFormContainer_whyvisit" class="section1-form d-none">
                <div class="card tab-card">
                <div class="card-body">
                    <h5 class="mb-3 text-primary">Content Why Visit Configuration</h5>
                    <form id="editSection1Form_whyvisit" action="<?= base_url('exhibiting/why-exhibit-section-update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="editSection1Id_whyvisit">

                    <div class="mb-3">
                        <label class="form-label">Section Year</label>
                        <select class="form-control" name="sectionyear" id="editSection1Year_whyvisit" required>
                        <option value="">-- Select Section Year --</option>
                        <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                            <option value="<?= $y; ?>"><?= $y; ?></option>
                        <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Title</label>
                        <input type="text" class="form-control" name="sectiontitle" id="editSection1Title_whyvisit" placeholder="Enter Section Title" required style="text-transform:capitalize">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Description</label>
                        <textarea class="form-control" rows="4"
                        name="sectiondescription"
                        id="editSection1Description_whyvisit"
                        placeholder="Enter Section Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Section Image</label>
                        <input type="file" class="form-control" name="sectionimage" id="editSection1Image_whyvisit" accept="image/*">
                        <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                        <div class="mt-2">
                        <img id="editSection1Preview_whyvisit" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                        </div>
                    </div>

                    <div class="mb-3 d-flex gap-3 align-items-center">
                        <input type="radio" name="sectionStatus" id="editSection1Active_whyvisit" value="active">
                        <label for="editSection1Active_whyvisit" class="mb-0">Active</label>
                        <input type="radio" name="sectionStatus" id="editSection1Inactive_whyvisit" value="inactive">
                        <label for="editSection1Inactive_whyvisit" class="mb-0">Inactive</label>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <button type="button" id="cancelEditSection1Btn_whyvisit" class="btn btn-outline-danger">Cancel</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        
        <!-- content-content and content-visainformation -->
      </div>
    </div>
  </div>
</div>


<!-- Image Preview Modal -->
<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-labelledby="imagePreviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img id="previewImage" src="" class="img-fluid rounded" alt="Preview Image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

  let sectionEditorWhyVisit, visainformationEditor, edit_whyvisitsubtitle;

  let add_whyvisitsubtitle = '';

  // 2️⃣ Inisialisasi CKEditor
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#editSection1Description_whyvisit'))
      .then(editor => {
        sectionEditorWhyVisit = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));
    
    ClassicEditor
      .create(document.querySelector('#add_banner_whyvisitsubtitle'))
      .then(editor => {
        add_whyvisitsubtitle = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));

    ClassicEditor
      .create(document.querySelector('#editBannerWhyvisitsubtitle'))
      .then(editor => {
        edit_whyvisitsubtitle = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));
      
    // ClassicEditor
    //   .create(document.querySelector('#editVisaInformationDescription'))
    //   .then(editor => {
    //       visainformationEditor = editor;
    //       console.log('Editor 2 ready');
    //   })
    //   .catch(error => console.error(error));
  });

</script>
<script>
  var base_url = "<?= base_url(); ?>";

  $(document).ready(function() {
    var $bannerWhyvisitTableWrapper = $('#banner_whyvisitTable_wrapper');
    var $bannerWhyvisitForm = $('#banner_whyvisitFormContainer');
    var $addBannerWhyvisitBtn = $('#addBannerWhyvisitBtn');
    var $backBannerWhyvisitBtn = $('#backBannerWhyvisitBtn');

    // Initialize DataTable
    var bannerWhyvisitTable = $('#banner_whyvisitTable').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + "visiting/why-visit-datatable",
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
                      <button class="btn btn-sm btn-primary editBannerWhyvisit" data-id="${row.id}" title="Edit">
                          <i class="bi bi-pencil-square"></i>
                      </button>
                      <button class="btn btn-sm btn-danger deleteBannerWhyvisit" data-id="${row.id}" title="Delete">
                          <i class="bi bi-trash"></i>
                      </button>
                  `;
              }
            }
        ],
        columnDefs: [
          {
            targets: 3,
            render: function(data, type, row) {
              if (type === 'display') {
                return '<span class="ellipsis" title="'+data+'">'+data+'</span>';
              }
              return data;
            }
          }
        ]
    });

    // Wrapper after initialization
    var $bannerWhyvisitTableWrapper = $('#banner_whyvisitTable_wrapper');

    $addBannerWhyvisitBtn.on('click', function() {
        $bannerWhyvisitForm.removeClass('d-none').hide().slideDown();
        $bannerWhyvisitTableWrapper.addClass('d-none');
        $(this).hide();
    });

    $backBannerWhyvisitBtn.on('click', function() {
        $bannerWhyvisitForm.slideUp(function() {
            $bannerWhyvisitForm.addClass('d-none');
        });
        $bannerWhyvisitTableWrapper.removeClass('d-none').hide().slideDown();
        $addBannerWhyvisitBtn.show();
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

    // Update URL hash when tab changes
    const tabEls = document.querySelectorAll('#formTabs a[data-bs-toggle="tab"]');
    tabEls.forEach(function(tabEl) {
        tabEl.addEventListener('shown.bs.tab', function (event) {
            history.replaceState(null, null, event.target.getAttribute('href'));
        });
    });
  });

  // Edit
  $(document).on('click', '.editBannerWhyvisit', function() {
    let id = $(this).data('id');

    $.getJSON("<?= base_url('visiting/why-visit-banner-get-data/') ?>" + id, function(data) {
        $("#editBannerWhyvisitId").val(data.id);
        $("#editBannerWhyvisitYear").val(data.content_year);
        $("#editBannerWhyvisitTitle").val(data.title);
        $("#editBannerWhyvisitsubtitle").val(data.subtitle);
        $("#editBannerWhyvisitLink").val(data.link);

        if (data.status === "active") {
            $("#editBannerWhyvisitActive").prop("checked", true);
        } else {
            $("#editBannerWhyvisitInactive").prop("checked", true);
        }

        if (data.image) {
            $("#editBannerWhyvisitPreview").attr("src", data.image).show();
        } else {
            $("#editBannerWhyvisitPreview").hide();
        }

        // Show edit form
        $("#banner_whyvisitFormContainer").addClass("d-none");
        $("#banner_whyvisitEditFormContainer").removeClass("d-none");

        // Hide table + add button
        $('#banner_whyvisitTable_wrapper').hide();
        $('#addBannerWhyvisitBtn').hide();

        $('#banner_whyvisitEditFormContainer').show();
    });
  });

  // Cancel edit
  $("#cancelEditBannerWhyvisitBtn").click(function() {
      $("#banner_whyvisitEditFormContainer").addClass("d-none");
      $("#banner_whyvisitFormContainer").removeClass("d-none");

      $('#banner_whyvisitTable_wrapper').show();
      $('#addBannerWhyvisitBtn').show();
  });

  <?php
    $flashdata_all = $this->session->flashdata();
    if (!empty($flashdata_all)) {
        foreach ($flashdata_all as $type => $msg) {
            if (!empty($msg)) {
                $typeEscaped = addslashes($type);
                $title = ucfirst($typeEscaped);
                $msgEscaped = addslashes($msg);

                switch ($typeEscaped) {
                    case 'success': $btnColor = '#28a745'; break;
                    case 'warning': $btnColor = '#f39c12'; break;
                    case 'info': $btnColor = '#3498db'; break;
                    default: $btnColor = '#e74c3c'; break;
                }

                echo "
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

  // Preview before upload
  $("#editBannerWhyvisitImage").on("change", function(){
      const [file] = this.files;
      if (file) {
          $("#editBannerWhyvisitPreview").attr("src", URL.createObjectURL(file)).show();
      }
  });

  // Update form
  $('#editBannerWhyvisitForm').on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: base_url + "visiting/why-visit-banner-update",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
            if (res.success) {
                Swal.fire("Success!", res.message, "success");

                $("#banner_whyvisitEditFormContainer").hide();
                $('#banner_whyvisitTable_wrapper').show();
                $('#addBannerWhyvisitBtn').show();

                $('#banner_whyvisitTable').DataTable().ajax.reload();
            } else {
                Swal.fire("Error!", res.message, "error");
            }
        },
        error: function() {
            Swal.fire("Error!", "Terjadi kesalahan server.", "error");
        }
    });
  });

  // Delete
  $(document).on('click', '.deleteBannerWhyvisit', function() {
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
                url: base_url + 'visiting/why-visit-banner-delete/' + id,
                type: 'POST',
                dataType: 'json',
                success: function(res) {
                    Swal.fire({
                        icon: res.status,
                        title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                        text: res.message
                    });
                    if (res.status === 'success') {
                        $('#banner_whyvisitTable').DataTable().ajax.reload();
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
$(document).ready(function () {
  const base_url = "<?= base_url(); ?>";

  // ====== SECTION VARIABLES ======
  const $sectionTable = $('#section1Table_whyvisit');
  const $sectionTableWrapper = $('#section1Table_whyvisit_wrapper');
  const $addSectionBtn = $('#addSection1Btn_whyvisit');
  const $addFormContainer = $('#section1FormContainer_whyvisit');
  const $editFormContainer = $('#section1EditFormContainer_whyvisit');
  const $backBtn = $('#backSection1Btn_whyvisit');
  const $cancelEditBtn = $('#cancelEditSection1Btn_whyvisit');

  // Hide both forms initially
  $addFormContainer.addClass('d-none');
  $editFormContainer.addClass('d-none');

  // ====== INITIALIZE DATATABLE ======
  const sectionTable = $sectionTable.DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: base_url + "visiting/why-visit-section-datatable",
      type: "POST",
      dataSrc: function (json) {
        return json.data || [];
      }
    },
    order: [[1, "asc"]],
    columns: [
      { data: "no" },
      { data: "content_year" },
      { data: "subtitle" },
      { data: "body_text" },
      { data: "file_path" },
      { data: "status" },
      { data: null }
    ],
    columnDefs: [
      {
        targets: 3, // Description
        render: function (data, type) {
          if (type === "display" && data) {
            return `
              <span class="text-truncate d-inline-block" 
                    style="max-width:200px;" 
                    title="${$("<div>").text(data).html()}">
                ${$("<div>").text(data).html()}
              </span>`;
          }
          return data || "-";
        }
      },
      {
        targets: 4, // Image column
        render: function (data) {
          if (!data) return "-";
          const imageUrl = data.startsWith("http") ? data : base_url + data;
          return `
            <img src="${imageUrl}" 
                class="img-thumbnail preview-img" 
                alt="Thumbnail"
                style="max-height:60px; cursor:pointer; object-fit:cover;"
                data-full="${imageUrl}">
          `;
        }
      },
      {
        targets: 5, // Status
        render: function (data) {
          const badgeClass = data === "Active" ? "success" : "secondary";
          return `<span class="badge bg-${badgeClass}">${data}</span>`;
        }
      },
      {
        targets: 6, // Actions
        orderable: false,
        render: function (data, type, row) {
          return `
            <button class="btn btn-sm btn-primary editSection_whyvisit" 
                    data-id="${row.id}" title="Edit">
              <i class="bi bi-pencil-square"></i>
            </button>
            <button class="btn btn-sm btn-danger deleteSection_whyvisit" 
                    data-id="${row.id}" title="Delete">
              <i class="bi bi-trash"></i>
            </button>`;
        }
      }
    ]
  });

  // 🖼️ Handle image click to show modal
  $(document).on("click", ".preview-img", function () {
    const imageUrl = $(this).data("full");
    $("#previewImage").attr("src", imageUrl);
    const modal = new bootstrap.Modal(document.getElementById("imagePreviewModal"));
    modal.show();
  });

  // ====== SHOW ADD FORM ======
  $addSectionBtn.on('click', function () {
    $('#section1Table_whyvisit_wrapper').hide();
    $sectionTableWrapper.hide();
    $addSectionBtn.hide();
    $addFormContainer.removeClass('d-none').hide().fadeIn(200);
  });

  // ====== CANCEL ADD FORM ======
  $backBtn.on('click', function () {
    $addFormContainer.slideUp(200, function () {
      $addFormContainer.addClass('d-none');
      $sectionTableWrapper.slideDown(200);
      $('#section1Table_whyvisit_wrapper').show();
      $addSectionBtn.show();
    });
  });

  // ====== ADD FORM SUBMIT ======
  $('#addSection1Form_whyvisit').on('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    $.ajax({
      url: base_url + "exhibiting/why-exhibit-section-add",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (res) {
        if (res.success) {
          Swal.fire("Success!", res.message, "success").then(() => {
            sectionTable.ajax.reload(null, false);
            resetAddForm();
            $backBtn.click();
          });
        } else {
          Swal.fire("Error!", res.message, "error");
        }
      },
      error: function () {
        Swal.fire("Error!", "Server error occurred.", "error");
      }
    });
  });

  // ====== EDIT SECTION ======
  $(document).on('click', '.editSection_whyvisit', function () {
    const id = $(this).data('id');

    $.getJSON(base_url + "exhibiting/why-exhibit-content-get-data/" + id, function (data) {
      $("#editSection1Id_whyvisit").val(data.id);
      $("#editSection1Year_whyvisit").val(data.content_year);
      $("#editSection1Title_whyvisit").val(data.title);
      $("#editSection1Description_whyvisit").val(data.body_text || '');

      if (sectionEditorWhyVisit) {
        sectionEditorWhyVisit.setData(data.body_text || '');
      }

      if (data.status === "active") {
        $("#editSection1Active_whyvisit").prop("checked", true);
      } else {
        $("#editSection1Inactive_whyvisit").prop("checked", true);
      }

      if (data.image) {
        $("#editSection1Preview_whyvisit").attr("src", data.image).show();
      } else {
        $("#editSection1Preview_whyvisit").hide();
      }

      $sectionTableWrapper.hide();
      $addSectionBtn.hide();
      $addFormContainer.addClass("d-none");
      $editFormContainer.removeClass("d-none").hide().fadeIn(200);


      // Show edit form
      $("#section1FormContainer_whyvisit").addClass("d-none");
      $("#section1EditFormContainer_whyvisit").removeClass("d-none");

      // Hide table + add button
      $('#section1Table_whyvisit_wrapper').hide();
      // $('#addBannerWhyvisitBtn').hide();

      $('#section1EditFormContainer_whyvisit').show();
    });
  });

  // ====== CANCEL EDIT FORM ======
  $cancelEditBtn.on('click', function () {
    $editFormContainer.fadeOut(200, function () {
      $editFormContainer.addClass('d-none');
      $('#section1Table_whyvisit_wrapper').show();
      $addSectionBtn.show();
    });
  });

  // ====== EDIT FORM SUBMIT ======
  $('#editSection1Form_whyvisit').on('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);

    $.ajax({
      url: base_url + "exhibiting/why-exhibit-section-update",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (res) {
        if (res.success) {
          Swal.fire("Updated!", res.message, "success").then(() => {
            sectionTable.ajax.reload(null, false);
            $cancelEditBtn.click();
          });
        } else {
          Swal.fire("Error!", res.message, "error");
        }
      },
      error: function () {
        Swal.fire("Error!", "Server error occurred.", "error");
      }
    });
  });

  // ====== DELETE SECTION ======
  $(document).on('click', '.deleteSection_whyvisit', function () {
    const id = $(this).data('id');

    Swal.fire({
      title: 'Are you sure?',
      text: 'This section will be permanently deleted!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
    }).then(result => {
      if (result.isConfirmed) {
        $.ajax({
          url: base_url + 'exhibiting/why-exhibit-section-delete/' + id,
          type: 'POST',
          dataType: 'json',
          success: function (res) {
            Swal.fire({
              icon: res.status,
              title: res.status === 'success' ? 'Deleted!' : 'Error',
              text: res.message
            });
            if (res.status === 'success') sectionTable.ajax.reload(null, false);
          },
          error: function () {
            Swal.fire('Error', 'Failed to connect to server', 'error');
          }
        });
      }
    });
  });

  // ====== IMAGE PREVIEW HANDLERS ======
  $("#addSection1Image_whyvisit").on("change", function () {
    const [file] = this.files;
    if (file) {
      $("#addSection1Preview_whyvisit").attr("src", URL.createObjectURL(file)).show();
    }
  });

  $("#editSection1Image_whyvisit").on("change", function () {
    const [file] = this.files;
    if (file) {
      $("#editSection1Preview_whyvisit").attr("src", URL.createObjectURL(file)).show();
    }
  });

  // ====== RESET ADD FORM ======
  function resetAddForm() {
    $('#addSection1Form_whyvisit')[0].reset();
    $('#addSection1Preview_whyvisit').hide();
  }
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
            { data: "body_text", className: "text-start", render: function(data) {
                // optional truncate text
                return data.length > 50 ? data.substr(0, 100) + '...' : data;
            }},
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

</body>
</html>
