<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiting extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');    
        $this->load->model('M_Login');   
        $this->load->model('M_Form');
        $this->load->model('M_Home');
        $this->load->model('M_Info');
        $this->load->model('M_Visiting');
        $this->load->model('M_Exhibiting');
        $this->load->library('upload');
    }

    public function Dashboard(){  
        error_reporting(0);
        $data["data_menu"] = $this->M_Login->get_menu();
        $data["data_event"] = $this->M_Login->get_event()->row();
        $data["data_product"] = $this->M_Login->get_product();
        $data["data_event_value"] = $this->M_Login->get_event_value();
        $data["data_support"] = $this->M_Login->get_support();
        $data["data_content1"] = $this->M_Login->get_content1()->row();
        $data["data_profile"] = $this->M_Login->get_profile()->row();
        $data["data_sosmed"] = $this->M_Login->get_sosmed();
        $data["data_qlink"] = $this->M_Login->get_qlink();
        $data["data_contact"] = $this->M_Login->get_contact();    
        $data["data_carousel"] = $this->M_Login->get_carousel();
        $data["data_video"] = $this->M_Login->get_highlights();
        $data["data_organizer"] = $this->M_Login->get_organizer();
        $data["data_member"] = $this->M_Login->get_member();
        $data["data_sponsors"] = $this->M_Login->get_sponsors();
        $data["data_coperation"] = $this->M_Login->get_coperation();        

        $data["data_footer"] = "../Website/assets/img/ftr.jpg";
        $this->load->view('dashboard',$data);
    }

    public function News_Update(){  
        error_reporting(0);
        $data["data_menu"] = $this->M_Login->get_menu();
        $data["data_event"] = $this->M_Login->get_event()->row();
        $data["data_product"] = $this->M_Login->get_product();
        $data["data_event_value"] = $this->M_Login->get_event_value();
        $data["data_support"] = $this->M_Login->get_support();
        $data["data_content1"] = $this->M_Login->get_content1()->row();
        $data["data_profile"] = $this->M_Login->get_profile()->row();
        $data["data_sosmed"] = $this->M_Login->get_sosmed();
        $data["data_qlink"] = $this->M_Login->get_qlink();
        $data["data_contact"] = $this->M_Login->get_contact();    
        $data["data_carousel"] = $this->M_Login->get_carousel();
        $data["data_video"] = $this->M_Login->get_highlights();
        $data["data_organizer"] = $this->M_Login->get_organizer();
        $data["data_member"] = $this->M_Login->get_member();
        $data["data_sponsors"] = $this->M_Login->get_sponsors();
        $data["data_coperation"] = $this->M_Login->get_coperation();   

        $data["data_header_news"] = $this->M_Info->get_header_news();
        $data["data_news_update"] = $this->M_Info->get_news_update();
        
        $data["data_footer"] = "../Website/assets/img/ftr.jpg";
        $this->template->load('layouts2/role2','module/Info/news_update',$data);
    }

    public function Hotel_Booking(){
        error_reporting(0);
        $data["data_menu"] = $this->M_Login->get_menu();
        $data["data_event"] = $this->M_Login->get_event()->row();
        $data["data_product"] = $this->M_Login->get_product();
        $data["data_event_value"] = $this->M_Login->get_event_value();
        $data["data_support"] = $this->M_Login->get_support();
        $data["data_content1"] = $this->M_Login->get_content1()->row();
        $data["data_profile"] = $this->M_Login->get_profile()->row();
        $data["data_sosmed"] = $this->M_Login->get_sosmed();
        $data["data_qlink"] = $this->M_Login->get_qlink();
        $data["data_contact"] = $this->M_Login->get_contact();    
        $data["data_carousel"] = $this->M_Login->get_carousel();
        $data["data_video"] = $this->M_Login->get_highlights();
        $data["data_organizer"] = $this->M_Login->get_organizer();
        $data["data_member"] = $this->M_Login->get_member();
        $data["data_sponsors"] = $this->M_Login->get_sponsors();
        $data["data_coperation"] = $this->M_Login->get_coperation();   
    
        $data["data_hotel"] = $this->M_Info->get_hotel();
        $data["data_footer"] = "../Website/assets/img/ftr.jpg";
        $this->template->load('layouts2/role2','module/Info/hotel_booking',$data);
    }

	public function index($submenu = null, $id = null){  
        // $uri = $this->uri->segment(2);
        // $url = $this->uri->segment(3);

        switch (strtolower($submenu)) {
            case "conference-schedule":
                $this->conference_schedule_index();
                break;
            case "conference-schedule-validation":
                // echo "<pre> GET:";
                // print_r($id);
                // echo "</pre>";
                // die();
                $this->conference_schedule_validation($id);
                break;
            case "show-report-download":
                $this->download_show_report($id);
                break;
            case "show-report-get-data":
                if (empty($id)) {
                    return $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode([
                            'status' => 'error',
                            'message' => 'ID is required'
                        ]));
                }

                $data_show_report = $this->M_Visiting->get_by_id('csi_report_files', (int) $id);

                return $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode($data_show_report));
                break;
            case "show-report-edit":
                $this->show_report_edit();
                break;
            case "why-visit-settings":
                $this->why_visit_settings();
                break;
            case "why-visit-datatable":
                echo $this->M_Visiting->why_visit_datatable();
                break;
            case "why-visit-banner-add":
                $this->why_visit_banner_add();
                break;
            case "why-visit-banner-get-data":
                $this->why_visit_banner_get_data($id);
                break;
            case "why-visit-banner-update":
                $this->why_visit_banner_update($id);
                break;
            case "why-visit-banner-delete":
                $this->why_visit_banner_delete($id);
                break;
            case "why-visit-section-datatable":
                echo $this->M_Visiting->why_visit_section_datatable();
                break;
            /* Part Conference Shedule */
            case "conference-schedule-settings":
                $this->conference_schedule_settings();
                break;
            case "conference-schedule-datatable":
                echo $this->M_Visiting->conference_schedule_datatable();
                break;
            case "conference-highlight-datatable":
                echo $this->M_Visiting->conference_highlight_datatable();
                break;
            case "conference-highlight-get-data":
                $this->conference_highlight_get_data($id);
                break;
            case "conference-highlight-add":
                $this->conference_highlight_add();
                break;
            case "conference-highlight-update":
                $this->conference_highlight_update();
                break;
            /* Part Post Show Report */
            case "post-show-report-settings":
                $this->post_show_report_settings();
                break;
            case "event-datatable":
                echo $this->M_Visiting->event_datatable();
                break;
            case "show-report-datatable":
                echo $this->M_Visiting->show_report_datatable();
                break;
            default:
                $this->visiting_index();
        }
    }

    public function visiting_index() {
        $base_url = base_url();
        $data_profile = $this->M_Form->get_profile_dashboard();
        $r = $data_profile->row();
        $data["folder"] = $r->folder;

        $dataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 10,
            'content_year' => 2026,
            'content_type' => 'banner'
        ]);

        $sectionDataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 10,
            'content_year' => 2026,
            'content_type' => 'section'
        ]);
        
        // echo "<pre> dataContents: ";
        // print_r($dataContents);
        // echo "</pre>";
        // die();

        $hero_background = (!empty($dataContents)) ? $base_url . $dataContents[0]['file_path'] : '';
        $hero_text = $dataContents['0']['title'];

        $feature_background = (!empty($sectionDataContents)) ? $base_url . $sectionDataContents[0]['file_path'] : '';
        $feature_text = $sectionDataContents['0']['title'];
        $feature_desc = $sectionDataContents['0']['subtitle'];


        // echo "<pre> hero_background: ";
        // print_r($hero_background);
        // echo "</pre>";

        // echo "<pre> hero_text: ";
        // print_r($hero_text);
        // echo "</pre>";
        // die();

        // Data Hero Section
        $data['hero'] = [
            'background' => $hero_background,
            'button_text' => $hero_text,
            'button_link' => '#features' // scroll ke section features
        ];

        $features = [
            [
                'title' => $feature_text,
                'icon'  => $feature_background,
                'desc'  => $feature_desc
            ]
        ];

        // Data bisa diambil dari database, untuk contoh hardcode array
        $show_features = [
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/02/exhibit-1.jpg',
                'title' => 'Global Suppliers',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/02/exhibit-2.jpg',
                'title' => 'Live Demonstration',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/05/seminar.jpg',
                'title' => 'Webinar Presentation',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/05/industry-conference.jpg',
                'title' => 'Industry Conference',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/02/exhibit-1.jpg',
                'title' => 'Global Suppliers',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/02/exhibit-2.jpg',
                'title' => 'Live Demonstration',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/05/seminar.jpg',
                'title' => 'Webinar Presentation',
            ],
            [
                'image' => 'https://indointertex.com/wp-content/uploads/2021/05/industry-conference.jpg',
                'title' => 'Industry Conference',
            ],
        ];
        $data['features'] = $features;
        $data['show_features'] = $show_features;

        $data["data_menu"] = $this->M_Login->get_menu();
        $data["data_event"] = $this->M_Login->get_event()->row();
        $data["data_product"] = $this->M_Login->get_product();
        $data["data_event_value"] = $this->M_Login->get_event_value();
        $data["data_support"] = $this->M_Login->get_support();
        $data["data_content1"] = $this->M_Login->get_content1()->row();
        $data["data_profile"] = $this->M_Login->get_profile()->row();
        $data["data_sosmed"] = $this->M_Login->get_sosmed();
        $data["data_qlink"] = $this->M_Login->get_qlink();
        $data["data_contact"] = $this->M_Login->get_contact();    
        $data["data_carousel"] = $this->M_Login->get_carousel();
        $data["data_video"] = $this->M_Login->get_highlights();
        $data["data_organizer"] = $this->M_Login->get_organizer();
        $data["data_member"] = $this->M_Login->get_member();
        $data["data_sponsors"] = $this->M_Login->get_sponsors();
        $data["data_coperation"] = $this->M_Login->get_coperation();   
        
        $this->load->view('layouts/header', $data);
        $this->load->view('visiting',$data);
        $this->load->view('layouts/footer', $data);
    }

  public function conference_schedule_index() {

    $data['programs'] = $this->M_Visiting->get_event_schedule([]);

    $base_url = base_url();

    $dataContents = $this->M_Exhibiting->get_contents([
        'menu_id' => 11,
        'content_year' => 2026,
        'content_type' => 'banner'
    ]);

    $hero_background = (!empty($dataContents)) ? $base_url . $dataContents[0]['file_path'] : '';
    $hero_text = $dataContents['0']['title'];

    // Data Hero Section
    $data['hero'] = [
        'background' => $hero_background,
        'button_text' => $hero_text,
        'button_link' => '' // scroll ke section features
    ];

    $dataShowHighlights = $this->M_Exhibiting->get_contents([
        'menu_id' => 11,
        'content_year' => 2026,
        'content_type' => 'show-feature'
    ]);

    $data['show_features'] = $dataShowHighlights;

    
    // echo "<pre>";
    // print_r($dataShowHighlights);
    // echo "</pre>";
    // die();
    $data["data_menu"] = $this->M_Login->get_menu();
    $data["data_event"] = $this->M_Login->get_event()->row();
    $data["data_product"] = $this->M_Login->get_product();
    $data["data_event_value"] = $this->M_Login->get_event_value();
    $data["data_support"] = $this->M_Login->get_support();
    $data["data_content1"] = $this->M_Login->get_content1()->row();
    $data["data_profile"] = $this->M_Login->get_profile()->row();
    $data["data_sosmed"] = $this->M_Login->get_sosmed();
    $data["data_qlink"] = $this->M_Login->get_qlink();
    $data["data_contact"] = $this->M_Login->get_contact();    
    $data["data_carousel"] = $this->M_Login->get_carousel();
    $data["data_video"] = $this->M_Login->get_highlights();
    $data["data_organizer"] = $this->M_Login->get_organizer();
    $data["data_member"] = $this->M_Login->get_member();
    $data["data_sponsors"] = $this->M_Login->get_sponsors();
    $data["data_coperation"] = $this->M_Login->get_coperation();   

    $this->load->view('layouts/header', $data);
    $this->load->view('module/visiting/conferenceschedule',$data);
    $this->load->view('layouts/footer', $data);
  }

  public function why_visit_settings() {
    // echo "why_visit_settings";
    // die();
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data = [];
    $this->template->load('Admin/roleme','module/settings/visiting/why_visit',$data);
  }

  public function why_visit_banner_get_data($id){

    $IDBanner = (int) $id;

    $activeBanners = $this->M_Exhibiting->fetchData(
        'csi_contents c',
        ['c.id' => $IDBanner],
        [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
        'c.id, c.content_year, c.content_type, c.title, c.subtitle, c.status, cm.file_path as image, cm.url_path as link',
        ['c.id' => 'DESC']
    )->row_array();

    // Tambahkan base_url di sini
    if (!empty($activeBanners['image'])) {
        $activeBanners['image'] = base_url($activeBanners['image']);
    }

    if ($activeBanners) {
        // kembalikan data JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($activeBanners));
    } else {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'status' => false,
                'message' => 'Banner not found'
            ]));
    }
  }

  // END Part WHY VISIT

  public function conference_schedule_settings(){
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data = [];
    $this->template->load('Admin/roleme','module/settings/visiting/conference_schedule',$data);
  }

  public function post_show_report_settings() {
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }
    $data = [];
    $this->template->load('Admin/roleme','module/settings/visiting/post_show_report',$data);
  }

  public function download_show_report($id = null) {
    
    $file = $this->M_Visiting->get_by_id('csi_report_files', (int) $id);

    $file_path = FCPATH . 'assets/uploads/post_show_report/' . $file->file_name . $file->file_type;

    if (!file_exists($file_path)) {
        show_error('File not found on server.', 404);
        return;
    }

    $data = file_get_contents($file_path);

    // Load CI's download helper
    $this->load->helper('download');
    $file_name = $file->report_title . '.' . pathinfo($file->file_name . $file->file_type, PATHINFO_EXTENSION);

    force_download($file_name, $data);
  }

  public function show_report_edit(){
      // echo "<pre>";
      // print_r($this->input->post());
      // echo "</pre>";

      // echo "<pre>";
      // print_r($_FILES);
      // echo "</pre>";
      // die();
      $id = $this->input->post('id');
      $title = $this->input->post('report_title', true);
      $description = $this->input->post('report_description', true);
      $is_published = $this->input->post('is_published') ? 1 : 0;

      // Ambil data lama untuk hapus file lama jika diganti
      
      $old_data = $this->M_Visiting->get_by_id('csi_report_files', (int) $id);

      if (!$old_data) {
          echo json_encode(['success' => false, 'message' => 'Data not found.']);
          return;
      }

      $update_data = [
          'report_title' => $title,
          'report_description' => $description,
          'is_published' => $is_published,
          'modified_date' => date('Y-m-d H:i:s')
      ];
      $file_path = 'assets/uploads/post_show_report/';
      // === Handle file upload (optional) ===
      if (!empty($_FILES['report_file']['name'])) {
          $config['upload_path']   = FCPATH . $file_path;
          $config['allowed_types'] = 'pdf';
          $config['max_size']      = 5120; // 5MB
          $config['file_name']     = time() . '_' . $_FILES['report_file']['name'];

          $this->upload->initialize($config);

          if ($this->upload->do_upload('report_file')) {
              $file_data = $this->upload->data();

              $update_data['file_name'] = $file_data['raw_name'];
              $update_data['file_path'] = $file_path . $file_data['file_name'];

              // Hapus file lama jika ada
              if (!empty($old_data->report_file) && file_exists(FCPATH . $file_path . $old_data->report_file)) {
                  @unlink(FCPATH . $file_path . $old_data->report_file);
              }
          } else {
              echo json_encode(['success' => false, 'message' => $this->upload->display_errors()]);
              return;
          }
      }

      // === Update ke database ===
      $updated = $this->M_Visiting->update('csi_report_files', $id, $update_data);

      if ($updated) {
          echo json_encode(['success' => true, 'message' => 'Report file updated successfully.']);
      } else {
          echo json_encode(['success' => false, 'message' => 'Failed to update data.']);
      }
  }

  public function why_visit_banner_add(){
  
    // Ambil input form
    // echo "<pre> Files:";
    // print_r($_FILES);
    // echo "</pre>";
    // echo "<pre> Post:";
    // print_r($this->input->post());
    // echo "</pre>";
    // die();
    /*
    Array
        (
            [bannerimage] => Array
                (
                    [name] => Sample Page - Coating Show Image.png
                    [type] => image/png
                    [tmp_name] => C:\xampp\tmp\phpF543.tmp
                    [error] => 0
                    [size] => 2193849
                )

        )
        Array
        (
            [bannertitle] => Banner Title
            [bannersubtitle] => Banner Subtitle
            [bannerlink] => 
            [bannerStatus] => active
        )
    */
    $content_year = $this->input->post('banner_whyvisityear');
    $title        = $this->input->post('banner_whyvisittitle');
    $subtitle     = $this->input->post('banner_whyvisitsubtitle');
    $link         = $this->input->post('banner_whyvisitlink');
    $status       = $this->input->post('banner_whyvisitStatus');

    $menu_id = 10;
    $created_date = date('Y-m-d H:i:s');
    $created_by = 'sysadmin';
    $content_type = 'banner';
    $body_text = '';
    $content_id = 0;

    // Konfigurasi upload gambar
    $file_path = 'assets/uploads/why_visit/';
    $config['upload_path'] = FCPATH . $file_path; // FCPATH = path ke public root CI

    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size'] = 2048; // 2MB
    // $config['max_size']      = 4096; // 4MB
    $config['encrypt_name']  = TRUE; // supaya nama unik

    $this->upload->initialize($config);

    if (!empty($_FILES['bannerimage']['name'])) {
        if ($this->upload->do_upload('bannerimage')) {
            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
        } else {
            // echo $this->upload->display_errors();
            // return;
            $this->flashdata_set([
                'error' => $this->upload->display_errors()
            ]);
            redirect('exhibiting/why-exhibit-settings');
        }
    }

    try {
        // Start transaction
        $this->db->trans_begin();

        // Prepare the data array
        $data = [
            'menu_id'       => $menu_id,      // replace $menu_id with your variable
            'content_year'  => $content_year, // replace $content_year with your variable
            'content_type'  => $content_type, // replace $content_type with your variable
            'title'         => $title,        // replace $title with your variable
            'subtitle'      => $subtitle,     // replace $subtitle with your variable
            'body_text'     => $body_text,    // replace $body_text with your variable
            'created_date'  => $created_date, // usually date('Y-m-d H:i:s')
            'created_by'    => $created_by,   // your user id or name
            'modified_date' => $created_date,// usually date('Y-m-d H:i:s')
            'modified_by'   => $created_by   // your user id or name
        ];

        $this->db->insert('csi_contents', $data);
        $content_id = $this->db->insert_id();

        $sort_order = 1;
        $is_main = 1;
        
        $dataMedia = [
            'content_id'      => $content_id,     // the related content ID
            'media_type'      => 'image',     // e.g., 'image', 'video', etc.
            'file_path'       => $file_path . $image,      // path on server
            'sort_order'      => $sort_order,     // integer
            'is_main'         => $is_main,        // 0 or 1
            'created_date'    => $created_date,   // usually date('Y-m-d H:i:s')
            'created_by'      => $created_by,     // user id or name
            'modified_date'   => $created_date,  // usually date('Y-m-d H:i:s')
            'modified_by'     => $created_by     // user id or name
        ];

        // print_r($data);
        // print_r($dataMedia);
        // die();

        // Simpan ke DB lewat model
        $this->db->insert('csi_content_media', $dataMedia);

        // Cek transaction
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            throw new Exception('Database insert failed.');
        } else {
            $this->db->trans_commit();
        }

        // Jika sukses
        $this->flashdata_set([
            'success' => 'Banner berhasil disimpan.'
        ]);
        redirect('visiting/why-visit-settings');

    } catch (Exception $e) {
        // Jika ada error
        log_message('error', 'Banner save error: ' . $e->getMessage());
        $this->flashdata_set([
            'error' => 'Terjadi kesalahan saat menyimpan banner.'
        ]);
        redirect('visiting/why-visit-settings');
    }
  }

  public function why_visit_banner_update_good()
  {
      // echo "<pre> why_visit_banner_update:";
      // print_r($this->input->post());
      // echo "</pre>";

      // echo "<pre> why_visit_banner_update:";
      // print_r($_FILES);
      // echo "</pre>";

      
      // die();
      /*
      why_visit_banner_update:Array
        (
            [id] => 14
            [banner_whyvisityear] => 2027
            [banner_whyvisittitle] => WHY VISIT ???
            [banner_whyvisitsubtitle] => The Coating Show is the premier gathering for professionals in the coatings industry.
            [banner_whyvisitlink] => 
            [banner_whyvisitStatus] => active
      */
      try {
          $id             = $this->input->post('id');
          $content_year   = $this->input->post('banner_whyvisityear');
          $title          = $this->input->post('banner_whyvisittitle');
          $subtitle       = $this->input->post('banner_whyvisitsubtitle');
          $link           = $this->input->post('banner_whyvisitlink');
          $status         = $this->input->post('banner_whyvisitStatus'); // active / inactive

          $modified_date  = date('Y-m-d H:i:s');
          $id_menus = 10;
          // validasi ID
          if (empty($id)) {
              throw new Exception("ID tidak ditemukan.");
          }

          $file_path = 'assets/uploads/why_visit/';

          $image_path = null;
          
          if (!empty($_FILES['image']['name'])) {
              $config['upload_path']   = FCPATH . $file_path;
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['max_size']      = 2048;
              $config['encrypt_name']  = TRUE;
              $this->upload->initialize($config);
              if (!$this->upload->do_upload('image')) {
                  throw new Exception($this->upload->display_errors());
              } else {
                  $uploadData = $this->upload->data();
                  if ($uploadData['file_size'] > 2048) {
                      unlink($uploadData['full_path']); // delete if oversized
                      $this->session->set_flashdata('error', 'File size exceeds the 2MB limit.');
                  }
                  $image_path = $file_path . $uploadData['file_name'];
              }
          }
          
          
          // data yang akan diupdate
          $data = [
              'content_year' => $content_year,
              'title'        => $title,
              'subtitle'     => $subtitle,
              'status'       => $status,
              'modified_date'=> $modified_date
          ];

          if ($status === 'active') {
              // Set semua record lain menjadi 'inactive'
              $this->db->where('id !=', $id); // kecuali yang sedang diupdate
              $this->db->where('content_type', 'banner');
              $this->db->where('menu_id', $id_menus);
              $this->db->update('csi_contents', ['status' => 'inactive']);
          }

          $this->M_Exhibiting->update('csi_contents', ['id' => $id], $data);

          $dataMedia = [
              'url_path'     => $link,
              'modified_date'=> $modified_date
          ];

          if ($image_path) {
              $dataMedia['file_path'] = $image_path;
          }

          $update = $this->M_Exhibiting->update('csi_content_media', ['content_id' => $id], $dataMedia);

          if ($update) {
              $response = ['success' => true, 'message' => 'Banner berhasil diperbarui'];
          } else {
              $response = ['success' => false, 'message' => 'Gagal memperbarui banner'];
          }

      } catch (Exception $e) {
          $response = ['success' => false, 'message' => $e->getMessage()];
      }

      echo json_encode($response);
  }

  public function why_visit_banner_update()
  {
    
    $this->load->library('upload');	
    $this->load->helper('file');       
      try {
          $id             = $this->input->post('id');
          $content_year   = $this->input->post('banner_whyvisityear');
          $title          = $this->input->post('banner_whyvisittitle');
          $subtitle       = $this->input->post('banner_whyvisitsubtitle');
          $link           = $this->input->post('banner_whyvisitlink');
          $status         = $this->input->post('banner_whyvisitStatus');
          $modified_date  = date('Y-m-d H:i:s');
          $id_menus       = 10;

          if (empty($id)) {
              throw new Exception("ID tidak ditemukan.");
          }

          $file_path  = 'assets/uploads/why_visit/';
          $image_path = null;

          // === Ambil data lama (untuk hapus gambar lama jika ada upload baru) ===
          $oldMedia = $this->db->get_where('csi_content_media', ['content_id' => $id])->row();

          // === Jika ada file diupload ===
          if (!empty($_FILES['image']['name'])) {
              $config['upload_path']   = FCPATH . $file_path;
              $config['allowed_types'] = 'jpg|jpeg|png|gif';
              $config['max_size']      = 2048;
              $config['encrypt_name']  = TRUE;

              $this->upload->initialize($config);

              if (!$this->upload->do_upload('image')) {
                  throw new Exception($this->upload->display_errors());
              } else {
                  $uploadData = $this->upload->data();

                  if ($uploadData['file_size'] > 2048) {
                      unlink($uploadData['full_path']);
                      throw new Exception('File size exceeds the 2MB limit.');
                  }

                  $image_path = $file_path . $uploadData['file_name'];

                  // === Hapus file lama jika ada ===
                  if (!empty($oldMedia->file_path) && file_exists(FCPATH . $oldMedia->file_path)) {
                      unlink(FCPATH . $oldMedia->file_path);
                  }
              }
          }

          // === UPDATE DATA UTAMA ===
          $data = [
              'content_year'  => $content_year,
              'title'         => $title,
              'subtitle'      => $subtitle,
              'status'        => $status,
              'modified_date' => $modified_date
          ];

          if ($status === 'active') {
              // Set semua record lain menjadi 'inactive'
              $this->db->where('id !=', $id);
              $this->db->where('content_type', 'banner');
              $this->db->where('menu_id', $id_menus);
              $this->db->update('csi_contents', ['status' => 'inactive']);
          }

          $this->M_Exhibiting->update('csi_contents', ['id' => $id], $data);

          // === UPDATE DATA MEDIA ===
          $dataMedia = [
              'url_path'      => $link,
              'modified_date' => $modified_date
          ];

          // hanya update file_path jika ada file baru
          if (!empty($image_path)) {
              $dataMedia['file_path'] = $image_path;
          }

          $update = $this->M_Exhibiting->update('csi_content_media', ['content_id' => $id], $dataMedia);

          if ($update) {
              $response = ['success' => true, 'message' => 'Banner berhasil diperbarui'];
          } else {
              $response = ['success' => false, 'message' => 'Gagal memperbarui banner'];
          }

      } catch (Exception $e) {
          $response = ['success' => false, 'message' => $e->getMessage()];
      }

      echo json_encode($response);
  }

  public function why_visit_banner_delete_($id = null)
  {
      $id = (int) $id;
      try {
          if (!$id) {
              throw new Exception('Invalid ID');
          }

          $deleted = $this->M_Exhibiting->delete('csi_contents', ['id' => $id]);

          if (!$deleted) {
              throw new Exception('Failed to delete banner');
          }

          $response = [
              'status' => 'success',
              'message' => 'Banner deleted successfully'
          ];
      } catch (Exception $e) {
          $response = [
              'status' => 'error',
              'message' => $e->getMessage()
          ];
      }

      echo json_encode($response);
  }

    public function why_visit_banner_delete($id = null)
    {
        $id       = (int) $id;
        $id_menus = 10;

        try {
            if (!$id) {
                throw new Exception('Invalid ID');
            }

            // Hitung jumlah total data banner yang ada
            $total = $this->db
                ->where('content_type', 'banner')
                ->where('menu_id', $id_menus)
                ->where('status', 'active')
                ->count_all_results('csi_contents');

            if ($total <= 1) {
                throw new Exception('Tidak dapat menghapus banner terakhir');
            }

            // Hapus data berdasarkan ID
            $deleted = $this->M_Exhibiting->delete('csi_contents', ['id' => $id]);

            if (!$deleted) {
                throw new Exception('Gagal menghapus banner');
            }

            $response = [
                'status' => 'success',
                'message' => 'Banner berhasil dihapus'
            ];
        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }

    protected function flashdata_set(array $new_flashdata)
    {
      // 1️⃣ Reset all existing flashdata
        $all_flash = $this->session->flashdata();
        if (!empty($all_flash)) {
            foreach ($all_flash as $key => $val) {
                $this->session->unset_userdata($key);
            }
        }

        // 2️⃣ Set new flashdata
        foreach ($new_flashdata as $type => $msg) {
            $this->session->set_flashdata($type, $msg);
        }
    }

    public function conference_schedule_validation($id = null)
    {
        try {
            $id = (int) $id;
            if (!$id) {
                throw new Exception('Invalid event ID.');
            }

            // 🔹 Ambil data event dari model
            $event = $this->M_Visiting->get_event_schedule(['event_id' => $id]);
            if (empty($event)) {
                throw new Exception('Program not found.');
            }

            $program = $event[0];
            $program_date = $program['program_date'];

            // 🔹 Hitung selisih tanggal
            $today = new DateTime();
            $event_date = new DateTime($program_date);
            $days_difference = (int)$today->diff($event_date)->format('%r%a');

            // 🔹 Validasi 2 bulan sebelum event
            if ($days_difference > 60) {
                $this->flashdata_set([
                    'error' => 'Form pendaftaran belum dibuka. Silakan cek kembali mendekati tanggal acara.'
                ]);
                redirect('visiting/conference-schedule'); // ganti 'event' dengan route halaman utama kamu
                return;
            }

            redirect($program['program_register_link']);

        } catch (Exception $e) {
            // 🔹 Tangani semua error tak terduga
            $this->flashdata_set([
                'error' => $e->getMessage()
            ]);
            redirect('event'); // fallback redirect
        }
    }

    public function conference_highlight_get_data($id){

        $IDBanner = (int) $id;

        $activeHighlights = $this->M_Exhibiting->fetchData(
            'csi_contents c',
            ['c.id' => $IDBanner],
            [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
            '   c.id
                , c.content_year
                , c.content_type
                , c.title
                , c.subtitle
                , c.status
                , cm.id as content_media_id
                , cm.file_path as image
                , cm.url_path as link'
            ,
            ['c.id' => 'DESC']
        )->row_array();
        // print_r($activeHighlights);
        // die();
        
        // Tambahkan base_url di sini
        if (!empty($activeHighlights['image'])) {
            $activeHighlights['image'] = base_url($activeHighlights['image']);
        }
        // echo "<pre> activeHighlights:";
		// print_r($activeHighlights);
		// echo "</pre>";

        // die();

        if ($activeHighlights) {
            // kembalikan data JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($activeHighlights));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => false,
                    'message' => 'Banner not found'
                ]));
        }
    }

    public function conference_highlight_add(){
        $addhighlighttitle     = trim($this->input->post('addhighlighttitle'));

        // Validasi minimal
        if (empty($addhighlighttitle)) {
            echo json_encode([
                'success' => false,
                'message' => 'Banner year dan title wajib diisi.'
            ]);
            return;
        }

        // Konfigurasi upload
        $file_path      = './assets/uploads/conference_schedule/';
        $file_path_save = 'assets/uploads/conference_schedule/';

        if (!file_exists($file_path)) {
            mkdir($file_path, 0775, true);
        }

        $config['upload_path']   = $file_path;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 3072; // 3 MB
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);

        $bannerImage = null;

        // Upload file jika ada
        if (!empty($_FILES['addhighlightimage']['name'])) {

            if (!$this->upload->do_upload('addhighlightimage')) {
                echo json_encode([
                    'success' => false,
                    'message' => strip_tags($this->upload->display_errors())
                ]);
                return;
            }

            $upload = $this->upload->data();
            $bannerImage = $upload['file_name'];
        }

        // Set audit fields
        $menu_id = 11;
        $created_date = date('Y-m-d H:i:s');
        $created_by = 'sysadmin';
        $banneryear = 2026;
        $bannertype = 'show-feature';
        $body_text = '';
        $content_id = 0;

        try {

            $this->db->trans_begin();

            // Data untuk diinsert ke tabel banner
            $data = [
                'menu_id'       => $menu_id,
                'content_year'  => $banneryear,
                'content_type'  => $bannertype,
                'title'         => $addhighlighttitle,
                'created_date'  => $created_date,
                'created_by'    => $created_by,
                'modified_date' => $created_date,
                'modified_by'   => $created_by
            ];

            $this->db->insert('csi_contents', $data);
            $content_id = $this->db->insert_id();

            $sort_order = 1;
            $is_main = 1;
            
            $dataMedia = [
                'content_id'      => $content_id,
                'media_type'      => 'image',
                'file_path'       => $file_path_save . $bannerImage,
                'sort_order'      => $sort_order,
                'is_main'         => $is_main,
                'created_date'    => $created_date,
                'created_by'      => $created_by,
                'modified_date'   => $created_date,
                'modified_by'     => $created_by
            ];

            // Simpan ke DB lewat model
            $this->db->insert('csi_content_media', $dataMedia);

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                echo json_encode([
                    'success' => false,
                    'message' => 'Database error.'
                ]);
                return;
            }

            $this->db->trans_commit();

            echo json_encode([
                'success' => true,
                'message' => 'Banner berhasil disimpan.'
            ]);
            return;

        } catch (Exception $e) {

            echo json_encode([
                'success' => false,
                'message' => 'Unexpected server error.'
            ]);
            return;
        }
    }

    public function conference_highlight_update(){
        // print_r($this->input->post());
        // print_r($_FILES);
        // die();
        $highlightid = $this->input->post('highlightid');
        $highlightmediaid  = $this->input->post('highlightmediaid');

        $highlighttitle  = $this->input->post('edithighlighttitle');

        $modified_date = date('Y-m-d H:i:s');
        $modified_by   = 'sysadmin';

        $file_path      = './assets/uploads/conference_schedule/';
        $file_path_save = 'assets/uploads/conference_schedule/';

        // ===== Ambil Data Lama ===== //
        $oldMedia = $this->db->get_where('csi_content_media', ['id' => $highlightmediaid])->row();
        $oldImage = !empty($oldMedia) ? basename($oldMedia->file_path) : null;

        // ===== Upload Config ===== //
        $config = [
            'upload_path'   => $file_path,
            'allowed_types' => 'jpg|jpeg|png',
            'max_size'      => 2048,
            'encrypt_name'  => TRUE
        ];
        $this->upload->initialize($config);

        // Default tetap pakai file lama
        $image = $oldImage;

        // ===== Jika Upload Gambar Baru ===== //
        if (!empty($_FILES['edithighlightimage']['name'])) {

            if (!$this->upload->do_upload('edithighlightimage')) {
                echo json_encode([
                    'success' => false,
                    'message' => strip_tags($this->upload->display_errors())
                ]);
                return;
            }

            // Hapus gambar lama
            if (!empty($oldImage) && file_exists($file_path . $oldImage)) {
                unlink($file_path . $oldImage);
            }

            // File baru
            $uploadData = $this->upload->data();
            $image = $uploadData['file_name'];
        }

        $dataMedia = [
            'file_path'     => $file_path_save . $image,
            'modified_date' => $modified_date,
            'modified_by'   => $modified_by
        ];

        $this->db->where('id', $highlightmediaid);
        $this->db->update('csi_content_media', $dataMedia);

        $data = [
            'title'         => $highlighttitle,
            'modified_date' => $created_date,
            'modified_by'   => $created_by
        ];

        // Update DB
        $this->db->where('id', $highlightid);
        $this->db->update('csi_contents', $data);

        echo json_encode([
            'success' => true,
            'message' => 'Banner successfully updated.'
        ]);
    }
}
