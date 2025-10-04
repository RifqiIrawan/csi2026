
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

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



</style>
</head>
<body>

<?php 
  $currentYear = date('Y'); 
  $startYear   = $currentYear - 2; 
  $endYear     = $currentYear + 4; 
?>

<div class="container mt-4">
  <div class="row">
    <!-- Vertical Nav -->
    <!-- <div class="col-md-3">
      <ul class="nav nav-pills nav-vertical" id="formTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="tab-banner" data-bs-toggle="tab" href="#content-banner" role="tab">
            <i class="fa fa-list"></i> Banner
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tab-content" data-bs-toggle="tab" href="#content-content" role="tab">
            <i class="fa fa-tags"></i> Content
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tab-visainformation" data-bs-toggle="tab" href="#content-visainformation" role="tab">
            <i class="fa fa-ellipsis-h"></i> Visa Information
          </a>
        </li>
      </ul>
    </div> -->
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
                <!-- <th>Status</th> -->
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
                <form action="<?= base_url('exhibiting/why-exhibit-banner-update') ?>" method="post" enctype="multipart/form-data">
                  
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

                  <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="bannerimage" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 1200x400px</small>
                    <div class="mt-2">
                      <img id="editBannerPreview" src="" alt="Current Banner" class="img-thumbnail" style="max-height:120px; display:none;">
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

        <!-- TAB 2: Content -->
        <div class="tab-pane fade" id="content-content" role="tabpanel">
          <div class="card tab-card">
            <div class="card-body">
              <h5 class="mb-3 text-primary">Form 2 - Category</h5>
              <form>
                <div class="mb-3">
                  <label class="form-label">Category Name</label>
                  <input type="text" class="form-control" placeholder="Enter Category Name" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Notes</label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Cancel</button>
              </form>
            </div>
          </div>
        </div>

        <!-- TAB 3: Visa Information -->
        <div class="tab-pane fade" id="content-visainformation" role="tabpanel">
          <div class="card tab-card">
            <div class="card-body">
              <h5 class="mb-3 text-primary">Form 3 - Visa Information</h5>
              <form>
                <div class="mb-3">
                  <label class="form-label">Other Input</label>
                  <input type="text" class="form-control" placeholder="Some value..." required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Details</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Cancel</button>
              </form>
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
<script>
  $(document).ready(function() {
    var base_url = "<?= base_url(); ?>";
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
            {
                data: null,
                orderable: false,
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary editBanner" data-id="${row.id}">Edit</button>
                        <button class="btn btn-sm btn-danger deleteBanner" data-id="${row.id}">Delete</button>
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

</script>

</body>
</html>
