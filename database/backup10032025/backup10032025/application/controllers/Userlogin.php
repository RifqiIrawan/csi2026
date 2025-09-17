<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Userlogin');          
    }

	public function index(){   
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }

    $data["data_userlogin"] = $this->M_Userlogin->get_userlogin();
    $this->template->load('Admin/role','module/userlogin',$data);
	}  

  public function Tambah(){   
    $nama = $this->input->post("nama");
    $username = $this->input->post("username");
    $password = md5($this->input->post("password"));
    $status = $this->input->post("status");
    $insert = $this->M_Userlogin->tambah($nama,$username,$password,$status);
    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('Userlogin');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('Userlogin');
    }   
	}

  public function ubah(){   
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $username = $this->input->post("username");
    $password = md5($this->input->post("password"));
    $status = $this->input->post("status");
    $ubah = $this->M_Userlogin->ubah($kode,$nama,$username,$password,$status);
    if($ubah == TRUE){
      $this->session->set_flashdata('ubah', 'Data Successfully Updated.');
      redirect('Userlogin');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Update.');
      redirect('Userlogin');
    }     
  }

  public function hapus(){
    $kode = $this->input->post("kode");
    // $folder = './foto/cabang/';
    // $file = $folder."/".substr($kode , 4); 
    // $this->load->helper('file');
    // delete_files($file, TRUE);
    // rmdir($file);

    $cek_data = $this->M_Userlogin->hapus($kode);
    if($cek_data == TRUE){
      // $this->session->set_flashdata('hapus', 'Data Deleted Successfully.');
      // redirect('Userlogin');         
      echo "OK";
    }
    else{
      // $this->session->set_flashdata('tidak_hapus', 'Data Failed to be Deleted.');
      // redirect('Userlogin');
      echo "Gagal";
    }   
  }

  function logout(){
    $this->load->library('session');	
    $this->session->unset_userdata('id_user');
    redirect('Login');
  }
}
