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
</style>
<style>
.main-panel { padding-top: 50px !important; }

/* CARD MODERN */
.tab-card { border: none; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: all 0.3s; }
.tab-card:hover { box-shadow: 0 6px 16px rgba(0,0,0,0.12); }

/* FORM INPUT STYLING */
.form-control, .form-check-input { border-radius: .5rem; box-shadow: none !important; }
.form-control:focus { border-color: #0d6efd; box-shadow: 0 0 0 .2rem rgba(13,110,253,.25) !important; }
.btn { border-radius: .5rem; padding: .5rem 1.2rem; font-weight: 500; }

.ellipsis { max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; vertical-align: middle; }

/* SweetAlert look */
.swal2-rounded { border-radius: 15px !important; }
.swal2-title-custom { font-size: 22px !important; font-weight: 700 !important; color: #333 !important; margin-bottom: 15px !important; }
.swal2-text-custom { font-size: 25px !important; line-height: 1.6 !important; color: #444 !important; }
.swal2-title { color: #000 !important; }
.ck-editor__editable_inline { min-height: 150px; }

/* Make DataTable full width */
.container-fluid { padding-left: 10px; padding-right: 10px; }
#exhibitor1Table_wrapper, #exhibitor1Table {
    width: 100% !important;
}
.dataTables_wrapper {
    margin: 0 !important;
    padding: 0 !important;
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
.mt-4, .my-4 {
  margin-top: 2rem !important;
  margin-left: 10px;
}

.tab-content {
  border: 0px !important;
}

/* FIX DataTable header & row not aligned */
table.dataTable {
    width: 100% !important;
    border-collapse: collapse !important;
}

/* Hapus efek Bootstrap table-bordered */
table.dataTable.table-bordered > thead > tr > th,
table.dataTable.table-bordered > tbody > tr > td {
    border-width: 1px !important;
    border-color: #dee2e6 !important;
    border-style: solid !important;
}

/* Samakan padding TH dan TD */
/* table.dataTable thead th {
    padding: 8px 10px !important;
    background: #f8f9fa;
    font-weight: 600;
    vertical-align: middle !important;
} */

table.dataTable tbody td {
    padding: 8px 10px !important;
    vertical-align: middle !important;
}

/* Pastikan semua tetap table-cell */
table.dataTable th,
table.dataTable td {
    display: table-cell !important;
    box-sizing: border-box !important;
    white-space: nowrap;
}

/* Hilangkan border-right extra */
table.dataTable th:last-child,
table.dataTable td:last-child {
    border-right: 1px solid #dee2e6 !important;
}

#previewImage {
    max-width: 100%;
    width: auto;
    max-height: 70vh; /* agar tidak lebih tinggi dari layar */
    object-fit: contain;
}

</style>
<style>
  table.dataTable td.dtr-control {
      padding-left: 35px !important; /* tambah jarak */
  }

  table.dataTable td.dtr-control::before {
      left: 10px !important;  /* posisi ikon plus */
  }
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
  $currentYear = date('Y'); 
  $startYear   = $currentYear - 2; 
  $endYear     = $currentYear + 4; 
?>
<div class="container-fluid mt-4">
  <div class="row">
    <ul class="nav custom-tabs" id="formTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-banner" data-bs-toggle="tab" href="#banner" role="tab">
          <i class="fa fa-list"></i> Banner
        </a>
        <a class="nav-link" id="tab-exhibitor" data-bs-toggle="tab" href="#exhibitor" role="tab">
          <i class="fa fa-tags"></i> Exhibitor List
        </a>
      </li>
    </ul>
    <div class="col-md-12">
      <div class="tab-content" id="formTabsContent">
        <!-- TAB 1: Banner -->
        <div class="tab-pane fade show active" id="banner" role="tabpanel">
            <button id="addBannerBtn" class="btn btn-success mb-3">Add Banner</button>
            <!-- DataTable -->
            <table id="bannerTable" class="display table table-bordered" style="width: 100%;">
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

            <!-- Banner Form -->
            <div id="bannerFormContainer" class="banner-form d-none mt-3">
              <div class="card tab-card">
                <div class="card-body">
                  <h5 class="mb-3 text-primary">Banner Configuration</h5>
                  <form id="addExhibitorBannerForm" action="<?= base_url('exhibiting/exhibitor-banner-add') ?>" method="post" enctype="multipart/form-data">
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
                  <form id="editExhibitorBannerForm" action="<?= base_url('exhibiting/exhibitor-banner-edit') ?>" method="post" enctype="multipart/form-data">
                    
                    <!-- Hidden field for Banner ID -->
                    <input type="hidden" name="id" id="editBannerId">
                    <input type="hidden" name="bannermediaid" id="editBannerMediaId">

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
                        <input type="file" class="form-control" name="image" id="editBannerImage" accept="image/*">
                        <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
                        <div class="mt-2">
                            <img id="editBannerPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                        </div>
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
        <div class="tab-pane fade" id="exhibitor" role="tabpanel">
          <button id="addExhibitor1Btn" class="btn btn-success mb-3">Add Exhibitor</button>

          <!-- DataTable -->
          <table id="exhibitor1Table" class="display table table-bordered" style="width: 100%;">
            <thead>
              <tr>
                <th>No</th>
                <th>Company Name</th>
                <th>Stand</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Image</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>

          <!-- Add Exhibitor Form -->
          <div id="exhibitor1FormContainer" class="exhibitor1-form d-none mt-3">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-success">Add Exhibitor</h5><hr/>
                <form id="addExhibitor1Form" action="<?= base_url('exhibiting/exhibitor-list-add') ?>" method="post" enctype="multipart/form-data">

                  <!-- Company Information -->
                  <h6 class="mb-2 text-primary">Company Information</h6>
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="companyName" placeholder="Enter Company Name" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Stand</label>
                    <input type="text" class="form-control" name="stand" placeholder="Enter Stand Number" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Full Company Description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="url" class="form-control" name="website" placeholder="http://example.com">
                  </div>

                  <!-- Contact Information -->
                  <h6 class="mb-2 text-primary">Contact Information</h6>
                  <div class="mb-3">
                    <label class="form-label">Contact Person</label>
                    <input type="text" class="form-control" name="contactPerson" placeholder="Enter Contact Person Name">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                  </div>

                  <!-- Social Media Links -->
                  <h6 class="mb-2 text-primary">Social Media Links</h6>
                  <div class="mb-3">
                    <label class="form-label">LinkedIn</label>
                    <input type="url" class="form-control" name="linkedinUrl" placeholder="https://linkedin.com/company/...">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Twitter</label>
                    <input type="url" class="form-control" name="twitterUrl" placeholder="https://twitter.com/...">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Facebook</label>
                    <input type="url" class="form-control" name="facebookUrl" placeholder="https://facebook.com/...">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">YouTube</label>
                    <input type="url" class="form-control" name="youtubeUrl" placeholder="https://youtube.com/...">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Instagram</label>
                    <input type="url" class="form-control" name="instagramUrl" placeholder="https://instagram.com/...">
                  </div>

                  <!-- Logo / Image -->
                  <h6 class="mb-2 text-primary">Logo / Image</h6>
                  <div class="mb-3">
                    <label class="form-label">Logo / Image</label>
                    <input type="file" class="form-control" name="logoImage" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, JPG/PNG/GIF</small>
                    <div class="mt-2">
                      <img id="logoPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <!-- Buttons -->
                  <button type="submit" class="btn btn-success me-2">Add</button>
                  <button type="button" id="backExhibitor1Btn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>

          <!-- Edit Exhibitor Form -->
          <div id="exhibitor1EditFormContainer" class="exhibitor1-form d-none mt-3">
            <div class="card tab-card">
              <div class="card-body">
                <h5 class="mb-3 text-warning">Edit Exhibitor</h5><hr/>
                <form id="editExhibitor1Form" action="<?= base_url('exhibiting/exhibitor-list-edit') ?>" method="post" enctype="multipart/form-data">
                  
                  <input type="hidden" name="editExhibitor1Id">
                  <input type="hidden" name="editContentMediaId">
                  <!-- Company Information -->
                  <h6 class="mb-2 text-primary">Company Information</h6>

                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input id="editExCompanyName" type="text" class="form-control"
                          name="editExCompanyName" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Stand</label>
                    <input id="editExStand" type="text" class="form-control"
                          name="editExStand" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea id="editExDescription" class="form-control"
                              name="editExDescription"></textarea>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input id="editExWebsite" type="url" class="form-control"
                          name="editExWebsite">
                  </div>

                  <!-- Contact Information -->
                  <h6 class="mb-2 text-primary">Contact Information</h6>

                  <div class="mb-3">
                    <label class="form-label">Contact Person</label>
                    <input id="editExContactPerson" type="text" class="form-control"
                          name="editExContactPerson">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input id="editExEmail" type="email" class="form-control"
                          name="editExEmail">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input id="editExPhone" type="text" class="form-control"
                          name="editExPhone">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea id="editExAddress" class="form-control"
                              name="editExAddress"></textarea>
                  </div>

                  <!-- Social Media -->
                  <h6 class="mb-2 text-primary">Social Media</h6>

                  <div class="mb-3">
                    <label class="form-label">LinkedIn</label>
                    <input id="editExLinkedinUrl" type="url" class="form-control"
                          name="editExLinkedinUrl">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Twitter</label>
                    <input id="editExTwitterUrl" type="url" class="form-control"
                          name="editExTwitterUrl">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Facebook</label>
                    <input id="editExFacebookUrl" type="url" class="form-control"
                          name="editExFacebookUrl">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">YouTube</label>
                    <input id="editExYoutubeUrl" type="url" class="form-control"
                          name="editExYoutubeUrl">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Instagram</label>
                    <input id="editExInstagramUrl" type="url" class="form-control"
                          name="editExInstagramUrl">
                  </div>

                  <!-- Logo -->
                  <h6 class="mb-2 text-primary">Logo / Image</h6>

                  <div class="mb-3">
                    <label class="form-label">Upload Logo</label>
                    <input id="editExLogo" type="file" class="form-control"
                          name="editExLogo" accept="image/*">
                    <small class="form-text text-muted">Max 2MB, JPG/PNG/GIF</small>

                    <div class="mt-2">
                      <img id="editExLogoPreview" src="" class="img-thumbnail"
                          style="max-height:120px; display:none;">
                    </div>
                  </div>

                  <!-- Buttons -->
                  <button type="submit" class="btn btn-warning me-2">Update</button>
                  <button type="button" id="cancelEditExhibitor1Btn" class="btn btn-outline-danger">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
            url: base_url + "exhibiting/exhibitor-banner-datatable", // ganti dengan route CI kamu
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

    // 🔹 Baru ambil wrapper setelah DataTable selesai inisialisasi
    var $bannerTableWrapper = $('#bannerTable_wrapper');

    $addBannerBtn.on('click', function() {
        $bannerForm.removeClass('d-none').hide().slideDown();
        $bannerTableWrapper.addClass('d-none'); // sekarang pasti ada
        $(this).hide();

        // $('#bannerTable').closest('.bannerTable_wrapper').slideUp(200);
        // $addBannerBtn.fadeOut(200);

        // // Show the Add Exhibitor form
        // $exhibitorFormContainer.slideDown(300).removeClass('d-none');
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

    // Here
    $(document).on('click', '.editBanner', function () {
      let id = $(this).data('id');

      $.getJSON(base_url + "exhibiting/exhibitor-banner-get-data/" + id, function (data) {

          // ==== Isi Form Edit Banner ====
          $("#editBannerId").val(data.id);
          $("#editBannerMediaId").val(data.content_media_id);
          
          $("#editBannerYear").val(data.content_year);
          $("#editBannerTitle").val(data.title);
          $("#editBannerSubtitle").val(data.subtitle);

          // Status (radio)
          if (data.status === "active") {
              $("#editBannerActive").prop("checked", true);
          } else {
              $("#editBannerInactive").prop("checked", true);
          }

          // Image Preview
          if (data.image) {
              $("#editBannerPreview").attr("src", data.image).show();
          } else {
              $("#editBannerPreview").hide();
          }

          // Hide Add form if visible
          $bannerForm.slideUp(200, function(){
              $bannerForm.addClass('d-none');
          });

          // Hide DataTable and Add button
          $('#bannerTable').closest('.dataTables_wrapper').slideUp(200);
          $addBannerBtn.fadeOut(200);

          // Show Edit form
          $("#bannerEditFormContainer").slideDown(300).removeClass('d-none');
      });
    });

    $("#editBannerImage").on("change", function(){
          const [file] = this.files;
          if(file) $("#editBannerPreview").attr("src", URL.createObjectURL(file)).show();
      });

    $("#cancelEditBannerBtn").click(function(){
        // Hide the Edit Exhibitor form
        $("#bannerEditFormContainer").slideUp(200, function(){
            $("#bannerEditFormContainer").addClass('d-none');
        });

        // Show the DataTable and Add button again
        $('#bannerTable').closest('.dataTables_wrapper').slideDown(300);
        $addBannerBtn.fadeIn(300);
    });

    $('#addExhibitorBannerForm, #editExhibitorBannerForm').on('submit', function(e){
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
          url: $(this).attr('action'),
          type: "POST",
          data: formData,
          processData:false,
          contentType:false,
          dataType:"json",
          success:function(res){ 
              if(res.success) Swal.fire("Success!", res.message,"success").then(()=>{ location.reload(); });
              else Swal.fire("Error!", res.message,"error");
          },
          error:function(){ Swal.fire("Error!","Server error","error"); }
      });
    });

    $(document).on('click','.deleteBanner',function(){
      const id = $(this).data('id');

      Swal.fire({
          title: 'Are you sure?',
          text: 'This banner will be permanently deleted!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'Cancel'
      }).then(result => {

          if(result.isConfirmed){

              $.ajax({
                  url: base_url + 'exhibiting/exhibitor-banner-delete/' + id,
                  type: 'POST',
                  dataType: 'json',
                  success: function(res){  

                      Swal.fire({
                          icon: res.status,
                          title: res.status.charAt(0).toUpperCase() + res.status.slice(1),
                          text: res.message
                      });

                      // 🔥 FIX: reload DataTable yang benar
                      if(res.status === 'success'){
                          bannerTable.ajax.reload(null, false); 
                      }
                  },
                  error: function(){ 
                      Swal.fire('Error', 'Failed to connect to server', 'error'); 
                  }
              });

          }
      });
    });

    // ============================================
    // FIX DATATABLE WHEN SWITCHING TABS
    // ============================================
    $('#formTabs a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {


        history.replaceState(null, null, e.target.getAttribute('href'));

        setTimeout(function () {
            $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
        }, 150);

    });
  });

