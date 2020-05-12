<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa_dash extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'PPDB | CALON SISWA';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_siswa');
        $this->load->view('daftar&admin/s_akun_siswa');
        $this->load->view('templates/footer2');
    }
    public function pengumuman()
    {
        $data['judul'] = 'PPDB | PENGUMUMAN ';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_siswa');
        $this->load->view('daftar&admin/s_pengumuman');
        $this->load->view('templates/footer2');
    }
}
