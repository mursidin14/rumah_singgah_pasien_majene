<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tujuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model','galery');
        // if ($this->session->userdata('id_user') == FALSE) {
        //     redirect(base_url("auth/login"));
        // }

        $this->load->helper(array('form', 'url','Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Maksud dan Tujuan',
            'sub_title' => ''
        ];

        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/tujuan',$data);
        $this->load->view('frontend/footer2',$data);
    }
}
