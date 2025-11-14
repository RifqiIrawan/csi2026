
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


  .event-form { display: none; margin-top: 0px; }

  .content-event { margin-top: 0px !important}

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
  #eventTable_wrapper,
  #eventTable,
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
    <!-- Tabs -->
    <ul class="nav custom-tabs" id="formTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-report-files" data-bs-toggle="tab" href="#content-report-files" role="tab">
          <i class="fa fa-file-alt"></i> Report Files
        </a>
      </li>
    </ul>

    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">
        <div class="tab-pane fade show active" id="content-report-files" role="tabpanel">

          <!-- Add Button -->
          <button id="addReportFileBtn" class="btn btn-success mb-3" style="display: none;">
            <i class="fa fa-plus"></i> Add Report File
          </button>

          <!-- DataTable -->
          <table id="reportFilesTable" class="table table-bordered table-striped w-100">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>File Name</th>
                <th>Type</th>
                <th>Size (KB)</th>
                <th>Published</th>
                <!-- <th>Uploaded By</th> -->
                <!-- <th>Uploaded Date</th> -->
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Filled dynamically -->
            </tbody>
          </table>

          <!-- Add Form -->
          <div id="reportFileFormContainer" class="d-none mt-4">
            <div class="card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Add Report File</h5>
                <form id="addReportFileForm" action="<?= base_url('report_files/add') ?>" method="post" enctype="multipart/form-data">

                  <div class="mb-3">
                    <label class="form-label">Report Title</label>
                    <input type="text" class="form-control" name="report_title" required placeholder="Enter Report Title">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="report_description" rows="3" placeholder="Write short description..."></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Upload File</label>
                    <input type="file" class="form-control" name="report_file" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv" required>
                    <small class="text-muted">Allowed: PDF, Word, Excel, CSV (max 10 MB)</small>
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_published" value="1" checked>
                    <label class="form-check-label">Publish immediately</label>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Uploaded By</label>
                    <input type="text" class="form-control" name="uploaded_by" placeholder="Your name" required>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Save</button>
                  <button type="button" id="backReportFileBtn" class="btn btn-outline-secondary">Back</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Edit Form -->
          <div id="reportFileEditFormContainer" class="d-none mt-4">
            <div class="card">
              <div class="card-body">
                <h5 class="mb-3 text-primary">Edit Report File</h5>
                <form id="editReportFileForm" action="<?= base_url('report_files/update') ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" id="editReportFileId">

                  <div class="mb-3">
                    <label class="form-label">Report Title</label>
                    <input type="text" class="form-control" name="report_title" id="editReportFileTitle" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="report_description" id="editReportFileDescription" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Replace File (optional)</label>
                    <input type="file" class="form-control" name="report_file" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv">
                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_published" id="editIsPublished" value="1">
                    <label class="form-check-label">Published</label>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                  <button type="button" id="cancelEditReportFileBtn" class="btn btn-outline-secondary">Cancel</button>
                </form>
              </div>
            </div>
          </div>

        </div><!-- /Tab Pane -->
      </div>
    </div>
  </div>
</div>



<!-- jQuery + DataTables + Bootstrap JS Bundle -->
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> -->

