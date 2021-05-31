<?php

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Siswa_model');
    }

   
    public function index()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $data['joinsiswa'] = $this->Siswa_model->JoinSiswaKelas();
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

        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required',
            [
                'required' => 'Kelas Harus Diisi'
            ]
            );


       
        
        $data['title'] = "SIHADIR - ADMIN";
        $data['kelas'] = $this->Siswa_model->getKelas();
        $this->load->view('layout-admin/header', $data);
        $this->load->view('layout-admin/navbar');
        $this->load->view('layout-admin/topbar');
        $this->load->view('admin/peserta/tambah');
        $this->load->view('layout-admin/footer');
        // var_dump($data['kelas']);
        // die;
    }
    
    public function ubah()
    {
        $data['title'] = "SIHADIR - ADMIN";
        $data['kelas'] = $this->Siswa_model->getKelas();
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
