
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
        <a class="nav-link active" id="tab-events" data-bs-toggle="tab" href="#content-events" role="tab">
          <i class="fa fa-list"></i> Event
        </a>
        <a class="nav-link" id="tab-content" data-bs-toggle="tab" href="#content-content" role="tab">
          <i class="fa fa-tags"></i> Content
        </a>
        <a class="nav-link" id="tab-visainformation" data-bs-toggle="tab" href="#content-visainformation" role="tab">
          <i class="fa fa-ellipsis-h"></i> Visa Information
        </a>
      </li>
    </ul>
    <!-- Tab Content -->
    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">

        <div class="tab-pane fade show active" id="content-events" role="tabpanel"> 
            <button id="addEventBtn" class="btn btn-success mb-3">Add Event</button>

            <!-- DataTable -->
            <table id="eventTable" class="display table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Created By</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- Data populated dynamically -->
                </tbody>
            </table>

            <!-- Add Event Form -->
            <div id="eventFormContainer" class="event-form">
                <div class="card tab-card">
                <div class="card-body">
                    <h5 class="mb-3 text-primary">Add New Event</h5>
                    <form action="<?= base_url('events/add') ?>" method="post">
                    
                    <div class="mb-3">
                        <label class="form-label">Event Name</label>
                        <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required style="text-transform:capitalize">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event Year</label>
                        <select class="form-control" name="event_year" required>
                        <option value="">-- Select Year --</option>
                        <?php for($y = date('Y') - 5; $y <= date('Y') + 5; $y++): ?>
                            <option value="<?= $y; ?>" <?= ($y == date('Y')) ? 'selected' : ''; ?>><?= $y; ?></option>
                        <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event Location</label>
                        <input type="text" class="form-control" name="event_location" placeholder="Enter Location">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="event_start_date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label class="form-label">End Date</label>
                        <input type="date" class="form-control" name="event_end_date" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <button type="button" id="backEventBtn" class="btn btn-outline-danger">Back</button>
                    </form>
                </div>
                </div>
            </div>

            <!-- Edit Event Form -->
            <div id="eventEditFormContainer" class="event-form d-none">
                <div class="card tab-card">
                <div class="card-body">
                    <h5 class="mb-3 text-primary">Edit Event</h5>
                    <form id="editEventForm" action="<?= base_url('events/update') ?>" method="post">
                    <input type="hidden" name="id" id="editEventId">

                    <div class="mb-3">
                        <label class="form-label">Event Name</label>
                        <input type="text" class="form-control" name="event_name" id="editEventName" required style="text-transform:capitalize">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event Year</label>
                        <select class="form-control" name="event_year" id="editEventYear" required>
                        <option value="">-- Select Year --</option>
                        <?php for($y = date('Y') - 5; $y <= date('Y') + 5; $y++): ?>
                            <option value="<?= $y; ?>"><?= $y; ?></option>
                        <?php endfor; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event Location</label>
                        <input type="text" class="form-control" name="event_location" id="editEventLocation">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="event_start_date" id="editEventStartDate">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label class="form-label">End Date</label>
                        <input type="date" class="form-control" name="event_end_date" id="editEventEndDate">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Modified By</label>
                        <input type="text" class="form-control" name="modified_by" id="editEventModifiedBy" placeholder="Enter your name">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <button type="button" id="cancelEditEventBtn" class="btn btn-outline-danger">Cancel</button>
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

  let sectionEditor, visainformationEditor;

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
  });

