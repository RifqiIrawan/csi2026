
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
  #section1Table_conference_wrapper,
  #section1Table_conference{
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
        <a class="nav-link active" id="tab-content-whyvisit" data-bs-toggle="tab" href="#content-content-whyvisit" role="tab">
          <i class="fa fa-tags"></i> Banner Conference Schedule
        </a>
      </li>
    </ul>

    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">

        <!-- TAB: Content Conference Schedule -->
        <div class="tab-pane fade show active" id="content-content-whyvisit" role="tabpanel">

          <button id="addSection1Btn_conference" class="btn btn-success mb-3">Add Banner</button>

          <!-- DataTable -->
          <table id="section1Table_conference" class="display table table-bordered w-100">
            <thead>
              <tr>
                <th>No</th>
                <th>Year</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>

          <!-- Add Content Form -->
          <div id="section1FormContainer_conference" class="section1-form d-none mt-3">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-success">Banner Conference Schedule Configuration</h5>

                <form id="addSection1Form_conference" action="<?= base_url('exhibiting/why-exhibit-section-add') ?>" method="post" enctype="multipart/form-data">

                  <div class="mb-3">
                    <label class="form-label">Section Year</label>
                    <select class="form-control" name="addsectionyear" id="addSection1Year_conference" required>
                      <option value="">-- Select Section Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Description</label>
                    <textarea class="form-control" rows="4" name="addsectiondescription" id="addSection1Description_conference" placeholder="Enter Section Description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Image</label>
                    <input type="file" class="form-control" name="addsectionimage" id="addSection1Image_conference" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="addSection1Preview_conference" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="addsectionStatus" id="addSection1Active_conference" value="active" checked>
                    <label for="addSection1Active_conference" class="mb-0">Active</label>
                    <input type="radio" name="addsectionStatus" id="addSection1Inactive_conference" value="inactive">
                    <label for="addSection1Inactive_conference" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-success me-2">Add</button>
                  <button type="button" id="backSection1Btn_conference" class="btn btn-outline-danger">Cancel</button>
                </form>

              </div>
            </div>
          </div>

          <!-- Edit Content Form -->
          <div id="section1EditFormContainer_conference" class="section1-form d-none mt-3">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Banner Conference Schedule</h5>

                <form id="editSection1Form_conference" action="<?= base_url('exhibiting/why-exhibit-section-update') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" id="editSection1Id_conference">

                  <div class="mb-3">
                    <label class="form-label">Section Year</label>
                    <select class="form-control" name="sectionyear" id="editSection1Year_conference" required>
                      <option value="">-- Select Section Year --</option>
                      <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                        <option value="<?= $y; ?>"><?= $y; ?></option>
                      <?php endfor; ?>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Description</label>
                    <textarea class="form-control" rows="4" name="sectiondescription" id="editSection1Description_conference" placeholder="Enter Section Description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Section Image</label>
                    <input type="file" class="form-control" name="sectionimage" id="editSection1Image_conference" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="editSection1Preview_conference" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <div class="mb-3 d-flex gap-3 align-items-center">
                    <input type="radio" name="sectionStatus" id="editSection1Active_conference" value="active">
                    <label for="editSection1Active_conference" class="mb-0">Active</label>
                    <input type="radio" name="sectionStatus" id="editSection1Inactive_conference" value="inactive">
                    <label for="editSection1Inactive_conference" class="mb-0">Inactive</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditSection1Btn_conference" class="btn btn-outline-danger">Cancel</button>
                </form>

              </div>
            </div>
          </div>

        </div>
        <!-- END TAB -->
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

  let sectionEditorWhyVisit, visainformationEditor, edit_conferencesubtitle;

  let add_conferencesubtitle = '';

  // 2️⃣ Inisialisasi CKEditor
  document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor
      .create(document.querySelector('#editSection1Description_conference'))
      .then(editor => {
        sectionEditorWhyVisit = editor;
        console.log('CKEditor ready');
      })
      .catch(error => console.error(error));
    

    // ClassicEditor
    //   .create(document.querySelector('#editBannerWhyvisitsubtitle'))
    //   .then(editor => {
    //     edit_whyvisitsubtitle = editor;
    //     console.log('CKEditor ready');
    //   })
    //   .catch(error => console.error(error));
      
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
  $(document).ready(function () {
    const base_url = "<?= base_url(); ?>";

    // ====== SECTION VARIABLES ======
    const $sectionTable = $('#section1Table_conference');
    const $sectionTableWrapper = $('#section1Table_conference_wrapper');
    const $addSectionBtn = $('#addSection1Btn_conference');
    const $addFormContainer = $('#section1FormContainer_conference');
    const $editFormContainer = $('#section1EditFormContainer_conference');
    const $backBtn = $('#backSection1Btn_conference');
    const $cancelEditBtn = $('#cancelEditSection1Btn_conference');

    // Hide both forms initially
    $addFormContainer.addClass('d-none');
    $editFormContainer.addClass('d-none');

    // ====== INITIALIZE DATATABLE ======
    const sectionTable = $sectionTable.DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url: base_url + "visiting/conference-schedule-datatable",
        type: "POST",
        dataSrc: function (json) {
          return json.data || [];
        }
      },
      order: [[1, "asc"]],
      columns: [
        { data: "no" },
        { data: "content_year" },
        { data: "body_text" },
        { data: "file_path" },
        { data: "status" },
        { data: null }
      ],
      columnDefs: [
        {
          targets: 2, // Description
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
          targets: 3, // Image column
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
          targets: 4, // Status
          render: function (data) {
            const badgeClass = data === "Active" ? "success" : "secondary";
            return `<span class="badge bg-${badgeClass}">${data}</span>`;
          }
        },
        {
          targets: 5, // Actions
          orderable: false,
          render: function (data, type, row) {
            return `
              <button class="btn btn-sm btn-primary editSection_conference" 
                      data-id="${row.id}" title="Edit">
                <i class="bi bi-pencil-square"></i>
              </button>
              <button class="btn btn-sm btn-danger deleteSection_conference" 
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
      $('#section1Table_conference_wrapper').hide();
      $sectionTableWrapper.hide();
      $addSectionBtn.hide();
      $addFormContainer.removeClass('d-none').hide().fadeIn(200);
    });

    // ====== CANCEL ADD FORM ======
    $backBtn.on('click', function () {
      $addFormContainer.slideUp(200, function () {
        $addFormContainer.addClass('d-none');
        $sectionTableWrapper.slideDown(200);
        $('#section1Table_conference_wrapper').show();
        $addSectionBtn.show();
      });
    });

    // ====== ADD FORM SUBMIT ======
    $('#addSection1Form_conference').on('submit', function (e) {
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
    $(document).on('click', '.editSection_conference', function () {
      const id = $(this).data('id');

      $.getJSON(base_url + "exhibiting/why-exhibit-content-get-data/" + id, function (data) {
        $("#editSection1Id_conference").val(data.id);
        $("#editSection1Year_conference").val(data.content_year);
        $("#editSection1Title_conference").val(data.title);
        $("#editSection1Description_conference").val(data.body_text || '');

        if (sectionEditorWhyVisit) {
          sectionEditorWhyVisit.setData(data.body_text || '');
        }

        if (data.status === "active") {
          $("#editSection1Active_conference").prop("checked", true);
        } else {
          $("#editSection1Inactive_conference").prop("checked", true);
        }

        if (data.image) {
          $("#editSection1Preview_conference").attr("src", data.image).show();
        } else {
          $("#editSection1Preview_conference").hide();
        }

        $sectionTableWrapper.hide();
        $addSectionBtn.hide();
        $addFormContainer.addClass("d-none");
        $editFormContainer.removeClass("d-none").hide().fadeIn(200);


        // Show edit form
        $("#section1FormContainer_conference").addClass("d-none");
        $("#section1EditFormContainer_conference").removeClass("d-none");

        // Hide table + add button
        $('#section1Table_conference_wrapper').hide();
        // $('#addBannerWhyvisitBtn').hide();

        $('#section1EditFormContainer_conference').show();
      });
    });

    // ====== CANCEL EDIT FORM ======
    $cancelEditBtn.on('click', function () {
      $editFormContainer.fadeOut(200, function () {
        $editFormContainer.addClass('d-none');
        $('#section1Table_conference_wrapper').show();
        $addSectionBtn.show();
      });
    });

    // ====== EDIT FORM SUBMIT ======
    $('#editSection1Form_conference').on('submit', function (e) {
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
    $(document).on('click', '.deleteSection_conference', function () {
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
    $("#addSection1Image_conference").on("change", function () {
      const [file] = this.files;
      if (file) {
        $("#addSection1Preview_conference").attr("src", URL.createObjectURL(file)).show();
      }
    });

    $("#editSection1Image_conference").on("change", function () {
      const [file] = this.files;
      if (file) {
        $("#editSection1Preview_conference").attr("src", URL.createObjectURL(file)).show();
      }
    });

    // ====== RESET ADD FORM ======
    function resetAddForm() {
      $('#addSection1Form_conference')[0].reset();
      $('#addSection1Preview_conference').hide();
    }
  });
</script>

</body>
</html>
