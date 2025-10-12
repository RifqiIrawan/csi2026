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
      $data["data_information"] = $this->M_Info->get_information();
      $data["data_menu"] = $this->M_Home->get_menu();
      $this->template->load('layouts/role','module/Info/visitor_information',$data);
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
      $name = $this->input->post("name");
      $url = $this->input->post("url");
      $status = $this->input->post("status");
      $description = $this->input->post("descriptions_edit");            
      $insert = $this->M_Info->update_information($code,$name,$url,$status,$description);
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
      $cek_data = $this->M_Info->delete_information($code);
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
    $data["data_carousel"] = $this->M_Home->get_carousel();
    $data["data_menu"] = $this->M_Home->get_menu();
    $data["data_profile"] = $this->M_Login->get_profile()->row();
    $data["data_sosmed"] = $this->M_Login->get_sosmed();
    $data["data_hotel"] = $this->M_Info->get_hotel();
    $this->template->load('layouts/role','module/Info/hotel_booking',$data);
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
    $status = $this->input->post("status");   
    $insert = $this->M_Info->update_hotel($code,$title,$email,$contact,$url,$status);
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
    $cek_data = $this->M_Info->delete_hotel($code);
    if ($this->db->affected_rows()) {
      echo "OK";
    }
    else{
      echo "Failed";
    }   
  }
}
