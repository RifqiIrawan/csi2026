<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Unit');
    }

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }

    $data["data_unit"] = $this->M_Unit->get_data();
    $this->template->load('Admin/role','module/Unit',$data);
  }


  public function tambah(){   
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $insert = $this->M_Unit->tambah($kode,$nama);
    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
      redirect('Unit');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
      redirect('Unit');
    }   
  }

  public function ubah(){
    $kode = $this->input->post("kode"); 
    $kode_unit = $this->input->post("kode_unit"); 
    $nama = $this->input->post("nama");
    if(!empty($kode)){
      $ubah = $this->M_Unit->ubah($kode,$kode_unit,$nama);
      if($ubah == TRUE){
        $this->session->set_flashdata('ubah', 'Data berhasil diubah');
        redirect('Unit');         
      }
      else{
        $this->session->set_flashdata('tidak_ubah', 'Data tidak berhasil diubah');
        redirect('Unit');
      }   

    }else{
      $this->session->set_flashdata('gagal', 'Gagal merubah data');
        redirect('Unit');
    }
  }

  public function hapus(){
    $kode = $this->input->post("kode");
    $cek_data = $this->M_Unit->hapus($kode);
    if($cek_data == TRUE){
      $this->session->set_flashdata('hapus', 'Data berhasil dihapus');
      redirect('Unit');         
    }
    else{
      $this->session->set_flashdata('tidak_hapus', 'data tidak berhasil dihapus');
      redirect('Unit');
    }   
  }
}
