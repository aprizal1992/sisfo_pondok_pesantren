<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function index()
    {

        $data = [
            "path" => "Berita/index",
            "script" => "Berita/js",
            "berita" => $this->db->get_where("berita")->result(),
        ];
        $this->load->view('Router/route', $data);
    }
    public function form_entry($id = null)
    {

        $data = [
            "path" => "Berita/InputBerita",
            "script" => "Berita/js",
            "berita" => $this->db->get_where("berita", ["id" => $id])->row_array(),
            "action" => $id == null ? "create" : "update",
        ];
        $this->load->view('Router/route', $data);
    }
}
