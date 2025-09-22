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

  function get_visitor(){
    $hasil = $this->db->query("SELECT *
                                FROM visitor_ip
                                ")->result(); 
    return $hasil;
  }

  function get_slide(){
    $hasil = $this->db->query("SELECT *
                                FROM design_header
                                where status = 'A' 
                                order by urut
                              ")->result(); 
    return $hasil;
  }

  function get_slide2(){
    $hasil = $this->db->query("SELECT *
                                FROM partner
                                where status = 'A' 
                                order by urut
                              ")->result(); 
    return $hasil;
  }

  function get_slide3(){
    $hasil = $this->db->query("SELECT *
                                FROM company
                                where status = 'A'
                                order by urut
                              ")->result(); 
    return $hasil;
  }

  function get_slide4(){
    $hasil = $this->db->query("SELECT *
                                FROM product
                                where status = 'A' 
                                order by urut
                              ")->result(); 
    return $hasil;
  }

  function get_sosmed(){
    $hasil = $this->db->query("SELECT *
                                FROM sosmed
                                where status = 'A' 
                                order by id
                              ")->result(); 
    return $hasil;
  }

  function get_event(){
    $hasil = $this->db->query("SELECT *
                                FROM event
                                where status = 'A' 
                                order by position
                              ")->result(); 
    return $hasil;
  }

  function tbl_domestic(){
    $hasil = $this->db->query("SELECT *
                                FROM customer
                                where status = 'A' 
                                and kategori = '1'
                                order by id
                              ")->result(); 
    return $hasil;
  }

  function tbl_overseas(){
    $hasil = $this->db->query("SELECT *
                                FROM customer
                                where status = 'A' 
                                and kategori = '2'
                                order by id
                              ")->result(); 
    return $hasil;
  }

  function submit_form($name,$email,$subject,$message){
    $insert = $this->db->query("INSERT INTO 
                                submit_form(name,subject,email,message,datecreated) 
                                Values
                                ('".$name."','".$subject."','".$email."','".$message."',CURRENT_TIME())
                            ");
    return $insert;
  }

  function get_news(){
    $hasil = $this->db->query("SELECT *
                                FROM news
                                where status = 'A' 
                                order by position
                              ")->result(); 
    return $hasil;
  }

  function get_news_detail($url){
    $hasil = $this->db->query("SELECT *
                                FROM news
                                where status = 'A' 
                                and id = '".$url."'
                                order by position
                              "); 
    return $hasil;
  }

  function get_event_update($url){
    $hasil = $this->db->query("SELECT *
                                FROM event
                                where status = 'A' 
                                and id = '".$url."'
                                order by position
                              "); 
    return $hasil;
  }
}