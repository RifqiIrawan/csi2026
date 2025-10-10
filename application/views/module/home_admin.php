<style type="text/css">
  .icn{
    margin-left: -7px;
    color:black;
  }
  .bw{
    width: 25px;
  }
  .btn-edit-icn{
    background: #00d25b;
  }

  .btn-hapus-icn{
    background:#F70D1A;
    margin-left:0px;
  }

  .edit-btn{        
    min-height: 35px;
  }
  .btn-admin, .btn-group-lg > .btn, .fc .btn-group-lg > 
  button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload
  , .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled
  , .wizard > .actions .btn-group-lg > a {      
    padding: 0.65rem 0.65rem;
    background: #00d25b;
  }

  .modal-body img {
    object-fit: contain;
  }
  .btn{
    line-height: 0px;
  }
</style>

<div class="content-wrapper">
  <!-- <div class="page-header"> 
    <h4 class="page-title"><b>M</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
      <li class="breadcrumb-item active" aria-current="page">Master Unit</li>
    </ol>
    </nav>
  </div> -->
  <div class="row ">
      <div class="col-md-12 grid-margin stretch-card">
          <div class="card" style="border: 1px solid transparent; margin-top:-35px;">            
              <div class="card-body">
                <p class="text-right">
                    <button type="button" class="btn btn-edit-icn bw" title="Edit Text"  data-toggle="modal" data-target="#mdl">
                        <i class="mdi mdi-table-edit icn"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-hapus-icn bw"  title="Delete" >
                        <i class="mdi mdi-delete-sweep icn"></i>
                    </button> -->
                </p>
                <p>
                    <?php
                        $hasil = $this->db->query("SELECT * from content
                                                        order by id asc"); 
                        $row = $hasil->row();
                        echo $row->freetext
                    ?>                
                </p> 
              </div>
          </div>
      </div>
  </div>           
</div>

<div class="modal fade" id="mdl">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Form/ubah_content" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Edit Text</h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>New Text</label>
            <textarea class="form-control" name="keterangan" rows="12"></textarea>
          </div>      
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary edit-btn" value="Submit" name="Tambah"> 
          <input type="button" class="btn btn-danger edit-btn" id="close" value="Cancel" name="close">        
        </div>
      </form>
    </div>
  </div>
</div>