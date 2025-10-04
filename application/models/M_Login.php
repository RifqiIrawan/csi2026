<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_Model{	
  function cek_login($username,$password){
      $hasil = $this->db->query("SELECT *
                                  FROM login                                    
                                  WHERE 1=1 
                                  and username = '".$username."'
                                  AND password = '".$password."'"
                                ); 
      return $hasil;
  }

  function get_menu(){
    $res = $this->db->query("SELECT *
                                FROM menu
                            ")->result(); 
    return $res;
  }

  function get_event(){
    $res = $this->db->query("SELECT *
                                FROM event
                                where status = 'A'
                              "); 
    return $res;
  }


  function get_product(){
    $res = $this->db->query("SELECT *
                                FROM product
                                where status = 'A' 
                                order by urut
                              ")->result(); 
    return $res;
  }

  function get_event_value(){
    $res = $this->db->query("SELECT *
                                FROM event_value
                                where status = 'A' 
                                order by id
                              ")->result(); 
    return $res;
  }

  function get_content1(){
    $res = $this->db->query("SELECT *
                                FROM content1
                                where status = 'A' 
                                order by id
                              "); 
    return $res;
  }

  function get_support(){
    $res = $this->db->query("SELECT *
                              FROM support
                              where status = 'A' 
                              order by urut
                            ")->result(); 
    return $res;
  }

  function get_profile(){
    $res = $this->db->query("SELECT *
                                FROM profile
                                where status = 'A' 
                                order by id
                              "); 
    return $res;
  }
}