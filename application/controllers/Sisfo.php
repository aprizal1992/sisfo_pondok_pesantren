<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Sisfo extends CI_Controller
{
    public function index()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = instansi.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = instansi.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = instansi.kecamatan');
        $getData = $this->db->get_where("instansi")->row_array();
        // getBerita
        $this->db->limit(6, 0);
        $getBerita = $this->db->get_where("berita")->result_array();
        // getdatamedia
        $this->db->limit(6, 0);
        $getDataMedia = $this->db->get_where("media")->result_array();
        $data = [
            "path" => "index",
            "data" => $getData,
            "berita" => $getBerita,
            "media" => $getDataMedia,
        ];
        $this->load->view('Router/website', $data);
    }
    public function about()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = instansi.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = instansi.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = instansi.kecamatan');
        $getData = $this->db->get_where("instansi")->row_array();
        $data = [
            "path" => "about",
            "data" => $getData,
        ];
        $this->load->view('Router/website', $data);
    }
    public function berita()
    {
        $getBerita = $this->db->get_where("berita")->result_array();
        $data = [
            "path" => "berita",
            "berita" => $getBerita,
        ];
        $this->load->view('Router/website', $data);
    }
    public function media()
    {
        $this->db->limit(6, 0);
        $getDataMedia = $this->db->get_where("media")->result_array();
        $data = [
            "path" => "media",
            "media" => $getDataMedia,
        ];
        $this->load->view('Router/website', $data);
    }
    public function kontak()
    {
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = instansi.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = instansi.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = instansi.kecamatan');
        $getData = $this->db->get_where("instansi")->row_array();
        $data = [
            "path" => "kontak",
            "data" => $getData,
        ];
        $this->load->view('Router/website', $data);
    }
    public function form_pendaftaran()
    {
        $data = [
            "path" => "form_pendaftaran",
            "provinsi" => $this->db->get_where("wilayah_provinsi")->result_array(),
        ];
        $this->load->view('Router/website', $data);
    }
    public function daftar()
    {
        try {
            $data = $_POST;
            unset($data['dokument']);
            $syarat = up("dokument", "assets/Syarat");
            if ($syarat == false) {
                $this->session->set_flashdata("error", "Terjadi kesalahan pada saat upload dokumen");
                redirect("Sisfo/form_pendaftaran");
            }
            $data['dokument'] = $syarat;
            $data += [
                "tanggal" => date("Y-m-d"),
                "jam" => date("H:i:s"),
                "status" => "pending",
                "created_at" => date("Y-m-d H:i:s"),
            ];
            $save =  $this->db->insert("pendaftaran", $data);
            if ($save) {
                $this->session->set_flashdata("success", "Pendaftaran berhasil, silahkan cek email anda");
                redirect("Sisfo/form_pendaftaran");
            } else {
                $this->session->set_flashdata("error", "Terjadi kesalahan pada saat pendaftaran");
                redirect("Sisfo/form_pendaftaran");
            }
        } catch (\Throwable $th) {
            $this->session->set_flashdata("error", "Terjadi kesalahan pada saat pendaftaran");
            redirect("Sisfo/form_pendaftaran");
        }
    }
    public function berita_detail($id_berita)
    {
        $getBerita = $this->db->get_where("berita", ["id" => $id_berita])->row_array();
        $data = [
            "path" => "berita_detail",
            "berita" => $getBerita,
        ];
        $this->load->view('Router/website', $data);
    }
    public function media_detail($id_media)
    {
        $getBerita = $this->db->get_where("media", ["id" => $id_media])->row_array();
        $data = [
            "path" => "media_detail",
            "media" => $getBerita,
        ];
        $this->load->view('Router/website', $data);
    }
}
