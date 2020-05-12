<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
    }

    public function index()
    {
        $data['judul'] = 'PPDB ONLINE SMK ATM';
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/index');
        $this->load->view('templates/footer1');
    }
    public function info_ppdb()
    {
        $data['judul'] = 'INFO PPDB';
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/info-ppdb');
        $this->load->view('templates/footer1');
    }
    public function kontak_kami()
    {
        $data['judul'] = 'KONTAK KAMI';
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/kontak');
        $this->load->view('templates/footer1');
    }
    public function cek_status()
    {
        $data['judul'] = 'CEK STATUS PPDB';
        $data['siswa'] = $this->model_siswa->getallsiswa();
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/cek_status', $data);
        $this->load->view('templates/footer1');
    }

    public function detail_pendaftar($id)
    {
        $data['judul'] = 'PPDB | DETAIL CALON SISWA';
        $data['siswa'] = $this->model_siswa->getsiswabyid($id);
        $this->load->view('templates/header1', $data);
        $this->load->view('utama/a_detail_siswa', $data);
        $this->load->view('templates/footer1');
    }

    public function belum_masa_daftar()
    {
        $data['judul'] = 'NOT AVAILABLE';
        $this->load->view('templates/header1', $data);
        $this->load->view('errors/NotAvailable');
        $this->load->view('templates/footer1');
    }
}
