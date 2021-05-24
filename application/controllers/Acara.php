<?php

class Acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Acara_model');
    }

    public function index()
    {
        $data['acara'] = $this->Acara_model->getAcara();
        $data['title'] = "SIHADIR - ADMIN";
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/acara/index');
        $this->load->view('layout-admin/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_acara',
            'Nama Acara',
            'required',
            [
                'required' => "Nama Acara Harus diisi"
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "SIHADIR - ADMIN";
            $this->load->view('layout-admin/header', $data);
            $this->load->view('layout-admin/navbar');
            $this->load->view('layout-admin/topbar');
            $this->load->view('admin/acara/tambah');
            $this->load->view('layout-admin/footer');
        } else {
            // $this->session->set_flashdata('acara');
            $this->Acara_model->tambah();
            redirect('acara');
        }
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
