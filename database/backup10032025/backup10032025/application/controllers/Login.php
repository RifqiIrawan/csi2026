<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Login');          
    }

	public function index(){   
    // if($this->session->userdata('id_user') == NULL){
    //   redirect('Login');
    // }
    
   //echo $this->session->userdata('id_user'); die();
    $this->load->view('login');
	}

	public function checking(){	 
		$username = $this->input->post('username');
		$password =  md5($this->input->post('password'));	
    $cek = $this->M_Login->cek_login($username,$password); 
    if($cek->num_rows() > 0){
      $row = $cek->row();   
        if($row->status == "A"){
          $session_data = array( 
                'id_user'   => $row->id_user,
                'nik'   => $row->nik,
                'nama'   => $row->nama_anggota,
                'email'   => $row->email, 
                'password'   => $row->password,
                'level'   => $row->level,
                'namalevel'   => $row->nama_level,
                'hp'   => $row->no_hp,
                'status'   => $row->status
          );   

          //print_r($session_data); die();
          $this->session->set_userdata($session_data);
          redirect('Dashboard');  
        }else{
          echo "<script>alert('Akun anda belum aktif');window.location.href='login';</script>";
        }
    }
    else{
      echo "<script>alert('Maaf, anda belum terdaftar didatabase');window.location.href='back';</script>";
    }
	}

  function back(){    
    redirect('Login');  
  }

  function logout(){
    $this->load->library('session');	
    $this->session->unset_userdata('id_user');
    redirect('login');
  }

  function get_ip(){    
    $this->load->view('get_ip');
  }

  public function save_ip_visitor(){
    $ip = $_SERVER['REMOTE_ADDR'];
		$ip_public = str_replace('"', '', $this->input->post('ip'));
		$city = str_replace('"', '', $this->input->post('city'));
		$country = str_replace('"', '', $this->input->post('country'));
		$loc = str_replace('"', '', $this->input->post('loc'));
		$org = str_replace('"', '', $this->input->post('org'));
		$timezone = str_replace('"', '', $this->input->post('timezone'));

    $q = $this->db->query("SELECT * FROM 
                                visitor_ip where 1=1 
                                and ip4 = '".$ip."' 
                                and ip_public = '".$ip_public."' 
                                and city = '".$city."'");
    $row = $q->row();
    if(empty($row)){
      $this->db->query("INSERT INTO 
                        visitor_ip(ip4,ip_public,city,country,lokasi,vendor,timezone,datecreated) 
                        Values
                        ('".$ip."','".$ip_public."','".$city."','".$country."'
                        ,'".$loc."','".$org."','".$timezone."',CURRENT_TIME())
      ");
    }
    else{
      //echo "ada";
    }
  }

  public function save_ip_visitor_test(){    
		$test = $this->input->post('test');
    print_r($test);		
  }
}
