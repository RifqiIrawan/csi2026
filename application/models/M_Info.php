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
    
  function update_hotel($code,$title,$email,$contact,$url,$status,$file){
    $update = $this->db->query(" UPDATE hotel SET title = '".$title."',email = '".$email."'
                                ,contact = '".$contact."',url = '".$url."',status = '".$status."',file_upload = '".$file."'
                                WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_hotel($code){
    $delete = $this->db->query(" DELETE FROM hotel WHERE id = '".$code."'
                      ");
    return $delete;
  }

  // for Contact Us
  function get_contact1(){
    $res = $this->db->query("SELECT * from contact
                              where level = '1'
                              order by id asc"); 
    return $res->result();
  }

  function get_contact2(){
    $res = $this->db->query("SELECT * from contact
                              where level = '2'
                              order by id asc"); 
    return $res->result();
  }

  function get_contact3(){
    $res = $this->db->query("SELECT * from contact
                              where level = '3'
                              order by id asc"); 
    return $res->result();
  }
  
  function get_contact_us(){
    $res = $this->db->query("SELECT * from contact_bg
                              order by id asc"); 
    return $res->result();
  }

  function add_contact_us($title,$file,$status){
    $insert = $this->db->query("INSERT INTO 
                                contact_bg(title,file_upload,status) 
                                Values
                                ('".$title."','".$file."','".$status."')
                            ");
    return $insert;
  }
    
  function update_contact_us($code,$title,$status,$file){
    $update = $this->db->query("UPDATE contact_bg SET title = '".$title."',status = '".$status."',file_upload = '".$file."'
                                WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_contact_us($code){
    $delete = $this->db->query(" DELETE FROM contact_bg WHERE id = '".$code."'
                      ");
    return $delete;
  }

  function submit_form($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                      ,$company_street,$suburb,$town,$postal,$country,$message){
    $insert = $this->db->query("INSERT INTO 
                                submit_form(code,title,full_name,gender,country_code,phone_number,email
                                          ,job_title,company_name,company_addres,suburb
                                          ,city,postal_code,country,description,datecreated) 
                                Values
                                ('".$code."','".$title."','".$name."','".$gender."','".$country_code."','".$phone."'
                                ,'".$email."','".$job_title."','".$company."','".$company_street."','".$suburb."','".$town."'
                                ,'".$postal."','".$country."','".$message."',CURRENT_TIME())
                            ");
    return $insert;
  }

  function get_submit(){
    $res = $this->db->query("SELECT * from submit_form
                              order by id asc"); 
    return $res->result();
  }

  function add_submit($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                      ,$company_street,$suburb,$town,$postal,$country,$message){
    $insert = $this->db->query("INSERT INTO 
                                submit_form(code,title,full_name,gender,country_code,phone_number,email
                                          ,job_title,company_name,company_addres,suburb
                                          ,city,postal_code,country,description,datecreated) 
                                Values
                                ('".$code."','".$title."','".$name."','".$gender."','".$country_code."','".$phone."'
                                ,'".$email."','".$job_title."','".$company."','".$company_street."','".$suburb."','".$town."'
                                ,'".$postal."','".$country."','".$message."',CURRENT_TIME())
                            ");
return $insert;
  }
    
  function update_submit($code,$title,$name,$gender,$country_code,$phone,$email,$job_title,$company
                          ,$company_street,$suburb,$town,$postal,$country,$message){
    $update = $this->db->query(" UPDATE submit_form SET 
                                  title = '".$title."'
                                  ,full_name = '".$name."'
                                  ,gender = '".$gender."'
                                  ,country_code = '".$country_code."'
                                  ,phone_number = '".$phone."'
                                  ,email = '".$email."'
                                  ,job_title = '".$job_title."'
                                  ,company_name = '".$company."'
                                  ,company_addres = '".$company_street."'
                                  ,suburb = '".$suburb."'
                                  ,city = '".$town."'
                                  ,postal_code = '".$postal."'
                                  ,country = '".$country."'
                                  ,description = '".$message."'
                                  WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_submit($code){
    $delete = $this->db->query(" DELETE FROM submit_form WHERE id = '".$code."'
                      ");
    return $delete;
  }

  function get_header_news(){
    $res = $this->db->query("SELECT * from header_news
                              order by id asc"); 
    return $res->result();
  }

  function add_header_news($title,$file,$status){
    $insert = $this->db->query("INSERT INTO 
                                header_news(title,file_upload,status,datecreated) 
                                Values
                                ('".$title."','".$file."','".$status."',CURRENT_TIME())
                              ");
    return $insert;
  }
    
  function update_header_news($code,$title,$file,$status){
    $update = $this->db->query(" UPDATE header_news SET title = '".$title."',file_upload='".$file."',status = '".$status."'
                                  WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_header_news($code){
    $delete = $this->db->query(" DELETE FROM header_news WHERE id = '".$code."'
                      ");
    return $delete;
  }

  //for news update
  function get_news_update(){
    $res = $this->db->query("SELECT * from news_update
                              order by id asc"); 
    return $res->result();
  }

  function add_news_update($title,$date,$file,$description,$status){
    $insert = $this->db->query("INSERT INTO 
                                news_update(title,date_news,file_upload,description,status,datecreated) 
                                Values
                                ('".$title."','".$date."','".$file."','".$description."','".$status."',CURRENT_TIME())
                              ");
    return $insert;
  }
    
  function update_news_update($code,$title,$date,$file,$description,$status){
    $update = $this->db->query(" UPDATE news_update SET title = '".$title."',date_news='".$date."',file_upload='".$file."'
                                  ,description = '".$description."',status = '".$status."'
                                  WHERE id = '".$code."'
                      ");
    return $update;
  }
  
  function delete_news_update($code){
    $delete = $this->db->query(" DELETE FROM news_update WHERE id = '".$code."'
                      ");
    return $delete;
  }
}