</script>
<script>
  let exhibitorEditor, exhibitorAdd;
  document.addEventListener('DOMContentLoaded', function () {
      ClassicEditor.create(document.querySelector('#editExDescription'))
        .then(editor => { exhibitorEditor = editor; })
        .catch(error => console.error(error));

      ClassicEditor.create(document.querySelector('#description'))
        .then(editor => { exhibitorAdd = editor; })
        .catch(error => console.error(error));

      var base_url = "<?= base_url(); ?>";
      var $exhibitorTableWrapper = $('#exhibitor1Table_wrapper');
      var $exhibitorFormContainer = $('#exhibitor1FormContainer');
      var $addExhibitorBtn = $('#addExhibitor1Btn');
      var $backExhibitorBtn = $('#backExhibitor1Btn');

      $exhibitorFormContainer.addClass('d-none');

      var exhibitorTable = $('#exhibitor1Table').DataTable({
          scrollY: '400px',
          scrollCollapse: true,
          scrollX: true,
          responsive: true,
          processing: true,
          serverSide: true,
          ajax: { url: base_url + "exhibiting/exhibitor-datatable", type: "POST" },
          columns: [
              { data: "no" },
              { data: "company_name" },
              { data: "stand_no" },
              { data: "contact_name" },
              { data: "contact_email" },
              { data: "contact_phone" },
              { data: "address" },
              { data: "file_path" },
              { data: null, orderable: false, render: function(data,type,row){
                  return `
                  <button class="btn btn-sm btn-primary editExhibitor" data-id="${row.id}"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-sm btn-danger deleteExhibitor" data-id="${row.id}"><i class="bi bi-trash"></i></button>`;
              }}
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
          },
          {
            targets: 7, // Image column
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
          }
        ]
      });

      $addExhibitorBtn.on('click', function(){
          $('#exhibitor1Table').closest('.dataTables_wrapper').slideUp(200);
          $addExhibitorBtn.fadeOut(200);

          // Show the Add Exhibitor form
          $exhibitorFormContainer.slideDown(300).removeClass('d-none');
      });

      $backExhibitorBtn.on('click', function(){
          $exhibitorFormContainer.slideUp(200, function(){
              $exhibitorFormContainer.addClass('d-none');
          });

          // Show the DataTable and Add button
          $('#exhibitor1Table').closest('.dataTables_wrapper').slideDown(300);
          $addExhibitorBtn.fadeIn(300);
      });

      $(document).on('click', '.editExhibitor', function(){
        let id = $(this).data('id');

        $.getJSON(base_url + "exhibiting/exhibitor-list-get-data/" + id, function(data){
            // Isi field edit form
            // === Isi Form ===
            $("input[name='editExhibitor1Id']").val(data.id);
            $("input[name='editContentMediaId']").val(data.content_media_id);
            $("#editExCompanyName").val(data.company_name);
            $("#editExStand").val(data.stand_no);
            // $("#editExDescription").val(data.long_description);
            $("#editExWebsite").val(data.website_url);

            $("#editExContactPerson").val(data.contact_name);
            $("#editExEmail").val(data.contact_email);
            $("#editExPhone").val(data.contact_phone);
            $("#editExAddress").val(data.address);

            $("#editExLinkedinUrl").val(data.linkedin_url);
            $("#editExTwitterUrl").val(data.twitter_url);
            $("#editExFacebookUrl").val(data.facebook_url);
            $("#editExYoutubeUrl").val(data.youtube_url);
            $("#editExInstagramUrl").val(data.instagram_url);

            if(exhibitorEditor) {
                exhibitorEditor.setData(data.long_description || '');
            }

            if(data.image) {
                $("#editExLogoPreview").attr("src", data.image).show();
            } else {
                $("#editExLogoPreview").hide();
            }

            // Hide Add form if visible
            $exhibitorFormContainer.slideUp(200, function(){
                $exhibitorFormContainer.addClass('d-none');
            });

            // Hide DataTable and Add button
            $('#exhibitor1Table').closest('.dataTables_wrapper').slideUp(200);
            $addExhibitorBtn.fadeOut(200);

            // Show Edit form
            $("#exhibitor1EditFormContainer").slideDown(300).removeClass('d-none');
        });
      });


      $("#cancelEditExhibitor1Btn").click(function(){
          // Hide the Edit Exhibitor form
          $("#exhibitor1EditFormContainer").slideUp(200, function(){
              $("#exhibitor1EditFormContainer").addClass('d-none');
          });

          // Show the DataTable and Add button again
          $('#exhibitor1Table').closest('.dataTables_wrapper').slideDown(300);
          $addExhibitorBtn.fadeIn(300);
      });

      $("#editExLogo").on("change", function(){
          const [file] = this.files;
          if(file) $("#editExLogoPreview").attr("src", URL.createObjectURL(file)).show();
      });

      $('#addExhibitor1Form, #editExhibitor1Form').on('submit', function(e){
          e.preventDefault();

          // --- Sync CKEditor ke textarea --- //
          if ($(this).attr('id') === 'addExhibitor1Form') {
              $('#description').val(exhibitorAdd.getData());
          }
          if ($(this).attr('id') === 'editExhibitor1Form') {
              $('#editExDescription').val(exhibitorEditor.getData());
          }
          
          var formData = new FormData(this);
          $.ajax({
              url: $(this).attr('action'),
              type: "POST",
              data: formData,
              processData:false,
              contentType:false,
              dataType:"json",
              success:function(res){ 
                  if(res.success) Swal.fire("Success!", res.message,"success").then(()=>{ location.reload(); });
                  else Swal.fire("Error!", res.message,"error");
              },
              error:function(){ Swal.fire("Error!","Server error","error"); }
          });
      });

      $(document).on('click','.deleteExhibitor',function(){
          const id=$(this).data('id');
          Swal.fire({
              title:'Are you sure?',
              text:'This exhibitor will be permanently deleted!',
              icon:'warning',
              showCancelButton:true,
              confirmButtonText:'Yes, delete it!',
              cancelButtonText:'Cancel'
          }).then(result=>{
              if(result.isConfirmed){
                  $.ajax({
                      url: base_url+'exhibiting/exhibitor-list-delete/'+id,
                      type:'POST',
                      dataType:'json',
                      success:function(res){ 
                          Swal.fire({icon:res.status,title:res.status.charAt(0).toUpperCase()+res.status.slice(1),text:res.message});
                          if(res.status==='success'){ exhibitorTable.ajax.reload(null,false); }
                      },
                      error:function(){ Swal.fire('Error','Failed to connect to server','error'); }
                  });
              }
          });
      });

    // =============================================
    // FIX DATATABLE BERANTAKAN SAAT PINDAH TAB
    // =============================================
    // $('#formTabs a[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
    //     setTimeout(function(){
    //         $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();
    //     }, 150);
    // });
  });
</script>