</script>
<script>
    var base_url = "<?= base_url(); ?>";

    $(document).ready(function() {
        // Elements
        var $eventTableWrapper = $('#eventTable_wrapper');
        var $eventForm = $('#eventFormContainer');
        var $addEventBtn = $('#addEventBtn');
        var $backEventBtn = $('#backEventBtn');
        var $editEventFormContainer = $('#eventEditFormContainer');

        // ===============================
        // 🧩 Initialize DataTable
        // ===============================
        var eventTable = $('#eventTable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: base_url + "visiting/event-datatable", // ← Update to your backend route
                type: "POST"
            },
            order: [[1, "asc"]],
            columns: [
                { data: "no" },
                { data: "event_name" },
                { data: "event_year" },
                { data: "event_location" },
                { data: "event_start_date" },
                { data: "event_end_date" },
                { data: "created_by" },
                {
                    data: null,
                    orderable: false,
                    render: function (data, type, row) {
                        return `
                            <button class="btn btn-sm btn-primary editEvent" data-id="${row.id}" title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-sm btn-danger deleteEvent" data-id="${row.id}" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        `;
                    }
                }
            ]
        });

        // 🔹 Baru ambil wrapper setelah DataTable selesai inisialisasi
        var $eventTableWrapper = $('#eventTable_wrapper');

        // ===============================
        // 🔹 Add Event Button
        // ===============================
        $addEventBtn.on('click', function() {
            $eventForm.removeClass('d-none').hide().slideDown();
            $eventTableWrapper.addClass('d-none');
            $(this).hide();
        });

        // ===============================
        // 🔹 Back Button
        // ===============================
        $backEventBtn.on('click', function() {
            $eventForm.slideUp(function() {
                $eventForm.addClass('d-none');
            });
            $eventTableWrapper.removeClass('d-none').hide().slideDown();
            $addEventBtn.show();
        });

        // ===============================
        // 🔹 Activate Tab via URL Hash
        // ===============================
        var hash = window.location.hash;
        if (hash) {
            var triggerEl = document.querySelector('.nav-link[href="'+hash+'"]');
            if (triggerEl) {
                new bootstrap.Tab(triggerEl).show();
            }
        }

        // Update hash when switching tab
        document.querySelectorAll('#formTabs a[data-bs-toggle="tab"]').forEach(function(tabEl) {
            tabEl.addEventListener('shown.bs.tab', function (event) {
                history.replaceState(null, null, event.target.getAttribute('href'));
            });
        });

        // ===============================
        // 🔹 Edit Event
        // ===============================
        $(document).on('click', '.editEvent', function() {
            let id = $(this).data('id');

            $.getJSON(base_url + "visiting/event-get-data/" + id, function(data) {
                $("#editEventId").val(data.id);
                $("#editEventName").val(data.event_name);
                $("#editEventYear").val(data.event_year);
                $("#editEventLocation").val(data.event_location);
                $("#editEventStartDate").val(data.event_start_date);
                $("#editEventEndDate").val(data.event_end_date);
                $("#editEventModifiedBy").val(data.modified_by);

                // Show edit form
                $eventForm.addClass("d-none");
                $editEventFormContainer.removeClass("d-none").hide().slideDown();
                $eventTableWrapper.hide();
                $addEventBtn.hide();
            });
        });

        // ===============================
        // 🔹 Cancel Edit Event
        // ===============================
        $("#cancelEditEventBtn").click(function() {
            $editEventFormContainer.addClass("d-none");
            $eventForm.addClass("d-none");
            $eventTableWrapper.show();
            $addEventBtn.show();
        });

        // ===============================
        // 🔹 Update Event via AJAX
        // ===============================
        $('#editEventForm').on('submit', function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: base_url + "events/update",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function(res) {
                    if (res.success) {
                        Swal.fire("Success!", res.message, "success");
                        $editEventFormContainer.hide();
                        $eventTableWrapper.show();
                        $addEventBtn.show();
                        eventTable.ajax.reload();
                    } else {
                        Swal.fire("Error!", res.message, "error");
                    }
                },
                error: function() {
                    Swal.fire("Error!", "Server error occurred.", "error");
                }
            });
        });

        // ===============================
        // 🔹 Delete Event
        // ===============================
        $(document).on('click', '.deleteEvent', function() {
            const id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: 'This event will be permanently deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: base_url + 'events/delete/' + id,
                        type: 'POST',
                        dataType: 'json',
                        success: function(res) {
                            Swal.fire({
                                icon: res.status,
                                title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                                text: res.message
                            });
                            if (res.status === 'success') {
                                eventTable.ajax.reload(null, false);
                            }
                        },
                        error: function() {
                            Swal.fire('Error', 'Failed to connect to server', 'error');
                        }
                    });
                }
            });
        });

        // ===============================
        // 🔹 Flashdata Alert (CodeIgniter)
        // ===============================
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
                        padding: '2em'
                    });
                    ";
                }
            }
        }
        ?>
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
