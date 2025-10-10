<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Info extends CI_Model
{	
  // for visitor_information
  function get_visitor_information(){
    $res = $this->db->query("SELECT * from visitor_information
                              order by id asc"); 
    return $res->result();
  }

  function add_visitor_information($name,$url,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        visitor_information(name,url,status,description) 
                                        Values
                                        ('".$name."','".$url."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_visitor_information($code,$name,$url,$status,$description){
    $update = $this->db->query(" UPDATE visitor_information SET name = '".$name."',url = '".$url."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_visitor_information($code){
    $delete = $this->db->query(" DELETE FROM visitor_information WHERE id = '".$code."'
                      ");
    return $delete;
  }
}