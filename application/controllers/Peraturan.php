<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Arsip_model');
    }

    public function index()
    {
        // $data['files'] = $this->Arsip_model->get_files();
        // $data['files'] = $this->db->get('arsip')->result_array();

        $judul = [
            'title' => 'Arsip',
            'sub_title' => ''
        ];

        $data['kunjungan'] = $this->db->get('kunjungan')->result_array();
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/peraturan', $data);
        $this->load->view('frontend/footer2');
    }


    public function filterByBulan() {
        // Ambil nilai bulan dari form
        $bulan = $this->input->post('bulan');

        $judul = [
            'title' => 'Arsip',
            'sub_title' => ''
        ];

        // Panggil fungsi dalam model untuk mengambil data berdasarkan bulan
        $data['hasil_filter'] = $this->Arsip_model->getDataByBulan($bulan);

        // Tampilkan data hasil filter pada view
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/peraturan', $data);
        $this->load->view('frontend/footer2');
    }

    public function filterByBulanKeluar() {
        // Ambil nilai bulan dari form
        $bulan_keluar = $this->input->post('bulan_keluar');

        $judul = [
            'title' => 'Arsip',
            'sub_title' => ''
        ];

        // Panggil fungsi dalam model untuk mengambil data berdasarkan bulan
        $data['hasil_filter'] = $this->Arsip_model->getDataByBulan($bulan_keluar);

        // Tampilkan data hasil filter pada view
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/peraturan', $data);
        $this->load->view('frontend/footer2');
    }


    public function view_file() {
        // $this->load->model('Arsip_model');
        // $file = $this->Arsip_model->get_files();
        $file['files'] = $this->db->get('arsip')->result_array();
    
        // Lakukan logika untuk menampilkan file, misalnya jika ingin menampilkan file PDF
        header('Content-type: application/pdf');
        // header('Content-type: '.$file['file_type']);
        echo $file['data_file'];
    }

    public function view_pdf($fileId) {
        $file = $this->db->get_where('arsip', array('id' => $fileId))->row_array(); // Ambil informasi file dari database
    
        // Pastikan file yang diambil adalah tipe file PDF
        if ($file && $file['file_type'] == 'application/pdf') {
            header('Content-type: application/pdf');
            echo $file['file_path'];
            exit;
        } else {
            echo "File bukan tipe PDF atau tidak ditemukan.";
        }
    }
    
    

    public function download_file($id) {
        // $this->load->model('Arsip_model');
        // $file = $this->Arsip_model->get_file_by_id($file_id);
        $file = $this->db->get_where('arsip', array('id' => $id))->row_array(); // Ambil informasi file dari database
    
        // Set header untuk memberitahu browser bahwa ini adalah file yang akan diunduh
        header("Content-type: ".$file['file_type']);
        header("Content-Disposition: attachment; filename=".$file['file_name']);
    
        echo $file['data_file'];
    }
}
