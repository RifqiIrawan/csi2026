
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
  /* ==============================
     MAIN PANEL
  ============================== */
  .main-panel {
    padding-top: 50px !important;
  }

  /* ==============================
     CUSTOM TABS
  ============================== */
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


  /* ==============================
     CARD MODERN
  ============================== */
  .tab-card {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s;
  }

  .tab-card:hover {
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
  }

  /* ==============================
     FORM INPUT STYLING
  ============================== */
  .form-control,
  .form-check-input {
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

  /* ==============================
     TAB CONTENT
  ============================== */
  .tab-content {
    border: 0 !important;
  }

  .tab-content.mt-3 {
    border: 0 !important;
    padding: 0;
  }

  /* ==============================
     CONTENT SECTIONS
  ============================== */
  .bannervisa-form {
    display: none;
    margin-top: 0;
  }

  .content-bannervisa {
    margin-top: 0 !important;
  }

  /* ==============================
     TEXT UTILITY
  ============================== */
  .ellipsis {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    vertical-align: middle;
  }

  /* ==============================
     SWEETALERT CUSTOM STYLE
  ============================== */
  .swal2-rounded {
    border-radius: 15px !important;
  }

  .swal2-title-custom {
    font-size: 22px !important;
    font-weight: 700 !important;
    color: #333 !important;
    margin-bottom: 15px !important;
  }

  .swal2-text-custom {
    font-size: 25px !important;
    line-height: 1.6 !important;
    color: #444 !important;
  }

  .swal2-title {
    color: #000 !important;
  }

  /* ==============================
     CKEDITOR
  ============================== */
  .ck-editor__editable_inline {
    min-height: 150px;
  }

  /* ==============================
     DATATABLES
  ============================== */
  .container-fluid {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }

  #bannervisaTable_wrapper,
  #bannervisaTable,
  #section1Table_wrapper,
  #section1Table,
  #visainformationTable_wrapper,
  #visainformationTable {
    width: 100% !important;
    box-sizing: border-box;
  }

  .dataTables_wrapper {
    margin: 0 !important;
    padding: 0 !important;
    width: 100%;
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
        <a class="nav-link active" id="tab-bannervisa" data-bs-toggle="tab" href="#content-bannervisa" role="tab">
          <i class="fa fa-list"></i> Banner Visa
        </a>
        <a class="nav-link" id="tab-contentvisa" data-bs-toggle="tab" href="#content-contentvisa" role="tab">
          <i class="fa fa-tags"></i> Content Visa
        </a>
      </li>
    </ul>

    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">

        <!-- TAB 1: Banner Visa -->
        <div class="tab-pane fade show active" id="content-bannervisa" role="tabpanel">
          <button id="addBannervisaBtn" class="btn btn-success mb-3">Add Banner Visa</button>

          <!-- DataTable -->
          <table id="bannervisaTable" class="display table table-bordered">
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
            <tbody></tbody>
          </table>

          <!-- Banner Visa Form -->
          <div id="bannervisaFormContainer" class="bannervisa-form">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Banner Visa Configuration</h5>
                <form action="<?= base_url('exhibiting/exhibitor-visa-banner-add') ?>" method="post" enctype="multipart/form-data">
                  
                  <div class="mb-3">
                    <label class="form-label">Banner Visa Year</label>
                    <select class="form-control" name="bannervisayear" required>
                      <option value="">-- Select Banner Visa Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>" <?= ($y == $currentYear) ? 'selected' : ''; ?>>
                          <?= $y; ?>
                        </option>
                      <?php endfor; ?>
                    </select>
                  </div>  
                
                  <div class="mb-3">
                    <label class="form-label">Banner Visa Title</label>
                    <input type="text" class="form-control" name="bannervisatitle" placeholder="Enter Banner Visa Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Subtitle</label>
                    <textarea class="form-control" rows="4" name="bannervisasubtitle" placeholder="Enter banner visa subtitle"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Image</label>
                    <input type="file" class="form-control" name="bannervisaimage" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 1200x400px</small>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Link</label>
                    <input type="url" class="form-control" name="bannervisalink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="bannervisaStatus" id="bannervisaActive" value="active" checked>
                    <label for="bannervisaActive" class="mb-0">Active</label>
                    <input type="radio" name="bannervisaStatus" id="bannervisaPassive" value="inactive">
                    <label for="bannervisaPassive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="button" id="backBannervisaBtn" class="btn btn-outline-danger">Back</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Banner Visa Edit Form -->
          <div id="bannervisaEditFormContainer" class="bannervisa-form d-none">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Banner Visa</h5>
                <form id="editBannervisaForm" action="<?= base_url('exhibiting/why-exhibit-bannervisa-update') ?>" method="post" enctype="multipart/form-data">
                  
                  <input type="hidden" name="id" id="editBannervisaId">

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Year</label>
                    <select class="form-control" name="bannervisayear" id="editBannervisaYear" required>
                      <option value="">-- Select Banner Visa Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>  

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Title</label>
                    <input type="text" class="form-control" name="bannervisatitle" id="editBannervisaTitle" placeholder="Enter Banner Visa Title" required style="text-transform:capitalize">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Subtitle</label>
                    <textarea class="form-control" rows="4" name="bannervisasubtitle" id="editBannervisaSubtitle" placeholder="Enter banner visa subtitle"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Image</label>
                    <input type="file" class="form-control" name="image" id="editBannervisaImage" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="editBannervisaPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Banner Visa Link</label>
                    <input type="url" class="form-control" name="bannervisalink" id="editBannervisaLink" placeholder="Enter URL if clickable">
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="bannervisaStatus" id="editBannervisaActive" value="active">
                    <label for="editBannervisaActive" class="mb-0">Active</label>
                    <input type="radio" name="bannervisaStatus" id="editBannervisaInactive" value="inactive">
                    <label for="editBannervisaInactive" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditBannervisaBtn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- TAB 2: Content Visa -->
        <div class="tab-pane fade" id="content-contentvisa" role="tabpanel">
          <button id="addSection1VisaBtn" class="btn btn-success mb-3">Add Section</button>

          <table id="section1VisaTable" class="display table table-bordered">
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

          <!-- Add Form -->
          <div id="section1VisaFormContainer" class="section1Visa-form d-none mt-3">
            <form id="addSection1VisaForm" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="visa_year" class="form-label">Year</label>
                <input type="number" name="add_visa_year" id="visa_year" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="visa_title" class="form-label">Title</label>
                <input type="text" name="add_visa_title" id="visa_title" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Section Description</label>
                <textarea class="form-control" rows="4"
                  name="add_visa_description"
                  id="visa_description"
                  placeholder="Enter Section Description"></textarea>
              </div>
              <div class="mb-3">
                <label for="visa_image" class="form-label">Image</label>
                <input type="file" name="add_visa_image" id="visa_image" class="form-control">
              </div>
              <div class="mb-3 d-flex gap-3 align-items-center">
                <input type="radio" name="add_visa_status" id="addVisa1Active" value="active" checked>
                <label for="addVisa1Active" class="mb-0">Active</label>
                <input type="radio" name="add_visa_status" id="addVisa1Inactive" value="inactive">
                <label for="addVisa1Inactive" class="mb-0">Inactive</label>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="button" id="cancelSection1VisaBtn" class="btn btn-secondary">Cancel</button>
            </form>
          </div>

          <!-- Edit Form -->
          <div id="section1VisaEditFormContainer" class="section1Visa-form d-none mt-3">
            <form id="editSection1VisaForm" enctype="multipart/form-data">
              <input type="hidden" name="id" id="editSection1VisaId">
              <div class="mb-3">
                <label for="editSection1VisaYear" class="form-label">Year</label>
                <input type="number" name="edit_visa_year" id="editSection1VisaYear" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="editSection1VisaTitle" class="form-label">Title</label>
                <input type="text" name="edit_visa_title" id="editSection1VisaTitle" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Section Description</label>
                <textarea class="form-control" rows="4"
                  name="edit_visa_description"
                  id="editSection1VisaDescription"
                  placeholder="Enter Section Description"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Section Image</label>
                <input type="file" class="form-control" name="edit_visa_image" id="editSection1VisaImage" accept="image/*">
                <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                <div class="mt-2">
                  <img id="editSection1VisaPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                </div>
              </div>
              <div class="mb-3 d-flex gap-3 align-items-center">
                <input type="radio" name="VisaStatus" id="editSection1VisaActive" value="active">
                <label for="editVisa1Active" class="mb-0">Active</label>
                <input type="radio" name="VisaStatus" id="editSection1VisaInactive" value="inactive">
                <label for="editVisa1Inactive" class="mb-0">Inactive</label>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" id="cancelEditSection1VisaBtn" class="btn btn-secondary">Cancel</button>
            </form>
          </div>
        </div>

        <!-- TAB 3: Visa Information -->
        <div class="tab-pane fade" id="content-visainformation" role="tabpanel">
          <!-- (unchanged visa info content) -->
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
<script>

  let sectionEditor, visainformationEditor;

  // 2️⃣ Inisialisasi CKEditor
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#editSection1VisaDescription'))
      .then(editor => {
        sectionEditor = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));

    ClassicEditor
      .create(document.querySelector('#visa_description'))
      .then(editor => {
          visainformationEditor = editor;
          console.log('Editor 2 ready');
      })
      .catch(error => console.error(error));
  });

