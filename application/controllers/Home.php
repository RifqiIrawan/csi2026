<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Home');     
    $this->load->model('M_Login');     
    $this->load->library('upload');	
    $this->load->helper('file');        
  }

  public function search_text(){    
    $code = $this->input->post("code");
    $text = $this->input->post("text");
    $cek = $this->M_Home->search_text($code,$text);
    echo json_encode($cek->row());
  }

  public function search_text2(){    
    $code = $this->input->post("code");
    $text = $this->input->post("text");
    $cek = $this->M_Home->search_text2($code,$text);
    echo json_encode($cek);
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
      $url = $this->input->post("url");
      $position = $this->input->post("position");
      $status = $this->input->post("status");
      $description = $this->input->post("descriptions1");            
      $insert = $this->M_Home->add_menu($name,$url,$position,$status,$description);
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
      $url = $this->input->post("url");
      $position = $this->input->post("position");
      $status = $this->input->post("status");
      $description = $this->input->post("descriptions_edit");            
      $insert = $this->M_Home->update_menu($code,$name,$url,$position,$status,$description);
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

  // sub menu
  public function Sub_Menu(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_menu"] = $this->M_Home->get_menu();
    $data["data_sub_menu"] = $this->M_Home->get_sub_menu();
    $this->template->load('Admin/role','module/Home/sub_menu',$data);
}

public function add_sub_menu(){
    $id_menu = $this->input->post("id_menu");
    $name = $this->input->post("name");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions1");            
    $insert = $this->M_Home->add_sub_menu($id_menu,$name,$url,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Sub_Menu');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Sub_Menu');
    } 
}

public function update_sub_menu(){
    $code = $this->input->post("code");
    $id_menu = $this->input->post("id_menu");
    $name = $this->input->post("name");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");            
    $insert = $this->M_Home->update_sub_menu($code,$id_menu,$name,$url,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Sub_Menu');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Sub_Menu');
    } 
}

