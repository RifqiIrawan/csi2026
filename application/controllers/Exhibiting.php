<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibiting extends CI_Controller {

    public function __construct(){
        parent::__construct();       
        $this->load->model('M_Login');   
        $this->load->model('M_Form');
        $this->load->model('M_Exhibiting');
        $this->load->library('upload');
    }

    public function index($submenu = null, $id = null){

        switch (strtolower($submenu)) {
			case "exhibitor-list":
                $this->exhibitorlist_index();
                break;
            case "company-profile":
                $this->company_profile($id);
                break;
            case "exhibitor-visa":
                $this->exhibitor_visa();
                break;
            case "why-exhibit-settings":
                $this->why_exhibit_settings();
                break;
            case "exhibitor-list-settings":
                $this->exhibitor_list_settings();
                break;
            case "why-exhibit-datatable":
                echo $this->M_Exhibiting->why_exhibit_datatable();
                break;
            case "why-exhibit-banner-add":
                $this->banner_add_data();
                break;
            case "why-exhibit-banner-get-data":
                $this->why_exhibit_banner_get_data($id);
                break;
            case "why-exhibit-banner-update":
                $this->why_exhibit_banner_update();
                break;
            case "why-exhibit-banner-delete":
                $this->why_exhibit_banner_delete($id);
                break;
            /* Past Content - Section*/
            case "why-exhibit-section-datatable":
                echo $this->M_Exhibiting->why_exhibit_section_datatable();
                break;
            case "why-exhibit-content-get-data":
                $this->why_exhibit_content_get_data($id);
                break;
            case "why-exhibit-section-update":
                $this->why_exhibit_section_update();
                break;
            case "why-exhibit-section-add":
                $this->why_exhibit_section_add();
                break;
            /* Part Visa Information */
            case "why-exhibit-visa-datatable":
                echo $this->M_Exhibiting->why_exhibit_visa_datatable();
                break;
            case "why-exhibit-visa-get-data":
                $this->why_exhibit_visa_get_data($id);
                break;
            /* Part Exhibitor List */
            case "exhibitor-datatable":
                echo $this->M_Exhibiting->exhibitor_datatable();
                break;
            case "exhibitor-visa-settings":
                $this->exhibitor_visa_settings();
                break;
            case "exhibitor-visa-datatable":
                echo $this->M_Exhibiting->exhibitor_visa_datatable();
                break;
            case "exhibitor-visa-banner-add":
                $this->exhibitor_visa_banner_add();
                break;
            case "exhibitor-visa-banner-update":
                $this->exhibitor_visa_banner_update();
                break;
            case "exhibitor-visa-banner-delete":
                $this->exhibitor_visa_banner_delete($id);
                break;
            case "exhibitor-content-get-data":
                $this->exhibitor_content_get_data($id);
                break;
            case "exhibitor-visa-section-add":
                $this->exhibitor_visa_section_add();
                break;
            case "exhibitor-visa-section-update":
                $this->exhibitor_visa_section_update();
                break;
            case "exhibitor-visa-section-delete":
                $this->exhibitor_visa_section_delete();
                break;
            default:
                $this->whyexhibit_index();
        }
	}

    public function whyexhibit_index() {
        $uri = $this->uri->segment(2);
        $url = $this->uri->segment(3);
        $base_url = base_url(); 

        $data_profile = $this->M_Form->get_profile_dashboard();
        $r = $data_profile->row();
        $data["folder"] = $r->folder;

        $dataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 7,
            'content_year' => 2026,
            'content_type' => 'banner'
        ]);

        $sectionDataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 7,
            'content_year' => 2026,
            'content_type' => 'section'
        ]);

        $visaDataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 7,
            'content_year' => 2026,
            'content_type' => 'visa-information'
        ]);

        $hero_background = (!empty($dataContents)) ? $base_url . $dataContents[0]['file_path'] : '';
        $hero_text = $dataContents['0']['title'];

        // Data Hero Section
        $data['hero'] = [
            'background' => $hero_background,
            'button_text' => $hero_text,
            'button_link' => '' // scroll ke section features
        ];

        $section_background = (!empty($sectionDataContents)) ? $base_url . $sectionDataContents[0]['file_path'] : '';
        // Data poin bullet
        $data['section1'] = [
            'subtitle' => $sectionDataContents[0]['subtitle']
            , 'body_text' => $sectionDataContents[0]['body_text']
            , 'body_img' => $section_background
        ];

        $data['section2'] = [
            'subtitle' => $sectionDataContents[1]['subtitle']
            , 'body_text' => $sectionDataContents[1]['body_text']
            , 'body_img' => ''
        ];

        $data['visainformation'] = [
            'subtitle' => $visaDataContents[0]['subtitle']
            , 'body_text' => $visaDataContents[0]['body_text']
            , 'body_img' => ''
        ];


        // Controller
        $data['paint_stats'] = [
            [
                'value' => '200',
                'label' => 'Paint Companies in Indonesia'
            ],
            [
                'value' => '34',
                'label' => 'Multi National / Regional Brands'
            ],
            [
                'value' => '92',
                'label' => 'National Brands'
            ],
            [
                'value' => '74',
                'label' => 'Small / Medium Manufacturers'
            ],
        ];

        $data['paint_manufacturers'] = [
            [
                'name' => 'AkzoNobel',
                'logo' => 'https://coatingshow.com/storage/company/Logo-akzo-nobel-car-refinishes-indonesia-pt-20240729094028.png',
                'link' => 'https://www.akzonobel.com/'
            ],
            [
                'name' => 'Hempel',
                'logo' => 'https://coatingshow.com/storage/company/Logo-hempel-indonesia-pt-20240729094045.png',
                'link' => 'https://www.hempel.com/'
            ],
            [
                'name' => 'Dana Paint',
                'logo' => 'https://coatingshow.com/storage/company/Logo-danapaint-indonesia-pt-20240729093537.png',
                'link' => 'https://www.danapaint.co.id/'
            ],
            [
                'name' => 'Jotun',
                'logo' => 'https://coatingshow.com/storage/company/Logo-jotun-indonesia-pt-20240729093930.png',
                'link' => 'https://www.jotun.com/'
            ],
            [
                'name' => 'Avian Brands',
                'logo' => 'https://coatingshow.com/storage/company/Logo-avia-avian-pt-20240729093950.png',
                'link' => 'https://avianbrands.com/'
            ],
        ];

        $features = [
            [
                'title' => 'NETWORKING OPPORTUNITIES',
                'icon'  => 'https://indointertex.com/wp-content/uploads/2024/12/2025_Web_Why_Visit2-1600x708.png',
                'desc'  => 'Seize networking opportunities with top companies through face-to-face meetings.'
            ]
        ];

        $data['features'] = $features;
        $data["data_menu"] = $this->M_Login->get_menu();
        $data["data_support"] = $this->M_Login->get_support();
        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/whyexhibit',$data);
        $this->load->view('layouts/footer', $data);
    }

    public function exhibitorlist_index() {
        $uri = $this->uri->segment(2);
        $url = $this->uri->segment(3);
        $base_url = base_url(); 
        // echo "<pre> base_url:";
        // print_r($base_url);
        // echo "</pre>";
        // die();

        $data_profile = $this->M_Form->get_profile_dashboard();
        $r = $data_profile->row();
        $data["folder"] = $r->folder;

        $dataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 8,
            'content_year' => 2026,
            'content_type' => 'company-profile'
        ]);

        $data['exhibitors'] = [];
        foreach($dataContents as $content) {
            $image = (!empty($content['file_path'])) ? $base_url . $content['file_path'] : '';
            $image_controller = (!empty($content['menu_controller'])) ? $base_url . $content['menu_controller'] . '/' . $content['id_media']: '';
            
            $data['exhibitors'][] = [
                'name' => $content['company_name'],
                'booth' => $content['stand_no'],
                'logo' => $image,
                'menu_controller' => $image_controller
            ];
        }
        $data["data_menu"] = $this->M_Login->get_menu();
        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/exhibitorlist',$data);
        $this->load->view('layouts/footer', $data);
    }

    public function company_profile($id = null){

        $content_media_id = (int) $id;
        $base_url = base_url(); 

        $dataCompanies = $this->M_Exhibiting->get_content_company_profile([
            'content_media_id' => $content_media_id
        ])[0];

        $data['company'] = $dataCompanies;

        $data['company']->logo = (!empty($dataCompanies->file_path)) ? $base_url . $dataCompanies->file_path : '';

        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/companyprofile',$data);
        $this->load->view('layouts/footer', $data);
	}

    public function exhibitor_visa(){

        $base_url = base_url();

        $dataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 9,
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

        $sectionDataContents = $this->M_Exhibiting->get_contents([
            'menu_id' => 9,
            'content_year' => 2026,
            'content_type' => 'section'
        ]);

        // $section_background = (!empty($sectionDataContents)) ? $base_url . $sectionDataContents[0]['file_path'] : '';
        
        $data['section'] = [
            'subtitle' => $sectionDataContents[0]['subtitle']
            , 'body_text' => $sectionDataContents[0]['body_text']
            , 'body_img' => ''
        ];
        
        $data['features'] = $features;
        $data["data_menu"] = $this->M_Login->get_menu();

        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/exhibitorvisa',$data);
        $this->load->view('layouts/footer', $data);
	}

    public function why_exhibit_settings(){
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        $data = [];
        $this->template->load('Admin/roleme','module/settings/exhibiting/why_exhibit',$data);
    }

    public function exhibitor_visa_settings(){
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        $data = [];
        $this->template->load('Admin/roleme','module/settings/exhibiting/exhibitor_visa',$data);
    }

    public function exhibitor_list_settings(){
        
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        
        $this->template->load('Admin/roleme','module/settings/exhibiting/exhibitor_list',$data);
    }
    
    public function banner_add_data(){
        
        // Ambil input form
        // print_r($_FILES);
        // print_r($this->input->post());
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
        $content_year = $this->input->post('banneryear');
        $title      = $this->input->post('bannertitle');
        $subtitle   = $this->input->post('bannersubtitle');
        $link       = $this->input->post('bannerlink');
        $status     = $this->input->post('bannerStatus');

        $menu_id = 7;
        $created_date = date('Y-m-d H:i:s');
        $created_by = 'sysadmin';
        $content_type = 'banner';
        $body_text = '';
        $content_id = 0;

        // Konfigurasi upload gambar
        // assets/uploads/why_exhibit/banner.jpg
        // $config['upload_path']   = './uploads/why_exhibit/'; // pastikan folder ini dibuat
        // print_r(FCPATH);
        $file_path = 'assets/uploads/why_exhibit/';
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

        // echo "<pre> image:";
		// print_r($image);
		// echo "</pre>";
        // Prepare the data array
        // $data = [
        //     'menu_id'       => $menu_id,      // replace $menu_id with your variable
        //     'content_year'  => $content_year, // replace $content_year with your variable
        //     'content_type'  => $content_type, // replace $content_type with your variable
        //     'title'         => $title,        // replace $title with your variable
        //     'subtitle'      => $subtitle,     // replace $subtitle with your variable
        //     'body_text'     => $body_text,    // replace $body_text with your variable
        //     'created_date'  => $created_date, // usually date('Y-m-d H:i:s')
        //     'created_by'    => $created_by,   // your user id or name
        //     'modified_date' => $created_date,// usually date('Y-m-d H:i:s')
        //     'modified_by'   => $created_by   // your user id or name
        // ];

        // $sort_order = 1;
        // $is_main = 1;

        // $dataMedia = [
        //     'id'              => $id,             // replace with actual id or leave null if auto-increment
        //     'content_id'      => $content_id,     // the related content ID
        //     'media_type'      => 'image',     // e.g., 'image', 'video', etc.
        //     'file_path'       => $file_path . $image,      // path on server
        //     'sort_order'      => $sort_order,     // integer
        //     'is_main'         => $is_main,        // 0 or 1
        //     'created_date'    => $created_date,   // usually date('Y-m-d H:i:s')
        //     'created_by'      => $created_by,     // user id or name
        //     'modified_date'   => $created_date,  // usually date('Y-m-d H:i:s')
        //     'modified_by'     => $created_by     // user id or name
        // ];

        // print_r($data);
        // print_r($dataMedia);
        // die();

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
            redirect('exhibiting/why-exhibit-settings');

        } catch (Exception $e) {
            // Jika ada error
            log_message('error', 'Banner save error: ' . $e->getMessage());
            $this->flashdata_set([
                'error' => 'Terjadi kesalahan saat menyimpan banner.'
            ]);
            redirect('exhibiting/why-exhibit-settings');
        }
    }

    public function why_exhibit_banner_get_data($id){

        $IDBanner = (int) $id;
        // $activeBanners = $this->M_Exhibiting->get('csi_contents', [
        //     'id' => $IDBanner
        // ])->row_array();

        $activeBanners = $this->M_Exhibiting->fetchData(
            'csi_contents c',
            ['c.id' => $IDBanner],
            [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
            'c.id, c.content_year, c.content_type, c.title, c.subtitle, c.status, cm.file_path as image, cm.url_path as link',
            ['c.id' => 'DESC']
        )->row_array();
        // print_r($activeBanners);
        // die();
        
        // Tambahkan base_url di sini
        if (!empty($activeBanners['image'])) {
            $activeBanners['image'] = base_url($activeBanners['image']);
        }
        // echo "<pre> activeBanners:";
		// print_r($activeBanners);
		// echo "</pre>";

        // die();

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
    
    public function why_exhibit_banner_update()
    {

        try {
            $id             = $this->input->post('id');
            $content_year   = $this->input->post('banneryear');
            $title          = $this->input->post('bannertitle');
            $subtitle       = $this->input->post('bannersubtitle');
            $link           = $this->input->post('bannerlink');
            $status         = $this->input->post('bannerStatus'); // active / inactive

            $modified_date  = date('Y-m-d H:i:s');
            $id_menus = 7;
            // validasi ID
            if (empty($id)) {
                throw new Exception("ID tidak ditemukan.");
            }

            $file_path = 'assets/uploads/why_exhibit/';

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
    
    public function why_exhibit_banner_delete($id = null)
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

    public function why_exhibit_content_get_data($id){

        // echo "<pre> ID:";
        // print_r($id);
        // echo "</pre>";
        // die();

        $IDContent = (int) $id;

        $activeContent = $this->M_Exhibiting->fetchData(
            'csi_contents c',
            ['c.id' => $IDContent],
            [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
            'c.id, c.content_year, c.content_type, c.title, c.subtitle, c.body_text, c.status, cm.file_path as image, cm.url_path as link',
            ['c.id' => 'DESC']
        )->row_array();
        // print_r($activeContent);
        // die();
        
        // Tambahkan base_url di sini
        if (!empty($activeContent['image'])) {
            $activeContent['image'] = base_url($activeContent['image']);
        }
        // echo "<pre> activeContent:";
		// print_r($activeContent);
		// echo "</pre>";

        // die();

        if ($activeContent) {
            // kembalikan data JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($activeContent));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => false,
                    'message' => 'Banner not found'
                ]));
        }
    }
    
    public function why_exhibit_section_update()
    {
        // echo "<pre> POST:";
        // print_r($this->input->post());
        // echo "</pre>";

        // echo "<pre> IMAGE FILES:";
        // print_r($_FILES);
        // echo "</pre>";

        
        // die();
        if ($this->input->is_ajax_request()) {
            try {
                $idsection          = $this->input->post('id');
                $sectionyear        = $this->input->post('sectionyear');
                $sectiontitle       = $this->input->post('sectiontitle');
                $sectiondescription = $this->input->post('sectiondescription');
                $sectionStatus      = $this->input->post('sectionStatus'); // active / inactive

                $modified_date  = date('Y-m-d H:i:s');
                // validasi ID
                if (empty($idsection)) {
                    throw new Exception("ID tidak ditemukan.");
                }

                $file_path = 'assets/uploads/why_exhibit/';

                $image_path = null;
                
                if (!empty($_FILES['sectionimage']['name'])) {
                    $config['upload_path']   = FCPATH . $file_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size']      = 2048;
                    $config['encrypt_name']  = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('sectionimage')) {
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
                /*
                    $idsection          
                    $sectionyear        
                    $sectiontitle       
                    $sectiondescription 
                    $sectionStatus      

                */
                
                // data yang akan diupdate
                $datasection = [
                    'content_year' => $sectionyear,
                    'title'        => $sectiontitle,
                    'body_text'    => $sectiondescription,
                    'status'       => $sectionStatus,
                    'modified_date'=> $modified_date
                ];

                $update = $this->M_Exhibiting->update('csi_contents', ['id' => $idsection], $datasection);
                
                $mediaExist = $this->M_Exhibiting->get('csi_content_media', [
                    'content_id' => $idsection
                ])->num_rows();

                if ($mediaExist > 0) {
                
                    $datasectionMedia = [
                        'modified_date'=> $modified_date
                    ];

                    if ($image_path) {
                        $datasectionMedia['file_path'] = $image_path;
                    }

                    $update = $this->M_Exhibiting->update('csi_content_media', ['content_id' => $idsection], $datasectionMedia);
                }

                if ($update) {
                    $response = ['success' => true, 'message' => 'Section berhasil diperbarui'];
                } else {
                    $response = ['success' => false, 'message' => 'Gagal memperbarui section'];
                }

            } catch (Exception $e) {
                $response = ['success' => false, 'message' => $e->getMessage()];
            }

            echo json_encode($response);
            exit;
            return; // atau exit;
        }
        
        redirect('exhibiting/why-exhibit-settings');
        
    }
    
    public function why_exhibit_section_add()
    {
        // echo "<pre> POST:";
        // print_r($this->input->post());
        // echo "</pre>";

        // echo "<pre> IMAGE FILES:";
        // print_r($_FILES);
        // echo "</pre>";

        
        // die();
        if ($this->input->is_ajax_request()) {
            $menu_id = 7;
            $created_date = date('Y-m-d H:i:s');
            $created_by = 'sysadmin';
            $content_type = 'section';
            $body_text = '';
            $content_id = 0;

            try {
                $sectionyear        = $this->input->post('addsectionyear');
                $sectiontitle       = $this->input->post('addsectiontitle');
                $sectiondescription = $this->input->post('addsectiondescription');
                $sectionStatus      = $this->input->post('addsectionStatus'); // active / inactive

                $file_path = 'assets/uploads/why_exhibit/';

                $image_path = null;
                
                if (!empty($_FILES['addsectionimage']['name'])) {
                    $config['upload_path']   = FCPATH . $file_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size']      = 2048;
                    $config['encrypt_name']  = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('addsectionimage')) {
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
                /*
                    $idsection          
                    $sectionyear        
                    $sectiontitle       
                    $sectiondescription 
                    $sectionStatus      

                */
                
                $datasection = [
                    'menu_id'       => $menu_id,      // replace $menu_id with your variable
                    'content_year'  => $sectionyear, // replace $content_year with your variable
                    'content_type'  => $content_type, // replace $content_type with your variable
                    'title'         => $sectiontitle,        // replace $title with your variable
                    
                    'body_text'     => $sectiondescription,    // replace $body_text with your variable
                    'created_date'  => $created_date, // usually date('Y-m-d H:i:s')
                    'created_by'    => $created_by,   // your user id or name
                    'modified_date' => $created_date,// usually date('Y-m-d H:i:s')
                    'modified_by'   => $created_by   // your user id or name
                ];

                $this->db->insert('csi_contents', $datasection);
                $content_id = $this->db->insert_id();
                // Simpan ke DB lewat model

                $sort_order = 1;
                $is_main = 1;
                if ($image_path) {
                    $datasectionMedia = [
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
                    $this->db->insert('csi_content_media', $datasectionMedia);
                }

                $response = ['success' => true, 'message' => 'Section berhasil ditambahkan'];

            } catch (Exception $e) {
                $response = ['success' => false, 'message' => $e->getMessage()];
            }

            echo json_encode($response);
            exit;
            return; // atau exit;
        }
        
        redirect('exhibiting/why-exhibit-settings');
        
    }

    public function why_exhibit_visa_get_data($id){

        // echo "<pre> VISA ID:";
        // print_r($id);
        // echo "</pre>";
        // die();

        $IDVisa = (int) $id;

        $activeVisaInformation = $this->M_Exhibiting->fetchData(
            'csi_contents c',
            ['c.id' => $IDVisa],
            [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
            'c.id, c.content_year, c.content_type, c.title, c.subtitle, c.body_text, c.status, cm.file_path as image, cm.url_path as link',
            ['c.id' => 'DESC']
        )->row_array();
        // print_r($activeVisaInformation);
        // die();
        
        // Tambahkan base_url di sini
        if (!empty($activeVisaInformation['image'])) {
            $activeVisaInformation['image'] = base_url($activeVisaInformation['image']);
        }
        // echo "<pre> activeVisaInformation:";
		// print_r($activeVisaInformation);
		// echo "</pre>";

        // die();

        if ($activeVisaInformation) {
            // kembalikan data JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($activeVisaInformation));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => false,
                    'message' => 'Visa not found'
                ]));
        }
    }
    
    public function exhibitor_content_get_data($id){

        // echo "<pre> ID:";
        // print_r($id);
        // echo "</pre>";
        // die();

        $IDContent = (int) $id;

        $activeContent = $this->M_Exhibiting->fetchData(
            'csi_contents c',
            ['c.id' => $IDContent],
            [['csi_content_media cm', 'cm.content_id = c.id', 'left']],
            'c.id, c.content_year, c.content_type, c.title, c.subtitle, c.body_text, c.status, cm.file_path as image, cm.url_path as link',
            ['c.id' => 'DESC']
        )->row_array();
        // print_r($activeContent);
        // die();
        
        // Tambahkan base_url di sini
        if (!empty($activeContent['image'])) {
            $activeContent['image'] = base_url($activeContent['image']);
        }
        // echo "<pre> activeContent:";
		// print_r($activeContent);
		// echo "</pre>";

        // die();

        if ($activeContent) {
            // kembalikan data JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($activeContent));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'status' => false,
                    'message' => 'Banner not found'
                ]));
        }
    }

    //exhibitor_visa_section_add
    public function exhibitor_visa_section_add()
    {
        // echo "<pre> POST:";
        // print_r($this->input->post());
        // echo "</pre>";

        // echo "<pre> IMAGE FILES:";
        // print_r($_FILES);
        // echo "</pre>";

        
        // die();
        if ($this->input->is_ajax_request()) {
            $menu_id = 9;
            $created_date = date('Y-m-d H:i:s');
            $created_by = 'sysadmin';
            $content_type = 'section';
            $body_text = '';
            $content_id = 0;

            try {
                $visa_year       = $this->input->post('add_visa_year');
                $visa_title      = $this->input->post('add_visa_title');
                $visa_description= $this->input->post('add_visa_description');
                $visa_status     = $this->input->post('add_visa_status'); // active / inactive

                $file_path = 'assets/uploads/exhibitor_visa/';

                $image_path = null;
                    
                if (!empty($_FILES['add_visa_image']['name'])) {
                    $config['upload_path']   = FCPATH . $file_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size']      = 2048;
                    $config['encrypt_name']  = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('add_visa_image')) {
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
                /*
                    $idsection          
                    $sectionyear        
                    $sectiontitle       
                    $sectiondescription 
                    $sectionStatus      

                */
                
                $datasection = [
                    'menu_id'       => $menu_id,      // replace $menu_id with your variable
                    'content_year'  => $visa_year, // replace $content_year with your variable
                    'content_type'  => $content_type, // replace $content_type with your variable
                    'title'         => $visa_title,        // replace $title with your variable
                    
                    'body_text'     => $visa_description,    // replace $body_text with your variable
                    'created_date'  => $created_date, // usually date('Y-m-d H:i:s')
                    'created_by'    => $created_by,   // your user id or name
                    'modified_date' => $created_date,// usually date('Y-m-d H:i:s')
                    'modified_by'   => $created_by   // your user id or name
                ];

                $this->db->insert('csi_contents', $datasection);
                $content_id = $this->db->insert_id();
                // Simpan ke DB lewat model

                $sort_order = 1;
                $is_main = 1;
                if ($image_path) {
                    $datasectionMedia = [
                        'content_id'      => $content_id,     // the related content ID
                        'media_type'      => 'image',     // e.g., 'image', 'video', etc.
                        'file_path'       => $image_path,      // path on server
                        'sort_order'      => $sort_order,     // integer
                        'is_main'         => $is_main,        // 0 or 1
                        'created_date'    => $created_date,   // usually date('Y-m-d H:i:s')
                        'created_by'      => $created_by,     // user id or name
                        'modified_date'   => $created_date,  // usually date('Y-m-d H:i:s')
                        'modified_by'     => $created_by     // user id or name
                    ];
                    $this->db->insert('csi_content_media', $datasectionMedia);
                }

                $response = ['success' => true, 'message' => 'Section berhasil ditambahkan'];

            } catch (Exception $e) {
                $response = ['success' => false, 'message' => $e->getMessage()];
            }

            echo json_encode($response);
            exit;
            return; // atau exit;
        }
        
        redirect('exhibiting/why-exhibit-settings');
        
    }

    public function exhibitor_visa_section_update()
    {
        // echo "<pre> POST:";
        // print_r($this->input->post());
        // echo "</pre>";

        // echo "<pre> IMAGE FILES:";
        // print_r($_FILES);
        // echo "</pre>";

        
        // die();
        if ($this->input->is_ajax_request()) {
            try {
                $visa_id          = $this->input->post('id');
                $visa_year        = $this->input->post('edit_visa_year');
                $visa_title       = $this->input->post('edit_visa_title');
                $visa_description = $this->input->post('edit_visa_description');
                $visa_Status      = $this->input->post('VisaStatus'); // active / inactive

                $modified_date  = date('Y-m-d H:i:s');
                // validasi ID
                if (empty($visa_id)) {
                    throw new Exception("ID tidak ditemukan.");
                }

                $file_path = 'assets/uploads/exhibitor_visa/';

                $image_path = null;
                
                if (!empty($_FILES['edit_visa_image']['name'])) {
                    $config['upload_path']   = FCPATH . $file_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size']      = 2048;
                    $config['encrypt_name']  = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('edit_visa_image')) {
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
                /*
                    $visa_id          
                    $visa_year        
                    $visa_title       
                    $visa_description 
                    $visa_Status           

                */
                
                // data yang akan diupdate
                $datasection = [
                    'content_year' => $visa_year,
                    'title'        => $visa_title,
                    'body_text'    => $visa_description,
                    'status'       => $visa_Status,
                    'modified_date'=> $modified_date
                ];

                $update = $this->M_Exhibiting->update('csi_contents', ['id' => $visa_id], $datasection);
                
                $mediaExist = $this->M_Exhibiting->get('csi_content_media', [
                    'content_id' => $visa_id
                ])->num_rows();

                if ($mediaExist > 0) {
                
                    $datasectionMedia = [
                        'modified_date'=> $modified_date
                    ];

                    if ($image_path) {
                        $datasectionMedia['file_path'] = $image_path;
                    }

                    $update = $this->M_Exhibiting->update('csi_content_media', ['content_id' => $visa_id], $datasectionMedia);
                }

                if ($update) {
                    $response = ['success' => true, 'message' => 'Section berhasil diperbarui'];
                } else {
                    $response = ['success' => false, 'message' => 'Gagal memperbarui section'];
                }

            } catch (Exception $e) {
                $response = ['success' => false, 'message' => $e->getMessage()];
            }

            echo json_encode($response);
            exit;
            return; // atau exit;
        }
        
        redirect('exhibiting/why-exhibit-settings');
        
    }

    public function exhibitor_visa_section_delete()
    {

        $id = (int) $this->input->post('exhibitor_visa_id');
        // $id = (int) $id;
        // echo "<pre> ID Delete xx:";
        // print_r($id);
        // echo "</pre>";

        
        // die();
        $this->db->trans_begin(); // Start transaction

        try {
            if (!$id) {
                throw new Exception('Invalid ID');
            }

            // Step 1: Delete from csi_content_media first
            $deletedMedia = $this->M_Exhibiting->delete('csi_content_media', ['content_id' => $id]);
            if ($deletedMedia === false) {
                throw new Exception('Failed to delete related media');
            }

            // Step 2: Delete from csi_contents
            $deletedContent = $this->M_Exhibiting->delete('csi_contents', ['id' => $id]);
            if ($deletedContent === false) {
                throw new Exception('Failed to delete content');
            }

            // Step 3: Commit if everything is fine
            if ($this->db->trans_status() === false) {
                throw new Exception('Transaction failed');
            }

            $this->db->trans_commit();

            $response = [
                'status' => 'success',
                'message' => 'Banner deleted successfully'
            ];
        } catch (Exception $e) {
            // Rollback on error
            $this->db->trans_rollback();

            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        echo json_encode($response);
    }

    
    public function exhibitor_visa_banner_update()
    {
        // print_r($this->input->post());
        // die();

        try {
            $id             = $this->input->post('id');
            $content_year   = $this->input->post('bannervisayear');
            $title          = $this->input->post('bannervisatitle');
            $subtitle       = $this->input->post('bannervisasubtitle');
            $link           = $this->input->post('bannervisalink');
            $status         = $this->input->post('bannervisaStatus'); // active / inactive

            $modified_date  = date('Y-m-d H:i:s');
            $id_menus = 9;
            // validasi ID
            if (empty($id)) {
                throw new Exception("ID tidak ditemukan.");
            }

            $file_path = 'assets/uploads/exhibitor_visa/';

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

    public function exhibitor_visa_banner_add(){
        
        // Ambil input form
        // print_r($_FILES);
        // print_r($this->input->post());
        // die();
        /*
        Array
            (
                [bannervisaimage] => Array
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
        $content_year = $this->input->post('bannervisayear');
        $title      = $this->input->post('bannervisatitle');
        $subtitle   = $this->input->post('bannervisasubtitle');
        $link       = $this->input->post('bannervisalink');
        $status     = $this->input->post('bannervisaStatus');

        $menu_id = 9;
        $created_date = date('Y-m-d H:i:s');
        $created_by = 'sysadmin';
        $content_type = 'banner';
        $body_text = '';
        $content_id = 0;

        // Konfigurasi upload gambar
        // assets/uploads/why_exhibit/banner.jpg
        // $config['upload_path']   = './uploads/why_exhibit/'; // pastikan folder ini dibuat
        // print_r(FCPATH);
        $file_path = 'assets/uploads/exhibitor_visa/';
        $config['upload_path'] = FCPATH . $file_path; // FCPATH = path ke public root CI

        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB
        // $config['max_size']      = 4096; // 4MB
        $config['encrypt_name']  = TRUE; // supaya nama unik

        $this->upload->initialize($config);

        if (!empty($_FILES['bannervisaimage']['name'])) {
            if ($this->upload->do_upload('bannervisaimage')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                // echo $this->upload->display_errors();
                // return;
                $this->flashdata_set([
                    'error' => $this->upload->display_errors()
                ]);
                redirect('exhibiting/exhibitor-visa-settings');
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
            redirect('exhibiting/exhibitor-visa-settings');

        } catch (Exception $e) {
            // Jika ada error
            log_message('error', 'Banner save error: ' . $e->getMessage());
            $this->flashdata_set([
                'error' => 'Terjadi kesalahan saat menyimpan banner.'
            ]);
            redirect('exhibiting/exhibitor-visa-settings');
        }
    }

    public function exhibitor_visa_banner_delete($id = null)
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

}
