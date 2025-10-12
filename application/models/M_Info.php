<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Info extends CI_Model
{	
  // for information
  function get_code_information(){
    $query = $this->db->query(" SELECT max(run_number)+1 as new_id 
                                FROM information 
                              ");  
    return $query;
  }

  function get_information(){
    $res = $this->db->query("SELECT * from information
                              order by id asc"); 
    return $res->result();
  }

  function add_information($code,$title1,$title2,$description
                          ,$link_maps,$run,$status){
    $insert = $this->db->query("INSERT INTO 
                                        information(code,title1,title2,datecreated,description,link_maps,userid,run_number,status) 
                                        Values
                                        ('".$code."','".$title1."','".$title2."',CURRENT_TIME(),
                                          '".$description."','".$link_maps."','".$this->session->userdata('id_user')."'
                                          ,'".$run."','".$status."')
                            ");
    return $insert;
  }
    
  function update_information($code,$name,$url,$status,$description){
    $update = $this->db->query(" UPDATE information SET name = '".$name."',url = '".$url."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_information($code){
    $delete = $this->db->query(" DELETE FROM information WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for Hotel
  function get_hotel(){
    $res = $this->db->query("SELECT * from hotel
                              order by id asc"); 
    return $res->result();
  }

  function add_hotel($title,$file,$email,$contact,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                hotel(title,file_upload,email,contact,url,status) 
                                Values
                                ('".$title."','".$file."','".$email."','".$contact."','".$url."','".$status."')
                            ");
    return $insert;
  }
    
  function update_hotel($code,$title,$email,$contact,$url,$status){
    $update = $this->db->query(" UPDATE hotel SET title = '".$title."',email = '".$email."'
                                  ,contact = '".$contact."',url = '".$url."',status = '".$status."'
                                  WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_hotel($code){
    $delete = $this->db->query(" DELETE FROM hotel WHERE id = '".$code."'
                      ");
    return $delete;
  }
}