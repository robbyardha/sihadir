<?php

class Acara extends CI_Controller
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
        $this->load->view('admin/acara/index');
        $this->load->view('layout-admin/footer');
    }

    public function tambah()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/acara/tambah');
        $this->load->view('layout-admin/footer');
    }

    public function ubah()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/acara/ubah');
        $this->load->view('layout-admin/footer');
    }
    public function hapus()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/acara/hapus');
        $this->load->view('layout-admin/footer');
    }
}