</script>
<script>
  var base_url = "<?= base_url(); ?>";

  $(document).ready(function () {
    // ==============================
    // VARIABEL: BANNERVISA
    // ==============================
    var $bannervisaTableWrapper = $('#bannervisaTable_wrapper');
    var $bannervisaForm = $('#bannervisaFormContainer');
    var $addBannervisaBtn = $('#addBannervisaBtn');
    var $backBannervisaBtn = $('#backBannervisaBtn');

    // ==============================
    // DATATABLE INIT
    // ==============================
    var bannervisaTable = $('#bannervisaTable').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url: base_url + "exhibiting/why-exhibit-datatable",
        type: "POST",
      },
      dataType: "json",
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
              <button class="btn btn-sm btn-primary editBannervisa" data-id="${row.id}" title="Edit">
                  <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-danger deleteBannervisa" data-id="${row.id}" title="Delete">
                  <i class="bi bi-trash"></i>
              </button>`;
          },
        },
      ],
      columnDefs: [
        {
          targets: 3,
          render: function (data, type, row) {
            if (type === "display") {
              return '<span class="ellipsis" title="' + data + '">' + data + "</span>";
            }
            return data;
          },
        },
      ],
    });

    // ==============================
    // BUTTON ACTIONS
    // ==============================
    $addBannervisaBtn.on("click", function () {
      $('#bannervisaTable_wrapper').hide();
      $addBannervisaBtn.hide();
      $bannervisaForm.removeClass('d-none').hide().fadeIn(200);
    });

    $backBannervisaBtn.on("click", function () {
      $bannervisaForm.slideUp(function() {
        $(this).addClass('d-none');
      });
      $('#bannervisaTable_wrapper').show();
      $('#addBannervisaBtn').show();
    });

    // ==============================
    // EDIT FORM
    // ==============================
    $(document).on("click", ".editBannervisa", function () {
      let id = $(this).data("id");

      $.getJSON(base_url + "exhibiting/why-exhibit-banner-get-data/" + id, function (data) {
        $("#editBannervisaId").val(data.id);
        $("#editBannervisaYear").val(data.content_year);
        $("#editBannervisaTitle").val(data.title);
        $("#editBannervisaSubtitle").val(data.subtitle);
        $("#editBannervisaLink").val(data.link);

        if (data.status === "active") {
          $("#editBannervisaActive").prop("checked", true);
        } else {
          $("#editBannervisaInactive").prop("checked", true);
        }

        if (data.image) {
          $("#editBannervisaPreview").attr("src", data.image).show();
        } else {
          $("#editBannervisaPreview").hide();
        }

        $("#bannervisaFormContainer").addClass("d-none");
        $("#bannervisaEditFormContainer").removeClass("d-none");

        $('#bannervisaTable_wrapper').hide();
        $('#addBannervisaBtn').hide();
        $('#bannervisaEditFormContainer').show();
      });
    });

    $("#cancelEditBannervisaBtn").click(function () {
      $("#bannervisaEditFormContainer").addClass("d-none");
      $("#bannervisaFormContainer").removeClass("d-none");
      $('#bannervisaTable_wrapper').show();
      $('#addBannervisaBtn').show();
    });

    // ==============================
    // IMAGE PREVIEW
    // ==============================
    $("#editBannervisaImage").on("change", function () {
      const [file] = this.files;
      if (file) {
        $("#editBannervisaPreview").attr("src", URL.createObjectURL(file)).show();
      }
    });

    // ==============================
    // SUBMIT EDIT FORM
    // ==============================
    $("#editBannervisaForm").on("submit", function (e) {
      e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
        url: base_url + "exhibiting/exhibitor-visa-banner-update",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (res) {
          if (res.success) {
            Swal.fire("Success!", res.message, "success");
            $("#bannervisaEditFormContainer").hide();
            $('#bannervisaTable_wrapper').show();
            $('#addBannervisaBtn').show();
            bannervisaTable.ajax.reload();
          } else {
            Swal.fire("Error!", res.message, "error");
          }
        },
        error: function () {
          Swal.fire("Error!", "Terjadi kesalahan server.", "error");
        },
      });
    });

    // ==============================
    // DELETE
    // ==============================
    $(document).on("click", ".deleteBannervisa", function () {
      const id = $(this).data("id");

      Swal.fire({
        title: "Are you sure?",
        text: "This banner will be permanently deleted!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "Cancel",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: base_url + "exhibiting/exhibitor-visa-banner-delete/" + id,
            type: "POST",
            dataType: "json",
            success: function (res) {
              Swal.fire({
                icon: res.status,
                title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                text: res.message,
              });
              if (res.status === "success") {
                bannervisaTable.ajax.reload(null, false);
              }
            },
            error: function () {
              Swal.fire("Error", "Failed to connect to server", "error");
            },
          });
        }
      });
    });

    // ==============================
    // TAB URL HASH HANDLER
    // ==============================
    var hash = window.location.hash;
    if (hash) {
      var triggerEl = document.querySelector('.nav-link[href="' + hash + '"]');
      if (triggerEl) {
        var tab = new bootstrap.Tab(triggerEl);
        tab.show();
      }
    }

    const tabEls = document.querySelectorAll('#formTabs a[data-bs-toggle="tab"]');
    tabEls.forEach(function (tabEl) {
      tabEl.addEventListener("shown.bs.tab", function (event) {
        history.replaceState(null, null, event.target.getAttribute("href"));
      });
    });
  });
</script>
<script>
  $(document).ready(function() {

    const base_url = "<?= base_url(); ?>";

    // ============================
    // SECTION VARIABLES (Content Visa)
    // ============================
    const $section1VisaTable = $('#section1VisaTable');
    const $section1VisaTableWrapper = $('#section1VisaTable_wrapper');
    const $section1VisaFormContainer = $('#section1VisaFormContainer');
    const $section1VisaEditFormContainer = $('#section1VisaEditFormContainer');
    const $addSection1VisaBtn = $('#addSection1VisaBtn');
    const $cancelSection1VisaBtn = $('#cancelSection1VisaBtn');
    const $cancelEditSection1VisaBtn = $('#cancelEditSection1VisaBtn');

    // Hide form containers on load
    $section1VisaFormContainer.addClass('d-none');
    $section1VisaEditFormContainer.addClass('d-none');

    // ============================
    // INITIALIZE DATATABLE
    // ============================
    const section1VisaTable = $section1VisaTable.DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url: base_url + "exhibiting/exhibitor-visa-datatable",
        type: "POST"
      },
      dataType: 'json',
      order: [[1, "asc"]],
      columns: [
        { data: "no" },
        { data: "content_year" },
        { data: "title" },
        { data: "body_text" },
        { data: "file_path" },
        { data: "status" },
        {
          data: null,
          orderable: false,
          render: function(data, type, row) {
            return `
              <button class="btn btn-sm btn-primary editSectionVisa" data-id="${row.id}" title="Edit">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-danger deleteSectionVisa" data-id="${row.id}" title="Delete">
                <i class="bi bi-trash"></i>
              </button>
            `;
          }
        }
      ],
      columnDefs: [
        {
          targets: 3, // Description
          render: function(data, type, row) {
            if (type === 'display') {
              return `<span class="ellipsis" title="${data}">${data}</span>`;
            }
            return data;
          }
        }
      ]
    });
    
    // ============================
    // ADD NEW SECTION
    // ============================
    $addSection1VisaBtn.on('click', function() {
      $('#section1VisaTable_wrapper').hide();
      $addSection1VisaBtn.hide();
      $section1VisaFormContainer.removeClass('d-none').hide().fadeIn(200);
    });

    $cancelSection1VisaBtn.on('click', function() {
      $section1VisaFormContainer.slideUp(function() {
        $(this).addClass('d-none');
      });
      $('#section1VisaTable_wrapper').show();
      $('#addSection1VisaBtn').show();
    });

    // ============================
    // EDIT SECTION
    // ============================
    $(document).on('click', '.editSectionVisa', function() {
      const id = $(this).data('id');

      $.getJSON(base_url + "exhibiting/exhibitor-content-get-data/" + id, function(data) {
        $('#editSection1VisaId').val(data.id);
        $('#editSection1VisaYear').val(data.content_year);
        $('#editSection1VisaTitle').val(data.title);
        if (sectionEditor) sectionEditor.setData(data.body_text || '');

        if (data.status === "active") {
          $('#editSection1VisaActive').prop('checked', true);
        } else {
          $('#editSection1VisaInactive').prop('checked', true);
        }

        if (data.image) {
          $('#editSection1VisaPreview').attr('src', data.image).show();
        } else {
          $('#editSection1VisaPreview').hide();
        }

        $section1VisaFormContainer.addClass('d-none');
        $section1VisaEditFormContainer.removeClass('d-none');

        // Hide table & add button
        $('#section1VisaTable_wrapper').hide();
        $('#addSection1VisaBtn').hide();
      });
    });

    $cancelEditSection1VisaBtn.on('click', function() {
      $section1VisaEditFormContainer.addClass('d-none');
      $section1VisaFormContainer.addClass('d-none');
      $section1VisaTableWrapper.show();
      $('#section1VisaTable_wrapper').show();
      $('#addSection1VisaBtn').show();
    });

    // ============================
    // IMAGE PREVIEW
    // ============================
    $('#editSection1VisaImage').on('change', function() {
      const [file] = this.files;
      if (file) {
        $('#editSection1VisaPreview').attr('src', URL.createObjectURL(file)).show();
      }
    });

    // ============================
    // SUBMIT ADD FORM
    // ============================
    $('#addSection1VisaForm').on('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);

      $.ajax({
        url: base_url + "exhibiting/exhibitor-visa-section-add",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
          if (res.success) {
            Swal.fire("Success!", res.message, "success").then(() => {
              section1VisaTable.ajax.reload();
              $section1VisaFormContainer.addClass('d-none');
              // $section1VisaTableWrapper.show();
              // $addSection1VisaBtn.show();
              $('#section1VisaTable_wrapper').show();
              $('#addSection1VisaBtn').show();
              // Swal.fire("Success!", res.message, "success").then(() => {
              //     window.location.href = base_url + "exhibiting/why-exhibit-settings";
              // });
            });
          } else {
            Swal.fire("Error!", res.message, "error");
          }
        },
        error: function() {
          Swal.fire("Error!", "Server error occurred.", "error");
        }
      });
    });

    // ============================
    // SUBMIT EDIT FORM
    // ============================
    $('#editSection1VisaForm').on('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);

      $.ajax({
        url: base_url + "exhibiting/exhibitor-visa-section-update",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
          if (res.success) {
            Swal.fire("Updated!", res.message, "success").then(() => {
              section1VisaTable.ajax.reload();
              $section1VisaEditFormContainer.addClass('d-none');
              // $section1VisaTableWrapper.show();
              // $addSection1VisaBtn.show();

              $('#section1VisaTable_wrapper').show();
              $('#addSection1VisaBtn').show();
            });
          } else {
            Swal.fire("Error!", res.message, "error");
          }
        },
        error: function() {
          Swal.fire("Error!", "Server error occurred.", "error");
        }
      });
    });

    // ============================
    // DELETE SECTION
    // ============================
    $(document).on('click', '.deleteSectionVisa', function() {
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
            url: base_url + 'exhibiting/exhibitor-visa-section-delete',
            type: 'POST',
            data: { exhibitor_visa_id: id },
            dataType: 'json',
            success: function(res) {
              Swal.fire({
                icon: res.status,
                title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                text: res.message
              });
              if (res.status === 'success') {
                section1VisaTable.ajax.reload(null, false);
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




</body>
</html>
