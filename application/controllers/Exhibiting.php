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
            default:
                $this->whyexhibit_index();
        }
	}

    public function whyexhibit_index() {
        $uri = $this->uri->segment(2);
        $url = $this->uri->segment(3);
        $base_url = base_url(); 
        // echo "<pre> base_url:";
        // print_r($base_url);
        // echo "</pre>";

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
        // echo "<pre> sectionDataContents:";
        // print_r($sectionDataContents);
        // echo "</pre>";
        // die();

        $hero_background = (!empty($dataContents)) ? $base_url . $dataContents[0]['file_path'] : '';
        $hero_text = $dataContents['0']['title'];
        // echo "<pre> background_hero:";
        // print_r($hero_background);
        // echo "</pre>";
        // die();

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

        $data['section3'] = [
            'subtitle' => $sectionDataContents[2]['subtitle']
            , 'body_text' => $sectionDataContents[2]['body_text']
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


        // echo "<pre> section_background:";
        // print_r($data['section']);
        // echo "</pre>";
        // die();

        $features = [
            [
                'title' => 'NETWORKING OPPORTUNITIES',
                'icon'  => 'https://indointertex.com/wp-content/uploads/2024/12/2025_Web_Why_Visit2-1600x708.png',
                'desc'  => 'Seize networking opportunities with top companies through face-to-face meetings.'
            ]
        ];

        $data['features'] = $features;

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
            'content_type' => ''
        ]);

        // echo "<pre> dataContents:";
        // print_r($dataContents);
        // echo "</pre>";
        // die();
        
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

        // echo "<pre> exhibitors:";
        // print_r($data['exhibitors']);
        // echo "</pre>";
        // die();
        // $hero_background = (!empty($dataContents)) ? $base_url . $dataContents[0]['file_path'] : '';
        /*
        $data['exhibitors'] = [
            [
                'name'   => 'Abul Khair Group',
                'booth'  => 'A05',
                'logo'   => 'https://upload.wikimedia.org/wikipedia/en/9/9e/Logo_of_Abul_Khair_Group.svg', // kosong/null kalau tidak ada logo
                'menu_controller' => ''
            ],
            [
                'name'   => 'Actega GmbH',
                'booth'  => 'C01',
                'logo'   => 'actega.png',
                'menu_controller' => ''
            ],
            [
                'name'   => 'Aiger Engineering',
                'booth'  => 'B10',
                'logo'   => 'aiger.png',
                'menu_controller' => ''
            ],
            [
                'name'   => 'Ali Machinery Dubai',
                'booth'  => 'K10',
                'logo'   => 'ali_machinery.png',
                'menu_controller' => ''
            ],
            [
                'name'   => 'Anhui Genuine Paper Packing',
                'booth'  => 'M13',
                'logo'   => null,
                'menu_controller' => ''
            ],
            [
                'name'   => 'Anhui Great Nation Essential Oils Co., Ltd.',
                'booth'  => 'O30',
                'logo'   => 'anhui_great.png',
                'menu_controller' => ''
            ],
        ];
        */
        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/exhibitorlist',$data);
        $this->load->view('layouts/footer', $data);
    }

    public function company_profile($id = null){

        $content_media_id = (int) $id;
        $base_url = base_url(); 
        // echo "Function Company Profile:";
        // echo "<pre> id:";
        // print_r($id);
        // echo "</pre>";
        // die();

        $dataCompanies = $this->M_Exhibiting->get_content_company_profile([
            'content_media_id' => $content_media_id
        ])[0];

        $data['company'] = $dataCompanies;

        $data['company']->logo = (!empty($dataCompanies->file_path)) ? $base_url . $dataCompanies->file_path : '';

        // echo "Function Company Profile:";
        // echo "<pre> dataCompanies:";
        // print_r($data['company']);
        // echo "</pre>";
        // die();

        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/companyprofile',$data);
        $this->load->view('layouts/footer', $data);
	}

    public function exhibitor_visa(){

        $base_url = base_url(); 
        echo "Function Exhibitor Visa:";
        // echo "<pre> id:";
        // print_r($id);
        // echo "</pre>";
        die();

        // $dataCompanies = $this->M_Exhibiting->get_content_company_profile([
        //     'content_media_id' => $content_media_id
        // ])[0];

        // $data['company'] = $dataCompanies;

        // $data['company']->logo = (!empty($dataCompanies->file_path)) ? $base_url . $dataCompanies->file_path : '';


         // ambil banner dari csi_content_media
        $banner = $this->db->where('media_type', 'banner')
                           ->where('content_id', 1) // sesuaikan dengan ID konten Visa
                            ->get('csi_content_media')
                            ->row();

        // ambil deskripsi dari csi_content_company_profile (atau bisa tabel khusus visa)
        $profile = $this->db->where('content_id', 1)
                            ->get('csi_content_company_profile')
                            ->row();

        $data = [
            'banner'  => $banner,
            'profile' => $profile
        ];

        echo "<pre> data:";
        print_r($data);
        echo "</pre>";
        die();

        $this->load->view('layouts/header', $data);
        $this->load->view('module/exhibiting/exhibitorvisa',$data);
        $this->load->view('layouts/footer', $data);
	}

    public function why_exhibit_settings(){
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        
        $this->template->load('Admin/role','module/settings/exhibiting/why_exhibit',$data);
    }

    public function exhibitor_list_settings(){
        echo "Hellow World";
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        
        $this->template->load('Admin/role','module/settings/exhibiting/exhibitor_list',$data);
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
        $title      = $this->input->post('bannertitle');
        $subtitle   = $this->input->post('bannersubtitle');
        $link       = $this->input->post('bannerlink');
        $status     = $this->input->post('bannerStatus');

        $menu_id = 7;
        $content_year = 2026;
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
    
}
