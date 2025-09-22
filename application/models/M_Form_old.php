<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Form extends CI_Model{	

  function get_kode_header(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM design_header 
                        ");  
    return $query;
  }

  function get_header(){
    $hasil = $this->db->query("SELECT * from design_header
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_header($nama,$file,$folder,$number,$status){
    $insert = $this->db->query("INSERT INTO 
                                design_header(nama,file_name,folder_name,urut,datecreated,createdby,status) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function ubah_header($kode,$nama,$file_name,$urut,$status){
    $ubah = $this->db->query(" UPDATE design_header SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,urut = '".$urut."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_header($kode){
    $hapus = $this->db->query(" DELETE FROM design_header WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  //product
  function get_kode_product(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM product 
                        ");  
    return $query;
  }

  function get_product(){
    $hasil = $this->db->query("SELECT * from product
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_product($nama,$file,$folder,$number,$status){
    $insert = $this->db->query("INSERT INTO 
                                product(nama,file_name,folder_name,urut,datecreated,createdby,status) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function ubah_product($kode,$nama,$file_name,$urut,$status){
    $ubah = $this->db->query(" UPDATE product SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,urut = '".$urut."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_product($kode){
    $hapus = $this->db->query(" DELETE FROM product WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  //company
  function get_kode_company(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM company 
                        ");  
    return $query;
  }

  function get_company(){
    $hasil = $this->db->query("SELECT * from company
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_company($nama,$file,$folder,$number,$status,$keterangan){
    $insert = $this->db->query("INSERT INTO 
                                company(nama,file_name,folder_name,urut,datecreated,createdby,status,description) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."','".$keterangan."')
                            ");
    return $insert;
  }
    
  function ubah_company($kode,$nama,$file_name,$urut,$status,$keterangan){
    $ubah = $this->db->query(" UPDATE company SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,urut = '".$urut."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                                  ,description = '".$keterangan."'
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_company($kode){
    $hapus = $this->db->query(" DELETE FROM company WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  //partner
  function get_kode_partner(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM partner 
                        ");  
    return $query;
  }  

  function get_partner(){
    $hasil = $this->db->query("SELECT * from partner
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_partner($nama,$file,$folder,$number,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                partner(nama,file_name,folder_name,urut,url,datecreated,createdby,status) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$number."','".$url."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function ubah_partner($kode,$nama,$file_name,$urut,$url,$status){
    $ubah = $this->db->query(" UPDATE partner SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,urut = '".$urut."' 
                                  ,url = '".$url."' 
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_partner($kode){
    $hapus = $this->db->query(" DELETE FROM partner WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

   //customer
  function get_customer(){
    $hasil = $this->db->query("SELECT * from customer
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_customer($kategori,$nama,$services,$status){
    $insert = $this->db->query("INSERT INTO 
                                customer(nama,services,kategori,datecreated,createdby,status) 
                                Values
                                ('".$nama."','".$services."','".$kategori."',CURRENT_TIME()
                                ,'".$this->session->userdata('id_user')."','".$status."')
                            ");
    return $insert;
  }
    
  function ubah_customer($kode,$kategori,$nama,$services,$status){
    $ubah = $this->db->query(" UPDATE customer SET 
                                  nama = '".$nama."'
                                  ,services = '".$services."'
                                  ,kategori = '".$kategori."'
                                  ,status = '".$status."'
                                  ,dateupdate = CURRENT_TIME()
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_customer($kode){
    $hapus = $this->db->query(" DELETE FROM customer WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  // event
  function get_kode_event(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM event 
                        ");  
    return $query;
  }  

  function get_event(){
    $hasil = $this->db->query("SELECT * from event
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_event($nama,$file,$folder,$posisi,$number,$status,$keterangan){
    $insert = $this->db->query("INSERT INTO 
                                event(nama,file_name,folder_name,position,urut,datecreated,createdby,status,description) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$posisi."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."','".$keterangan."')
                            ");
    return $insert;
  }
    
  function ubah_event($kode,$nama,$file_name,$posisi,$status,$keterangan){
    $ubah = $this->db->query(" UPDATE event SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,status = '".$status."'
                                  ,position = '".$posisi."'
                                  ,dateupdate = CURRENT_TIME()
                                  ,description = '".$keterangan."'
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_event($kode){
    $hapus = $this->db->query(" DELETE FROM event WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  //news
  function get_kode_news(){
    $query = $this->db->query(" SELECT max(urut)+1 as new_id 
                                FROM news 
                        ");  
    return $query;
  }  

  function get_news(){
    $hasil = $this->db->query("SELECT * from news
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_news($nama,$file,$folder,$posisi,$number,$status,$keterangan){
    $insert = $this->db->query("INSERT INTO 
                                news(nama,file_name,folder_name,position,urut,datecreated,createdby,status,description) 
                                Values
                                ('".$nama."','".$file."','".$folder."','".$posisi."','".$number."'
                                ,CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."','".$keterangan."')
                            ");
    return $insert;
  }
    
  function ubah_news($kode,$nama,$file_name,$posisi,$status,$keterangan){
    $ubah = $this->db->query(" UPDATE news SET 
                                  nama = '".$nama."'
                                  ,file_name = '".$file_name."'
                                  ,status = '".$status."'
                                  ,position = '".$posisi."'
                                  ,dateupdate = CURRENT_TIME()
                                  ,description = '".$keterangan."'
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_news($kode){
    $hapus = $this->db->query(" DELETE FROM news WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  //sosmed
  function get_sosmed(){
    $hasil = $this->db->query("SELECT * from sosmed
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah_sosmed($nama,$icon,$url,$status){
    $insert = $this->db->query("INSERT INTO 
                                sosmed(nama,icon,url,datecreated,createdby,status) 
                                Values
                                ('".$nama."','".$icon."','".$url."',CURRENT_TIME(),'".$this->session->userdata('id_user')."'
                                ,'".$status."')
                            ");
    return $insert;
  }
    
  function ubah_sosmed($kode,$nama,$icon,$url,$status){
    $ubah = $this->db->query(" UPDATE sosmed SET 
                                      nama = '".$nama."'
                                      ,icon = '".$icon."'
                                      ,url = '".$url."'
                                      ,status = '".$status."'
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_sosmed($kode){
    $hapus = $this->db->query(" DELETE FROM sosmed WHERE id = '".$kode."'
                      ");
    return $hapus;
  }


  //profile
  function get_kode_profile(){
    $query = $this->db->query(" SELECT max(id)+1 as new_id 
                                FROM profile 
                        ");  
    return $query;
  }  

  function get_profile(){
    $hasil = $this->db->query("SELECT * from profile
                              order by id asc"); 
    return $hasil->result();
  }

  function get_profile_dashboard(){
    $hasil = $this->db->query("SELECT * from profile
                                where id = (select MAX(id) from profile where status = 'A')
                              order by id asc"); 
    return $hasil;
  }

  function tambah_profile($company,$file,$folder,$nick,$address,$maps,$phone,$fax,$email,$website,$status){
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
    
  function ubah_profile($kode,$nama,$icon,$url,$status){
    $ubah = $this->db->query(" UPDATE profile SET 
                                      nama = '".$nama."'
                                      ,icon = '".$icon."'
                                      ,url = '".$url."'
                                      ,status = '".$status."'
                              WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus_profile($kode){
    $hapus = $this->db->query(" DELETE FROM profile WHERE id = '".$kode."'
                      ");
    return $hapus;
  }

  // submit form
  function contact_us(){
    $hasil = $this->db->query("SELECT * from submit_form
                              order by id asc"); 
    return $hasil->result();
  }

   // content form
   function content(){
    $hasil = $this->db->query("SELECT * from content
                              order by id asc"); 
    return $hasil->result();
  }
}