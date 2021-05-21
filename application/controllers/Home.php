<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/layout/header');
        $this->load->view('home/layout/navbar');
        $this->load->view('home/layout/topbar');
        $this->load->view('home/home');
        $this->load->view('home/layout/footer');
    }
}
