</main>

  <footer id="footer" class="footer dark-background mt-3">
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
            <p class="down" style="font-size: 16px; color:#AEFF4BFF; font-weight:600"><?php echo ucwords($row_contact->name)?></p>
            <p class="down" style="font-size: 16px; color:white; font-weight:600;margin-top:-20px"><?php echo ucwords($row_contact->position)?></p>
            <p class="down" style="font-size: 20px; color:#AEFF4BFF;font-weight:600;margin-top:-20px">
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

  function registrasi(start,end,now,url){
    // alert(start+' - '+end+' - '+now+' - '+url);
    if(now < start || now > end){
      // alert(now+' - '+start);
      swal({
        title: "Attention",
        content: {
          element: "p",
          attributes: {
            innerHTML: "Stay tuned - registration opens three months before the event.",
            style: "font-size:22px;color:#000;"
          }
        },
        icon: "warning",
        timer: 3000,
        button: false,
      }).then(function() {
        // window.location = "Banner_Header";
      });
    }else{
      // alert('Event start');
      window.open(url, "_blank");
    }
  }
</script>

<style>
  .swal-title-custom {
    font-size: 26px;
    font-weight: bold;
    color: #d9534f;
  }
</style>

    
<script>
  // List URL gambar & text
  const slides = [
                    <?php foreach($data_swiper as $r_sw): ?>
                    {
                        image: "<?= base_url($r_sw->folder_name."".$r_sw->image) ?>",
                        title: "<?= ucwords(preg_replace('/\r\n|\r|\n/', '',$r_sw->title)) ?>",
                        subtitle: "<?= ucwords(preg_replace('/\r\n|\r|\n/', '',$r_sw->subtitle)) ?>",
                        button: "<?= ucwords($r_sw->button) ?>",
                    },
                    <?php endforeach; ?>
                ];
    // {
    //   image: "http://localhost:8081/My-Project/pull/csi2026/assets/images/upload/swiper/6.jpg",
    //   title: "GLOBAL SUPPLIER NETWORK",
    //   subtitle: "Connect & Grow",
    //   button: "SEE MORE"
    // }
  // ];

  const slideContainer = document.getElementById("dynamic-slides");

  // Generate slides dynamically
  slides.forEach(item => {
    slideContainer.innerHTML += `
      <div class="swiper-slide">
        <img src="${item.image}">
        <div class="overlay"></div>
        <div class="hero-content">
          
        </div>
      </div>
    `;
  });

  // Swiper initialization
  var swiper = new Swiper(".heroSwiper", {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    fadeEffect: {
      crossFade: true
    }
  });

</script>

<script src="<?php echo base_url();?>assets/coatingshow/plugins.min.js"></script>
<script src="<?php echo base_url();?>assets/coatingshow/functions.js"></script>
      

<script src="<?php echo base_url();?>assets/coatingshow/flickity.pkgd.js"></script>
<script src="<?php echo base_url();?>assets/coatingshow/bs-filestyle.js"></script>
<script type="<?php echo base_url();?>assets/coatingshow/owl.carousel.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>       
<script>
    document.querySelectorAll(".navmenu .dropdown .chevron").forEach(function(icon) {
    icon.addEventListener("click", function(e) {
      e.preventDefault();
      e.stopPropagation();

      let parent = this.closest(".dropdown");
      let submenu = parent.querySelector("ul");

      submenu.classList.toggle("show");
      this.classList.toggle("rotate");
    });
  });
 </script>
</html>