<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Info'); 
      $this->load->model('M_Login');
      $this->load->model('M_Home');      
      $this->load->library('upload');	
      $this->load->helper('file');        
    }

    public function Visitor_Information(){   
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

      $data["data_information"] = $this->M_Info->get_information();
      $data["data_contact1"] = $this->M_Info->get_contact1();
      $data["data_contact2"] = $this->M_Info->get_contact2();
      $data["data_contact3"] = $this->M_Info->get_contact3();
      $data["data_contact_us"] = $this->M_Info->get_contact_us();

      $data["data_footer"] = "./Website/assets/img/ftr.jpg";  
      $this->template->load('layouts2/role2','module/Info/visitor_information',$data);
    }
  
    public function Form_Visitor_Information(){   
      if($this->session->userdata('id_user') == NULL){
          redirect('Login');
      }        
      $data["data_information"] = $this->M_Info->get_information();
      $this->template->load('Admin/role','module/Info/form_visitor_information',$data);
    }
  
    public function add_information(){
      $get_kode = $this->M_Info->get_code_information();    
      $row = $get_kode->row();      
      if(empty($row->new_id)){
        $number = $row->new_id + 1;
      }else{
        $number = $row->new_id;
      }
      $run = str_pad($number, 4, '0', STR_PAD_LEFT);
      $code = "INF-".$run;     
      $title1 = $this->input->post("title1");   
      $title2 = $this->input->post("title2");  
      $url = $this->input->post("url");
      $description = $this->input->post("descriptions"); 
      $status = $this->input->post("status");          
      $putid = $this->M_Home->get_max("information");
      $putid = $putid->row()->this_id;
      $this->M_Home->update_db("information",$putid); 
      $insert = $this->M_Info->add_information($code,$title1,$title2,$description
                                              ,$url,$number,$status);
      if($insert == true){
        $ktg = $this->input->post("ktg"); 
        $icon = $this->input->post("logo");
        $text = $this->input->post("name");
        $i = 0;
        foreach($icon as $key=>$val)
        {
          $data[$i]['id_header'] = $code;
          $data[$i]['kategori'] = $ktg;
          $data[$i]['icon'] = $icon[$key];
          $data[$i]['text'] = $text[$key];
          $data[$i]['datecreated'] = date("Y-m-d H:i:s");
          $i++;
        }
        $this->db->insert_batch('information_detail', $data);

        $ktg2 = $this->input->post("ktg2");
        $time = $this->input->post("time");
        $date = $this->input->post("date");  
        foreach($date as $key2=>$val2)
        {
          $data2[$i]['id_header'] = $code;
          $data2[$i]['kategori'] = $ktg2;
          $data2[$i]['times'] = $time[$key2];
          $data2[$i]['date_text'] = $date[$key2];
          $data2[$i]['datecreated'] = date("Y-m-d H:i:s");
          $i++;
        }
        $this->db->insert_batch('information_hours', $data2);
        $this->session->set_flashdata('save', 'Data Saved Successfully.');
        redirect('Info/Form_Visitor_Information');         
      }
      else{
        $this->session->set_flashdata('not_save', 'Data Failed to Save.');
        redirect('Form_Visitor_Information');
      } 
    }
  
    public function update_information(){
      $code = $this->input->post("code");     
      $title1 = $this->input->post("title1");   
      $title2 = $this->input->post("title2");  
      $link_maps = $this->input->post("url");
      $description = $this->input->post("descriptions_edit"); 
      $status = $this->input->post("status");          
      $insert = $this->M_Info->update_information($code,$title1,$title2,$link_maps,$description,$status);
      $tables = array('information_detail', 'information_hours');
      foreach ($tables as $table) {
        $parm = "id_header";        
        $this->db->where_in($parm, $code);
        $this->db->delete($table);
      }

      $ktg = $this->input->post("ktg"); 
      $icon = $this->input->post("logo");
      $text = $this->input->post("name");
      $i = 0;
      foreach($icon as $key=>$val)
      {
        $data[$i]['id_header'] = $code;
        $data[$i]['kategori'] = $ktg;
        $data[$i]['icon'] = $icon[$key];
        $data[$i]['text'] = $text[$key];
        $data[$i]['datecreated'] = date("Y-m-d H:i:s");
        $i++;
      }
      $this->db->insert_batch('information_detail', $data);

      $ktg2 = $this->input->post("ktg2");
      $time = $this->input->post("time");
      $date = $this->input->post("date");  
      foreach($date as $key2=>$val2)
      {
        $data2[$i]['id_header'] = $code;
        $data2[$i]['kategori'] = $ktg2;
        $data2[$i]['times'] = $time[$key2];
        $data2[$i]['date_text'] = $date[$key2];
        $data2[$i]['datecreated'] = date("Y-m-d H:i:s");
        $i++;
      }
      $this->db->insert_batch('information_hours', $data2);
      $this->session->set_flashdata('save', 'Data Saved Successfully.');



      if($insert == true){
        $this->session->set_flashdata('update', 'Update Data Successfully.');
        redirect('Info/Form_Visitor_Information');         
      }
      else{
        $this->session->set_flashdata('not_update', 'Update Data Failed.');
        redirect('Form_Visitor_Information');
      } 
    }
  
    public function delete_information(){
      $code = $this->input->post("code");
      // echo $code;die();
      $tables = array('information', 'information_detail', 'information_hours');
      foreach ($tables as $table) {
        if($table !='information'){
          $parm = "id_header";
        }else{
          $parm = "code";
        }
        $this->db->where_in($parm, $code);
        $this->db->delete($table);
      }
      if ($this->db->affected_rows()) {
        echo "OK";
      }
      else{
        echo "Failed";
      }   
    }
  

  // for Hotel_Booking (download file)
  public function Hotel_Booking(){
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

    $data["data_hotel"] = $this->M_Info->get_hotel();
    $data["data_footer"] = "./Website/assets/img/ftr.jpg";
    $this->template->load('layouts2/role2','module/Info/hotel_booking',$data);
  }
  
  public function Hotel(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_hotel"] = $this->M_Info->get_hotel();
    $this->template->load('Admin/role','module/Info/hotel',$data);
  }

  public function add_hotel(){
    $title = $this->input->post("title");
    $email = $this->input->post("email");
    $contact = $this->input->post("contact");
    $url = $this->input->post("url");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/hotel/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Hotel".date("Ymdhis")).".".$exp[1];
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
        $insert = $this->M_Info->add_hotel($title,$config['file_name'],$email,$contact,$url,$status);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Info/Hotel');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Info/Hotel');
    } 
  }

  public function update_hotel(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $email = $this->input->post("email");
    $contact = $this->input->post("contact");
    $url = $this->input->post("url");
    $file_edit = $this->input->post("file_edit");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/hotel/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink("".$folder."".$file_edit."");
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("Hotel".date("Ymdhis")).".".$exp[1];
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
      }
    }

    $insert = $this->M_Info->update_hotel($code,$title,$email,$contact,$url,$status,$config['file_name']);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Hotel');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Hotel');
    } 
  }

  public function delete_hotel(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/hotel/';
    unlink("".$folder."".$img."");
    $cek_data = $this->M_Info->delete_hotel($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  public function Contact_us(){
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
    
    $data["data_contact1"] = $this->M_Info->get_contact1();
    $data["data_contact2"] = $this->M_Info->get_contact2();
    $data["data_contact3"] = $this->M_Info->get_contact3();
    $data["data_contact_us"] = $this->M_Info->get_contact_us();    
    $data["data_footer"] = "./Website/assets/img/ftr.jpg";  

    if(isset($data["data_contact2"][0]->count2) == 1){
      $data["txt_count"] = "justify-content-center";
    }else{
      $data["txt_count"] = "";
    }

    if(isset($data["data_contact3"][0]->count3) == 1){
      $data["txt_count2"] = "justify-content-center";
    }else{
      $data["txt_count2"] = "";
    }
      
    $this->template->load('layouts2/role2','module/Contact/contact_us',$data);
  }

  public function Form_Contact(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_contact_us"] = $this->M_Info->get_contact_us();
    $this->template->load('Admin/role','module/Contact/form_contact_us',$data);
  }

  public function add_contact_us(){
    $title = $this->input->post("title");
    $url = $this->input->post("url");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/contact_us/';
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
      $config['file_name']     		= md5("contact_us".date("Ymdhis")).".".$exp[1];
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
      }
    }
    $putid = $this->M_Home->get_max("contact_bg");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("contact_bg",$putid);
    $insert = $this->M_Info->add_contact_us($title,$config['file_name'],$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Info/Form_Contact');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Info/Form_Contact');
    } 
  }

  public function update_contact_us(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $file_edit = $this->input->post("file_edit");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/contact_us/';
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
      $config['file_name']     		= md5("contact_us".date("Ymdhis")).".".$exp[1];
      $img = $config['file_name']   ;
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
      }
    }else{
      $img = $file_edit;
    }
    $insert = $this->M_Info->update_contact_us($code,$title,$status,$img);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Form_Contact');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Form_Contact');
    } 
  }

  public function delete_contact_us(){
    $code = $this->input->post("code");
    $folder = './assets/images/upload/contact_us/';
    $file = $this->input->post("file");
    $cek_data = $this->M_Info->delete_contact_us($code);
    if ($this->db->affected_rows()) {
      if(file_exists($folder."".$file)) {
        unlink("".$folder."".$file."");  
      }   
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  public function form_submit(){
    $code = md5(date("YmdHis"));
    $title = $this->input->post("title");
    $name = $this->input->post("name");
    $gender = $this->input->post("gender");
    $country_code = $this->input->post("code");
    $phone = $this->input->post("phone");
    $email = $this->input->post("email");
    $job_title = $this->input->post("job_title");
    $company = $this->input->post("company");
    $company_street = $this->input->post("company_street");
    $suburb = $this->input->post("suburb");
    $town = $this->input->post("town");
    $postal = $this->input->post("postal");
    $country = $this->input->post("country");
    $message = $this->input->post("message");
    $insert = $this->M_Info->submit_form($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                                              ,$company_street,$suburb,$town,$postal,$country,$message);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Contact_us');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Contact_us');
    }
  }

  public function Submit_Form(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_submit"] = $this->M_Info->get_submit();
    $this->template->load('Admin/role','module/Contact/submit_form',$data);
  }

  public function add_submit(){
    $code = md5(date("YmdHis"));
    $title = $this->input->post("title");
    $name = $this->input->post("name");
    $gender = $this->input->post("gender");
    $country_code = $this->input->post("code");
    $phone = $this->input->post("phone");
    $email = $this->input->post("email");
    $job_title = $this->input->post("job_title");
    $company = $this->input->post("company");
    $company_street = $this->input->post("company_street");
    $suburb = $this->input->post("suburb");
    $town = $this->input->post("town");
    $postal = $this->input->post("postal");
    $country = $this->input->post("country");
    $message = $this->input->post("message");
    $insert = $this->M_Info->submit_form($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                                              ,$company_street,$suburb,$town,$postal,$country,$message);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Info/Submit_Form');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Info/Submit_Form');
    } 
  }

  public function update_submit(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $name = $this->input->post("name");
    $gender = $this->input->post("gender");
    $country_code = $this->input->post("country_code");
    $phone = $this->input->post("phone");
    $email = $this->input->post("email");
    $job_title = $this->input->post("job_title");
    $company = $this->input->post("company");
    $company_street = $this->input->post("company_street");
    $suburb = $this->input->post("suburb");
    $town = $this->input->post("town");
    $postal = $this->input->post("postal");
    $country = $this->input->post("country");
    $message = $this->input->post("message");
    $insert = $this->M_Info->update_submit($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                                          ,$company_street,$suburb,$town,$postal,$country,$message);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Submit_Form');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Submit_Form');
    } 
  }

  public function delete_submit(){
    $code = $this->input->post("code");
    $cek_data = $this->M_Info->delete_submit($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  //for header news
  public function Header_News(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_header_news"] = $this->M_Info->get_header_news();
    $this->template->load('Admin/role','module/Info/header_news',$data);
  }

  public function add_header_news(){
    $title = $this->input->post("title");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/header_news/';
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
      $config['file_name']     		= md5("header_news".date("Ymdhis")).".".$exp[1];
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
      }
    }

    $putid = $this->M_Home->get_max("header_news");
    $putid = $putid->row()->this_id;
    $this->M_Home->update_db("header_news",$putid);

    $insert = $this->M_Info->add_header_news($title,$config['file_name'],$status);
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Info/Header_News');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Info/Header_News');
    } 
  }

  public function update_header_news(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $img = $this->input->post("img");
    $status = $this->input->post("status");   
    $file = $_FILES;
    $folder = './assets/images/upload/header_news/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name'] || !empty($_FILES['file']['name']));
      $exp = $exp;	
      unlink($folder."".$img);
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("header_news".date("Ymdhis")).".".$exp[1];
      $img = $config['file_name'];
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
      }
    }
   
    $insert = $this->M_Info->update_header_news($code,$title,$img,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Header_News');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Header_News');
    } 
  }

  public function delete_header_news(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/header_news/';
    $cek_data = $this->M_Info->delete_header_news($code);
    if ($this->db->affected_rows()) {
      if(file_exists($folder."".$img)) {
        unlink($folder."".$img);
      }  
      
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }

  //for news update
  public function News_Update(){
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

    $data["data_header_news"] = $this->M_Info->get_header_news();
    $data["data_news_update"] = $this->M_Info->get_news_update();
    $data["data_footer"] = "./Website/assets/img/ftr.jpg";
    $this->template->load('layouts2/role2','module/Info/news_update',$data);
  }

  public function News_Update_Content(){
    error_reporting(0);
    $url = $this->uri->segment(2);
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

    $data["data_header_news"] = $this->M_Info->get_header_news();
    $data["data_news_update1"] = $this->M_Info->get_news_update1($url);
    $this->template->load('layouts2/role2','module/Info/news_update_content',$data);
  }

  public function Form_News_Update(){   
    if($this->session->userdata('id_user') == NULL){
        redirect('Login');
    }        
    $data["data_news_update"] = $this->M_Info->get_news_update();
    $this->template->load('Admin/role','module/Info/form_news_update',$data);
  }

  public function add_news_update(){
    $title = $this->input->post("title");
    $date = $this->input->post("date");
    $description = $this->input->post("descriptions");  
    $status = $this->input->post("status");    
    $file = $_FILES;
    $folder = './assets/images/upload/news_update/';
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != ""){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("news_update".date("Ymdhis")).".".$exp[1];
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
        $insert = $this->M_Info->add_news_update($title,$date,$config['file_name'],$description,$status);
      }
    }
    if($insert == true){
      $this->session->set_flashdata('save', 'Data Saved Successfully.');
      redirect('Info/Form_News_Update');         
    }
    else{
      $this->session->set_flashdata('not_save', 'Data Failed to Save.');
      redirect('Info/Form_News_Update');
    } 
  }

  public function update_news_update(){
    $code = $this->input->post("code");
    $title = $this->input->post("title");
    $date = $this->input->post("date");
    $img = $this->input->post("img");
    $description = $this->input->post("descriptions2"); 
    $status = $this->input->post("status");   
    $folder = './assets/images/upload/news_update/';
    $file = $_FILES;
    $_FILES['file']['name'];
    $_FILES['file']['type'];
    $_FILES['file']['tmp_name'];
    $_FILES['file']['error'];
    $_FILES['file']['size']; 
    if($_FILES['file']['name'] != "" || !empty($_FILES['file']['name'])){
      $exp = explode(".",$_FILES['file']['name']);
      $exp = $exp;	
      unlink($folder."".$img);
      // print_r($exp[1]);die();
      $config['upload_path']          = $folder;
      $config['allowed_types'] 		= 'jpg|jpeg|png|gif';
      $config['file_name']     		= md5("news_update".date("Ymdhis")).".".$exp[1];
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
      }
      $img = $config['file_name'];
    }else{ 
      $img = $img;
    }
   
    $insert = $this->M_Info->update_news_update($code,$title,$date,$img,$description,$status);
    if($insert == true){
      $this->session->set_flashdata('update', 'Update Data Successfully.');
      redirect('Info/Form_News_Update');         
    }
    else{
      $this->session->set_flashdata('not_update', 'Update Data Failed.');
      redirect('Info/Form_News_Update');
    } 
  }

  public function delete_news_update(){
    $code = $this->input->post("code");
    $img = $this->input->post("img");
    $folder = './assets/images/upload/news_update/';
    $cek_data = $this->M_Info->delete_news_update($code);
    if ($this->db->affected_rows()) {
      unlink($folder."".$img);
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
}
