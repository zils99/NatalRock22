<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }

    public function index()
    {
        $this->load->view('Landing');
    }

    public function hadir($check)
    {
        $data = $this->M_data->getdata($check);
        $nama = $data['nama'];
        $message = "Selamat Beribadah " . $nama;
        // var_dump($message);
        // die;
        $this->session->set_flashdata('message', ('<div class="alert alert-success" role="alert"><?= $message?></div>'));
        $this->load->view('Landing', $data);
    }
}
