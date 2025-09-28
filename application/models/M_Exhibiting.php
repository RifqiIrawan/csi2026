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
}