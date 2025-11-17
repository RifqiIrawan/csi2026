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
                                FROM menu order by position asc
                            ")->result(); 
    return $res;
  }

  function get_event(){
    $res = $this->db->query("SELECT *
                                ,(SELECT file_upload
                                FROM floor_plan
                                WHERE id = (SELECT MAX(id) FROM floor_plan)
                                and status = 'A') as floor_file
                                ,(SELECT url
                                FROM link_event
                                WHERE id = (SELECT MAX(id) FROM link_event)
                                and status = 'A') as link_event
                                FROM event
                                where status = 'A'
                              "); 
    return $res;
  }


  function get_product(){
    $res = $this->db->query("SELECT *,'./assets/images/upload/product/' as folder_name
                                FROM product
                                where status = 'A' 
                                order by position
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
                              order by position
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

  function get_sosmed(){
    $res = $this->db->query("SELECT *
                                FROM sosmed
                                where status = 'A' 
                                order by id
                              ")->result(); 
    return $res;
  }

  function get_qlink(){
    $res = $this->db->query("SELECT *
                              FROM quick_link
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }

  function get_contact(){
    $res = $this->db->query("SELECT *
                              FROM contact
                              where status = 'A' and level = '1'
                              order by id
                            ")->result(); 
    return $res;
  }

  function get_carousel(){
    $res = $this->db->query("SELECT *,'./assets/images/upload/carousel/' as folder_name
                              FROM carousel
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }

  function get_highlights(){
    $res = $this->db->query("SELECT *
                              FROM highlights
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }
  
  function get_organizer(){
    $res = $this->db->query("SELECT *,'./assets/images/upload/organizer/' as folder_name
                              FROM organizer
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }

  function get_member(){
    $res = $this->db->query("SELECT *,'./assets/images/upload/member/' as folder_name
                              FROM member
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }

  function get_sponsors(){
    $res = $this->db->query("SELECT * ,'./assets/images/upload/sponsors/' as folder_name
                              FROM sponsors
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }
  function get_coperation(){
    $res = $this->db->query("SELECT * ,'./assets/images/upload/coperation/' as folder_name
                              FROM coperation
                              where status = 'A' 
                              order by id
                            ")->result(); 
    return $res;
  }
}