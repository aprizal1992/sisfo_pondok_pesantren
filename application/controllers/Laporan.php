<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $getKelas = $this->db->get('kelas')->result_array();
        $provinsi = $this->db->get('wilayah_provinsi')->result_array();
        $data = [
            "path" => "Laporan/siswa",
            "script" => "Laporan/js",
            "kelas" => $getKelas,
            "provinsi" => $provinsi,
            "siswa" => $this->getSiswa(),
        ];
        $this->load->view('page/' . $data["path"], $data);
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
    public function guru()
    {
        $data = [
            "path" => "Laporan/guru",
            "script" => "Laporan/js",
            "guru" => $this->getDataGuru()
        ];
        $this->load->view('page/' . $data["path"], $data);
    }
    public function getDataGuru()
    {
        $getGuru = $this->db->get_where('guru')->result();
        return $getGuru;
    }
    public function pendaftaran_baru()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan,pendaftaran.id as id,pendaftaran.nama as nama");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = pendaftaran.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = pendaftaran.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = pendaftaran.kecamatan');
        if (!empty($_GET['tahun']) && $_GET['tahun'] != "") {
            $this->db->where("tahun", $_GET['tahun']);
        } else {
            $this->db->where("tahun", date("Y"));
        }
        $this->db->where("pendaftaran.status", "pending");
        $getPendaftaran = $this->db->get_where("pendaftaran")->result_array();
        $provinsi = $this->db->get('wilayah_provinsi')->result_array();
        $getKelas = $this->db->get('kelas')->result_array();
        $data = [
            "path" => "Laporan/pendaftaran",
            "script" => "Laporan/js",
            "daftar" => $getPendaftaran,
            "provinsi" => $provinsi,
            "kelas" => $getKelas,
        ];
        $this->load->view('page/' . $data["path"], $data);
    }
    public function pendaftaran()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan,pendaftaran.id as id,pendaftaran.nama as nama");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = pendaftaran.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = pendaftaran.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = pendaftaran.kecamatan');
        if (!empty($_GET['tahun']) && $_GET['tahun'] != "") {
            $this->db->where("tahun", $_GET['tahun']);
        } else {
            $this->db->where("tahun", date("Y"));
        }
        $this->db->where("pendaftaran.status", "daftar_ulang");
        $getPendaftaran = $this->db->get_where("pendaftaran")->result_array();
        $provinsi = $this->db->get('wilayah_provinsi')->result_array();
        $getKelas = $this->db->get('kelas')->result_array();
        $data = [
            "path" => "Laporan/pendaftaran",
            "script" => "Laporan/js",
            "daftar" => $getPendaftaran,
            "provinsi" => $provinsi,
            "kelas" => $getKelas,
        ];
        $this->load->view('page/' . $data["path"], $data);
    }
}
