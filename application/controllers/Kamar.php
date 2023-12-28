<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->model('M_Penduduk', 'penduduk');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Kamar',
            'sub_title' => ''
        ];

        $data['sm'] = $this->db->get('iventaris')->result_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/kamar', $data);
        $this->load->view('frontend/footer2', $data);
    }

}
