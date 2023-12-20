<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

        $judul = [
            'title' => 'Arsip',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('arsip')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('arsip/index', $data);
        $this->load->view('templates/footer');
    }

    public function upload_file() {

        $this->form_validation->set_rules('name', 'Keterangan', 'required|trim');

        $judul = [
            'title' => 'Arsip',
            'sub_title' => ''
        ];

        $config['upload_path'] = './uploads/'; // Path untuk menyimpan file
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx'; // Tipe file yang diizinkan
        $config['max_size'] = 2048; // Ukuran maksimum file (dalam KB)

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            // Tampilkan pesan error jika terjadi kesalahan saat mengunggah file
            $this->load->view('templates/header', $judul);
            $this->load->view('arsip/tambah');
            $this->load->view('templates/footer');
        } else {
            $name =  $this->input->post("name", TRUE);
            // $data = array('upload_data' => $this->upload->data());
            // Lakukan sesuatu dengan data file yang diunggah (misalnya, simpan ke database)
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $file_type = $upload_data['file_type'];
            $file_path = $config['upload_path'].$file_name;


            // Simpan informasi file ke database
            $this->db->insert('arsip', array(
                'name' => $name,
                'file_name' => $file_name,
                'file_type' => $file_type,
                'file_path' => $file_path
            ));
            $this->session->set_flashdata('success', 'Berhasil Ditambah!');
            redirect(base_url("arsip"));
        }
    }

    public function hapus($id)
    {

        $this->db->where(['id' => $id]);
        $this->db->delete('arsip');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('arsip'));
    }
}
