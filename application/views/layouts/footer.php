  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 footer-about">
          <img width="215" height="50" src="<?php echo base_url($folder."".$logo);?>" class="attachment-full size-full" alt="">
          <div class="social-links d-flex mt-3">
            <?php 
              foreach($data_sosmed as $row_sosmed){ 
            ?> 
            <a href="<?php echo $row_sosmed->url ?>" title="<?php echo ucwords($row_sosmed->nama)?>"><i class="<?php echo "bi bi-".$row_sosmed->icon;?>"></i></a>
            <?php } ?>
          </div>
        </div>
        
        <div class="col-lg-1 col-md-3 footer-links">
        </div>
        <div class="col-lg-3 col-md-3 footer-links">
          <p>
            <strong  class="text-left">
              <?php echo $company_name?>
            </strong><br>
            <?php echo $address?>
          </p>
        </div>

        <div class="col-lg-1 col-md-3 footer-links">
        </div>

        <div class="col-lg-3 footer-links">
          <p>Phone: <a href="tel:"<?php echo $phone?>><?php echo $phone?></a><br>
            Fax: <a href="tel:"<?php echo $fax?>><?php echo $fax?></a><br>
            email : <a href="mailto:"<?php echo $email?>><?php echo $email?></a><br>
            Website: <a href="<?php echo $website?>"><?php echo $website?></a>
          </p>
        </div>
      </div><br>
    </div>

    <div class="container copyright text-center mt-4">
    <p>Copyright © <?php echo date('Y');?> <?php echo $company_name?>. All Right Reserved.</p>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- <div id="preloader"></div> -->
</body>

<script src="<?php echo base_url();?>Website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?php echo base_url();?>Website/assets/vendor/php-email-form/validate.js"></script> -->
<script src="<?php echo base_url();?>Website/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url();?>Website/assets/js/main.js"></script>

<script src="<?php echo base_url();?>Website/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Website/assets/js/jquery.cookie.min.js"></script>