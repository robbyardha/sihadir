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
            $this->Acara_model->tambah();
            $this->session->set_flashdata('acara', 'Ditambah');
            redirect('acara');
        }
    }

    public function ubah($id = null)
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
            $data['acara'] = $this->Acara_model->getAcaraById($id);
            $data['title'] = "SIHADIR - ADMIN";
            $this->load->view('layout-admin/header', $data);
            $this->load->view('layout-admin/navbar');
            $this->load->view('layout-admin/topbar');
            $this->load->view('admin/acara/ubah', $data);
            $this->load->view('layout-admin/footer');
        } else {
            $this->Acara_model->ubah();
            $this->session->set_flashdata('acara', 'Diubah');
            redirect('acara');
        }
    }
    public function hapus($id = null)
    {
        // $data['acara'] = $this->Acara_model->getAcaraById($id);
        // $data['title'] = "SIHADIR - ADMIN";
        // $this->load->view('layout-admin/header', $data);
        // $this->load->view('layout-admin/navbar');
        // $this->load->view('layout-admin/topbar');
        // $this->load->view('admin/acara/hapus');
        // $this->load->view('layout-admin/footer');
        $this->Acara_model->hapus($id);
        $this->session->set_flashdata('acara', 'Dihapus');
        redirect('acara');
    }
}
