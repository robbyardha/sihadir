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
        $data['joinsiswaA2'] = $this->Siswa_model->JoinSiswaKelasA2();
        $data['joinsiswaA3'] = $this->Siswa_model->JoinSiswaKelasA3();
        $data['joinsiswaA4'] = $this->Siswa_model->JoinSiswaKelasA4();
        $data['joinsiswaA5'] = $this->Siswa_model->JoinSiswaKelasA5();
        $data['joinsiswaS1'] = $this->Siswa_model->JoinSiswaKelasS1();
        $data['joinsiswaS2'] = $this->Siswa_model->JoinSiswaKelasS2();
        $data['joinsiswaS3'] = $this->Siswa_model->JoinSiswaKelasS3();

        $this->load->view('layout-user/header');
        $this->load->view('home/home', $data);
        $this->load->view('layout-user/footer');
        // var_dump($data['kelas']);
        // var_dump($this->db->last_query($data['joinsiswaA1']));
        // die;
    }

    public function present()
    {
    }

    public function cancel()
    {
    }
}
