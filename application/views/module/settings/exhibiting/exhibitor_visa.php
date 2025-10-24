
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

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
        <a class="nav-link" id="tab-content" data-bs-toggle="tab" href="#content-content" role="tab">
          <i class="fa fa-tags"></i> Content
        </a>
        <a class="nav-link" id="tab-visainformation" data-bs-toggle="tab" href="#content-visainformation" role="tab">
          <i class="fa fa-ellipsis-h"></i> Visa Information
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
                <form action="<?= base_url('exhibiting/why-exhibit-bannervisa-add') ?>" method="post" enctype="multipart/form-data">
                  
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

        <!-- TAB 2: Section -->
        <div class="tab-pane fade" id="content-content" role="tabpanel">
          <!-- (unchanged section content) -->
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
      $bannervisaForm.removeClass("d-none").hide().slideDown();
      $bannervisaTableWrapper.addClass("d-none");
      $(this).hide();
    });

    $backBannervisaBtn.on("click", function () {
      $bannervisaForm.slideUp(function () {
        $bannervisaForm.addClass("d-none");
      });
      $bannervisaTableWrapper.removeClass("d-none").hide().slideDown();
      $addBannervisaBtn.show();
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
        url: base_url + "exhibiting/why-exhibit-banner-update",
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
            url: base_url + "exhibiting/why-exhibit-banner-delete/" + id,
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



</body>
</html>
