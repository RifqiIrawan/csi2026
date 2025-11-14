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
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container-fluid mt-4">
  <button id="addExhibitor1Btn" class="btn btn-success mb-3">Add Exhibitor</button>

  <!-- DataTable -->
  <table id="exhibitor1Table" class="display table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Company Name</th>
        <th>Stand</th>
        <th>Contact Person</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Website</th>
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
        <form id="addExhibitor1Form" action="<?= base_url('exhibiting/why-exhibit-exhibitor-add') ?>" method="post" enctype="multipart/form-data">

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
            <textarea class="form-control" name="description" placeholder="Enter Full Company Description"></textarea>
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

          <!-- Products / Services -->
          <h6 class="mb-2 text-primary">Products / Services</h6>
          <div class="mb-3">
            <label class="form-label">Products / Services</label>
            <textarea class="form-control" name="products" placeholder="Enter Products or Services"></textarea>
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

          <!-- Status -->
          <div class="mb-3 d-flex gap-3 align-items-center">
            <input type="radio" name="status" id="statusActive" value="active" checked>
            <label for="statusActive" class="mb-0">Active</label>
            <input type="radio" name="status" id="statusInactive" value="inactive">
            <label for="statusInactive" class="mb-0">Inactive</label>
          </div>

          <!-- Buttons -->
          <button type="submit" class="btn btn-success me-2">Add</button>
          <button type="button" id="backExhibitor1Btn" class="btn btn-outline-danger">Cancel</button>
        </form>
      </div>
    </div>
  </div>


  <!-- Edit Exhibitor Form -->
  <!--
  <div id="exhibitor1EditFormContainer" class="exhibitor1-form d-none">
    <div class="card tab-card">
      <div class="card-body">
        <h5 class="mb-3 text-primary">Edit Exhibitor</h5>
        <form id="editExhibitor1Form" action="<?= base_url('exhibiting/why-exhibit-exhibitor-update') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="editExhibitor1Id">
          <div class="mb-3">
            <label class="form-label">Exhibitor Year</label>
            <select class="form-control" name="exhibitoryear" id="editExhibitor1Year" required>
              <option value="">-- Select Exhibitor Year --</option>
              <?php for($y = $startYear; $y <= $endYear; $y++): ?>
                <option value="<?= $y; ?>"><?= $y; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Exhibitor Title</label>
            <input type="text" class="form-control" name="exhibitortitle" id="editExhibitor1Title" placeholder="Enter Exhibitor Title" required style="text-transform:capitalize">
          </div>
          <div class="mb-3">
            <label class="form-label">Exhibitor Description</label>
            <textarea class="form-control" name="exhibitordescription" id="editExhibitor1Description" placeholder="Enter Exhibitor Description"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Exhibitor Image</label>
            <input type="file" class="form-control" name="exhibitorimage" id="editExhibitor1Image" accept="image/*">
            <small class="form-text text-muted">Max 2MB, only JPG/PNG/GIF</small>
            <div class="mt-2">
              <img id="editExhibitor1Preview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
            </div>
          </div>
          <div class="mb-3 d-flex gap-3 align-items-center">
            <input type="radio" name="exhibitorStatus" id="editExhibitor1Active" value="active">
            <label for="editExhibitor1Active" class="mb-0">Active</label>
            <input type="radio" name="exhibitorStatus" id="editExhibitor1Inactive" value="inactive">
            <label for="editExhibitor1Inactive" class="mb-0">Inactive</label>
          </div>
          <button type="submit" class="btn btn-primary me-2">Update</button>
          <button type="button" id="cancelEditExhibitor1Btn" class="btn btn-outline-danger">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  -->

  <!-- Edit Exhibitor Form -->
  <div id="exhibitor1EditFormContainer" class="exhibitor1-form d-none mt-3">
    <div class="card tab-card">
      <div class="card-body">
        <h5 class="mb-3 text-warning">Edit Exhibitor</h5><hr/>
        <form id="editExhibitor1Form" action="<?= base_url('exhibiting/why-exhibit-exhibitor-edit') ?>" method="post" enctype="multipart/form-data">
          
          <!-- Hidden ID -->
          <input type="hidden" name="exhibitorId" value="<?= $data['id'] ?>">

          <!-- Company Information -->
          <h6 class="mb-2 text-primary">Company Information</h6>
          <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="companyName" value="<?= $data['companyName'] ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Stand</label>
            <input type="text" class="form-control" name="stand" value="<?= $data['stand'] ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"><?= $data['description'] ?></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Website</label>
            <input type="url" class="form-control" name="website" value="<?= $data['website'] ?>">
          </div>

          <!-- Contact Information -->
          <h6 class="mb-2 text-primary">Contact Information</h6>
          <div class="mb-3">
            <label class="form-label">Contact Person</label>
            <input type="text" class="form-control" name="contactPerson" value="<?= $data['contactPerson'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="<?= $data['phone'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address"><?= $data['address'] ?></textarea>
          </div>

          <!-- Products / Services -->
          <h6 class="mb-2 text-primary">Products / Services</h6>
          <div class="mb-3">
            <label class="form-label">Products / Services</label>
            <textarea class="form-control" name="products"><?= $data['products'] ?></textarea>
          </div>

          <!-- Social Media Links -->
          <h6 class="mb-2 text-primary">Social Media Links</h6>
          <div class="mb-3">
            <label class="form-label">LinkedIn</label>
            <input type="url" class="form-control" name="linkedinUrl" value="<?= $data['linkedinUrl'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Twitter</label>
            <input type="url" class="form-control" name="twitterUrl" value="<?= $data['twitterUrl'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="url" class="form-control" name="facebookUrl" value="<?= $data['facebookUrl'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">YouTube</label>
            <input type="url" class="form-control" name="youtubeUrl" value="<?= $data['youtubeUrl'] ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Instagram</label>
            <input type="url" class="form-control" name="instagramUrl" value="<?= $data['instagramUrl'] ?>">
          </div>

          <!-- Logo / Image -->
          <h6 class="mb-2 text-primary">Logo / Image</h6>
          <div class="mb-3">
            <label class="form-label">Logo / Image</label>
            <input type="file" class="form-control" name="logoImage" accept="image/*">
            <small class="form-text text-muted">Max 2MB, JPG/PNG/GIF</small>
            <div class="mt-2">
              <?php if(!empty($data['logoImage'])): ?>
                <img id="logoPreview" src="<?= base_url('uploads/' . $data['logoImage']) ?>" alt="Preview" class="img-thumbnail" style="max-height:120px;">
              <?php else: ?>
                <img id="logoPreview" src="" alt="Preview" class="img-thumbnail" style="max-height:120px; display:none;">
              <?php endif; ?>
            </div>
          </div>

          <!-- Status -->
          <div class="mb-3 d-flex gap-3 align-items-center">
            <input type="radio" name="status" id="statusActive" value="active" <?= $data['status'] == 'active' ? 'checked' : '' ?>>
            <label for="statusActive" class="mb-0">Active</label>
            <input type="radio" name="status" id="statusInactive" value="inactive" <?= $data['status'] == 'inactive' ? 'checked' : '' ?>>
            <label for="statusInactive" class="mb-0">Inactive</label>
          </div>

          <!-- Buttons -->
          <button type="submit" class="btn btn-warning me-2">Update</button>
          <button type="button" id="cancelEditExhibitor1Btn" class="btn btn-outline-danger">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
let exhibitorEditor;
document.addEventListener('DOMContentLoaded', function () {
    ClassicEditor.create(document.querySelector('#editExhibitor1Description'))
      .then(editor => { exhibitorEditor = editor; })
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
            { data: "website_url" },
            { data: null, orderable: false, render: function(data,type,row){
                return `
                <button class="btn btn-sm btn-primary editExhibitor" data-id="${row.id}"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger deleteExhibitor" data-id="${row.id}"><i class="bi bi-trash"></i></button>`;
            }}
        ],
        columnDefs:[{ targets:3, render:function(data,type,row){ return type==='display'?'<span class="ellipsis" title="'+data+'">'+data+'</span>':data; }}]
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

      $.getJSON(base_url + "exhibiting/why-exhibit-content-get-data/" + id, function(data){
          // Isi field edit form
          $("#editExhibitor1Id").val(data.id);
          $("#editExhibitor1Year").val(data.content_year);
          $("#editExhibitor1Title").val(data.title);

          if(exhibitorEditor) {
              exhibitorEditor.setData(data.body_text || '');
          }

          data.status === "active" 
              ? $("#editExhibitor1Active").prop("checked", true) 
              : $("#editExhibitor1Inactive").prop("checked", true);

          if(data.image) {
              $("#editExhibitor1Preview").attr("src", data.image).show();
          } else {
              $("#editExhibitor1Preview").hide();
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

    $("#editExhibitor1Image").on("change", function(){
        const [file] = this.files;
        if(file) $("#editExhibitor1Preview").attr("src", URL.createObjectURL(file)).show();
    });

    $('#addExhibitor1Form, #editExhibitor1Form').on('submit', function(e){
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
                    url: base_url+'exhibiting/why-exhibit-exhibitor-delete/'+id,
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
});
</script>
