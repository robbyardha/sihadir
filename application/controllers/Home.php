<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->Siswa_model->getsiswa();
        $data['joinsiswa'] = $this->Siswa_model->JoinSiswaKelas();
        $data['joinsiswaA1'] = $this->Siswa_model->JoinSiswaKelasA1();

        $this->load->view('layout-user/header');
        $this->load->view('home/home', $data);
        $this->load->view('layout-user/footer');
        // var_dump($data['joinsiswaA1']);
        // var_dump($this->db->last_query($data['joinsiswaA1']));
        // die;
    }
}
