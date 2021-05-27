<?php

class Peserta extends CI_Controller
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
        $this->load->view('admin/peserta/index');
        $this->load->view('layout-admin/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nis',
            'NIS', 
            'required|numeric',
            [
                'required' => 'Nis Harus diisi',
                'numeric' => 'Harus berupa Angka'
            ]
            );
        
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama harus diisi'
            ]
            );

       
        
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/peserta/tambah');
        $this->load->view('layout-admin/footer');
    }

    public function ubah()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/peserta/ubah');
        $this->load->view('layout-admin/footer');
    }
    public function hapus()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/peserta/hapus');
        $this->load->view('layout-admin/footer');
    }
}
