<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // load database kalau mau hapus cache database juga
        $this->load->database();
    }

    public function clear_cache() {
        // 1. Hapus cache file output CodeIgniter
        $files = glob(APPPATH.'cache/*');
        foreach ($files as $file) {
            if (is_file($file) && basename($file) !== 'index.html') {
                unlink($file);
            }
        }

        // 2. Hapus cache database jika diaktifkan
        if (method_exists($this->db, 'cache_delete_all')) {
            $this->db->cache_delete_all();
        }

        // 3. Opsional: Hapus cache di browser saat mengakses URL ini
        $this->output
            ->set_header('Cache-Control: no-store, no-cache, must-revalidate')
            ->set_header('Pragma: no-cache');

        echo "✅ Cache CodeIgniter berhasil dibersihkan.";
    }
}
