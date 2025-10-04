<!-- Bootstrap 5 CSS -->

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> -->

<style>
/* TAB STYLING */
.main-panel{
    padding-top: 10px !important
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

</style>

<div class="content-wrapper">
  <div class="container mt-4">

    <!-- NAV TABS -->
    <ul class="nav custom-tabs" id="formTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-form1" data-bs-toggle="tab" href="#content-form1" role="tab">
          <i class="fa fa-list"></i> Form 1
        </a>
        <a class="nav-link" id="tab-form2" data-bs-toggle="tab" href="#content-form2" role="tab">
          <i class="fa fa-tags"></i> Form 2
        </a>
        <a class="nav-link" id="tab-form3" data-bs-toggle="tab" href="#content-form3" role="tab">
          <i class="fa fa-ellipsis-h"></i> Form 3
        </a>
      </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content mt-3" id="formTabsContent">

      <!-- TAB 1 -->
      <div class="tab-pane fade show active" id="content-form1" role="tabpanel">
        <div class="card tab-card">
          <div class="card-body">
            <h5 class="mb-3 text-primary">Form 1 - Menu</h5>
            <form>
              <div class="mb-3">
                <label class="form-label">Menu Name</label>
                <input type="text" class="form-control" placeholder="Entry Menu Name" required style="text-transform:capitalize">
              </div>

              <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status1" id="statusActive" value="A" checked>
                  <label class="form-check-label" for="statusActive">Active</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status1" id="statusPassive" value="P">
                  <label class="form-check-label" for="statusPassive">Passive</label>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="6" name="description"></textarea>
              </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-outline-danger">Cancel</button>
            </form>
          </div>
        </div>
      </div>

      <!-- TAB 2 -->
      <div class="tab-pane fade" id="content-form2" role="tabpanel">
        <div class="card tab-card">
          <div class="card-body">
            <h5 class="mb-3 text-primary">Form 2 - Category</h5>
            <form>
              <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" placeholder="Entry Category Name" required>
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

      <!-- TAB 3 -->
      <div class="tab-pane fade" id="content-form3" role="tabpanel">
        <div class="card tab-card">
          <div class="card-body">
            <h5 class="mb-3 text-primary">Form 3 - Others</h5>
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

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
