<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Userlogin extends CI_Model
{	
  // function generate_kode(){
  //   $query = $this->db->query(" SELECT max(urut)+1 as new_id 
  //                               FROM userlogin 
  //                       ");  
  //   return $query;
  // }

  function get_userlogin(){
    $hasil = $this->db->query("SELECT * from login 
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah($nama,$username,$password,$status){
    $insert = $this->db->query("INSERT INTO 
                                        login(nama,username,password,status,tanggal,createdby) 
                                        Values
                                        ('".$nama."','".$username."','".$password."'
                                        ,'".$status."',CURRENT_TIME()
                                        ,'".$this->session->userdata('id_user')."')
                            ");
    return $insert;
  }

  function ubah($kode,$nama,$username,$password,$status){
    $ubah = $this->db->query(" UPDATE login SET nama = '".$nama."'
                                                ,username = '".$username."'
                                                ,password = '".$password."'
                                                ,status = '".$status."'
                                                ,dateupdate = CURRENT_TIME()
                                                ,userupdate = '".$this->session->userdata('id_user')."'
                                    WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus($kode){
    $hapus = $this->db->query(" DELETE FROM login WHERE id = '".$kode."'
                      ");
    return $hapus;
  }
}