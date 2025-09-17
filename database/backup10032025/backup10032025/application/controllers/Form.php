<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');	
        $this->load->model('M_Form');
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
  public function Form_Header()
  {    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_header"] = $this->M_Form->get_header();
    $this->template->load('Admin/role','module/form_header',$data);
  }

  //controller header
  public function tambah_header(){   
    $file = $_FILES;
    $folder = './assets/images/upload/header/';
    $nama = $this->input->post("nama");
    $status = $this->input->post("status");
       
    $get_kode = $this->M_Form->get_kode_header();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "Image".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_header($nama,$config['file_name'],$folder,$number,$status);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_header');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_header');
    }   

    // $insert = $this->M_Unit->tambah($kode,$nama);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }
  public function ubah_header(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $urut = $this->input->post("urut");
    $status = $this->input->post("status");       
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from design_header
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_header($kode,$nama,$config['file_name'],$urut,$status);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_header');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_header');
    }   
  }
  public function hapus_header(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from design_header
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_header($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }
  
  //controller product
  public function Form_Product(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_product"] = $this->M_Form->get_product();
    $this->template->load('Admin/role','module/form_product',$data);
  }
  public function tambah_product(){   
    $file = $_FILES;
    $folder = './assets/images/upload/product/';
    $nama = $this->input->post("nama");
    $status = $this->input->post("status");
       
    $get_kode = $this->M_Form->get_kode_product();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }
	  
	  
	 // echo $number;die();

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= "Product".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_product($nama,$config['file_name'],$folder,$number,$status);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_product');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_product');
    }   
  }
  public function ubah_product(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $urut = $this->input->post("urut");
    $status = $this->input->post("status");       
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from product
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_product($kode,$nama,$config['file_name'],$urut,$status);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_product');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_product');
    }   
  }
  public function hapus_product(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from product
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_product($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller company
  public function Form_Company(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_company"] = $this->M_Form->get_company();
    $this->template->load('Admin/role','module/form_company',$data);
  }
  public function tambah_company(){   
    $file = $_FILES;
    $folder = './assets/images/upload/company/';
    $nama = $this->input->post("nama");
    $status = $this->input->post("status");
    $keterangan = $this->input->post("keterangan");    
       
    $get_kode = $this->M_Form->get_kode_company();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "Image".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_company($nama,$config['file_name'],$folder,$number,$status,$keterangan);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_company');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_company');
    }   

    // $insert = $this->M_Unit->tambah($kode,$nama);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }
  public function ubah_company(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $urut = $this->input->post("urut");
    $status = $this->input->post("status");       
    $keterangan = $this->input->post("keterangan_edit");    
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from company
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_company($kode,$nama,$config['file_name'],$urut,$status,$keterangan);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_company');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_company');
    }   
  }
  public function hapus_company(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from company
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_company($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller partner
  public function Form_Partner(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_partner"] = $this->M_Form->get_partner();
    $this->template->load('Admin/role','module/form_partner',$data);
  }
  public function tambah_partner(){   
    $file = $_FILES;
    $folder = './assets/images/upload/partner/';
    $nama = $this->input->post("nama");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
       
    $get_kode = $this->M_Form->get_kode_partner();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "Partner".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_partner($nama,$config['file_name'],$folder,$number,$url,$status);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_partner');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_partner');
    }   

    // $insert = $this->M_Unit->tambah($kode,$nama);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }
  public function ubah_partner(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $urut = $this->input->post("urut");
    $url = $this->input->post("url"); 
    $status = $this->input->post("status");       
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from partner
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  $r->file_name;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_partner($kode,$nama,$urut,$url,$status);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_partner');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_partner');
    }   
  }
  public function hapus_partner(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from partner
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_partner($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller customer
  public function Form_Customer(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_customer"] = $this->M_Form->get_customer();
    $this->template->load('Admin/role','module/form_customer',$data);
  }
  public function tambah_customer(){   
    $kategori = $this->input->post("kategori");
    $nama = $this->input->post("nama");
    $services = $this->input->post("services");
    $status = $this->input->post("status");     
    $insert = $this->M_Form->tambah_customer($kategori,$nama,$services,$status);

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_customer');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_customer');
    }   
  }
  public function ubah_customer(){   
    $kode = $this->input->post("kode");
    $kategori = $this->input->post("kategori");
    $nama = $this->input->post("nama");
    $services = $this->input->post("services");
    $status = $this->input->post("status");     
    $ubah = $this->M_Form->ubah_customer($kode,$kategori,$nama,$services,$status);
    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_customer');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_customer');
    }   
  }
  public function hapus_customer(){
    $kode = $this->input->post("kode");
    $cek_data = $this->M_Form->hapus_customer($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller customer
  public function Form_Sosmed(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_sosmed"] = $this->M_Form->get_sosmed();
    $this->template->load('Admin/role','module/form_sosmed',$data);
  }

  public function tambah_sosmed(){   
    $nama = $this->input->post("nama");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");
    $status = $this->input->post("status");     
    $insert = $this->M_Form->tambah_sosmed($nama,$icon,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('sosmed');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('sosmed');
    }   
  }

  public function ubah_sosmed(){   
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");  
    $status = $this->input->post("status");     
    $ubah = $this->M_Form->ubah_sosmed($kode,$nama,$icon,$url,$status);
    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('sosmed');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('sosmed');
    }   
  }

  public function hapus_sosmed(){
    $kode = $this->input->post("kode");
    $cek_data = $this->M_Form->hapus_sosmed($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller profile
  public function profile(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_profile"] = $this->M_Form->get_profile();
    $this->template->load('Admin/role','module/profile',$data);
  }

  public function tambah_profile(){   
    $file = $_FILES;
    $folder = './assets/images/upload/logo/';
    $company = $this->input->post("company");
    $nick = $this->input->post("nick");
    $address = $this->input->post("address");
    $maps = $this->input->post("maps");
    $phone = $this->input->post("phone");
    $fax = $this->input->post("fax");
    $email = $this->input->post("email");
    $website = $this->input->post("website");
    $status = $this->input->post("status");
       
    $get_kode = $this->M_Form->get_kode_profile();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "logo_com".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_profile($company,$config['file_name'],$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status);        
      }      
    }

    //$insert = $this->M_Form->tambah_profile($nama,$icon,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('profile');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('profile');
    }   
  }

  public function ubah_profile(){   
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");  
    $status = $this->input->post("status");     
    $ubah = $this->M_Form->ubah_profile($kode,$nama,$icon,$url,$status);
    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('profile');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('profile');
    }   
  }

  public function hapus_profile(){
    $kode = $this->input->post("kode");
    $cek_data = $this->M_Form->hapus_profile($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller event
  public function Form_Event(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_event"] = $this->M_Form->get_event();
    $this->template->load('Admin/role','module/form_event',$data);
  }

  public function tambah_event(){   
    $file = $_FILES;
    $folder = './assets/images/upload/event/';
    $nama = $this->input->post("nama");
    $posisi = $this->input->post("posisi");
    $status = $this->input->post("status");
    $keterangan = $this->input->post("keterangan");    
       
    $get_kode = $this->M_Form->get_kode_event();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "Image".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_event($nama,$config['file_name'],$folder,$posisi,$number,$status,$keterangan);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_event');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_event');
    }   

    // $insert = $this->M_Unit->tambah($kode,$nama);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }

  public function ubah_event(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $posisi = $this->input->post("posisi");
    $status = $this->input->post("status");       
    $keterangan = $this->input->post("keterangan_edit");    
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from event
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_event($kode,$nama,$config['file_name'],$posisi,$status,$keterangan);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_event');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_event');
    }   
  }

  public function hapus_event(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from event
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_event($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  //controller news
  public function Form_News(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_news"] = $this->M_Form->get_news();
    $this->template->load('Admin/role','module/form_news',$data);
  }

  public function tambah_news(){   
    $file = $_FILES;
    $folder = './assets/images/upload/news/';
    $nama = $this->input->post("nama");
    $posisi = $this->input->post("posisi");
    $status = $this->input->post("status");
    $keterangan = $this->input->post("keterangan");    
       
    $get_kode = $this->M_Form->get_kode_news();    
    $row = $get_kode->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "Image".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $insert = $this->M_Form->tambah_news($nama,$config['file_name'],$folder,$posisi,$number,$status,$keterangan);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('simpan', 'Data Saved Successfully.');
      redirect('form_news');         
    }
    else{
      $this->session->set_flashdata('tidak', 'Data Failed to Save.');
      redirect('form_news');
    }   

    // $insert = $this->M_Unit->tambah($kode,$nama);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }

  public function ubah_news(){   
    $file = $_FILES;
    $kode = $this->input->post("kode");
    $nama = $this->input->post("nama");
    $posisi = $this->input->post("posisi");
    $status = $this->input->post("status");       
    $keterangan = $this->input->post("keterangan_edit");    
    
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $sql = $this->db->query(" SELECT * from news
                              where id = '".$kode."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;
      unlink("".$r->folder_name."".$r->file_name."");

      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2 ['maintain_ratio'] = false;
        $config2 ['create_thumb'] = false;
        // $config2['width']         = 900;
        // $config2['height']       = 900;		
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $this->image_lib->resize();
        // $this->image_lib->clear();
        // $nama_file = $config['file_name'];
        // $nama_keterangan = $nama[$i];
        $ubah = $this->M_Form->ubah_news($kode,$nama,$config['file_name'],$posisi,$status,$keterangan);
      }      
    }

    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('form_news');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('form_news');
    }   
  }

  public function hapus_news(){
    $kode = $this->input->post("kode");
    $sql = $this->db->query(" SELECT * from news
                              where id = '".$kode."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Form->hapus_news($kode);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Gagal";
    }   
  }

  public function contact_us(){
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_contact_us"] = $this->M_Form->contact_us();
    $this->template->load('Admin/role','module/contact_us',$data);
  }

  // public function content(){
  //   if($this->session->userdata('id_user') == NULL){
  //     redirect('Login');
  //   }
  //   $data["data_content"] = $this->M_Form->content();
  //   $this->template->load('Admin/role','module/content',$data);
  // }

  public function ubah_content(){   
    $keterangan = $this->input->post("keterangan");
    $ubah = $this->db->query(" UPDATE content SET 
                                      freetext = '".$keterangan."'
                              WHERE id = '1'
                      ");
    if($ubah == true){
      $this->session->set_flashdata('ubah', 'Data Saved Successfully.');
      redirect('home');         
    }
    else{
      $this->session->set_flashdata('tidak_ubah', 'Data Failed to Save.');
      redirect('home');
    }   
  }

  public function export_excel(){
    error_reporting(0);
	  date_default_timezone_set("Asia/Bangkok");
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel.php";
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php";
    $a = 2;			
    $BStyle = array(
        'borders' => array(
        'outline' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
        )
    );
    $BStyle2 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );

    $BStyle3 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $textFormat='@';

    $phpExcel = new PHPExcel;
    $phpExcel->getDefaultStyle()->getFont()->setName('Times New Roman');	
    $sheet = $phpExcel ->getActiveSheet();
    $sheet->setTitle('Export Submit Form.xls');
    $sheet ->getCell('A1')->setValue('No.')->getStyle('A1')->applyFromArray($BStyle2);
    $sheet ->getCell('B1')->setValue('Name')->getStyle('B1')->applyFromArray($BStyle2);
    $sheet ->getCell('C1')->setValue('Email')->getStyle('C1')->applyFromArray($BStyle2);
    $sheet ->getCell('D1')->setValue('Subject')->getStyle('D1')->applyFromArray($BStyle2);
    $sheet ->getCell('E1')->setValue('Message')->getStyle('E1')->applyFromArray($BStyle2);
    $sheet ->getStyle('A1:E1')->getFont()->setBold(true)->setSize(12);
    $num = 1;
    $data = $this->M_Form->contact_us();
    foreach($data as $row) {	
      $sheet ->getCell('A'.$a)->setValue($num)->getStyle('A'.$a)->applyFromArray($BStyle2);
      $sheet ->getCell('B'.$a)->setValue(ucwords(strtolower($row->name)))->getStyle('B'.$a)->applyFromArray($BStyle)->getNumberFormat()->setFormatCode($textFormat);
      $sheet ->getCell('C'.$a)->setValue($row->email)->getStyle('C'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('D'.$a)->setValue(ucwords(strtolower($row->subject)))->getStyle('D'.$a)->applyFromArray($BStyle)->getNumberFormat()->setFormatCode($textFormat);
      $sheet ->getCell('E'.$a)->setValue($row->message)->getStyle('E'.$a)->applyFromArray($BStyle)->getNumberFormat()->setFormatCode($textFormat);
      $num++;
      $a++;
    }	

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);   
    $filename = "Export Submit Form.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel5'); 
    $objWriter->save('php://output');		
  } 

  public function export_visitor(){
    $this->load->model('M_Login');
    error_reporting(0);
	  date_default_timezone_set("Asia/Bangkok");
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel.php";
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php";
    $a = 2;			
    $BStyle = array(
        'borders' => array(
        'outline' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
        )
    );
    $BStyle2 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );

    $BStyle3 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $textFormat='@';

    $phpExcel = new PHPExcel;
    $phpExcel->getDefaultStyle()->getFont()->setName('Times New Roman');	
    $sheet = $phpExcel ->getActiveSheet();
    $sheet->setTitle('Export Visitor Website.xls');
    $sheet ->getCell('A1')->setValue('No.')->getStyle('A1')->applyFromArray($BStyle2);
    $sheet ->getCell('B1')->setValue('IP Address')->getStyle('B1')->applyFromArray($BStyle2);
    $sheet ->getCell('C1')->setValue('Ip Public')->getStyle('C1')->applyFromArray($BStyle2);
    $sheet ->getCell('D1')->setValue('City')->getStyle('D1')->applyFromArray($BStyle2);
    $sheet ->getCell('E1')->setValue('Country')->getStyle('E1')->applyFromArray($BStyle2);
    $sheet ->getCell('F1')->setValue('Location')->getStyle('F1')->applyFromArray($BStyle2);
    $sheet ->getCell('G1')->setValue('Vendor')->getStyle('G1')->applyFromArray($BStyle2);
    $sheet ->getCell('H1')->setValue('Time/Zone')->getStyle('H1')->applyFromArray($BStyle2);
    $sheet ->getCell('I1')->setValue('Date')->getStyle('I1')->applyFromArray($BStyle2);
    $sheet ->getStyle('A1:I1')->getFont()->setBold(true)->setSize(12);
    $num = 1;
    $data = $this->M_Login->get_visitor();
    foreach($data as $row) {	
      $sheet ->getCell('A'.$a)->setValue($num)->getStyle('A'.$a)->applyFromArray($BStyle2);
      $sheet ->getCell('B'.$a)->setValue($row->ip4)->getStyle('B'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('C'.$a)->setValue($row->ip_public)->getStyle('C'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('D'.$a)->setValue(ucwords(strtolower($row->city)))->getStyle('D'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('E'.$a)->setValue($row->country)->getStyle('E'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('F'.$a)->setValue($row->lokasi)->getStyle('F'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('G'.$a)->setValue($row->endor)->getStyle('G'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('H'.$a)->setValue($row->timezone)->getStyle('H'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('I'.$a)->setValue(date("d F Y",strtotime($row->datecreated)))->getStyle('I'.$a)->applyFromArray($BStyle);
      $num++;
      $a++;
    }	

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);  
    $sheet->getColumnDimension('F')->setAutoSize(true);  
    $sheet->getColumnDimension('G')->setAutoSize(true);  
    $sheet->getColumnDimension('H')->setAutoSize(true);  
    $sheet->getColumnDimension('I')->setAutoSize(true);   
    $filename = "Export Visitor Website.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel5'); 
    $objWriter->save('php://output');		
  }

  public function export_customer(){
    error_reporting(0);
	  date_default_timezone_set("Asia/Bangkok");
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel.php";
    require APPPATH."../assets/vendors/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php";
    $a = 2;			
    $BStyle = array(
        'borders' => array(
        'outline' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
        )
    );
    $BStyle2 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );

    $BStyle3 = array(
        'borders' => array(
            'outline' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN
            )
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
    $textFormat='@';

    $phpExcel = new PHPExcel;
    $phpExcel->getDefaultStyle()->getFont()->setName('Times New Roman');	
    $sheet = $phpExcel ->getActiveSheet();
    $sheet->setTitle('Export Data Customer.xls');
    $sheet ->getCell('A1')->setValue('No.')->getStyle('A1')->applyFromArray($BStyle2);
    $sheet ->getCell('B1')->setValue('Company Name')->getStyle('B1')->applyFromArray($BStyle2);
    $sheet ->getCell('C1')->setValue('Goods/Services')->getStyle('C1')->applyFromArray($BStyle2);
    $sheet ->getCell('D1')->setValue('Category')->getStyle('D1')->applyFromArray($BStyle2);
    $sheet ->getCell('E1')->setValue('Status')->getStyle('E1')->applyFromArray($BStyle2);
    $sheet ->getStyle('A1:E1')->getFont()->setBold(true)->setSize(12);
    $num = 1;    
    $data = $this->M_Form->get_customer();
    foreach($data as $row) {	
      if($row->kategori == 1){
        $kat = "Domestic Customer";
      }else{        
        $kat = "Overseas Customer";
      }

      if($row->status == A){
        $sts = "Active";
      }else{        
        $sts = "Passive";
      }

      $sheet ->getCell('A'.$a)->setValue($num)->getStyle('A'.$a)->applyFromArray($BStyle2);
      $sheet ->getCell('B'.$a)->setValue($row->nama)->getStyle('B'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('C'.$a)->setValue(ucwords(strtolower($row->services)))->getStyle('C'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('D'.$a)->setValue($kat)->getStyle('D'.$a)->applyFromArray($BStyle);
      $sheet ->getCell('E'.$a)->setValue($sts)->getStyle('E'.$a)->applyFromArray($BStyle);
      $num++;
      $a++;
    }	

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true); 
    $filename = "Export Data Custome.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel5'); 
    $objWriter->save('php://output');		
  }
}
