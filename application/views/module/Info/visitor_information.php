<?php 
  if($this->session->flashdata('save')){
    echo '<script type="text/javascript">
            $(document).ready(function(){
              swal({
                  title: "Success",
                  text: "Save data successfully",
                  icon: "success",
                  timer: 3000,
                  button: true
              }).then(function() {
                window.location = "Visitor Information";                  
              });                   
            });
          </script>';
  }
  if($this->session->flashdata('save2')){
    echo    '<script type="text/javascript">
                $(document).ready(function(){
                    swal({
                      title: "Failed",
                      text: "Save data not successfully",
                      icon: "error",
                      timer: 3000,
                      button: true
                    }).then(function() {
                      window.location = "Visitor Information";
                    });
                });
            </script>';
    }

    if($this->session->flashdata('update')){
        echo    '<script type="text/javascript">
                    $(document).ready(function(){
                      swal({
                        title: "Success",
                        text: "Update data successfully",
                        icon: "info",
                        timer: 3000,
                        button: true
                      }).then(function() {
                        window.location = "Visitor Information";
                      });
                    });
                </script>';
      }
    if($this->session->flashdata('update2')){
      echo    '<script type="text/javascript">
                  $(document).ready(function(){
                    swal({
                        title: "Failed",
                        text: "Update data not successfully",
                        icon: "error",
                        timer: 3000,
                        button: true
                    }).then(function() {
                      window.location = "Visitor Information";
                    });
                  });
                </script>';
    }
?>
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

  img{
    margin: 10px;
  }
</style>

<script type="text/javascript">  
  $(document).ready(function() {
    $('#close').on('click', function() {    
      window.location.reload()   
    });
    $('#close_edit').on('click', function() {   
      window.location.reload()
    });  
    $('#close_admin').on('click', function() {   
      window.location.reload()
    });  
  });

  function upd(code,name,description,status){
    $("#code").val(code);
    $("#name").val(name);
    var desc = description;
    CKEDITOR.instances.description2.setData(desc);

    if(status.length === 0){
      var status = "P";
    }else{      
      var status='#'+status;
    }
    $(status).prop("checked", true);
    $('#mdl_edit').modal('show');    
  }
  
  function del(code,folder){
    var code = code;
    if (confirm("Do you want delete this data?")) {
      $.ajax({
        url: "<?php echo base_url()?>Info/Visitor Information/del",
        type: 'post',
        data: {'code' : code,folder : folder},
        success: function (data) {
          //console.log(data);
          if(data === "OK"){
            swal({
                title: "Delete Success",
                text: "Delete data successfully",
                icon: "success",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "Visitor Information";
            });
          }else{
            swal({
                title: "Delete Failed",
                text: "Delete data not successfully",
                icon: "error",
                timer: 3000,
                button: true
            }).then(function() {
              window.location = "Visitor Information";
            });
          }
        },
        error: function () {
          alert('Data tidak berhasil dihapus');
        }
      });
    }else{
      alert(code + " tidak berhasil dihapus");
    }
  }

  function add_input(){
    var text = "<tr>"
                    +"<td>"
                        +"<hr><input type=\"text\" class=\"form-control\" name=\"logo[]\" placeholder=\"Entry Text Icon/Logo\" style=\"margin-bottom:10px;\" required>"
                        +"<input type=\"text\" class=\"form-control\" name=\"name[]\" placeholder=\"Entry Name/Description\" style=\"text-transform:capitalize\" required>"
                    +"</td>"
                +"</tr>";
    $("#add_input").append(text);
  }

  function add_input2(){
    var text = "<tr><td></td><td><input type=\"file\" class=\"form-control\" name=\"image[]\"></td></tr>";
    $("#add_input2").append(text);
  }  

  function show_list(code){
    $.ajax({
      url: "<?php echo base_url()?>attention/show_list",
      type: 'post',
      data: {'code' : code},
      success: function (data) {
        console.log(data);
        var jsn = JSON.parse(data);
        var text = "";
        var x = 1;
        for(i=0;i<jsn.length;i++){          
          var text = "<p style=\"vertical-align: top;white-space: pre-wrap;\">"+x+". "+capitalize(jsn[i].name)+"</p>";
          $("#get_list").append(text);
          x++;
        }
        $("#mdl_show_list").modal('show');          
      }
    });
  }

  function show_image(folder){
    var pic = '<?php echo base_url()?>' + folder;
    $.ajax({
      url: "<?php echo base_url()?>attention/loc_folder",
      type: 'post',
      data: {'folder' : folder},
      success: function (data) {
        var jsn = JSON.parse(data);
        for(i=0;i<jsn.length;i++){          
          console.log(pic+""+jsn[i].image);
          var dir = pic+""+jsn[i].image;
          var img = $('<img />', {src : dir}).css("width","-webkit-fill-available","height","150px","text-align","center");
          img.appendTo('#get_image');
        }
        $("#mdl_show_image").modal('show');          
      }
    });    
  }

  function capitalize(str) {
    strVal = '';
    str = str.split(' ');
    for (var chr = 0; chr < str.length; chr++) {
        strVal += str[chr].substring(0, 1).toUpperCase() + str[chr].substring(1, str[chr].length) + ' '
    }
    return strVal
  }
</script>
<style>
    .btn-float {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #28a745;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        cursor: pointer;
        font-size: 20px;
        line-height: 30px;
    }
</style>

