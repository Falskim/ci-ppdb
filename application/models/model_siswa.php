<?php

class model_siswa extends CI_model
{
    //CREATE
    public function tambahdatasiswa()
    {
        $data = [
            //DATA SISWA
            "REG" => $this->input->post('REG', true),
            "Tingkat" => $this->input->post('Tingkat'),
            "Prodi" => $this->input->post('Prodi'),
            "Nama_siswa" => $this->input->post('Nama_Siswa', true),
            "Jenis_Kelamin" => $this->input->post('jk'),
            "Asal_Sekolah" => $this->input->post('asek'),
            "NISN" => $this->input->post('nisn', true),
            "No_Ijazah" => $this->input->post('ijazah', true),
            "No_SKHUN" => $this->input->post('No.SKHUN', true),
            "No_UN" => $this->input->post('UN', true),
            "NIK" => $this->input->post('nik', true),
            "TTL" => $this->input->post('tl', true),
            "Alamat_Tinggal" => $this->input->post('att', true),
            "Transportasi" => $this->input->post('transport'),
            "Jenis_Tinggal" => $this->input->post('jtinggal'),
            "Rencana_Tinggal" => $this->input->post('rtinggal'),
            "Ukuran_Pakaian" => $this->input->post('pakaian'),
            "No_Hp" => $this->input->post('hp', true),
            "Email" => $this->input->post('email', true),
            "No_KKS" => $this->input->post('kps', true),

            //DATA ORTU
            "Nama_Ayah" => $this->input->post('nayah', true),
            "Lahir_Ayah" => $this->input->post('tlayah', true),
            "Pekerjaan_Ayah" => $this->input->post('jobayah'),
            "Pendidikan_Ayah" => $this->input->post('edua'),
            "Penghasilan_Ayah" => $this->input->post('hasila'),
            "Nama_Ibu" => $this->input->post('nibu', true),
            "Lahir_Ibu" => $this->input->post('tlibu', true),
            "Pekerjaan_Ibu" => $this->input->post('jobibu'),
            "Pendidikan_Ibu" => $this->input->post('edui'),
            "Penghasilan_Ibu" => $this->input->post('hasili'),
            "Nama_Wali" => $this->input->post('nwali', true),
            "Lahir_Wali" => $this->input->post('tlwali', true),
            "Pekerjaan_Wali" => $this->input->post('jobwali'),
            "Pendidikan_Wali" => $this->input->post('eduw'),
            "Penghasilan_Wali" => $this->input->post('hasilw'),

            //DATA PERIODIK
            "Tinggi_Badan" => $this->input->post('tinggi', true),
            "Berat_Badan" => $this->input->post('bb', true),
            "Jarak_Sekolah" => $this->input->post('jarak', true),
            "Waktu_Tempuh" => $this->input->post('waktu', true),
            "Saudara_Kandung" => $this->input->post('saudara', true),

            //PRESTASI & BEASISWA
            "Prestasi_1" => $this->input->post('prestasi1', true),
            "Prestasi_2" => $this->input->post('prestasi2', true),
            "Prestasi_3" => $this->input->post('prestasi3', true),
            "Beasiswa_1" => $this->input->post('beasiswa1', true),
            "Beasiswa_2" => $this->input->post('beasiswa2', true),
            "Beasiswa_3" => $this->input->post('beasiswa3', true),

            //BERKAS
            "Akta_Lahir" => $this->input->post('akta', true),
            "KK" => $this->input->post('kk', true),
            "Bio_Raport" => $this->input->post('bioraport', true),
            "KTP_Ayah" => $this->input->post('ktpa', true),
            "KTP_Ibu" => $this->input->post('ktpi', true),
            "Ijazah_SMP" => $this->input->post('sijazah', true),
            "SKHUN_SMP" => $this->input->post('sskhun', true),
            "Surat_Lulus_SMP" => $this->input->post('sulus', true),
            "KPS/PKH" => $this->input->post('kpspkh', true)

        ];
        $this->db->insert('siswa', $data);
    }


