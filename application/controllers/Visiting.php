<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiting extends CI_Controller {

  public function __construct(){
    parent::__construct();       
    $this->load->model('M_Login');   
    $this->load->model('M_Form');
  }

	public function index(){    
    $uri = $this->uri->segment(2);
    $url = $this->uri->segment(3);

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

    // if(empty($uri)){      
    // echo "<pre>";
    // print_r($r->folder);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($data['show_features']);
    // echo "</pre>";
    // die();
    $this->load->view('layouts/header', $data);
    $this->load->view('visiting',$data);
    $this->load->view('layouts/footer', $data);
        // if(empty($uri)){      
        // echo "<pre>";
        // print_r($data["email"]);
        // echo "</pre>";
        // $this->load->view('visiting',$data);
        // }else if($uri == "info_news"){      
        // $this->load->view('module/info_news',$data);
        // }
        // else if($uri == "event_update"){      
        // $this->load->view('module/event_update',$data);
        // }    
	}

  public function Login(){   
    $username = $this->input->post('username');
		$password = md5($this->input->post('password'));	
    $cek = $this->M_Login->cek_login($username,$password); 
    if($cek->num_rows() > 0){
      $row = $cek->row();         
        if($row->status == "A"){
          $session_data = array( 
                'id_user'   => $row->id,
                'nama'   => ucwords($row->nama),
                'username'   => $row->username, 
                'password'   => $row->password,
                'status'   => $row->status
          );   
          $this->session->set_userdata($session_data);
          redirect('home');  
        }else{
          echo "<script>alert('Sorry,your account does not active');window.location.href='Login';</script>";
        }
    }
    else{
      echo "<script>alert('Sorry, username does not exist in database');window.location.href='Login';</script>";
    }
	}

  public function admin(){     
    if($this->session->userdata('id_user') == NULL){
      redirect('cek_login');
    }
    $this->template->load('Admin/role','module/home_admin');
	}

  public function visitor(){
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_visitor"] = $this->M_Login->get_visitor();
    $this->template->load('Admin/role','module/get_visitor',$data);
  }

  public function logout(){
    $this->load->library('session');	
    $this->session->unset_userdata('id_user');
    redirect('login');
  }

  public function submit_form(){
    $name = $this->input->post('name');
		$email = $this->input->post('email');	
    $subject = $this->input->post('subject');
		$message = $this->input->post('message');	
    
    $cek = $this->M_Login->submit_form($name,$email,$subject,$message); 
    if($cek == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('dashboard');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('dashboard');
    }   
    //echo $name." / ".$email." / ".$subject." / ".$message;
  }

  public function reset(){      
    $this->load->view('reset');
	}

  public function reset_password(){      
    $username = $this->input->post('username');    
    $pass = "4321";
    $q = $this->db->query("SELECT * from login
                              where username = '".$username."'"); 
    $row = $q->row();
    if(!empty($row)){      
      $this->db->query("UPDATE login set password = '".md5($pass)."' where username = '".$username."'");      
      echo "<script type=\"text/javascript\">alert(\"Success, your password has been reset. Thank You\");window.location.href=\"login\"</script>";
    }else{
      echo "<script type=\"text/javascript\">alert(\"Sorry, username doesn't exist in database\");window.location.href=\"login\"</script>";
    }
	}

  // public function info_news(){      
  //   echo $this->uri->segment(2);
    
	// }
}