<div class="content-wrapper">
  <div class="page-header">
    <h4 class="page-title"><b>Visitor Information</b></h4>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><b>Form</b></li>
        <li class="breadcrumb-item active" aria-current="page">Visitor Information</li>
    </ol>
    </nav>
  </div>
    <div class="row ">
      <div class="col-lg-12">
        <div class="car">
            <div class="card-body btop">                    
              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mdl" >
                <i class="mdi mdi-account-plus"></i> Add Data &nbsp;
              </button>
            </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">No</th>
                    <th>Event</th>
                    <th>Title</th>
                    <th>Visitor Information List</th>
                    <th>Visitor Information Image</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach ($data_visitor_information as $row) {
                      switch ($row->status) {
                        case 'A':
                          $stat="Active";
                        break; 
                        case 'P':
                          $stat="Passive";
                        break; 
                      }//end switch       
                      
                      // <button type=\"button\" class=\"btn btn-edit-icn bw\"  title=\"Update\" onclick=\"upd('".$row->id."','".$row->name."'
                      // ,'".preg_replace('/\r\n|\r|\n/', '',$row->folder)."','".$row->status."');\">
                      //     <i class=\"mdi mdi-table-edit icn\"></i>
                      // </button>        
                      echo "<tr>";
                        echo "<td align=\"center\">".$no."</td>";
                        echo "<td align=\"center\">".ucwords(strtolower($row->name_event))."</td>";
                        echo "<td align=\"center\">".ucwords(strtolower($row->name))."</td>";
                        echo "<td align=\"center\"><i class=\"mdi mdi-format-list-bulleted\" style=\"cursor:pointer\" onclick=\"show_list('".$row->code."')\"></i></td>";    
                        echo "<td align=\"center\"><i class=\"mdi mdi-image-filter\" style=\"cursor:pointer\" onclick=\"show_image('".$row->folder."')\"></i></td>";    
                        echo "<td align=\"center\">
                                <button type=\"button\" class=\"btn btn-hapus-icn bw\"  title=\"Delete\" onclick=\"del('".$row->code."','".$row->folder."')\">
                                    <i class=\"mdi mdi-delete-sweep icn\"></i>
                                </button>
                              </td>";       
                      echo "</tr>";                     
                      $no++;
                    }  
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>           
</div>

<div class="modal fade" id="mdl">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Info/Visitor Information/add" id="frm_group" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title">Add Data Visitor Information </h4>
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Title</label>
            <input type="hidden" class="form-control" name="code" id="code">
            <input type="text" class="form-control" name="title" id="title" placeholder="Title Visitor Information" style="text-transform:capitalize">
          </div>
          <!-- <div class="form-group">
            <label class="form-label">Event</label>
            <select class="form-control" name="event">
              <option value="">- - Choose Event - - </option>
              <?php 
                foreach($data_event as $row){
                  echo "<option value=\"".$row->code_event."\">".ucwords($row->name_event)."</option>";
                }
              ?>
            </select>
          </div> -->
          <div class="form-group">
            <label class="form-label">Visiting <i class="mdi mdi-plus-box" onclick="add_input()"  style="position: absolute;margin-left: 10px;font-size: 20px;margin-top: -8px;color: darkgreen"></i></label>
            <table width="100%">
              <tbody id="add_input">
              <tr>                
                <td>                    
                  <input type="text" class="form-control" name="ktg[]" style="margin-bottom:10px;" required>
                  <input type="text" class="form-control" name="logo[]" placeholder="Entry Text Icon/Logo" style="margin-bottom:10px;" required>
                  <input type="text" class="form-control" name="name[]" placeholder="Entry Name/Description" style="text-transform:capitalize" required>
                </td>                  
              </tr>
              </tbody>
            </table>
          </div>
          <div class="form-group">
            <label class="form-label">Exhibition Hours <i class="mdi mdi-plus-box" onclick="add_input2()" style="position: absolute;margin-left: 10px;font-size: 20px;margin-top: -8px;color: darkgreen"></i></label>
            <table width="100%">
              <tbody id="add_input2">
              <tr>
                <td>                  
                    <input type="text" class="form-control" name="time[]" placeholder="Entry Exhibition Times/Hours" style="margin-bottom:10px;" required>
                    <input type="text" class="form-control" name="date[]" placeholder="Entry Exhibition Date" style="text-transform:capitalize" required>
                </td>                  
              </tr>
              </tbody>
            </table>
          </div> 
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="descriptions1" rows="9"></textarea>
          </div> 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary edit-btn"><i class="mdi mdi-content-save-settings"></i> Submit </button>
          <button type="button" class="btn btn-danger edit-btn" id="close"><i class="mdi mdi-close"></i> Cancel </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="mdl_edit">
  <div class="modal-dialog ">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url(); ?>Info/Visitor Information/upd" id="frm_group_edit">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Visitor Information</h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class="form-label">Visitor Information Name</label>
            <input type="hidden" class="form-control" name="code" id="code">
            <input type="text" class="form-control" name="name" id="name" style="text-transform:capitalize">
          </div>
          <div class="form-group">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description2" rows="6"></textarea>
          </div>
          <div class="form-group">
            <label class="form-label">Status</label>
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="A" id="A">
                <span class="custom-control-label">Active</span>
              </label>
              <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="status" value="P" id="P">
                <span class="custom-control-label">Passive</span>
              </label>             
            </div>
          </div>  
        </div>
        <div class="modal-footer">
         
        <button type="submit" class="btn btn-primary edit-btn"><i class="mdi mdi-content-save-settings"></i> Sumbit </button>
          <button type="button" class="btn btn-danger edit-btn" id="close_edit"><i class="mdi mdi-close"></i> Cancel </button>        
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mdl_show_image">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Visitor Information Image</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 text-center" id="get_image">
          </div>
        </div>   
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdl_show_list">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Visitor Information List</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 ml-2" id="get_list">
          </div>
        </div>   
      </div>
    </div>
  </div>
</div> -->
