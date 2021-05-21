<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/topbar');
        $this->load->view('admin/dashboard');
        $this->load->view('layout/footer');
    }
}
