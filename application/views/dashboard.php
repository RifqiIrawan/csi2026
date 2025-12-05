  <section id="event_date" class="portfolio section" style="margin-top: 130px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mt-3" style="font-family: Montserrat, sans-serif;">
            <h5><b><?php echo strtoupper($data_event->name); ?></b></h5>
          </div>
          <div class="col-lg-8 mt-3" style="text-align: right;">
          <button type="button" class="btn btn-warning mb-2" style="font-weight: 600;" onclick="registrasi('<?= $start_event;?>','<?= $end_event;?>','<?= date('Y-m-d');?>','<?= $data_event->link_event;?>');">VISITOR REGISTRATION</button>
          <!-- <a href="<?php echo $data_event->link_event?>" target="blank_" class="btn btn-warning" style="font-weight: 600;">VISITOR REGISTRATION</a> -->
          <a href="<?php echo base_url('Home/Url_Book_Stand');?>" class="btn btn-warning mb-2" style="font-weight: 600;">BOOK A STAND</a>
          <a href="<?php echo base_url('Home/download_floor/'.$data_event->floor_file);?>" target="blank_" class="btn btn-warning mb-2" style="font-weight: 600;">FLOOR PLAN</a>
          </div>
        </div>
      </div>
  </section>   
  <section id="banner_swiper">
    <div class="swiper heroSwiper">
      <div class="swiper-wrapper" id="dynamic-slides">
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

      <div class="swiper-pagination"></div>
    </div>
  </section>
  
  <section id="carousel" class="faq section">
    <div class="container section-title center">
      <h3 style="font-size:24px;font-weight:800"><b><?= strtoupper($data_carousel[0]->header_title)?></b></h3>
    </div>
    <div class="container">
      <div class="row justify-content-left">
        <div class="col-lg-12">
          <div class="container mt-3 mb-4">
            <div id="media-partner-carousel" class="owl-carousel owl-carousel1 image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-autoplay="5000" data-items-sm="8" data-items-md="6" data-items-lg="6" data-items-xl="4">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <?php 
                    foreach($data_carousel as $row1){ 
                      $file1 = $row1->folder_name."".$row1->file_upload;
                      $img1 = "".$file1."";
                  ?> 
                    
                  <div class="owl-item">
                    <div class="oc-item" style="text-align:center">
                      <a href="<?php echo $row1->url ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?php echo base_url($img1); ?>" class="day rowsel lazyload" title="<?php echo ucwords($row1->name); ?>" alt="<?php echo ucwords($row1->name);?>">
                      </a>
                      <!-- <h7><?php echo $row1->nam5?></h7> -->
                    </div>
                  </div>                          
                  <?php } ?>
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                  <i class="icon-angle-left"></i>
                </button>
              <button type="button" role="presentation" class="owl-next">
                <i class="icon-angle-right"></i>
              </button></div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="event_date" class="portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p><h3><b><?php echo ucwords($data_profile->nick_name)?></b></h3></p>
          <p class="mb-4">
            <?php echo $data_profile->vision?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="product_sector" class="portfolio section">
    <div class="container section-title center" >
      <h3 style="font-size:24px;font-weight:800"><b><?= strtoupper($data_product[0]->header_title)?></b></h3>
    </div>
    <div class="container ">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">           
        <div class="row gy-4 isotope-container mt-2" data-aos-delay="200" style="position: relative; ">
          <?php 
            foreach($data_product as $row2){ 
              $file2 = $row2->folder_name."".$row2->file_upload;
              $img2 = "".$file2."";
          ?>     
          <div class="col-lg-2 col-md-3 portfolio-item isotope-item filter-app" style="position: absolute; left: 0px; top: 0px;min-height: 260px;gap: 20px">
            <div class="portfolio-content h-00">                                
              <img data-src="<?php echo base_url($img2); ?>" class="img-fluid img-product lazyload" alt="">
              <div class="portfolio-info">
                <a href="<?php echo base_url($img2); ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link" style="color:white"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
            <p class="text-center mt-2"><?php echo ucwords($row2->name); ?></p>
          </div>                             
          <?php } ?> 
        </div>
      </div>
    </div>
  </section>

  <section id="attandance1" class="stats section">
    <div class="container aos-init aos-animate"  data-aos-delay="100">
      <div class="row">
      <?php foreach($data_event_value as $row3){
        $simbol = str_replace('"',"'",$row3->simbol);
        if($row3->category == 1){
      ?>
        <div class="col-lg-3 col-md-6">            
          <div class="card">
            <div class="card-body border-gradient">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0" style="color:#006400"><b><?php echo number_format((int)$row3->value,0,",",".");?></b></h3>
                    <p class="text-success ml-2 mb-0" style="margin-left:3px;font-size:30px;color:linear-gradient(to bottom, #5B9D0A, #2FAE2F); font-weight:700"><b><?php echo $simbol;?></b></p>
                  </div>
                </div>
                <!-- <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div> -->
              </div>
              <h6 class="text-muted font-weight-normal"><span><i class="<?php echo $row3->icon;?>" aria-hidden="true" style="color: #E7AC4A"></i> &nbsp;<span><?php echo $row3->title;?></span></h6>
            </div>
          </div>
        </div>
      <?php }} ?>            
      </div>
    </div>
  </section>

  <section id="attandance2" class="stats section">
    <div class="container aos-init aos-animate"  data-aos-delay="100" style="background: #E7AC4A !important;">
      <div class="row">
      <?php foreach($data_event_value as $row3){
        $simbol = str_replace('"',"'",$row3->simbol);
        if($row3->category == 2){
      ?>
        <div class="col-lg-3 col-md-6">
          <div class="row">
            <div class="col-lg-3">
              <i class="<?php echo $row3->icon;?>" aria-hidden="true" style="margin-top: 30px;position: absolute;font-size: 50px;color:white;margin-left:20px"></i>
            </div>
            <div class="col-lg-9">
              <div class="stats-item text-center w-100 h-100">
                <span><?php echo number_format((int)$row3->value,0,",",".")."".$simbol;?></span> 
                <p> <?php echo $row3->title;?> </p>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?>         
      </div>
    </div>
  </section>

  <section id="highlights" class="faq section mb-4">
    <div class="container section-title center" >
      <h3 style="font-size:24px;font-weight:800"><b>SHOW HIGHLIGHTS</b></b></h3>
    </div>
    <div class="container">
      <div class="row justify-content-left">
        <div class="col-lg-12">
          <div class="container mt-3">
            <div class="row mt-3">
            <?php foreach($data_video as $row4){
              $url_now = $row4->url;
              $yt_url = explode("=",$url_now);
            ?>   
                
            <div class="col-lg-4 mb-3">
              <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                <iframe 
                  src="https://www.youtube.com/embed/<?php echo $yt_url[1]?>" 
                  title="YouTube video player" 
                  frameborder="0" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                  allowfullscreen
                  style="position: absolute; top:0; left:0; width:100%; height:100%;">
                </iframe>
              </div>
            </div>    
            <?php } ?>   
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cooperation" class="faq section">
    <div class="container section-title center" >
      <h3 style="font-size:24px;font-weight:800"><b>IN COOPERATION</b></h3>
    </div>
    <div class="container mt-3">
      <div class="row justify-content-left">
        <div class="col-lg-12">
          <div class="container mt-3">
            <div id="media-partner-carousel" class="owl-carousel owl-carousel1 image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-autoplay="5000" data-items-sm="8" data-items-md="6" data-items-lg="6" data-items-xl="4">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <?php 
                    foreach($data_coperation as $row5){ 
                      $file5 = $row5->folder_name."".$row5->file_upload;
                      $img5 = "".$file5."";
                  ?> 
                    
                  <div class="owl-item">
                    <div class="oc-item" style="text-align:center">
                      <a href="<?php echo $row5->url ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?php echo base_url($img5); ?>" class="day rowsel lazyload" title="<?php echo ucwords($row5->name); ?>" alt="<?php echo ucwords($row5->name);?>">
                      </a>
                      <!-- <h7><?php echo $row4->nam5?></h7> -->
                    </div>
                  </div>                          
                  <?php } ?>
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                  <i class="icon-angle-left"></i>
                </button>
              <button type="button" role="presentation" class="owl-next">
                <i class="icon-angle-right"></i>
              </button></div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sponsors" class="faq section">
    <div class="container section-title center" >
      <h3 style="font-size:24px;font-weight:800"><b>SPONSORS</b></h3>
    </div>
    <div class="container mt-3">
      <div class="row justify-content-left">
        <div class="col-lg-12">
          <div class="container mt-3">
            <div id="media-partner-carousel" class="owl-carousel owl-carousel1 image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-autoplay="5000" data-items-sm="8" data-items-md="6" data-items-lg="6" data-items-xl="4">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <?php 
                    foreach($data_sponsors as $row7){ 
                      $file7 = $row7->folder_name."".$row7->file_name;
                      $img7 = "".$file7."";
                  ?> 
                    
                  <div class="owl-item">
                    <div class="oc-item" style="text-align:center">
                      <a href="<?php echo $row7->url ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?php echo base_url($img7); ?>" class="day rowsel lazyload" title="<?php echo ucwords($row7->name); ?>" alt="<?php echo ucwords($row7->name);?>">
                      </a>
                    </div>
                  </div>                          
                  <?php } ?>
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                  <i class="icon-angle-left"></i>
                </button>
              <button type="button" role="presentation" class="owl-next">
                <i class="icon-angle-right"></i>
              </button></div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="support" class="faq section">
    <div class="container section-title center" >
      <h3 style="font-size:24px;font-weight:800"><b>SUPPORTED BY</b></h3>
    </div>
    <div class="container mt-3">
      <div class="row justify-content-left">
        <div class="col-lg-12">
          <div class="container mt-3">
            <div id="media-partner-carousel" class="owl-carousel owl-carousel1 image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-autoplay="5000" data-items-sm="8" data-items-md="6" data-items-lg="6" data-items-xl="4">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <?php 
                    foreach($data_support as $row8){ 
                      $file8 = $row8->folder_name."".$row8->file_name;
                      $img8 = "".$file8."";
                  ?> 
                    
                  <div class="owl-item">
                    <div class="oc-item" style="text-align:center">
                      <a href="<?php echo $row8->url ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?php echo base_url($img8); ?>" class="day rowsel lazyload" title="<?php echo ucwords($row8->name); ?>" alt="<?php echo ucwords($row8->name);?>">
                      </a>
                    </div>
                  </div>                          
                  <?php } ?>
                </div>
              </div>
              <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                  <i class="icon-angle-left"></i>
                </button>
              <button type="button" role="presentation" class="owl-next">
                <i class="icon-angle-right"></i>
              </button></div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  