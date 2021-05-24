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
        
        $this->load->view('layout-user/header');
        $this->load->view('home/home',$data);
        $this->load->view('layout-user/footer');
        
        

    }
}
?>