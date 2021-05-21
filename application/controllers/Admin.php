<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/dashboard');
        $this->load->view('layout-admin/footer');
    }
}
