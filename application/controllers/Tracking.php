<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model','galery');
        $this->load->model('pengajuan_track_model','pengajuan_track');

        $this->load->helper(array('form', 'url','Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Tracking',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/tracking',$data);
        $this->load->view('frontend/footer2',$data);
    }

    public function cari()
    {

        $id = $this->input->post('trackid',TRUE);
        $row = $this->pengajuan_track->findById($id);

        $data = [ 
            'id' => $id,
            'row' => $row
        ];

        // var_dump($row);
        // die;

        if ($row === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-bank"></i> Maaf!</h5> NIK anda belum mengajuka Pendaftaran
            </div>');
            redirect(base_url("tracking"));
        }else {
            redirect(base_url("tracking/tracked/").$id);
        }

    }

    public function tracked()
    {
        $id = $this->uri->segment(3);
        $data['row'] = $this->pengajuan_track->showById($id);
        $data['options'] = [
            'Pilih Kode Kamar',
            'RSP-K1' => 'Kamar 1',
            'RSP-K2' => 'Kamar 2',
            'RSP-K3' => 'Kamar 3',
        ];
        $judul = [
            'title' => 'Tracking',
            'sub_title' => ''
        ];


        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/result',$data);
        $this->load->view('frontend/footer2',$data);
    }

}
