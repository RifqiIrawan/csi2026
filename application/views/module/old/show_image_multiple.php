
<?php 
    //echo "test: ".$folder;
    $dirname = $folder;
    $images = glob($dirname."*.*");
    
    for ($i=0; $i<count($images); $i++){
        $image_name = $images[$i];
?>   
    <div class="row" style="text-align:center;margin:15px;">
        <div class="col-lg-12">
            <img src="<?php echo base_url($image_name); ?>" alt="" style="height:500px;width:800px">
        </div>
    </div>
<?php
    }
?>