<script>
  const base_url = "<?= base_url(); ?>";

  $(function() {

    // ===============================
    // 🔧 Element References
    // ===============================
    const $reportTable = $('#reportFilesTable');
    const $formAdd = $('#reportFileFormContainer');
    const $formEdit = $('#reportFileEditFormContainer');
    const $addBtn = $('#addReportFileBtn');
    const $backBtn = $('#backReportFileBtn');
    const $tableWrapper = $('#reportFilesTable_wrapper');

    // ===============================
    // 🧩 Initialize DataTable
    // ===============================
    const reportTable = $reportTable.DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: {
        url: base_url + "visiting/show-report-datatable",
        type: "POST"
      },
      order: [[1, "asc"]],
      columns: [
        { data: null, render: (data, type, row, meta) => meta.row + 1 },
        { data: "report_title" },
        { data: "report_description", render: d => d || "-" },
        { data: "file_name" },
        { data: "file_type", render: d => d || "-" },
        { data: "file_size", render: d => d ? (d / 1024).toFixed(2) + " KB" : "-" },
        {
          data: "is_published",
          render: d => d == 1
            ? '<span class="badge bg-success">Yes</span>'
            : '<span class="badge bg-secondary">No</span>'
        },
        // { data: "uploaded_by" },
        // { data: "uploaded_date" },
        {
          data: null,
          orderable: false,
          render: row => `
            <button class="btn btn-sm btn-primary editReport" data-id="${row.id}" title="Edit">
              <i class="bi bi-pencil-square"></i>
            </button>
            <button class="btn btn-sm btn-success downloadReport" data-id="${row.id}" title="Download">
              <i class="bi bi-download"></i>
            </button>
          `
        }
      ]
    });

    // ===============================
    // ➕ Add Button
    // ===============================
    $addBtn.on("click", function() {
      $formAdd.removeClass("d-none").hide().slideDown();
      $tableWrapper.addClass("d-none");
      $(this).hide();
    });

    // ===============================
    // 🔙 Back Button
    // ===============================
    $backBtn.on("click", function() {
      $formAdd.slideUp(function() {
        $formAdd.addClass("d-none");
      });
      $tableWrapper.removeClass("d-none").hide().slideDown();
      $addBtn.show();
    });

    // ===============================
    // ✏️ Edit Report
    // ===============================
    $(document).on("click", ".editReport", function() {
      const id = $(this).data("id");

      $.getJSON(base_url + "visiting/show-report-get-data/" + id, function(data) {
        if (!data) {
          return Swal.fire("Error", "Data not found", "error");
        }

        $("#editReportFileId").val(data.id);
        $("#editReportFileTitle").val(data.report_title);
        $("#editReportFileDescription").val(data.report_description);
        $("#editIsPublished").prop("checked", data.is_published == 1);

        $formEdit.removeClass("d-none").hide().slideDown();
        $tableWrapper.hide();
        $addBtn.hide(); // remark karena tidak pakai add data
      }).fail(() => {
        Swal.fire("Error", "Failed to fetch data", "error");
      });
    });

    // ===============================
    // Download Report
    // ===============================
    $(document).on('click', '.downloadReport', function() {
      const id = $(this).data('id');
      // url: base_url + "visiting/show-report-datatable",
      const downloadUrl = `${base_url}visiting/show-report-download/${id}`; // adjust controller path if needed

      // Use fetch to trigger download and handle errors gracefully
      fetch(downloadUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('File not found or server error');
          }
          return response.blob();
        })
        .then(blob => {
          const url = window.URL.createObjectURL(blob);
          const a = document.createElement('a');
          a.href = url;
          a.download = `report_${id}.pdf`; // default filename
          document.body.appendChild(a);
          a.click();
          a.remove();
          window.URL.revokeObjectURL(url);
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'Download failed',
            text: error.message,
          });
        });
    });


    // ===============================
    // ❌ Cancel Edit
    // ===============================
    $("#cancelEditReportFileBtn").on("click", function() {
      $formEdit.addClass("d-none");
      $tableWrapper.show();
      // $addBtn.show(); 
    });

    // ===============================
    // 💾 Add Report (AJAX)
    // ===============================
    $("#addReportFileForm").on("submit", function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      $.ajax({
        url: base_url + "report_files/add",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
          if (res.success) {
            Swal.fire("Success", res.message, "success");
            $formAdd.slideUp().addClass("d-none");
            $tableWrapper.show();
            $addBtn.show();
            reportTable.ajax.reload(null, false);
            $("#addReportFileForm")[0].reset();
          } else {
            Swal.fire("Error", res.message, "error");
          }
        },
        error: function() {
          Swal.fire("Error", "Server error occurred.", "error");
        }
      });
    });

    // ===============================
    // 💾 Update Report (AJAX)
    // ===============================
    $("#editReportFileForm").on("submit", function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      $.ajax({
        url: base_url + "visiting/show-report-edit",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(res) {
          if (res.success) {
            Swal.fire("Updated", res.message, "success");
            $formEdit.slideUp().addClass("d-none");
            $tableWrapper.show();
            $addBtn.show();
            reportTable.ajax.reload(null, false);
          } else {
            Swal.fire("Error", res.message, "error");
          }
        },
        error: function() {
          Swal.fire("Error", "Server error occurred.", "error");
        }
      });
    });

    // ===============================
    // 🗑️ Delete Report
    // ===============================
    $(document).on("click", ".deleteReport", function() {
      const id = $(this).data("id");

      Swal.fire({
        title: "Delete this file?",
        text: "This action cannot be undone!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "Cancel"
      }).then(result => {
        if (result.isConfirmed) {
          $.ajax({
            url: base_url + "report_files/delete/" + id,
            type: "POST",
            dataType: "json",
            success: function(res) {
              Swal.fire({
                icon: res.success ? "success" : "error",
                title: res.success ? "Deleted!" : "Error",
                text: res.message
              });
              if (res.success) {
                reportTable.ajax.reload(null, false);
              }
            },
            error: function() {
              Swal.fire("Error", "Failed to connect to server", "error");
            }
          });
        }
      });
    });

    // ===============================
    // ⚡ Flashdata Alert (CodeIgniter)
    // ===============================
    <?php
    $flashdata_all = $this->session->flashdata();
    if (!empty($flashdata_all)) {
      foreach ($flashdata_all as $type => $msg) {
        if (!empty($msg)) {
          $typeEscaped = addslashes($type);
          $msgEscaped = addslashes($msg);

          // Use switch for compatibility with PHP 7
          switch ($typeEscaped) {
            case 'success':
              $btnColor = '#28a745';
              break;
            case 'warning':
              $btnColor = '#f39c12';
              break;
            case 'info':
              $btnColor = '#3498db';
              break;
            default:
              $btnColor = '#e74c3c';
              break;
          }

          echo "
          Swal.fire({
            icon: '{$typeEscaped}',
            title: '".ucfirst($typeEscaped)."',
            html: '{$msgEscaped}',
            confirmButtonText: 'OK',
            confirmButtonColor: '{$btnColor}',
            width: 450,
            padding: '2em'
          });
          ";
        }
      }
    }
    ?>
  });
</script>


</body>
</html>
