    <nav class="sidebar sidebar-offcanvas" id="get_menu">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <span class="sidebar-brand brand-logo">
          <img class="img-xs rounded-circle " src="<?php echo base_url();?>Website/assets/img/logo_title.png" alt="" id="post_logo"><b>KelieChem</b>
        </span>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="<?php echo base_url();?>assets/images/faces/user.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?php echo ucwords($this->session->userdata('nama'))?></h5>
                <span><?php echo ucwords($this->session->userdata('namalevel'))?></span>
              </div>
            </div>
            <!-- <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a> -->
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            
              <!-- <a href="<?php echo site_url('userlogin');?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-account-key"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Login Anggota</p>
                </div>
              </a>

              <div class="dropdown-divider"></div>
              <a href="<?php echo site_url('Level');?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-account-convert"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Level User</p>
                </div>
              </a>

              <div class="dropdown-divider"></div>
              <a href="<?php echo site_url('Jabatan');?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-tie"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Jabatan</p>
                </div>
              </a> -->

              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-human"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Profil User</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-lock-outline"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Ubah Password</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <!-- <li class="nav-item menu-items">
          <a class="nav-link" href="home">
            <span class="menu-icon">
              <i class="mdi mdi-home"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>        -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_company');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">About</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_header');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Header</span>
          </a>
        </li>      
        
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#acc" aria-expanded="false" aria-controls="acc">
            <span class="menu-icon">
              <i class="mdi mdi-home"></i>
            </span>
            <span class="menu-title">Home</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="acc">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('profile');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Company Profile</a></li>       
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('form_partner');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Partner</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_product');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Products and Services</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_event');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Event</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_news');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">News Update</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_customer');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Customer</span>
          </a>
        </li> 

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('userlogin');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">User Account</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('sosmed');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Sos-Med</span>
          </a>
        </li>     

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('contact_us');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Visitor Emails</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('get_visitor');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Visitor List</span>
          </a>
        </li>

        <!-- <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo site_url('form_partner');?>">
            <span class="menu-icon">
              <i class="mdi mdi-menu"></i>
            </span>
            <span class="menu-title">Partner</span>
          </a>
        </li> -->

        <!-- <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
            <span class="menu-icon">
              <i class="mdi mdi-settings"></i>
            </span>
            <span class="menu-title">Management</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="setting">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('userlogin');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Account Login</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('get_visitor');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Visit</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('contact_us');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Submit Form</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('profile');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Profile</a></li>            
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('content');?>"><i class="mdi mdi-arrow-right-bold"></i>&nbsp;&nbsp;Content</a></li>
            </ul>
          </div>
        </li> -->
      </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
          <li class="nav-item w-100" style="padding:15px">
            <input type="text" class="form-control" placeholder="Search" id="search_form">            
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-lg-block">
            <!-- <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a> -->
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
              <h6 class="p-3 mb-0">Projects</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon rounded-circle">
                    <i class="mdi mdi-file-outline text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Software Development</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-web text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">UI Development</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-layers text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Software Testing</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">See all projects</p>
            </div>
          </li>
          <!-- <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-view-grid"></i>
            </a>
          </li>
          <li class="nav-item dropdown border-left">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email"></i>
              <span class="count bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php echo base_url();?>assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                  <p class="text-muted mb-0"> 1 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php echo base_url();?>assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                  <p class="text-muted mb-0"> 15 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?php echo base_url();?>assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                  <p class="text-muted mb-0"> 18 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">4 new messages</p>
            </div>
          </li>
          <li class="nav-item dropdown border-left">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Event today</p>
                  <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                  <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-link-variant text-warning"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Launch Admin</p>
                  <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">See all notifications</p>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
              <div class="navbar-profile">
                <img class="img-xs rounded-circle" src="<?php echo base_url();?>assets/images/faces/user.png" alt="">
                <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo ucwords($this->session->userdata('nama'))?></p>
                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
              <!-- <h6 class="p-3 mb-0">Profile</h6>
              <div class="dropdown-divider"></div> -->
              <!-- <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Settings</p>
                </div>
              </a> -->
              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item preview-item" href="<?php echo base_url()?>Login/logout">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log out</p>
                </div>
              </a>              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" id="add_menu">
          <span class="mdi mdi-format-line-spacing"></span>
        </button>
      </div>
    </nav>        
    <div class="main-panel">