    //READ
    public function getallsiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getsiswabyid($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }
    public function countallsiswa()
    {
        return $this->db->get('siswa')->num_rows();
    }

    //UPDATE
    public function editdatasiswa()
    {
        $data = [
            //DATA SISWA
            "REG" => $this->input->post('REG', true),
            "Tingkat" => $this->input->post('Tingkat'),
            "Prodi" => $this->input->post('Prodi'),
            "Nama_siswa" => $this->input->post('Nama_Siswa', true),
            "Jenis_Kelamin" => $this->input->post('jk'),
            "Asal_Sekolah" => $this->input->post('asek'),
            "NISN" => $this->input->post('nisn', true),
            "No_Ijazah" => $this->input->post('ijazah', true),
            "No_SKHUN" => $this->input->post('No.SKHUN', true),
            "No_UN" => $this->input->post('UN', true),
            "NIK" => $this->input->post('nik', true),
            "TTL" => $this->input->post('tl', true),
            "Alamat_Tinggal" => $this->input->post('att', true),
            "Transportasi" => $this->input->post('transport'),
            "Jenis_Tinggal" => $this->input->post('jtinggal'),
            "Rencana_Tinggal" => $this->input->post('rtinggal'),
            "Ukuran_Pakaian" => $this->input->post('pakaian'),
            "No_Hp" => $this->input->post('hp', true),
            "Email" => $this->input->post('email', true),
            "No_KKS" => $this->input->post('kps', true),

            //DATA ORTU
            "Nama_Ayah" => $this->input->post('nayah', true),
            "Lahir_Ayah" => $this->input->post('tlayah', true),
            "Pekerjaan_Ayah" => $this->input->post('jobayah'),
            "Pendidikan_Ayah" => $this->input->post('edua'),
            "Penghasilan_Ayah" => $this->input->post('hasila'),
            "Nama_Ibu" => $this->input->post('nibu', true),
            "Lahir_Ibu" => $this->input->post('tlibu', true),
            "Pekerjaan_Ibu" => $this->input->post('jobibu'),
            "Pendidikan_Ibu" => $this->input->post('edui'),
            "Penghasilan_Ibu" => $this->input->post('hasili'),
            "Nama_Wali" => $this->input->post('nwali', true),
            "Lahir_Wali" => $this->input->post('tlwali', true),
            "Pekerjaan_Wali" => $this->input->post('jobwali'),
            "Pendidikan_Wali" => $this->input->post('eduw'),
            "Penghasilan_Wali" => $this->input->post('hasilw'),

            //DATA PERIODIK
            "Tinggi_Badan" => $this->input->post('tinggi', true),
            "Berat_Badan" => $this->input->post('bb', true),
            "Jarak_Sekolah" => $this->input->post('jarak', true),
            "Waktu_Tempuh" => $this->input->post('waktu', true),
            "Saudara_Kandung" => $this->input->post('saudara', true),

            //PRESTASI & BEASISWA
            "Prestasi_1" => $this->input->post('prestasi1', true),
            "Prestasi_2" => $this->input->post('prestasi2', true),
            "Prestasi_3" => $this->input->post('prestasi3', true),
            "Beasiswa_1" => $this->input->post('beasiswa1', true),
            "Beasiswa_2" => $this->input->post('beasiswa2', true),
            "Beasiswa_3" => $this->input->post('beasiswa3', true),

            //BERKAS
            "Akta_Lahir" => $this->input->post('akta', true),
            "KK" => $this->input->post('kk', true),
            "Bio_Raport" => $this->input->post('bioraport', true),
            "KTP_Ayah" => $this->input->post('ktpa', true),
            "KTP_Ibu" => $this->input->post('ktpi', true),
            "Ijazah_SMP" => $this->input->post('sijazah', true),
            "SKHUN_SMP" => $this->input->post('sskhun', true),
            "Surat_Lulus_SMP" => $this->input->post('sulus', true),
            "KPS/PKH" => $this->input->post('kpspkh', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }

    //DELETE
    public function hapusdatasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }
}
