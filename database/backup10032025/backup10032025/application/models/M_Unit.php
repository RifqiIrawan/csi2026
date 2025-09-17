<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Unit extends CI_Model
{	
  function get_data(){
    $hasil = $this->db->query("SELECT * from m_unit
                              order by id asc"); 
    return $hasil->result();
  }

  function tambah($kode,$nama){
    $insert = $this->db->query("INSERT INTO 
                                        m_unit(kode,nama) 
                                        Values
                                        ('".$kode."','".$nama."')
                            ");
    return $insert;
  }
    
  function ubah($kode,$kode_unit,$nama){
  $ubah = $this->db->query(" UPDATE m_unit SET nama = '".$nama."',kode = '".$kode_unit."' WHERE id = '".$kode."'
                      ");
    return $ubah;
  }

  function hapus($kode){
    $hapus = $this->db->query(" DELETE FROM m_unit WHERE id = '".$kode."'
                      ");
    return $hapus;
  }
}