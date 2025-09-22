<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Home');          
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
        $description = $this->input->post("description");            
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
        $description = $this->input->post("description_edit");            
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
}
