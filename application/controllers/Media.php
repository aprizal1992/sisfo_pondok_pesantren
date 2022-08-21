<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{
    public function index()
    {
        $getMedia = $this->db->get('media')->result_array();
        $data = [
            "path" => "Media/index",
            "script" => "Media/js",
            "media" => $getMedia
        ];
        $this->load->view('Router/route', $data);
    }
}
