<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_siswa');
    }

    public function index()
    {
        $data['judul'] = 'PPDB | LOGIN SISWA ';
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/s_login');
        $this->load->view('templates/footer2');
    }
    public function form_daftar()
    {
        $data['judul'] = 'PPDB | FORM PENDAFTARAN SMK ATM';

        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/s_form_pendaftaran');
        $this->load->view('templates/footer2');
    }
    public function tambah_form()
    {
        $this->model_siswa->tambahdatasiswa();
        redirect('auth');
    }
    public function ubah_pw()
    {
        $data['judul'] = 'PPDB | UBAH PASSWORD';
        $this->load->view('templates/header2', $data);
        $this->load->view('daftar&admin/as_ubah_pw');
        $this->load->view('templates/footer2');
    }
    public function ubah_pw_admin()
    {
        $data['judul'] = 'PPDB | UBAH PASSWORD ADMIN';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/nav_admin');
        $this->load->view('daftar&admin/a_ubah_pw');
        $this->load->view('templates/footer2');
    }
}