public function delete_sub_menu(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_sub_menu($code);
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
      // echo "OK";
    }else{
      $error = array('error' => $this->upload->display_errors());
      // echo "Error : ";
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
      // echo "OK";
    }else{
      $error = array('error' => $this->upload->display_errors());
      // echo "Error : ";
    }

    $putid = $this->M_Home->get_max("event");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("event",$putid);

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
    $folder1 = "./assets/images/upload/event/image1/";
    $folder2 = "./assets/images/upload/event/image2/";
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $title1 = $this->input->post("title1");
    $description1 = $this->input->post("descriptions1_edit");
    $title2 = $this->input->post("title2");
    $description2 = $this->input->post("descriptions2_edit");
    $status = $this->input->post("status");    
    $get_file1 = $this->input->post("image");    
    $get_file2 = $this->input->post("image2");    
    $img1 = "";  
    $img2 = "";
      //for image1
    if($_FILES['file1']['name'] != "" || !empty($_FILES['file1']['name'])){
      $_FILES['file1']['name'];
      $_FILES['file1']['type'];
      $_FILES['file1']['tmp_name'];
      $_FILES['file1']['error'];
      $_FILES['file1']['size'];  
      $type = explode(".",$_FILES['file1']['name']);
      $typ = $type;
      unlink("".$folder1."".$get_file1."");

      $config['upload_path']          = $folder1;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("image1".date('Ymdhis'));
      $img1 = $config['file_name'].".".$typ[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);		
      if ($this->upload->do_upload('file1')) {
        // echo "OK";
      }else{
        $error = array('error' => $this->upload->display_errors());
        // echo "Error : ";
      }
    }else{
      $img1 = $get_file1;
    }

    //for image2
    if($_FILES['file2']['name'] != "" || !empty($_FILES['file2']['name'])){
      $_FILES['file2']['name'];
      $_FILES['file2']['type'];
      $_FILES['file2']['tmp_name'];
      $_FILES['file2']['error'];
      $_FILES['file2']['size'];      
      $type2 = explode(".",$_FILES['file2']['name']);
      $typ2 = $type2;
      unlink("".$folder2."".$get_file2."");
      $config['upload_path']          = $folder2;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("image2".date('Ymdhis'));
      $img2 = $config['file_name'].".".$typ2[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);		
      if ($this->upload->do_upload('file2')) {
        // echo "OK";
      }else{
        $error = array('error' => $this->upload->display_errors());
        // echo "Error : ";
      }
    }else{
      $img2 = $get_file2;
    }
    
    $insert = $this->M_Home->update_date_event($code,$name,$title1,$description1,$img1,$title2,$description2,$img2,$status);
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
    $img1 = $this->input->post("img1");
    $img2 = $this->input->post("img2");
    $folder1 = "./assets/images/upload/event/image1/";
    $folder2 = "./assets/images/upload/event/image2/";
    $cek_data = $this->M_Home->delete_date_event($code);
    if ($this->db->affected_rows()) {
      if(file_exists($folder1."".$img1."")) {
        unlink("".$folder1."".$img1."");
      }
      
      if(file_exists($folder2."".$img2)) {
        unlink("".$folder2."".$img2."");  
      }         
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
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
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
    }
    
    $putid = $this->M_Home->get_max("content1");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("content1",$putid);

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
    $folder = "./assets/images/upload/content/";
    $title = $this->input->post("title");
    $description = $this->input->post("descriptions1_edit");
    $image_title = $this->input->post("image_title");
    $status = $this->input->post("status");    
    $get_image = $this->input->post("get_image");   
   
    //for image1
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size'];  
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      //Now Unlink
      if(file_exists("".$folder."".$get_image.""))
      {
        unlink("".$folder."".$get_image."");
      }
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
        die();
      }   
    }else{
      $img = $get_image;
    }

    $insert = $this->M_Home->update_content1($code,$title,$description,$image_title,$img,$status);
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
    $img = $this->input->post("img");
    $folder = './assets/images/upload/content/';
    $this->M_Home->delete_content1($code);
    if ($this->db->affected_rows()) {
      if(file_exists($folder."".$img."")) {
        unlink("".$folder."".$img."");
      }
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
    $icon = $this->input->post("icon");              
    $simbol = $this->input->post("simbol");           
    $kat = $this->input->post("kat");            
    $insert = $this->M_Home->add_event_value($title,$value,$status,$icon,$simbol,$kat);
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
    $icon = $this->input->post("icon");         
    $simbol = $this->input->post("simbol");           
    $kat = $this->input->post("kat");                 
    $insert = $this->M_Home->update_event_value($code,$title,$value,$status,$icon,$simbol,$kat);
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
    $folder = './assets/images/upload/profile/';
    $company = $this->input->post("company");
    $vision = $this->input->post("descriptions");
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
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
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
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();             
      }      
    }

    $putid = $this->M_Home->get_max("profile");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("profile",$putid);
    
    $insert = $this->M_Home->add_profile($company,$vision,$config['file_name'],$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status);  
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Profile');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Profile');
    }   
  }

  public function update_profile(){   
    $code = $this->input->post("code");
    $folder = './assets/images/upload/profile/';
    $company = $this->input->post("company");
    $vision = $this->input->post("descriptions_edit");
    $nick = $this->input->post("nick");
    $address = $this->input->post("address");
    $maps = $this->input->post("maps");
    $phone = $this->input->post("phone");
    $fax = $this->input->post("fax");
    $email = $this->input->post("email");
    $website = $this->input->post("website");
    $status = $this->input->post("status");
    $file_edit = $this->input->post("file_edit");
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("logo_com".date("Ymdhis")).".".$exp[1];
      $img = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();       
      }      
    }else{
      $img = $file_edit;
    }

    $update = $this->M_Home->update_profile($code,$company,$vision,$img,$nick,$address,$maps,$phone,$fax,$email,$website,$status);
    if($update == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Home/Profile');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Data Failed to Save.');
      redirect('Home/Profile');
    }   
  }

  public function delete_profile(){
    $code = $this->input->post("code");    
    $img = $this->input->post("img");
    $folder = './assets/images/upload/profile/';
    $cek_data = $this->M_Home->delete_profile($code);
    if($cek_data == TRUE){           
      if(file_exists($folder."".$img)) {        
        unlink("".$folder."".$img."");
      }    
      
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
    $position = $this->input->post("position");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions");  
    $file = $_FILES;
    $folder = './assets/images/upload/product/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Product".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;  
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);     
        $this->image_lib->resize();
        $this->image_lib->clear();          
      }
    }          
    $insert = $this->M_Home->add_product($name,$position,$status,$description,$config['file_name']);
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
    $position = $this->input->post("position");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");     
    $file_edit = $this->input->post("file_edit");   
    $file = $_FILES;
    $folder = './assets/images/upload/product/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;   
        $config2['height'] = 400;              
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);     
        $this->image_lib->resize();
        $this->image_lib->clear();          
      }
    }   
    $insert = $this->M_Home->update_product($code,$name,$position,$status,$description,$config['file_name']);
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
    $img = $this->input->post("img");
    $folder = './assets/images/upload/product/';
    unlink("".$folder."".$img."");
    $cek_data = $this->M_Home->delete_organizer($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
    $cek_data = $this->M_Home->delete_product($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
  
  public function update_product2(){
    $code = $this->input->post("code");
    $title = $this->input->post("header_title");
    $status = $this->input->post("status");  
    $insert = $this->db->query(" UPDATE product SET header_title = '".$title."',status_header = '".$status."'
                                    WHERE id = '".$code."'
                                ");
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Product');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Product');
    } 
  }

  public function delete_product2(){
    $code = $this->input->post("code");
    $this->db->query(" UPDATE product SET status_header = '1'
                          WHERE id = '".$code."'
                      ");
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
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "support".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();       
        $insert = $this->M_Home->add_support($name,$config['file_name'],$url,$folder,$status,$number);        
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
  }
  public function update_support(){   
    $file = $_FILES;
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $url = $this->input->post("url");
    $status = $this->input->post("status");     
    $position = $this->input->post("position");       
    $file_edit = $this->input->post("file_edit");       
    //$file = count($_FILES['file']['name']);
    //for($i = 0; $i < $file; $i++){  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $sql = $this->db->query(" SELECT * from support
                              where id = '".$code."'
                            ");
      $r = $sql->row();	      
      $folder = $r->folder_name;

      if(file_exists("".$r->folder_name."".$r->file_name.""))
      {
        unlink("".$r->folder_name."".$r->file_name."");
      }
      
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $file_edit = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();
      }      
    }
    
    $update = $this->M_Home->update_support($code,$name,$file_edit,$url,$status,$position);

    if($update == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Home/Support');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Data Failed to Update.');
      redirect('Home/Support');
    }   
  }
  
  public function delete_support(){
    $code = $this->input->post("code");
    $sql = $this->db->query(" SELECT * from support
                              where id = '".$code."'
                            ");
    $r = $sql->row();	      
    if(file_exists("".$r->folder_name."".$r->file_name.""))
    {
      unlink("".$r->folder_name."".$r->file_name."");
    }
    $cek_data = $this->M_Home->delete_support($code);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Failed";
    }   
  }


  //Book_Stand
  public function Url_Book_Stand(){   
    error_reporting(0);
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
    $data["data_member"] = $this->M_Login->get_member();
    $data["data_sponsors"] = $this->M_Login->get_sponsors();
    $data["data_coperation"] = $this->M_Login->get_coperation();
    
    $data["data_book_stand"] = $this->M_Home->get_book_stand();
    // $data["data_menu"] = $this->M_Home->get_menu();
    $this->template->load('layouts/role','module/Home/url_book_stand',$data);
  }

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
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|docx|pdf';
      $config['file_name']     		= md5("img".date("Ymdhis")).".".$exp[1];
      $file_1 = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$config['file_name']);
      }      
    }   

    $_FILES['file2']['name'];
    $_FILES['file2']['type'];
    $_FILES['file2']['tmp_name'];
    $_FILES['file2']['error'];
    $_FILES['file2']['size']; 
    if($_FILES['file2']['name'] != ""){
      $exp = explode(".",$_FILES['file2']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= md5("pdf".date("Ymdhis")).".".$exp[1];
      $file_2 = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file2')) {
        $error = array('error' => $this->upload->display_errors());
      }      
      else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$config['file_name']);
      }      
    }   
    
    $putid = $this->M_Home->get_max("book_stand");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("book_stand",$putid);

    $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$file_1,$file_2);
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
    $file = $_FILES;
    $folder = './assets/images/upload/book_stand/';
    $name = $this->input->post("name");
    $status = $this->input->post("status");
    $file_edit = $this->input->post("file_edit");
    $file_edit2 = $this->input->post("file_edit2");
    $description = $this->input->post("descriptions_edit");
    $description2 = $this->input->post("descriptions2_edit");  
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	      
      unlink("".$folder."".$file_edit."");
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("img".date("Ymdhis")).".".$exp[1];
      $file_1 = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        // $config2['width'] = 600;                  
        // $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$config['file_name']);
      }      
    }else{
      $file_1 = $file_edit;
    }

    $_FILES['file2']['name'];
    $_FILES['file2']['type'];
    $_FILES['file2']['tmp_name'];
    $_FILES['file2']['error'];
    $_FILES['file2']['size']; 
    if($_FILES['file2']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file2']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit2."");
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= md5("pdf".date("Ymdhis")).".".$exp[1];
      $file_2 = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file2')) {
        $error = array('error' => $this->upload->display_errors());
      }      
      else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        // $insert = $this->M_Home->add_book_stand($name,$status,$description,$description2,$config['file_name']);
      }      
    }else{
      $file_2 = $file_edit2;
    }
    
    $insert = $this->M_Home->update_book_stand($code,$name,$status,$description,$description2,$file_1,$file_2);
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
    $file1 = $this->input->post("file1");
    $file2 = $this->input->post("file2");
    $folder = './assets/images/upload/book_stand/';
    $this->M_Home->delete_book_stand($code);
    if ($this->db->affected_rows()) {
      if(file_exists($folder."".$file1."")) {
        unlink("".$folder."".$file1."");
      }

      if(file_exists($folder."".$file2)) {
        unlink("".$folder."".$file2."");  
      }    
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  //controller sosmed
  public function Sosmed(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_sosmed"] = $this->M_Home->get_sosmed();
    $this->template->load('Admin/role','module/Home/sosmed',$data);
  }

  public function add_sosmed(){   
    $name = $this->input->post("name");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");
    $status = $this->input->post("status");     
    $insert = $this->M_Home->add_sosmed($name,$icon,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Sosmed');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Sosmed');
    }   
  }

  public function update_sosmed(){   
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $icon = $this->input->post("icon");
    $url = $this->input->post("url");  
    $status = $this->input->post("status");     
    $ubah = $this->M_Home->update_sosmed($code,$name,$icon,$url,$status);
    if($ubah == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Home/Sosmed');         
    }
    else{
      $this->session->set_flashdata('not_update', 'UpdateData Failed.');
      redirect('Home/Sosmed');
    }   
  }

  public function delete_sosmed(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_sosmed($code);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Failed";
    }   
  }

  // contact
  public function Contact(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_contact"] = $this->M_Home->get_contact();
    $this->template->load('Admin/role','module/Home/contact',$data);
  }

   public function add_contact(){
    $name = $this->input->post("name");
    $company = $this->input->post("company");
    $position = $this->input->post("position");
    $hp = $this->input->post("hp");
    $email = $this->input->post("email");
    $level = $this->input->post("level");
    $status = $this->input->post("status");            
    $insert = $this->M_Home->add_contact($name,$company,$position,$hp,$email,$status,$level);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Contact');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Contact');
    } 
  }

  public function update_contact(){
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $company = $this->input->post("company");
    $position = $this->input->post("position");
    $hp = $this->input->post("hp");
    $email = $this->input->post("email");
    $level = $this->input->post("level");
    $status = $this->input->post("status");     
    $insert = $this->M_Home->update_contact($code,$name,$company,$position,$hp,$email,$status,$level);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Contact');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Contact');
    } 
  }


  public function delete_contact(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_contact($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // quick_link
  public function Quick_Link(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_quick_link"] = $this->M_Home->get_quick_link();
    $this->template->load('Admin/role','module/Home/quick_link',$data);
  }

  public function add_quick_link(){
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");            
    $insert = $this->M_Home->add_quick_link($title,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Quick_Link');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Quick_Link');
    } 
  }

  public function update_quick_link(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $url = $this->input->post("url");         
    $status = $this->input->post("status");           
    $insert = $this->M_Home->update_quick_link($code,$title,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Quick_Link');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Quick_Link');
    } 
  }

  public function delete_quick_link(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_quick_link($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // for Link Event Management
  public function Link_Event(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_link_event"] = $this->M_Home->get_link_event();
    $this->template->load('Admin/role','module/Home/link_event',$data);
  }

  public function add_link_event(){
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");          

    $putid = $this->M_Home->get_max("link_event");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("link_event",$putid);
    $insert = $this->M_Home->add_link_event($title,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Link_Event');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Link_Event');
    } 
  }

  public function update_link_event(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");   
    $insert = $this->M_Home->update_link_event($code,$title,$url,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Link_Event');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Link_Event');
    } 
  }

  public function delete_link_event(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_link_event($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // for Floor Plan (download file)
  public function Floor_Plan(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_floor_plan"] = $this->M_Home->get_floor_plan();
    $this->template->load('Admin/role','module/Home/floor_plan',$data);
  }

  public function add_floor_plan(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $file = $_FILES;
    $folder = './assets/images/upload/floor_plan/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);        
        $insert = $this->M_Home->add_floor_plan($title,$config['file_name'],$status);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Floor_Plan');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Floor_Plan');
    } 
  }

  public function update_floor_plan(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $file_edit = $this->input->post("file_edit");   

    $file = $_FILES;
    $folder = './assets/images/upload/floor_plan/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif|pdf';
      $config['file_name']     		= md5(date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);        
      }
    }   

    $insert = $this->M_Home->update_floor_plan($code,$title,$config['file_name'],$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Floor_Plan');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Floor_Plan');
    } 
  }

  public function download_floor($filename){
    $this->load->helper('download');
    $path = './assets/images/upload/floor_plan/' . $filename;
    if (file_exists($path)) {
        $data = file_get_contents($path);
        force_download($filename, $data);
    } else {
        show_404();
    }
  }

  public function delete_floor_plan(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_floor_plan($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // for carousel (download file)
  public function Url_Carousel(){   
    error_reporting(0);
    $data["data_carousel"] = $this->M_Home->get_carousel();
    $data["data_menu"] = $this->M_Home->get_menu();
    $this->template->load('layouts/role','module/Home/url_carousel',$data);
  }
  public function Carousel(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_carousel"] = $this->M_Home->get_carousel();
    $this->template->load('Admin/role','module/Home/carousel',$data);
  }

  public function add_carousel(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $description = $this->input->post("descriptions1");  
    $file = $_FILES;
    $folder = './assets/images/upload/carousel/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Carousel".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2); 
        $this->image_lib->resize();
        $this->image_lib->clear();       
        $insert = $this->M_Home->add_carousel($title,$config['file_name'],$status,$description);
      }
    }

    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Carousel');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Carousel');
    } 
  }

  public function update_carousel(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $description = $this->input->post("descriptions_edit");  
    $file_edit = $this->input->post("file_edit");
    $file = $_FILES;
    $folder = './assets/images/upload/carousel/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Carousel".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';  
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);    
        $this->image_lib->resize();
        $this->image_lib->clear();           
        // $insert = $this->M_Home->add_carousel($title,$config['file_name'],$status,$description);
      }
    }

    $insert = $this->M_Home->update_carousel($code,$title,$config['file_name'],$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Carousel');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Carousel');
    } 
  }

  public function delete_carousel(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_carousel($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
  
  public function update_carousel2(){
    $code = $this->input->post("code");
    $title = $this->input->post("header_title");
    $status = $this->input->post("status");  
    $insert = $this->db->query(" UPDATE carousel SET header_title = '".$title."',status_header = '".$status."'
                                    WHERE id = '".$code."'
                                ");
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Carousel');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Carousel');
    } 
  }

  public function delete_carousel2(){
    $code = $this->input->post("code");
    $del == $this->db->query(" UPDATE carousel SET status_header = '1'
                            WHERE id = '".$code."'
                        ");
    if($del == true){
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  public function Video_Highlights(){
    error_reporting(0);
    $data["data_menu"] = $this->M_Home->get_menu();
    $data["data_highlights"] = $this->M_Home->get_highlights();
    $this->template->load('layouts/role','module/Home/video_highlights',$data);
  }

  public function Highlights(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_highlights"] = $this->M_Home->get_highlights();
    $this->template->load('Admin/role','module/Home/highlights',$data);
  }

public function add_highlights(){
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");            
    $insert = $this->M_Home->add_highlights($title,$url,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Highlights');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Highlights');
    } 
}

  public function update_highlights(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
    $description = $this->input->post("descriptions_edit");            
    $insert = $this->M_Home->update_highlights($code,$title,$url,$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Highlights');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Highlights');
    } 
  }

  public function delete_highlights(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Home->delete_highlights($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // for Organizer  
  public function Organizer(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_organizer"] = $this->M_Home->get_organizer();
    $this->template->load('Admin/role','module/Home/organizer',$data);
  }

  public function add_organizer(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $description = $this->input->post("descriptions1");  
    $file = $_FILES;
    $folder = './assets/images/upload/organizer/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Organizer".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);     
        $this->image_lib->resize();
        $this->image_lib->clear();          
        $insert = $this->M_Home->add_organizer($title,$config['file_name'],$status,$description);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Organizer');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Organizer');
    } 
  }

  public function update_organizer(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");   
    $file_edit = $this->input->post("file_edit");   
    $description = $this->input->post("descriptions_edit");
    $file = $_FILES;
    $folder = './assets/images/upload/organizer/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");   
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Organizer".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);     
        $this->image_lib->resize();
        $this->image_lib->clear();                 
      }
    }

    $insert = $this->M_Home->update_organizer($code,$title,$config['file_name'],$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Organizer');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Organizer');
    } 
  }

  public function delete_organizer(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/organizer/';
    unlink("".$folder."".$img."");
    $cek_data = $this->M_Home->delete_organizer($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  // for Member  
  public function Member(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_member"] = $this->M_Home->get_member();
    $this->template->load('Admin/role','module/Home/member',$data);
  }

  public function add_member(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $description = $this->input->post("descriptions1");  
    $file = $_FILES;
    $folder = './assets/images/upload/member/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Member".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);      
        $this->image_lib->resize();
        $this->image_lib->clear();         
        $insert = $this->M_Home->add_member($title,$config['file_name'],$status,$description);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Member');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Member');
    } 
  }

  public function update_member(){ 
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");   
    $file_edit = $this->input->post("file_edit");   
    $description = $this->input->post("descriptions_edit");
    $file = $_FILES;
    $folder = './assets/images/upload/member/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");  
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Member".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);   
        $this->image_lib->resize();
        $this->image_lib->clear();            
      }
    }

    $insert = $this->M_Home->update_member($code,$title,$config['file_name'],$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Member');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Member');
    } 
  }

  public function delete_member(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/member/';
    unlink("".$folder."".$img."");
    $cek_data = $this->M_Home->delete_member($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  //for sponsors
  public function Sponsors(){    
    if($this->session->userdata('id_user') == NULL){
      redirect('Login');
    }
    $data["data_sponsors"] = $this->M_Home->get_sponsors();
    $this->template->load('Admin/role','module/Home/sponsors',$data);
  }
  public function add_sponsors(){   
    $file = $_FILES;
    $folder = './assets/images/upload/sponsors/';
    $name = $this->input->post("name");
    $url = $this->input->post("url");
    $status = $this->input->post("status");
       
    $get_code = $this->M_Home->get_code_sponsors();    
    $row = $get_code->row();      
    if(empty($row->new_id)){
      $number = $row->new_id + 1;
    }else{
      $number = $row->new_id;
    }

    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= "sponsors".$number.".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();       
      }      
    }
    
    $insert = $this->M_Home->add_sponsors($name,$url,$config['file_name'],$folder,$number,$status);        

    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Sponsors');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Sponsors');
    }   
  }
  public function update_sponsors(){   
    $file = $_FILES;
    $code = $this->input->post("code");
    $name = $this->input->post("name");
    $status = $this->input->post("status");  
    $file_edit = $this->input->post("file_edit");  
    $position = $this->input->post("position");   
    $url = $this->input->post("url");        
    $folder = './assets/images/upload/sponsors/';    
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){   
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");   

      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		=  md5(date("Ymdhis")).".".$exp[1];
      $file_edit =  $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();       
      } 
    }
    
    $update = $this->M_Home->update_sponsors($code,$name,$url,$file_edit,$position,$status);
    if($update == true){
      $this->session->set_flashdata('update', 'Data Saved Successfully.');
      redirect('Home/Sponsors');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Data Failed to Update.');
      redirect('Home/Sponsors');
    }   
  }
  
  public function delete_sponsors(){
    $code = $this->input->post("code");
    $sql = $this->db->query(" SELECT * from sponsors
                              where id = '".$code."'
                            ");
    $r = $sql->row();	      
    unlink("".$r->folder_name."".$r->file_name."");      
    $cek_data = $this->M_Home->delete_sponsors($code);
    if($cek_data == TRUE){           
      echo "OK";     
    }
    else{
      echo "Failed";
    }   
  }

  // for Coperation  
  public function Coperation(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_coperation"] = $this->M_Home->get_coperation();
    $this->template->load('Admin/role','module/Home/coperation',$data);
  }

  public function add_coperation(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");  
    $description = $this->input->post("descriptions1");  
    $file = $_FILES;
    $folder = './assets/images/upload/coperation/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("coperation".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);      
        $this->image_lib->resize();
        $this->image_lib->clear();         
        $insert = $this->M_Home->add_coperation($title,$config['file_name'],$status,$description);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Coperation');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Coperation');
    } 
  }

  public function update_coperation(){ 
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $status = $this->input->post("status");   
    $file_edit = $this->input->post("file_edit");   
    $description = $this->input->post("descriptions_edit");
    $file = $_FILES;
    $folder = './assets/images/upload/coperation/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");  
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Coperation".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $config2['width'] = 600;                  
        $config2['height'] = 400;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);   
        $this->image_lib->resize();
        $this->image_lib->clear();            
      }
    }

    $insert = $this->M_Home->update_coperation($code,$title,$config['file_name'],$status,$description);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Coperation');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Coperation');
    } 
  }

  public function delete_coperation(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/coperation/';
    unlink("".$folder."".$img."");
    $cek_data = $this->M_Home->delete_coperation($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

   // for banner header  
   public function Banner_Header(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_banner"] = $this->M_Home->get_banner();
    $this->template->load('Admin/role','module/Home/banner_header',$data);
  }

  public function add_banner(){
    $title = $this->input->post("title");
    // $subtitle = $this->input->post("subtitle");
    // $button = $this->input->post("button");
    $status = $this->input->post("status");  
    $file = $_FILES;
    $folder = './assets/images/upload/swiper/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png';
      $config['file_name']     		= md5("swiper".date("Ymdhis")).".".$exp[1];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);      
        $this->image_lib->resize();
        $this->image_lib->clear();         
      }
    }
    $insert = $this->M_Home->add_banner($title,$config['file_name'],$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Home/Banner_Header');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Home/Banner_Header');
    } 
  }

  public function update_banner(){ 
    $code = $this->input->post("code");
    $title = $this->input->post("title_edit");
    // $subtitle = $this->input->post("subtitle_edit");
    // $button = $this->input->post("button");
    $status = $this->input->post("status");   
    $file_edit = $this->input->post("file_edit");   
    $file = $_FILES;
    $folder = './assets/images/upload/swiper/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");  
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("swiper".date("Ymdhis")).".".$exp[1];
      $file_edit = $config['file_name'];
      $this->load->library('upload', $config);
      $this->upload->initialize($config);	
      if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());
      } else {
        // menambil nilai value yang di upload  
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = $folder."/".$config['file_name']; 
        $config2['maintain_ratio'] = true;
        $config2['quality'] = '90%';      
        $config2 ['create_thumb'] = false;
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);   
        $this->image_lib->resize();
        $this->image_lib->clear();            
      }
    }

    $insert = $this->M_Home->update_banner($code,$title,$file_edit,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Home/Banner_Header');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Home/Banner_Header');
    } 
  }

  public function delete_banner(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $cek_data = $this->M_Home->delete_banner($code);
    if ($this->db->affected_rows()) {
      $folder = './assets/images/upload/swiper/';
      unlink("".$folder."".$img."");
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
}
