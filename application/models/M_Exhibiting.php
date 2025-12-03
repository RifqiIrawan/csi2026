<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Exhibiting extends CI_Model{	

    function get_contents($params) {
        $this->db->select('
            csi_contents.id, 
            csi_contents.content_year, 
            csi_contents.content_type, 
            csi_contents.title, 
            csi_contents.subtitle, 
            csi_contents.body_text, 
            csi_content_media.id as id_media, 
            csi_content_media.media_type, 
            csi_content_media.file_path, 
            csi_content_media.url_path,
            csi_content_media.menu_controller,
            csi_content_company_profile.company_name,
            csi_content_company_profile.stand_no
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        $this->db->join('csi_content_company_profile'
            , 'csi_content_media.id = csi_content_company_profile.content_media_id AND csi_content_media.content_id = csi_content_company_profile.content_id'
            , 'left');

        // 🚀 Dynamic conditions
        if (!empty($params['menu_id'])) {
            $this->db->where('csi_contents.menu_id', $params['menu_id']);
        }
        if (!empty($params['content_year'])) {
            $this->db->where('csi_contents.content_year', $params['content_year']);
        }
        if (!empty($params['content_type'])) {
            $this->db->where('csi_contents.content_type', $params['content_type']);
        }

        $this->db->where('csi_contents.status', 'active');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_content_company_profile($params) {
        $this->db->select('
            csi_content_media.file_path
            , csi_content_company_profile.content_id
            , csi_content_company_profile.company_name
            , csi_content_company_profile.stand_no
            , csi_content_company_profile.short_description
            , csi_content_company_profile.long_description
            , csi_content_company_profile.contact_name
            , csi_content_company_profile.contact_email
            , csi_content_company_profile.contact_phone
            , csi_content_company_profile.address
            , csi_content_company_profile.website_url
            , csi_content_company_profile.linkedin_url
            , csi_content_company_profile.twitter_url
            , csi_content_company_profile.facebook_url
            , csi_content_company_profile.youtube_url
            , csi_content_company_profile.instagram_url
        ');
        $this->db->from('csi_content_media');
        $this->db->join('csi_content_company_profile'
            , 'csi_content_media.id = csi_content_company_profile.content_media_id AND csi_content_media.content_id = csi_content_company_profile.content_id'
            , 'left');
        // 🚀 Dynamic conditions
        if (!empty($params['content_media_id'])) {
            $this->db->where('csi_content_media.id', $params['content_media_id']);
        }

        $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->result();
    }

    public function why_exhibit_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
		

		// if ($this->input->post('order')) {
		// 	$sortCount = sizeof($this->input->post('order'));
		// 	for ($i = 0; $i <pre $sortCount; $i++) {
		// 		if ($i > 0) {
		// 			$orderq .= ",";
		// 		}
		// 		$orderq .= $this->input->post('columns')[$this->input->post('order')[$i]['column']]['data'] 
		// 					. " " . $this->input->post('order')[$i]['dir'];
		// 	}
		// }

		// $where .= "WHERE csi_contents.content_year = 'banner' AND csi_contents.content_year = 2026 ";
		
		// if ( $search !== "" ) {
		// 	$where .= " where id = ? OR start_date LIKE ? OR end_date LIKE ? OR nama_karyawan LIKE ? ";
		// 	array_push($qWhere, $search, "%".$search."%", "%".$search."%", "%".$search."%");
		// }
		
		// $q = "SELECT csi_contentsid
		// 	, csi_contents.menu_id
		// 	, csi_contents.content_year
		// 	, csi_contents.content_type
		// 	, csi_contents.title
		// 	, csi_contents.subtitle
		// 	, csi_contents.body_text
		// 	FROM csi_contents 
		// 	LEFT JOIN csi_content_media on csi_contents.id = csi_content_media.content_id
		// 	$where 
		// 	ORDER BY $orderq LIMIT $limit OFFSET $start";
		
		// $query 	= $this->db>query($q, $qWhere);
        
            // -- csi_content_media.id as id,
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.subtitle,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'banner');
        $this->db->where('csi_contents.menu_id', 7);
        $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		    => $i,
				"id" 		    => $row->id,
				"content_year" 	=> $row->content_year,
				"title" 		=> $row->title,
				"subtitle" 		=> $row->subtitle,
				"file_path"	  	=> $row->file_path,
                "status"	  	=> $row->status,
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    public function insert($tablename, $data)
    {
        return $this->db->insert($tablename, $data);
    }

    public function get($tablename, $where = [])
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $query = $this->db->get($tablename);

        return $query;
    }
    /*
        1. Ambil semua data
        $data['all'] = $this->YourModel->getData('banners');

        2. Ambil 1 data berdasarkan kondisi
        $data['one'] = $this->YourModel->getData('banners', [
            'where'  => ['id' => 5],
            'single' => true
        ]);

        3. Ambil data dengan kolom tertentu + urutkan
        $data['list'] = $this->YourModel->getData('banners', [
            'select'   => 'id, title, status',
            'where'    => ['status' => 'active'],
            'order_by' => ['created_at', 'DESC'],
            'limit'    => 10
        ]);

    */
    public function getData($tablename, $options = [])
    {
        // Select
        if (!empty($options['select'])) {
            $this->db->select($options['select']);
        } else {
            $this->db->select('*'); // default ambil semua
        }

        // Where
        if (!empty($options['where'])) {
            $this->db->where($options['where']);
        }

        // Order By
        if (!empty($options['order_by'])) {
            $this->db->order_by($options['order_by'][0], $options['order_by'][1]); 
            // contoh: ['created_at','DESC']
        }

        // Limit
        if (!empty($options['limit'])) {
            if (is_array($options['limit'])) {
                $this->db->limit($options['limit'][0], $options['limit'][1]); 
                // contoh: ['10','20'] -> limit 10 offset 20
            } else {
                $this->db->limit($options['limit']);
            }
        }

        $query = $this->db->get($tablename);

        // Return row atau result
        if (!empty($options['single']) && $options['single'] === true) {
            return $query->row_array(); // hanya satu row
        }

        return $query->result_array(); // banyak row
    }
    /*
        1. Simple get
        $result = $this->M_Model->get('users', ['status' => 1]);

        2. With join
        $result = $this->M_Model->get(
            'users u',
            ['u.status' => 1],
            [['profiles p', 'p.user_id = u.id', 'left']],
            'u.id, u.name, p.address',
            ['u.id' => 'DESC']
        );
    */
    public function fetchData($tablename, $where = [], $join = [], $select = '*', $order = [])
    {
        // Select fields
        $this->db->select($select);
        $this->db->from($tablename);

        // Where condition
        if (!empty($where)) {
            $this->db->where($where);
        }

        // Joins: $join = [['table2', 'table2.id = table1.id_table2', 'left']]
        if (!empty($join)) {
            foreach ($join as $j) {
                $type = isset($j[2]) ? $j[2] : ''; // default inner join
                $this->db->join($j[0], $j[1], $type);
            }
        }

        // Order By: $order = ['field_name' => 'ASC/DESC']
        if (!empty($order)) {
            foreach ($order as $field => $dir) {
                $this->db->order_by($field, $dir);
            }
        }

        return $this->db->get();
    }

    public function update($table, $where, $data)
    {
        if (empty($table) || empty($where) || empty($data)) {
            return false; // safety check
        }

        $execute = $this->db->where($where)->update($table, $data);
        // echo $this->db->last_query();
        return $execute;
    }

    public function delete($table, $where)
    {
        // $table: nama tabel
        // $where: array kondisi, misal ['id' => 5]
        return $this->db->delete($table, $where);
    }
    
    public function why_exhibit_section_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
		

		
        
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.subtitle,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'section');
        $this->db->where('csi_contents.menu_id', 7);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
        // echo $this->db->last_query();
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		    => $i,
				"id" 		    => $row->id,
				"content_year" 	=> $row->content_year,
				// "title" 		=> $row->title,
				"subtitle" 		=> $row->title,
                "body_text"     => $row->body_text,
				"file_path"	  	=> $row->file_path,
                "status"	  	=> $row->status,
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    public function why_exhibit_visa_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
		

		
        
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.subtitle,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'visa-information');
        $this->db->where('csi_contents.menu_id', 7);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
        // echo $this->db->last_query();
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		    => $i,
				"id" 		    => $row->id,
				"content_year" 	=> $row->content_year,
				// "title" 		=> $row->title,
				"subtitle" 		=> $row->subtitle,
                "body_text"     => $row->body_text,
				"file_path"	  	=> $row->file_path,
                "status"	  	=> $row->status,
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}
    
    public function exhibitor_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
        
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.status,
            csi_content_company_profile.id as company_profile_id,
            csi_content_company_profile.company_name,
            csi_content_company_profile.stand_no,
            csi_content_company_profile.short_description,
            csi_content_company_profile.contact_name,
            csi_content_company_profile.contact_email,
            csi_content_company_profile.contact_phone,
            csi_content_company_profile.address,
            csi_content_company_profile.website_url
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_company_profile', 'csi_contents.id = csi_content_company_profile.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'company-profile');
        $this->db->where('csi_contents.menu_id', 8);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
        // echo $this->db->last_query();
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->menu_id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->menu_id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		         => $i,
				"id" 		         => $row->company_profile_id,
                "menu_id"            => $row->menu_id,
                "content_year"       => $row->content_year,
                "content_type"       => $row->content_type,
                "title"              => $row->title,
                "status"             => $row->status,
                "company_profile_id" => $row->company_profile_id,
                "company_name"       => $row->company_name,
                "stand_no"           => $row->stand_no,
                "short_description"  => $row->short_description,
                "contact_name"       => $row->contact_name,
                "contact_email"      => $row->contact_email,
                "contact_phone"      => $row->contact_phone,
                "address"            => $row->address,
                "website_url"        => $row->website_url
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    public function exhibitor_visa_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
        
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.subtitle,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'section');
        $this->db->where('csi_contents.menu_id', 9);
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
        // echo $this->db->last_query();
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->menu_id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->menu_id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		         => $i,
				"id" 		         => $row->id,
                "menu_id"            => $row->menu_id,
                "content_year"       => $row->content_year,
                "subtitle"           => $row->subtitle,
                "content_type"       => $row->content_type,
                "title"              => $row->title,
                "body_text"          => $row->body_text,
                "status"             => $row->status,
                "file_path"          => $row->file_path
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    public function get_testimonials() {
        $this->db->select('
            id
            , testimonial_author
            , testimonial_position
            , testimonial_company
            , testimonial_message
            , testimonial_order
            , testimonial_status
        ');
        $this->db->from('csi_testimonials');
        $this->db->where('testimonial_status', 1);
        $this->db->order_by('testimonial_order', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function why_exhibit_testimonial_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;
		
        $this->db->select('
            id
            , testimonial_author
            , testimonial_position
            , testimonial_company
            , testimonial_message
            , testimonial_order
            , testimonial_status
        ');
        $this->db->from('csi_testimonials');
        // where conditions
        // $this->db->where('testimonial_status', 1);
        $this->db->order_by('testimonial_order', 'ASC');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
        // echo $this->db->last_query();
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		             => $i
                , "id"                   => $row->id
                , "testimonial_author"   => $row->testimonial_author
                , "testimonial_position" => $row->testimonial_position
                , "testimonial_company"  => $row->testimonial_company
                , "testimonial_message"  => $row->testimonial_message
                , "testimonial_order"    => $row->testimonial_order
                , "testimonial_status"   => $row->testimonial_status
			);
			array_push($obj , $data);
			$i++;
		}

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    
    public function exhibitor_banner_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
        
            // -- csi_content_media.id as id,
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.subtitle,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'banner');
        $this->db->where('csi_contents.menu_id', 8);
        $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {

            // echo "<pre> RESULT:";
            // print_r($row);
            // echo "</pre>";
            // die();
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		    => $i,
				"id" 		    => $row->id,
				"content_year" 	=> $row->content_year,
				"title" 		=> $row->title,
				"subtitle" 		=> $row->subtitle,
				"file_path"	  	=> $row->file_path,
                "status"	  	=> $row->status,
			);
			array_push($obj , $data);
			$i++;
		}
        // $total = $query->num_rows();

		// $q = "SELECT count(id) as total FROM master_karyawan $where";
		// $queryTotal 	= $this->hdb->query($q, $qWhere);
		// if($queryTotal -> num_rows() > 0) {
		// 	$qTotal = $queryTotal->row();
		// }

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}

    public function exhibitor_visa_banner_datatable() {
		
		$filter = $this->input->post('filter') ?? "";
		$start  = $this->input->post('start');
		$limit  = $this->input->post('length');
		$search = strtolower($this->input->post('search')['value'] ?? '');
		$order  = $this->input->post('columns')[$this->input->post('order')[0]['column']]['data'] ?? '';
		$sort   = $this->input->post('order')[0]['dir'] ?? 'asc';
		
		$where  = "";
		$orderq = "";
		$qWhere = array();
		$qTotal = 0;

		$userid = $this->session->userdata('userid');
		$user   = $this->session->userdata('username');
		$type   = $this->session->userdata('usertype');
		$nik    = $this->session->userdata('nik');
		
        
        $this->db->select('
            csi_contents.id,
            csi_contents.menu_id,
            csi_contents.content_year,
            csi_contents.content_type,
            csi_contents.title,
            csi_contents.subtitle,
            csi_contents.body_text,
            csi_contents.status,
            csi_content_media.file_path
        ');
        $this->db->from('csi_contents');
        $this->db->join('csi_content_media', 'csi_contents.id = csi_content_media.content_id', 'left');
        // where conditions
        $this->db->where('csi_contents.content_type', 'banner');
        $this->db->where('csi_contents.menu_id', 9);
        $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        //$this->db->limit($limit, $start);

        $query = $this->db->get();
        // $result = $query->result();
        // print_r($query->row);
		// echo "<pre> RESULT:";
        // print_r($query->result());
        // echo "</pre>";
        // die();
		$r = $query->result();
		$obj 	= array();
		$i 		= 1;
		$menu 	= "";
		$tag 	= "";
		$isedit	= "";
        
		foreach($r as $row) {
            
			$menu  = "<div style='text-align: center;'>";
            $menu .= "<div class='buttons is-right is-small' style='display: inline-flex; gap: 0.25rem;'>";
			// Edit button
            $menu .= "<button class='button is-small is-info' onclick='edit($row->id)' title='Edit this record'>
					<span class='icon is-small'><i class='fas fa-edit'></i></span>
				</button>";

			// Delete button
            $menu .= "<button class='button is-small is-danger' onclick='hapus($row->id)' title='Delete this record'>
					<span class='icon is-small'><i class='fas fa-trash'></i></span>
				</button>";

            $menu .= "</div></div>";

            $data = array(
				"no" 		    => $i,
				"id" 		    => $row->id,
				"content_year" 	=> $row->content_year,
				"title" 		=> $row->title,
				"subtitle" 		=> $row->subtitle,
				"file_path"	  	=> $row->file_path,
                "status"	  	=> $row->status,
			);
			array_push($obj , $data);
			$i++;
		}

		if($query -> num_rows() > 0) {
			return json_encode(
				array(
					'recordsTotal' => $query->num_rows(),
					'recordsFiltered' => $query->num_rows(),
					'data' 		=> $obj
				)
			);
		}
		else {
			return json_encode(
				array(
					'recordsTotal' 		=> 0,
					'recordsFiltered' 	=> 0,
					'data' => ''
				)
			);
		}
	}
}