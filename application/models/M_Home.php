<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model
{	
  // for menu
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

  // for event date  
  function get_date_event(){
    $res = $this->db->query("SELECT * from event
                              order by id asc"); 
    return $res->result();
  }

  function add_date_event($name,$title1,$description1,$img1,$title2,$description2,$img2,$status){
    $insert = $this->db->query("INSERT INTO 
                                        event(name,title1,description1,image1,title2,description2,image2,status,datecreated,createdby) 
                                        Values
                                        ('".$name."','".$title1."','".$description1."','".$img1."'
                                        ,'".$title2."','".$description2."','".$img2."','".$status."'
                                        ,CURRENT_TIME(),'".$this->session->userdata('id_user')."')
                            ");
    return $insert;
  }
    
  function update_date_event($code,$name,$title1,$description1,$img1,$title2,$description2,$img2,$status){
    $update = $this->db->query(" UPDATE event SET name = '".$name."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_date_event($code){
    $delete = $this->db->query(" DELETE FROM event WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for content 1  
  function get_content1(){
    $res = $this->db->query("SELECT * from content1
                              order by id asc"); 
    return $res->result();
  }

  function add_content1($title,$description,$image_title,$img,$status){
    $insert = $this->db->query("INSERT INTO 
                                content1(title,description,image_title,image,status) 
                                Values
                                ('".$title."','".$description."','".$image_title."','".$img."','".$status."')
                              ");
    return $insert;
  }
    
  function update_content1($code,$name,$title1,$description1,$img1,$title2,$description2,$img2,$status){
    $update = $this->db->query(" UPDATE content1 SET name = '".$name."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_content1($code){
    $delete = $this->db->query(" DELETE FROM content1 WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for event value
  function get_event_value(){
    $res = $this->db->query("SELECT * from event_value
                              order by id asc"); 
    return $res->result();
  }

  function add_event_value($title,$value,$status){
    $insert = $this->db->query("INSERT INTO 
                                event_value(title,value,status) 
                                Values
                                ('".$title."','".$value."','".$status."')
                              ");
    return $insert;
  }
    
  function update_event_value($code,$title,$value,$status){
    $update = $this->db->query(" UPDATE event_value SET title = '".$title."',value = '".$value."' 
                                ,status = '".$status."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_event_value($code){
    $delete = $this->db->query(" DELETE FROM event_value WHERE id = '".$code."'
                      ");
    return $delete;
  }

  
  //profile
  function get_code_profile(){
    $query = $this->db->query(" SELECT max(id)+1 as new_id 
                                FROM profile 
                        ");  
    return $query;
  }  

  function get_profile(){
    $res = $this->db->query("SELECT * from profile
                              order by id asc"); 
    return $res->result();
  }

  function get_profile_dashboard(){
    $res = $this->db->query("SELECT * from profile
                                where id = (select MAX(id) from profile where status = 'A')
                              order by id asc"); 
    return $res;
  }

  function add_profile($company,$file,$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status){
    $insert = $this->db->query("INSERT INTO 
                                profile(company_name,logo,folder,nick_name,address
                                        ,gmaps,phone,fax,email,website,datecreated,createdby,status) 
                                Values
                                ('".$company."','".$file."','".$folder."','".$nick."'
                                ,'".$address."','".$maps."','".$phone."'
                                ,'".$fax."','".$email."','".$website."',CURRENT_TIME()
                                ,'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function update_profile($code,$name,$icon,$url,$status){
    $ubah = $this->db->query(" UPDATE profile SET 
                                      name = '".$name."'
                                      ,icon = '".$icon."'
                                      ,url = '".$url."'
                                      ,status = '".$status."'
                              WHERE id = '".$code."'
                      ");
    return $ubah;
  }

  function delete_profile($code){
    $hapus = $this->db->query(" DELETE FROM profile WHERE id = '".$code."'
                      ");
    return $hapus;
  }

  //product
  function get_product(){
    $res = $this->db->query("SELECT * from menu
                              order by id asc"); 
    return $res->result();
  }

  function add_product($name,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        menu(name,status,description) 
                                        Values
                                        ('".$name."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_product($code,$name,$status,$description){
    $update = $this->db->query(" UPDATE menu SET name = '".$name."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_product($code){
    $delete = $this->db->query(" DELETE FROM menu WHERE id = '".$code."'
                      ");
    return $delete;
  }

  //support
  function get_code_support(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM support 
                        ");  
    return $query;
  }  

  function get_support(){
    $res = $this->db->query("SELECT * from support
                              order by id asc"); 
    return $res->result();
  }

  function add_support($name,$file,$folder,$number,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                support(name,file_name,folder_name,urut,url,datecreated,createdby,status) 
                                Values
                                ('".$name."','".$file."','".$folder."','".$number."','".$url."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function update_support($code,$name,$file_name,$urut,$url,$status){
    $upd = $this->db->query(" UPDATE support SET 
                                  name = '".$name."'  
                                  ,file_name = '".$file_name."'                                
                                  ,urut = '".$urut."' 
                                  ,url = '".$url."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$code."'
                      ");
    return $upd;
  }

  function delete_support($code){
    $delete = $this->db->query(" DELETE FROM support WHERE id = '".$code."'
                      ");
    return $delete;
  }
}