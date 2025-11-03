<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model
{	

  function search_text($code,$text){
    $res = $this->db->query("SELECT * from $text
                              where id = '".$code."'"); 
    return $res;
  }
  // for menu
  function get_menu(){
    $res = $this->db->query("SELECT * from menu
                              order by position asc"); 
    return $res->result();
  }

  function add_menu($name,$url,$position,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        menu(name,url,position,status,description) 
                                        Values
                                        ('".$name."','".$url."','".$position."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_menu($code,$name,$url,$position,$status,$description){
    $update = $this->db->query(" UPDATE menu SET name = '".$name."',url = '".$url."',position = '".$position."',status = '".$status."'
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
    $update = $this->db->query(" UPDATE event SET 
                                              name = '".$name."'
                                              ,title1 = '".$title1."'
                                              ,description1 = '".$description1."'
                                              ,image1 = '".$img1."'
                                              ,title2 = '".$title2."'
                                              ,description2 = '".$description2."'
                                              ,image2 = '".$img2."'
                                              ,status = '".$status."'
                                WHERE id = '".$code."'
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
    
  function update_content1($code,$title,$description,$image_title,$img,$status){
    $update = $this->db->query(" UPDATE content1 SET 
                                  title = '".$title."'
                                  ,description = '".$description."'
                                  ,image_title = '".$image_title."'
                                  ,image = '".$img."'
                                  ,status = '".$status."'
                                WHERE id = '".$code."'
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

  function add_profile($company,$vision,$file,$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status){
    $insert = $this->db->query("INSERT INTO 
                                profile(company_name,vision,logo,folder,nick_name,address
                                        ,gmaps,phone,fax,email,website,datecreated,createdby,status) 
                                Values
                                ('".$company."','".$vision."','".$file."','".$folder."','".$nick."'
                                ,'".$address."','".$maps."','".$phone."'
                                ,'".$fax."','".$email."','".$website."',CURRENT_TIME()
                                ,'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function update_profile($code,$company,$vision,$file,$nick,$address,$maps,$phone,$fax,$email,$website,$status){
    $ubah = $this->db->query(" UPDATE profile SET 
                                      company_name = '".$company."'
                                      ,vision = '".$vision."'
                                      ,logo = '".$file."'
                                      ,nick_name = '".$nick."'
                                      ,address = '".$address."'
                                      ,gmaps = '".$maps."'
                                      ,phone = '".$phone."'
                                      ,fax = '".$fax."'
                                      ,email = '".$email."'
                                      ,website = '".$website."'
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
    $res = $this->db->query("SELECT * from product
                              order by position asc"); 
    return $res->result();
  }

  function add_product($name,$position,$status,$description,$file){
    $insert = $this->db->query("INSERT INTO 
                                        product(name,status,description,position,file_upload) 
                                        Values
                                        ('".$name."','".$status."','".$description."','".$position."','".$file."')
                            ");
    return $insert;
  }
    
  function update_product($code,$name,$position,$status,$description,$file){
    $update = $this->db->query(" UPDATE product SET name = '".$name."',status = '".$status."',position = '".$position."',file_upload = '".$file."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_product($code){
    $delete = $this->db->query(" DELETE FROM product WHERE id = '".$code."'
                      ");
    return $delete;
  }

  //support
  function get_code_support(){
    $query = $this->db->query(" SELECT max(position)+1 as new_id 
                                FROM support 
                        ");  
    return $query;
  }  

  function get_support(){
    $res = $this->db->query("SELECT * from support
                              order by position asc"); 
    return $res->result();
  }

  function add_support($name,$file,$url,$folder,$status,$position){
    $insert = $this->db->query("INSERT INTO 
                                support(name,file_name,folder_name,url,datecreated,createdby,status,position) 
                                Values
                                ('".$name."','".$file."','".$folder."','".$url."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."','".$position."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function update_support($code,$name,$file_name,$url,$status,$position){
    $upd = $this->db->query(" UPDATE support SET 
                                  name = '".$name."'  
                                  ,file_name = '".$file_name."'                                
                                  ,url = '".$url."'      
                                  ,status = '".$status."'
                                  ,position = '".$position."'
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

  // for menu
  function get_book_stand(){
    $res = $this->db->query("SELECT *                                
                              from book_stand
                              order by id asc"); 
    return $res->result();
  }

  function add_book_stand($name,$status,$description,$description2,$file_name,$file2){
    $insert = $this->db->query("INSERT INTO 
                                        book_stand(title,status,description,description2,file_name,upload_file) 
                                        Values
                                        ('".$name."','".$status."','".$description."','".$description2."','".$file_name."','".$file2."')
                            ");
    return $insert;
  }
    
  function update_book_stand($code,$name,$status,$description,$description2,$file_1,$file_2){
    $update = $this->db->query(" UPDATE book_stand SET
                                title = '".$name."'
                                ,description = '".$description."'
                                ,description2 = '".$description2."'
                                ,file_name = '".$file_1."'
                                ,upload_file = '".$file_2."'
                                ,status = '".$status."'
                                WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_book_stand($code){
    $delete = $this->db->query(" DELETE FROM book_stand WHERE id = '".$code."'
                      ");
    return $delete;
  }

  //sosmed
  function get_sosmed(){
    $hasil = $this->db->query("SELECT * from sosmed
                              order by id asc"); 
    return $hasil->result();
  }

  function add_sosmed($name,$icon,$url,$status){
    $res = $this->db->query("INSERT INTO 
                                sosmed(name,icon,url,datecreated,createdby,status) 
                                Values
                                ('".$name."','".$icon."','".$url."',CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $res;
  }
    
  function update_sosmed($kode,$name,$icon,$url,$status){
    $res = $this->db->query(" UPDATE sosmed SET 
                                      name = '".$name."'
                                      ,icon = '".$icon."'
                                      ,url = '".$url."'
                                      ,status = '".$status."'
                              WHERE id = '".$kode."'
                      ");
    return $res;
  }

  function delete_sosmed($kode){
    $res = $this->db->query(" DELETE FROM sosmed WHERE id = '".$kode."'
                      ");
    return $res;
  }

  //contact
  function get_contact(){
    $res = $this->db->query("SELECT * from contact
                              order by id asc"); 
    return $res->result();
  }

  function add_contact($name,$position,$hp,$email,$status){
    $insert = $this->db->query("INSERT INTO 
                                        contact(name,position,hp,email,status) 
                                        Values
                                        ('".$name."','".$position."','".$hp."','".$email."','".$status."')
                            ");
    return $insert;
  }
    
  function update_contact($code,$name,$position,$hp,$email,$status){
    $update = $this->db->query(" UPDATE contact SET name = '".$name."',position = '".$position."'
                                ,hp = '".$hp."',email = '".$email."'
                                ,status = '".$status."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_contact($code){
    $delete = $this->db->query(" DELETE FROM contact WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // quick link
  function get_quick_link(){
    $res = $this->db->query("SELECT * 
                              from quick_link
                              order by id asc"); 
    return $res->result();
  }

  function add_quick_link($title,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                        quick_link(title,url,status) 
                                        Values
                                        ('".$title."','".$url."','".$status."')
                            ");
    return $insert;
  }
    
  function update_quick_link($code,$title,$url,$status){
    $update = $this->db->query(" UPDATE quick_link SET title = '".$title."',url = '".$url."'
                                ,status = '".$status."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_quick_link($code){
    $delete = $this->db->query(" DELETE FROM quick_link WHERE id = '".$code."'
                      ");
    return $delete;
  }


  // for Link Event Management
  function get_link_event(){
    $res = $this->db->query("SELECT * from link_event
                              order by id asc"); 
    return $res->result();
  }

  function add_link_event($title,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                        link_event(title,url,status) 
                                        Values
                                        ('".$title."','".$url."','".$status."')
                            ");
    return $insert;
  }
    
  function update_link_event($code,$title,$url,$status){
    $update = $this->db->query(" UPDATE link_event SET title = '".$title."',url = '".$url."',status = '".$status."'
                                WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_link_event($code){
    $delete = $this->db->query(" DELETE FROM link_event WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for Floor Plan
  function get_floor_plan(){
    $res = $this->db->query("SELECT * from floor_plan
                              order by id asc"); 
    return $res->result();
  }

  function add_floor_plan($title,$file,$status){
    $insert = $this->db->query("INSERT INTO 
                                        floor_plan(title,file_upload,status) 
                                        Values
                                        ('".$title."','".$file."','".$status."')
                            ");
    return $insert;
  }
    
  function update_floor_plan($code,$title,$file,$status){
    $update = $this->db->query(" UPDATE floor_plan SET title = '".$title."',file_upload = '".$file."',status = '".$status."'
                                WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_floor_plan($code){
    $delete = $this->db->query(" DELETE FROM floor_plan WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for Carousel
  function get_carousel(){
    $res = $this->db->query("SELECT * from carousel
                              order by id asc"); 
    return $res->result();
  }

  function add_carousel($title,$file,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        carousel(title,file_upload,status,description) 
                                        Values
                                        ('".$title."','".$file."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_carousel($code,$title,$file,$status,$description){
    $update = $this->db->query(" UPDATE carousel SET title = '".$title."',file_upload = '".$file."',status = '".$status."'
                                  ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_carousel($code){
    $delete = $this->db->query(" DELETE FROM carousel WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for menu
  function get_highlights(){
    $res = $this->db->query("SELECT * from highlights
                              order by id asc"); 
    return $res->result();
  }

  function add_highlights($title,$url,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        highlights(title,url,status,description) 
                                        Values
                                        ('".$title."','".$url."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_highlights($code,$title,$url,$status,$description){
    $update = $this->db->query(" UPDATE highlights SET title = '".$title."',url = '".$url."',status = '".$status."'
                            ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_highlights($code){
    $delete = $this->db->query(" DELETE FROM highlights WHERE id = '".$code."'
                      ");
    return $delete;
  }


  // for organizer
  function get_organizer(){
    $res = $this->db->query("SELECT * from organizer
                              order by id asc"); 
    return $res->result();
  }

  function add_organizer($title,$file,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        organizer(title,file_upload,status,description) 
                                        Values
                                        ('".$title."','".$file."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_organizer($code,$title,$file,$status,$description){
    $update = $this->db->query(" UPDATE organizer SET title = '".$title."',file_upload = '".$file."',status = '".$status."'
                                  ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_organizer($code){
    $delete = $this->db->query(" DELETE FROM organizer WHERE id = '".$code."'
                      ");
    return $delete;
  }

  
  // for member
  function get_member(){
    $res = $this->db->query("SELECT * from member
                              order by id asc"); 
    return $res->result();
  }

  function add_member($title,$file,$status,$description){
    $insert = $this->db->query("INSERT INTO 
                                        member(title,file_upload,status,description) 
                                        Values
                                        ('".$title."','".$file."','".$status."','".$description."')
                            ");
    return $insert;
  }
    
  function update_member($code,$title,$file,$status,$description){
    $update = $this->db->query(" UPDATE member SET title = '".$title."',file_upload = '".$file."',status = '".$status."'
                                  ,description = '".$description."' WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_member($code){
    $delete = $this->db->query(" DELETE FROM member WHERE id = '".$code."'
                      ");
    return $delete;
  }

  //sponsors
  function get_code_sponsors(){
    $query = $this->db->query(" SELECT max(position)+1 as new_id 
                                FROM sponsors 
                        ");  
    return $query;
  }  

  function get_sponsors(){
    $res = $this->db->query("SELECT * from sponsors
                              order by id asc"); 
    return $res->result();
  }

  function add_sponsors($name,$url,$file,$folder,$number,$status){
    $insert = $this->db->query("INSERT INTO 
                                sponsors(name,url,file_name,folder_name,position,datecreated,createdby,status) 
                                Values
                                ('".$name."','".$url."','".$file."','".$folder."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function update_sponsors($code,$name,$url,$file_name,$position,$status){
    $upd = $this->db->query(" UPDATE sponsors SET 
                                  name = '".$name."'  
                                  ,file_name = '".$file_name."'     
                                  ,url = '".$url."'                                
                                  ,position = '".$position."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$code."'
                      ");
    return $upd;
  }

  function delete_sponsors($code){
    $delete = $this->db->query(" DELETE FROM sponsors WHERE id = '".$code."'
                      ");
    return $delete;
  }

}