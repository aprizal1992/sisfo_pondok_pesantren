<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function index()
    {
        $data = [
            "path" => "Guru/Guru",
            "script" => "Guru/js",
            "guru" => $this->getDataGuru()
        ];
        $this->load->view('Router/route', $data);
    }
    public function getDataGuru()
    {
        $getGuru = $this->db->get_where('guru')->result();
        return $getGuru;
    }
    public function p_guru()
    {
        $data = $_POST;
        unset($data['id_guru']);
        $data += [
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ];
        if (!empty($_POST['id_guru']) && $_POST['id_guru'] != "") {
            $this->db->where('id_guru', $_POST['id_guru']);
            $save  = $this->db->update('guru', $data);
        } else {
            $save  = $this->db->insert('guru', $data);
        }
        if ($save) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            redirect('Guru');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Disimpan');
            redirect('Guru');
        }
    }
}
