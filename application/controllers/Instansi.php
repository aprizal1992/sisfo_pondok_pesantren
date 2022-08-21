<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instansi extends CI_Controller
{
    public function index()
    {

        $guru = $this->db->get('guru')->result_array();
        $provinsi = $this->db->get('wilayah_provinsi')->result_array();
        $data = [
            "path" => "Instansi/index",
            "script" => "Instansi/js",
            "instansi" => $this->InstansiData(),
            "guru" => $guru,
            "provinsi" => $provinsi,
        ];
        $this->load->view('Router/route', $data);
    }
    public function InstansiData()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = instansi.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = instansi.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = instansi.kecamatan');
        $this->db->join("guru", "guru.id_guru = instansi.user_pimpinan");
        $getInstasnsi = $this->db->get('instansi')->row_array();
        return $getInstasnsi;
    }
}
