<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function index()
    {
        // pendaftaran
        $this->db->select("*, wilayah_provinsi.nama as nama_provinsi, wilayah_kabupaten.nama as nama_kabupaten, wilayah_kecamatan.nama as nama_kecamatan,pendaftaran.id as id,pendaftaran.nama as nama");
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = pendaftaran.provinsi');
        $this->db->join('wilayah_kabupaten', 'wilayah_kabupaten.id = pendaftaran.kabupaten');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = pendaftaran.kecamatan');
        if (!empty($_GET['tahun']) && $_GET['tahun'] != "") {
            $this->db->where("tahun", $_GET['tahun']);
        } else {
            $this->db->where("tahun", date("Y"));
        }
        if (!empty($_GET['status']) && $_GET['status'] != "") {
            $this->db->where("pendaftaran.status", "diterima");
        } else {
            $this->db->where("pendaftaran.status", "pending");
        }
        $getPendaftaran = $this->db->get_where("pendaftaran")->result_array();
        $data = [
            "path" => "PendaftaranBaru/index",
            "script" => "PendaftaranBaru/js",
            "daftar" => $getPendaftaran,
        ];
        $this->load->view('Router/route', $data);
    }
    public function accept($id)
    {
        $this->db->where("id", $id);
        $up = $this->db->update("pendaftaran", ["status" => "daftar_ulang"]);
        $getPendaftaran = $this->db->get_where("pendaftaran", ["id" => $id])->row_array();
        sendWa($getPendaftaran['no_hp'], "Pendaftaran Siswa Baru. Selamat, anda telah diterima, silahkan lakukan pendaftaran ulang di sekolah.");
        if ($up) {
            $this->session->set_flashdata('success', 'Penerimaan siswa berhasil');
            redirect('Pendaftaran');
        } else {
            $this->session->set_flashdata('error', 'Penerimaan siswa gagal');
            redirect('Pendaftaran');
        }
    }
    public function reject($id)
    {
        $getPendaftaran = $this->db->get_where("pendaftaran", ["id" => $id])->row_array();
        sendWa($getPendaftaran['no_hp'], "Pendaftaran Siswa Baru. Maaf, anda tidak diterima, silahkan lakukan pendaftaran ulang atau datang ke sekolah.");

        $this->db->where("id", $id);
        $up =  $this->db->delete("pendaftaran");
        if ($up) {
            $this->session->set_flashdata('success', 'Penolakan siswa berhasil');
            redirect('Pendaftaran');
        } else {
            $this->session->set_flashdata('error', 'Penolakan siswa gagal');
            redirect('Pendaftaran');
        }
    }
    public function siswa_daftar_ulang()
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
            "path" => "PendaftaranBaru/daftar_ulang",
            "script" => "PendaftaranBaru/js",
            "daftar" => $getPendaftaran,
            "provinsi" => $provinsi,
            "kelas" => $getKelas,
        ];
        $this->load->view('Router/route', $data);
    }
    public function p_siswa()
    {
        $data = $_POST;
        unset($data['id']);
        $data += [
            "status_siswa" => "Aktif",
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ];
        $save  = $this->db->insert('siswa', $data);
        $this->db->where("id", $_POST['id']);
        $this->db->update("pendaftaran", ["status" => "terdaftar"]);
        if ($save) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect('Pendaftaran/siswa_daftar_ulang');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Disimpan');
            redirect('Pendaftaran/siswa_daftar_ulang');
        }
    }
}
