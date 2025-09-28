<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Home');     
    $this->load->library('upload');	
    $this->load->helper('file');        
  }

  public function Menu(){   
      if($this->session->userdata('id_user') == NULL){
          redirect('Login');
      }        
      $data["data_menu"] = $this->M_Home->get_menu();
      $this->template->load('Admin/role','module/Home/menu',$data);
  }

  public function add_menu(){
      $name = $this->input->post("name");
      $status = $this->input->post("status");
      $description = $this->input->post("descriptions");            
      $insert = $this->M_Home->add_menu($name,$status,$description);
      if($insert == true){
        $this->session->set_flashdata('save', 'Data Saved Successfully.');
        redirect('Home/Menu');         
      }
      else{
        $this->session->set_flashdata('not_save', 'Data Failed to Save.');
        redirect('Home/Menu');
      } 
  }

  public function update_menu(){
      $code = $this->input->post("code");
      $name = $this->input->post("name");
      $status = $this->input->post("status");
      $description = $this->input->post("descriptions_edit");            
      $insert = $this->M_Home->update_menu($code,$name,$status,$description);
      if($insert == true){
        $this->session->set_flashdata('update', 'Update Data Successfully.');
        redirect('Home/Menu');         
      }
      else{
        $this->session->set_flashdata('not_update', 'Update Data Failed.');
        redirect('Home/Menu');
      } 
  }

  public function delete_menu(){
      $code = $this->input->post("code");
      $cek_data = $this->M_Home->delete_menu($code);
      if ($this->db->affected_rows()) {
        echo "OK";
      }
      else{
        echo "Failed";
      }   
  }

  public function Date_Event(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_event"] = $this->M_Home->get_date_event();
    $this->template->load('Admin/role','module/Home/date_event',$data);
  }

  public function add_date_event(){    
    $folder1 = "./assets/images/upload/event/image1/";
    $folder2 = "./assets/images/upload/event/image2/";
    $name = $this->input->post("name");
    $title1 = $this->input->post("title1");
    $description1 = $this->input->post("descriptions");
    $title2 = $this->input->post("title2");
    $description2 = $this->input->post("descriptions2");
    $status = $this->input->post("status");    
    
    //for image1
    $_FILES['file1']['name'];
    $_FILES['file1']['type'];
    $_FILES['file1']['tmp_name'];
    $_FILES['file1']['error'];
    $_FILES['file1']['size'];  
    $type = explode(".",$_FILES['file1']['name']);
    $typ = $type;

    $config['upload_path']          = $folder1;
    $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
    $config['file_name']     		= md5("image1".date('Ymdhis'));
    $img1 = $config['file_name'].".".$typ[1];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);		
    if ($this->upload->do_upload('file1')) {
      echo "OK";
    }else{
      $error = array('error' => $this->upload->display_errors());
      echo "Error : ";
    }

    //for image2
    $_FILES['file2']['name'];
    $_FILES['file2']['type'];
    $_FILES['file2']['tmp_name'];
    $_FILES['file2']['error'];
    $_FILES['file2']['size'];      
    $type2 = explode(".",$_FILES['file2']['name']);
    $typ2 = $type2;
    $config['upload_path']          = $folder2;
    $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
    $config['file_name']     		= md5("image2".date('Ymdhis'));
    $img2 = $config['file_name'].".".$typ2[1];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);		
    if ($this->upload->do_upload('file2')) {
      echo "OK";
    }else{
      $error = array('error' => $this->upload->display_errors());
      echo "Error : ";
    }

    $insert = $this->M_Home->add_date_event($name,$title1,$description1,$img1,$title2,$description2,$img2,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Date_Event');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Date_Event');
    } 
  }

  public function update_date_event(){
      $code = $this->input->post("code");
      $name = $this->input->post("name");
      $status = $this->input->post("status");
      $description = $this->input->post("description_edit");            
      $insert = $this->M_Home->update_date_event($code,$name,$status,$description);
      if($insert == true){
        $this->session->set_flashdata('update', 'Update Data Successfully.');
        redirect('Home/Date_Event');         
      }
      else{
        $this->session->set_flashdata('not_update', 'Update Data Failed.');
        redirect('Home/Date_Event');
      } 
  }

  public function delete_date_event(){
      $code = $this->input->post("code");
      $cek_data = $this->M_Home->delete_date_event($code);
      if ($this->db->affected_rows()) {
        echo "OK";
      }
      else{
        echo "Failed";
      }   
  }

  public function Content1(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_content1"] = $this->M_Home->get_content1();
    $this->template->load('Admin/role','module/Home/content1',$data);
  }

  public function add_content1(){    
    $folder = "./assets/images/upload/content/";
    $title = $this->input->post("title");
    $description = $this->input->post("descriptions");
    $image_title = $this->input->post("image_title");
    $status = $this->input->post("status");    
    
    //for image1
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size'];  
    $type = explode(".",$_FILES['file']['name']);
    $typ = $type;

    $config['upload_path']          = $folder;
    $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
    $config['file_name']     		= md5("image".date('Ymdhis'));
    $img = $config['file_name'].".".$typ[1];
    $this->load->library('upload', $config);
    $this->upload->initialize($config);		
    if ($this->upload->do_upload('file')) {
      echo "OK";
    }else{
      $error = array('error' => $this->upload->display_errors());
      echo "Error : ";
    }

    $insert = $this->M_Home->add_content1($title,$description,$image_title,$img,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Content1');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Content1');
    } 
  }

  public function update_content1(){
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $description = $this->input->post("description_edit");            
    $insert = $this->M_Home->update_content1($code,$name,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Content1');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Content1');
    } 
  }

  public function delete_content1(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_content1($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  public function Event_Value(){   
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }        
    $data["data_event_value"] = $this->M_Home->get_event_value();
    $this->template->load('Admin/role','module/Home/event_value',$data);
  }

  public function add_event_value(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");
    $value = $this->input->post("value");            
    $insert = $this->M_Home->add_event_value($title,$value,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Event_Value');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Event_Value');
    } 
  }

  public function update_event_value(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");
    $value = $this->input->post("value");              
    $insert = $this->M_Home->update_event_value($code,$title,$value,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Event_Value');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Event_Value');
    } 
  }

  public function delete_event_value(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_event_value($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }


  //profile

  public function Profile(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_profile"] = $this->M_Home->get_profile();
    $this->template->load('Admin/role','module/Home/profile',$data);
  }

  public function add_profile(){   
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
       
    $get_code = $this->M_Home->get_code_profile();    
    $row = $get_code->row();      
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
        // $name_file = $config['file_name'];
        // $name_keterangan = $name[$i];
        $insert = $this->M_Home->add_profile($company,$config['file_name'],$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status);        
      }      
    }

    //$insert = $this->M_Home->tambah_profile($name,$icon,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Profile');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Profile');
    }   
  }

  public function update_profile(){   
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");  
    $status = $this->input->post("status");     
    $update = $this->M_Home->update_profile($code,$name,$icon,$url,$status);
    if($update == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Profile');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Data Failed to Save.');
      redirect('Profile');
    }   
  }

  public function delete_profile(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_profile($code);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Failed";
    }   
  }

  public function Product(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_product"] = $this->M_Home->get_product();
    $this->template->load('Admin/role','module/Home/product',$data);
  }

  public function add_product(){
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions");            
    $insert = $this->M_Home->add_product($name,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Product');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Product');
    } 
  }

  public function update_product(){
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");            
    $insert = $this->M_Home->update_product($code,$name,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Product');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Product');
    } 
  }

  public function delete_product(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_product($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  public function Support(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_support"] = $this->M_Home->get_support();
    $this->template->load('Admin/role','module/Home/support',$data);
  }
  public function add_support(){   
    $file = $_FILES;
    $folder = './assets/images/upload/support/';
    $name = $this->input->post("name");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
       
    $get_code = $this->M_Home->get_code_support();    
    $row = $get_code->row();      
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
      $config['file_name']     		= "Support".$number.".".$exp[1];
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
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $insert = $this->M_Home->add_support($name,$config['file_name'],$folder,$number,$url,$status);        
      }      
    }

    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Support');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Support');
    }   

    // $insert = $this->M_Unit->tambah($code,$name);
    // if($insert == true){
    //   $this->session->set_flashdata('simpan', 'Data berhasil disimpan');
    //   redirect('Unit');         
    // }
    // else{
    //   $this->session->set_flashdata('tidak', 'Data tidak berhasil disimpan');
    //   redirect('Unit');
    // }   
  }
  public function update_support(){   
    $file = $_FILES;
    $code = $this->input->post("code");
    $name = $this->input->post("name");
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
      $sql = $this->db->query(" SELECT * from support
                              where id = '".$code."'
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
        // $name_file = $config['file_name'];
        // $name_keterangan = $name[$i];
        $update = $this->M_Home->update_support($code,$name,$config['file_name'],$urut,$url,$status);
      }      
    }

    if($update == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Home/Support');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Data Failed to Save.');
      redirect('Home/Support');
    }   
  }
  
  public function delete_support(){
    $code = $this->input->post("code");
    $sql = $this->db->query(" SELECT * from support
                              where id = '".$code."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Home->delete_support($code);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Failed";
    }   
  }


  //Book_Stand
  public function Book_Stand(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_book_stand"] = $this->M_Home->get_book_stand();
    $this->template->load('Admin/role','module/Home/book_stand',$data);
  }

  public function add_book_stand(){
    $file = $_FILES;
    $folder = './assets/images/upload/book_stand/';
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions1");
    $description2 = $this->input->post("descriptions2");  
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
      $config['file_name']     		= $_FILES['file']['name'];
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
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$config['file_name']);
      }      
    }   

    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Book_Stand');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Book_Stand');
    } 
  }

  public function update_book_stand(){
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");            
    $insert = $this->M_Home->update_book_stand($code,$name,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Book_Stand');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Book_Stand');
    } 
  }

  public function delete_book_stand(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_book_stand($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
}
