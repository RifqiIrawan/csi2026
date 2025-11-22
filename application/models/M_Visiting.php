<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Visiting extends CI_Model{	

    function get_conference_schedule($params) {
        
        $this->db->select('
            p.id AS program_id,
            p.program_title,
            p.program_type,
            p.program_date,
            p.program_start_time,
            p.program_end_time,
            p.program_location,
            p.program_register_link,
            s.speaker_name,
            s.speaker_organization,
            e.event_name,
            e.event_year
        ');
        $this->db->from('csi_programs p');
        $this->db->join('csi_speakers s', 'p.speaker_id = s.id', 'left');
        $this->db->join('csi_events e', 'p.event_id = e.id', 'left');
        $this->db->order_by('p.program_date', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }
	
    function get_event_schedule($params = []) {

        $this->edb 	= $this->load->database('pnicheme_ems', TRUE);
        $this->edb->select('
            e.id AS program_id,
            e.name_event AS program_title,
            "Seminar" AS program_type,
            e.start_date AS program_date,
            e.clock_in AS program_start_time,
            e.clock_out AS program_end_time,
            e.location AS program_location,
            e.url_visitor_online AS program_register_link,
            e.person AS speaker_name,
            e.person AS speaker_organization,
            e.name_event AS event_name,
            YEAR(e.start_date) AS event_year
        ');
        $this->edb->from('pnicheme_ems.event e');

		if (!empty($params)) {
			foreach ($params as $key => $value) {
				if ($value === '' || $value === null) continue;

				switch ($key) {
					case 'event_id':
						$this->edb->where('e.id', $value);
						break;
					default:
						$this->edb->where($key, $value);
						break;
				}
			}
		}


        $this->edb->order_by('e.start_date', 'DESC');

        $query = $this->edb->get();

        return $query->result_array();
    }

    public function event_datatable() {
		
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
		
        $this->db->select(' e.id
            , e.event_name
            , e.event_year
            , e.event_location
            , e.event_start_date
            , e.event_end_date
            , e.created_by
        ');
        $this->db->from('csi_events e');
        
        // limit & offset
        $this->db->limit($limit, $start);

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
				"event_name"        => $row->event_name,
                "event_year"        => $row->event_year,
                "event_location"    => $row->event_location,
                "event_start_date"  => $row->event_start_date,
                "event_end_date"    => $row->event_end_date,
                "created_by"        => $row->created_by
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

    public function show_report_datatable() {
		
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
		
        $this->db->select(' rf.id
            , rf.report_title
            , rf.report_description
            , rf.file_name
            , rf.file_type
            , rf.file_size
            , rf.is_published
            , rf.uploaded_by
            , rf.uploaded_date
        ');
        $this->db->from('csi_report_files rf');
        
        // limit & offset
        $this->db->limit($limit, $start);

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
				"no" 		    => $i
				, "id" 		    => $row->id
                , "report_title"        => $row->report_title
                , "report_description"  => $row->report_description
                , "file_name"           => $row->file_name
                , "file_type"           => $row->file_type
                , "file_size"           => $row->file_size
                , "is_published"        => $row->is_published
                , "uploaded_by"         => $row->uploaded_by
                , "uploaded_date"       => $row->uploaded_date
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

    public function get_by_id($tableName, $id = null)
    {
        if (empty($tableName)) {
            return null; // Avoid running a query without a table
        }

        // Prioritize filtering by status first
        $this->db->where('is_published', 1); // adjust the value (e.g., 'active') if needed

        // Add ID condition only if provided
        if (!empty($id)) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get($tableName);

        // If ID was provided → return single row, else return all active rows
        return !empty($id) ? $query->row() : $query->result()[0];
    }

    public function update($table, $id, $data)
    {
        return $this->db->where('id', $id)->update($table, $data);
    }

    public function why_visit_datatable() {
		
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
        $this->db->where('csi_contents.menu_id', 10);
        $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        $this->db->limit($limit, $start);

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

	public function why_visit_section_datatable() {
		
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
        $this->db->where('csi_contents.menu_id', 10);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        $this->db->limit($limit, $start);

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
	
	public function conference_schedule_datatable() {
		
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
        $this->db->where('csi_contents.menu_id', 11);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        $this->db->limit($limit, $start);

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
				"title" 		=> $row->title,
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
	
	public function conference_highlight_datatable() {
		
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
        $this->db->where('csi_contents.content_type', 'show-feature');
        $this->db->where('csi_contents.menu_id', 11);
        // $this->db->where('csi_content_media.media_type', 'image');
        // limit & offset
        $this->db->limit($limit, $start);

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
				"title" 		=> $row->title,
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
}