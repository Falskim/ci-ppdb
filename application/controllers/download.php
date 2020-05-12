<?php
defined('BASEPATH') or exit('No direct script access allowed');

class download extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper(array('download'));
    }

    public function lakukan_download()
    {
        // Download
        $data = $this->db->get_where('data_sekolah', ['id' => 1])->row_array();
        force_download($data, NULL);
    }
}
