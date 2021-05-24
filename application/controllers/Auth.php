<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "SIHADIR - LOGIN ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('admin/auth/index');
        $this->load->view('layout-admin/footer');
    }

    public function registration()
    {
        $data['title'] = "SIHADIR - REGISTRATION ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('admin/auth/registration');
        $this->load->view('layout-admin/footer');
    }

    public function logout()
    {
    }
}
