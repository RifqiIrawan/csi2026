<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model
{	
  function get_menu(){
    $res = $this->db->query("SELECT * from menu
                              order by id asc"); 
    return $res->result();
  }

  function add_menu($name,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        menu(name,status,description) 
                                        Values
                                        ('".$name."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_menu($code,$name,$status,$description){
    $update = $this->db->query(" UPDATE menu SET name = '".$name."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_menu($code){
    $delete = $this->db->query(" DELETE FROM menu WHERE id = '".$code."'
                      ");
    return $delete;
  }
}