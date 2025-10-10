<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Info');     
      $this->load->library('upload');	
      $this->load->helper('file');        
    }
  
    public function Visitor_information(){   
        if($this->session->userdata('id_user') == NULL){
            redirect('Login');
        }        
        $data["data_visitor_information"] = $this->M_Info->get_visitor_information();
        $this->template->load('Admin/role','module/Info/visitor_information',$data);
    }
  
    public function add_visitor_information(){
        $name = $this->input->post("name");
        $url = $this->input->post("url");
        $status = $this->input->post("status");
        $description = $this->input->post("descriptions1");            
        $insert = $this->M_Info->add_visitor_information($name,$url,$status,$description);
        if($insert == true){
          $this->session->set_flashdata('save', 'Data Saved Successfully.');
          redirect('Info/Visitor_information');         
        }
        else{
          $this->session->set_flashdata('not_save', 'Data Failed to Save.');
          redirect('Info/Visitor_information');
        } 
    }
  
    public function update_visitor_information(){
        $code = $this->input->post("code");
        $name = $this->input->post("name");
        $url = $this->input->post("url");
        $status = $this->input->post("status");
        $description = $this->input->post("descriptions_edit");            
        $insert = $this->M_Info->update_visitor_information($code,$name,$url,$status,$description);
        if($insert == true){
          $this->session->set_flashdata('update', 'Update Data Successfully.');
          redirect('Info/Visitor_information');         
        }
        else{
          $this->session->set_flashdata('not_update', 'Update Data Failed.');
          redirect('Info/Visitor_information');
        } 
    }
  
    public function delete_visitor_information(){
        $code = $this->input->post("code");
        $cek_data = $this->M_Info->delete_visitor_information($code);
        if ($this->db->affected_rows()) {
          echo "OK";
        }
        else{
          echo "Failed";
        }   
    }
}
