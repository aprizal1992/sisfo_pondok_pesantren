<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        $getKelas = $this->db->get('kelas')->result_array();
        $provinsi = $this->db->get('wilayah_provinsi')->result_array();
        $data = [
            "path" => "Siswa/Siswa",
            "script" => "Siswa/js",
            "kelas" => $getKelas,
            "provinsi" => $provinsi,
            "siswa" => $this->getSiswa(),
        ];
        $this->load->view('Router/route', $data);
    }
    public function Kelas()
    {
        $getKelas = $this->db->get('kelas')->result_array();
        $data = [
            "path" => "Siswa/Kelas",
            "script" => "Siswa/js",
            "kelas" => $getKelas,
        ];
        $this->load->view('Router/route', $data);
    }
    public function p_kelas()
    {
        $data = $_POST;
        $push = [
            "kelas" => $data['kelas']
        ];
        $save = $this->db->insert('kelas', $push);
        if ($save) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect('Siswa/Kelas');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Disimpan');
            redirect('Siswa/Kelas');
        }
    }
    public function p_siswa()
    {
        $data = $_POST;
        unset($data['nis_old']);
        $data += [
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ];
        if (!empty($_POST['nis_old']) && $_POST['nis_old'] != "") {
            $this->db->where('nis', $_POST['nis_old']);
            $save  = $this->db->update('siswa', $data);
        } else {
            $save  = $this->db->insert('siswa', $data);
        }

        if ($save) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect('Siswa/index');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Disimpan');
            redirect('Siswa/index');
        }
    }
    public function getSiswaByNis($nis)
    {
        $this->db->select("*, wilayah_provinsi.nama as provinsi, wilayah_kabupaten.nama as kabupaten, wilayah_kecamatan.nama as kecamatan");
        $this->db->join('kelas', 'kelas.id = siswa.kelas');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = siswa.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = siswa.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = siswa.kecamatan');
        $getSiswa = $this->db->get_where('siswa', ["nis" => $nis])->row_array();
        return $getSiswa;
    }
    public function getSiswa()
    {
        $this->db->select("*, wilayah_provinsi.nama as provinsi, wilayah_kabupaten.nama as kabupaten, wilayah_kecamatan.nama as kecamatan");
        $this->db->join('kelas', 'kelas.id = siswa.kelas');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = siswa.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = siswa.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = siswa.kecamatan');
        $getSiswa = $this->db->get_where('siswa')->result_array();
        return $getSiswa;
    }
    public function pendaftaran()
    {
        $data = [
            "path" => "PendaftaranBaru/index",
            "script" => "PendaftaranBaru/js",
        ];
        $this->load->view('Router/route', $data);
    }
}
