<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->db->get_where('users', ["username" => $username, "password" => md5($password)])->num_rows();
        if ($cek > 0) {
            $us = $this->db->get_where('users', ["username" => $username, "password" => md5($password)])->row_array();
            $data_session = array(
                'username' => $username,
                'status' => "login",
                "user" => $us,
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("Admin/index"));
        } else {
            $this->session->set_flashdata("error", "Username atau Password salah");
            redirect(base_url("Login"));
        }
    }
    public function logout()
    {
        $this->session->set_userdata("status", "logout");
        redirect(base_url("Login"));
    }
}
