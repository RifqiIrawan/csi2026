<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class MM extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('fungsi');	
	}
	public function CheckKoneksi_get()
	{
		return $this->response("OK", REST_Controller::HTTP_OK);
	}

	public function login_post()
	{
		
		$rawdata = file_get_contents("php://input");
		$cm=json_decode($rawdata,true);

		$sql = "SELECT a.*,lv.nama_level
				FROM userlogin as a
				left join level as lv on a.level=lv.id
		         WHERE a.email=? and a.password=?";
		$query=$this->db->query($sql, array($cm["username"], md5($cm['password'])));
 		if($query->num_rows() > 0){            
            $data=[
				"STATUS"=>"1",
				"MESSAGE"=>$query->row_array()
			];
        }else{
             $data=[
               "STATUS"=>"0",
			   "MESSAGE"=>""
			];
        }       

		return $this->response($data, REST_Controller::HTTP_OK);
	}

	public function ListSisukaByNik_get(){

        $nik=$this->input->get("nik");
		$period=str_replace('-','',$this->input->get("bln"));
		$period2=str_replace('-','',$this->input->get("bln2"));
		// $thn = date("Y", strtotime($period));
		// $bln = date("m", strtotime($period));

		$a=$this->db->query("SELECT total_tabungan_sisuka
							FROM anggota
							where nik='{$nik}' ")->row_array();

        $c = $this->db->query("SELECT 
		                       * 
							   FROM tagihan_sisuka 
		                       where nik_anggota='{$nik}'
							   and concat(periode_tahun,periode_bulan) between '{$period}' and '{$period2}'
							   order by thn,bln desc")->result_array();

		$data=[
			"header"=>$a,
			"detail"=>$c
		];		
		return $this->response($data, REST_Controller::HTTP_OK);
	}

	public function ListPinjamanByNik_get(){
		$nik=$this->input->get("nik");		
		$status=$this->input->get("status");

		$srcStat="A";
		if($status != "" && $status == "Tidak Aktif"){
			$srcStat="P";
		}

		$que=$this->db->query("SELECT a.* ,(SELECT jumlah FROM detail_angsuran
											where nik=a.nik
											and kode_angsuran=a.kode_angsuran limit 1) as angsuran,
											(SELECT count(jumlah) FROM detail_angsuran
											where nik=a.nik
											and kode_angsuran=a.kode_angsuran) as jmlangsur
								FROM angsuran_anggota as a
								where nik='{$nik}'
								and status_pinjaman='{$srcStat}'
								order by thn desc,bln desc")->result_array();

		return $this->response($que, REST_Controller::HTTP_OK);


	}

	public function GetDetailPinjamanByKode_get(){
		$nik=$this->input->get("nik");		
		$kode=$this->input->get("kode");

		$que=$this->db->query("SELECT kode_detail_angsuran,
								angsuran,
								jumlah,
								tempo_bayar,
								flag FROM detail_angsuran
								where nik='{$nik}'
								and kode_angsuran='{$kode}' ")->result_array();

		return $this->response($que, REST_Controller::HTTP_OK);
	}


	public function getDataRiwayatBelanja_get(){
		$nik=$this->input->get("nik");
		$tgl1=$this->input->get("tgl1");
		$tgl2=$this->input->get("tgl2");

		$que=$this->db->query("SELECT * FROM belanja
								where nik='{$nik}'
								and tanggal_belanja between '{$tgl1}' AND '{$tgl2}'
								order by tanggal_belanja desc ")->result_array();

		return $this->response($que, REST_Controller::HTTP_OK);
	}

	public function getDataSHU_get(){
		$nik=$this->input->get("nik");
		$tahun=$this->input->get("tahun");

		$srcThn="";
		if($tahun != ""){
			$srcThn="and a.thn='{$tahun}'";
		}

		$que=$this->db->query("SELECT a.*,b.nama_anggota,b.unit
		                        FROM history_shu as a
								LEFT JOIN anggota as b on a.nik=b.nik
								where a.nik='{$nik}'
								".$srcThn."
								order by a.thn desc ")->result_array();

		return $this->response($que, REST_Controller::HTTP_OK);
	}


	public function changePassword_post(){
		$rawdata = file_get_contents("php://input");
		$decoded  = json_decode($rawdata, true);
		
		$nik= $decoded["nik"];
		$password= $decoded["password"];

		$this->db->query("UPDATE userlogin set password='".MD5($password)."' where nik='".$nik."'");      
		$data=["STATUS"=>1];
		$this->response($data, REST_Controller::HTTP_OK);

	}

	

	


}
