
</main>
<style>
  /* ================================
   FOOTER SECTION
   ================================ */

/* Footer utama */
.footer {
  color: black;
  font-size: 15px;
  position: relative;
}

/* Jika ingin menambah efek overlay gelap transparan di atas gambar */
.footer.dark-background::before {
  content: "";
  inset: 0;
  background: rgba(0, 0, 0, 0.6); /* Overlay hitam transparan */
  z-index: 0;
}

/* Supaya isi footer tetap di atas overlay */
.footer.dark-background > * {
  position: relative;
  z-index: 1;
}

/* Tambahan class dark-background untuk kontrol umum */
.dark-background {
  background-color: transparent; /* biar tetap pakai gambar footer */
  color: #fff; /* teks jadi putih agar kontras dengan gambar */
}

/* Bagian atas footer (pembatas dari konten utama) */
.footer .footer-top {
  border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

/* Link di dalam footer */
.footer .footer-links {
  margin-bottom: 50px;
  text-align: left;
}

.footer .footer-links a {
  color: #ddd;
  text-decoration: none;
}

.footer .footer-links a:hover {
  color: #fff;
}

/* Layout flex untuk kolom footer */
.footer_top {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

/* Widget/konten dalam footer */
.footer_widgets {
  flex: 0 0 auto;
  margin: 80px auto;
}

/* Bagian about di footer */
.footer-about {
  text-align: center;
  color: #fff;
}

/* Social media icons */
.social-links {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.social-links a {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
  transition: 0.3s;
}

.social-links a:hover {
  background-color: rgba(255, 255, 255, 0.4);
}

/* Copyright section */
.footer .copyright p {
  margin: 0px 10px;
  color: #ccc;
  text-align: center;
  font-size: 14px;
}

/* Bagian bawah background opsional */
.secondary-bg {
  background-color: #111 !important;
  color: #fff;
  position: relative;
}

/* Responsif untuk layar kecil */
@media (max-width: 600px) {
  .footer .footer-links {
    margin-bottom: 0px;
    text-align: left;
  }

  .footer .footer-about {
    margin-bottom: 0px;
    text-align: left;
  }

  .footer .social-links {
    position: relative;
    left: 0%;
  }
}


a {
    /* color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1)); */
    text-decoration: none;
}

</style>

<!-- <footer class="footer dark-background mt-3"
  style="background-image: url('<?php echo base_url('Website/assets/img/ftr.jpg'); ?>');      
         ">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">ORGANISED BY</p>
          <img width="230" height="200px" style="border-radius: 50%;"  data-src="<?php echo base_url("./Website/assets/img/wrk.png");?>" class="attachment-full size-full lazyload" alt="">
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">MEMBER OF</p>
          <img width="230" height="200px" style="border-radius: 50%;" data-src="<?php echo base_url("./Website/assets/img/ieca2.png");?>" class="attachment-full size-full lazyload" alt="">
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">QUICK LINKS</p>
          <?php 
            foreach($data_qlink as $row_qlink){ 
              if($row_qlink->flag == 1){
                $link = "Exhibiting";
              }else{
                $link = $row_qlink->url;
              }
          ?> 
            <p style="">
              <a style="color:white;font-weight:600;font-size:16px" href="<?php echo $link ?>" title="<?php echo ucwords($row_qlink->title)?>"><?php echo ucwords($row_qlink->title)?></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">CONTACT US</p>
          <?php 
            foreach($data_contact as $row_contact){ 
          ?> 
            <p style="font-size: 16px; color:#AEFF4BFF; font-weight:600"><?php echo ucwords($row_contact->name)?></p>
            <p style="font-size: 16px; color:white; font-weight:600;margin-top:-20px"><?php echo ucwords($row_contact->position)?></p>
            <p style="font-size: 20px; color:#AEFF4BFF;font-weight:600;margin-top:-20px">
              <a style="margin-right: 10px !important; margin-top: 5px !important;color:#AEFF4BFF" href="https://wa.me/<?php echo $row_contact->hp?>" target="_blank" rel="noopener">                                   
                <i class="bi bi-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="mailto:<?php echo $row_contact->mail?>" style="margin-top: 5px !important;color:#AEFF4BFF" target="_blank" rel="noopener">
                <i class="bi bi-envelope-paper" aria-hidden="true"></i>
              </a>
            </p>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">          
          <div style="color:#AEFF4BFF;font-size:24px;"><b>Connect <span style="color:white;">With</span> Us</b></div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
        <div class="col-lg-4 text-center">
          <div class="social-links d-flex mb-2 mt-1">
            <?php 
              foreach($data_sosmed as $row_sosmed){ 
            ?> 
            <a href="<?php echo $row_sosmed->url ?>" title="<?php echo ucwords($row_sosmed->name)?>"><i class="<?php echo "bi bi-".$row_sosmed->icon;?>"></i></a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">          
          <div class="text-center" style="color:white;"><b>Note: Admision is free for trade and industry professionals. Visotors under age 18 will not be permitted.</b></div>
        </div>
      </div>

      <div class="row">
      </div>
    </div>

    <div class="container copyright text-center mt-2">      
      <div><b>©Copyright <?php echo ucwords($data_profile->company_name)?> <?php echo date('Y');?></b></div>
    </div>
</footer> -->

<footer id="footer" class="footer dark-background mt-3" style="background-image: url('<?php echo base_url('Website/assets/img/ftr.jpg'); ?>');">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">ORGANISED BY</p>
          <img width="175px" height="160px" style="border-radius: 50%;" data-src="<?php echo base_url($data_organizer[0]->folder_name.$data_organizer[0]->file_upload);?>" class="attachment-full size-full lazyload" alt="">
          <!-- <div class="social-links d-flex mt-3">
            <?php 
              foreach($data_sosmed as $row_sosmed){ 
            ?> 
            <a href="<?php echo $row_sosmed->url ?>" title="<?php echo ucwords($row_sosmed->nama)?>"><i class="<?php echo "bi bi-".$row_sosmed->icon;?>"></i></a>
            <?php } ?>
          </div> -->
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">MEMBER OF</p>
          <img width="175px" height="160px" style="border-radius: 50%;" data-src="<?php echo base_url($data_member[0]->folder_name.$data_member[0]->file_upload);?>" class="attachment-full size-full lazyload" alt="">
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">QUICK LINKS</p>
          <?php 
            foreach($data_qlink as $row_qlink){ 
              if($row_qlink->flag == 1){
                $link = "Exhibiting";
              }else{
                $link = $row_qlink->url;
              }
          ?> 
            <p style="">
              <a style="color:white;font-weight:600;font-size:16px" href="<?php echo $link ?>" title="<?php echo ucwords($row_qlink->title)?>"><?php echo ucwords($row_qlink->title)?></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3 footer-about mb-1">
          <p style="font-size: 24px; color:white; font-weight:800">CONTACT US</p>
          <?php 
            foreach($data_contact as $row_contact){ 
          ?> 
            <p style="font-size: 16px; color:#AEFF4BFF; font-weight:600"><?php echo ucwords($row_contact->name)?></p>
            <p style="font-size: 16px; color:white; font-weight:600;margin-top:-10px"><?php echo ucwords($row_contact->position)?></p>
            <p style="font-size: 20px; color:#AEFF4BFF;font-weight:600;margin-top:-10px;margin-bottom: 15px;">
              <a style="margin-right: 10px !important; margin-top: 5px !important;color:#AEFF4BFF" href="https://wa.me/<?php echo $row_contact->hp?>" target="_blank" rel="noopener">                                   
                <i class="bi bi-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="mailto:<?php echo $row_contact->mail?>" style="margin-top: 5px !important;color:#AEFF4BFF" target="_blank" rel="noopener">
                <i class="bi bi-envelope-paper" aria-hidden="true"></i>
              </a>
            </p>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">          
          <div style="color:#AEFF4BFF;font-size:24px;"><b>Connect <span style="color:white;">With</span> Us</b></div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
        <div class="col-lg-4 text-center">
          <div class="social-links d-flex mb-2 mt-1">
            <?php 
              foreach($data_sosmed as $row_sosmed){ 
            ?> 
            <a href="<?php echo $row_sosmed->url ?>" title="<?php echo ucwords($row_sosmed->name)?>"><i class="<?php echo "bi bi-".$row_sosmed->icon;?>"></i></a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">          
          <div class="text-center" style="color:white;"><b>Note: Admision is free for trade and industry professionals. Visitors under age 18 will not be permitted.</b></div>
        </div>
      </div>

      <div class="row">
      </div>
    </div>

    <div class="container copyright text-center mt-2">      
      <div><b>©Copyright <?php echo ucwords($data_profile->company_name)?> <?php echo date('Y');?></b></div>
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
<script type="text/javascript">  
  $(document).ready(function() {      
    // $.getJSON('https://ipinfo.io/json', function(data) {
    //   var ip = JSON.stringify(data["ip"], null, 2);
    //   var city = JSON.stringify(data["city"], null, 2);
    //   var country = JSON.stringify(data["country"], null, 2);
    //   var loc = JSON.stringify(data["loc"], null, 2);
    //   var org = JSON.stringify(data["org"], null, 2);
    //   var timezone = JSON.stringify(data["timezone"], null, 2);
    //   //console.log(JSON.stringify(data, null, 2));
    //   //console.log(ip+" - "+city+" - "+country+" - "+loc+" - "+org+" - "+timezone);

    //   $.ajax({
    //       url: "<?php echo base_url()?>Login/save_ip_visitor",
    //       type: 'post',
    //       data: {ip : ip, city : city, country : country, loc : loc, org : org, timezone : timezone},
    //       success: function (data) {
    //         //console.log(data);      
    //       }
    //   });  
    // });
    

    
  });  
</script>

<script src="<?php echo base_url();?>assets/coatingshow/plugins.min.js"></script>
<script src="<?php echo base_url();?>assets/coatingshow/functions.js"></script>


<script src="<?php echo base_url();?>assets/coatingshow/flickity.pkgd.js"></script>
<script src="<?php echo base_url();?>assets/coatingshow/bs-filestyle.js"></script>
<script type="<?php echo base_url();?>assets/coatingshow/owl.carousel.min.js"></script>
</html>