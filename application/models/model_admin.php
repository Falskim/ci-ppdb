<?php

class model_admin extends CI_model
{
    public function tambahdatasekolah()
    {
        $data = [
            'file_name' => $this->input->post('panduan', true)
        ];
        $this->db->insert('data_sekolah', $data);
    }
    public function getfilebyid()
    {
        return $this->db->get_where('data_sekolah', ['id' => 1])->row_array();
    }
}
