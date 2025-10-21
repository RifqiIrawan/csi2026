<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiting extends CI_Controller {

  public function __construct(){
    parent::__construct();       
    $this->load->model('M_Login');   
    $this->load->model('M_Form');
    $this->load->model('M_Visiting');
    $this->load->library('upload');
  }

	public function index($submenu = null, $id = null){  
      
    // $uri = $this->uri->segment(2);
    // $url = $this->uri->segment(3);

    switch (strtolower($submenu)) {
      case "conference-schedule":
        $this->conference_schedule_index();
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
      // case "why-visit-settings":
      //   $this->why_visit_settings();
      //   break;
      case "conference-schedule-settings":
        $this->conference_schedule_settings();
        break;
      case "post-show-report-settings":
        $this->post_show_report_settings();
      case "event-datatable":
        echo $this->M_Visiting->event_datatable();
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
    $data_profile = $this->M_Form->get_profile_dashboard();
    $r = $data_profile->row();
    $data["folder"] = $r->folder;

    // Data Hero Section
    $data['hero'] = [
        'background' => 'https://i.pinimg.com/1200x/76/24/d7/7624d76199dbffbe3c13fc9c5b8339a6.jpg',
        'button_text' => 'WHY VISIT ?',
        'button_link' => '#features' // scroll ke section features
    ];

    $features = [
        [
            'title' => 'NETWORKING OPPORTUNITIES',
            'icon'  => 'https://indointertex.com/wp-content/uploads/2024/12/2025_Web_Why_Visit2-1600x708.png',
            'desc'  => 'Seize networking opportunities with top companies through face-to-face meetings.'
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
    $this->load->view('layouts/header', $data);
    $this->load->view('visiting',$data);
    $this->load->view('layouts/footer', $data);
  }

  public function conference_schedule_index() {

    $data['programs'] = $this->M_Visiting->get_event_schedule([]);
    // echo "<pre>";
    // print_r($dataConference);
    // echo "</pre>";
    // die();
    $data["data_menu"] = $this->M_Login->get_menu();
    $this->load->view('layouts/header', $data);
    $this->load->view('module/visiting/conferenceschedule',$data);
    $this->load->view('layouts/footer', $data);
  }

  public function why_visit_settings() {
    echo "why_visit_settings";
    die();
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data = [];
    $this->template->load('Admin/roleme','module/settings/visiting/why_visit',$data);
  }

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
}
