<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct(){
    parent::__construct();       
    $this->load->model('M_Login');   
    $this->load->model('M_Form');
  }

	public function index(){    
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
    $data["data_sponsors"] = $this->M_Login->get_sponsors();
    $data["data_coperation"] = $this->M_Login->get_coperation();
    
    // print_r($data["data_event"]);die();
    $this->load->view('dashboard',$data);
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

  // public function visitor(){
  //   if($this->session->userdata('id_user') == NULL){
  //     redirect('Login');
  //   }
  //   $data["data_visitor"] = $this->M_Login->get_visitor();
  //   $this->template->load('Admin/role','module/get_visitor',$data);
  // }

  public function logout(){
    $this->load->library('session');	
    $this->session->unset_userdata('id_user');
    redirect('login');
  }

  // public function submit_form(){
  //   $this->load->helper('url');
  //   $name = $this->input->post('name');
	// 	$email = $this->input->post('email');	
  //   $hp = $this->input->post('hp');
  //   $company = $this->input->post('company');
  //   $position = $this->input->post('position');
  //   $subject = $this->input->post('subject');
	// 	$message = $this->input->post('message');	
    
  //   $this->M_Login->submit_form($name,$email,$hp,$company,$position,$subject,$message); 
  //   if ($this->db->insert_id()) {
  //     echo "<script>alert('Data Saved Successfully');window.location.href = '".$_SERVER['HTTP_REFERER']."'</script>";
  //   } else {
  //     echo "<script>alert('Data Failed to Save');window.location.href = '".$_SERVER['HTTP_REFERER']."'</script>";
  //   }
  // }

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
}
