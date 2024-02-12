<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Afasilitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('dashboard_model', 'dashboard');
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }
    

    public function index()
    {
        $judul = [
            'title' => 'Manajemen Fasilitas',
            'sub_title' => 'Fasilitas'
        ];

        $data['data'] = $this->db->get('fasilitas')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('afasilitas/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
        $this->form_validation->set_rules('jml_fasilitas', 'Jumlah Fasilitas', 'required');
        $this->form_validation->set_rules('note', 'Keterangan', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Fasilitas',
                'sub_title' => 'Fasilitas'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('afasilitas/tambah');
            $this->load->view('templates/footer');
        } else {
            // Proses menyimpan data jika validasi berhasil
            $save = [
                'fasilitas' => $this->input->post("fasilitas", TRUE),
                'jml_fasilitas' => $this->input->post("jml_fasilitas", TRUE),
                'note' => $this->input->post("note", TRUE),
            ];
    
            $this->db->insert('fasilitas', $save);
            $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
            redirect(base_url("afasilitas"));
        }
    }
    
    // Fungsi callback untuk memeriksa jumlah kata
    // public function validate_max_words($str)
    // {
    //     $max_words = 30;
    //     $word_count = str_word_count($str);
    
    //     if ($word_count > $max_words) {
    //         $this->form_validation->set_message('validate_max_words', 'Keterangan tidak boleh melebihi ' . $max_words . ' kata.');
    //         return false;
    //     }
    
    //     return true;
    // }
    


    public function hapus($id)
    {

        $data = $this->db->get_where('fasilitas', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);

        $this->db->delete('fasilitas');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('afasilitas'));
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('fasilitas', 'fasilitas', 'required');
        $this->form_validation->set_rules('jml_fasilitas', 'jml_fasilitas', 'required');
        $this->form_validation->set_rules('note', 'note', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Fasilitas',
                'sub_title' => 'Fasilitas'
            ];

            $data['data'] = $this->db->get_where('fasilitas', ['id' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('afasilitas/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $fasilitas =  $this->input->post("fasilitas", TRUE);
            $jml_fasilitas =  $this->input->post("jml_fasilitas", TRUE);
            $note =  $this->input->post("note", TRUE);

            $update = [
               'fasilitas' => $fasilitas,
               'jml_fasilitas' => $jml_fasilitas,
               'note' => $note,
            ];

            $this->db->where('id', $id);
            $this->db->update('fasilitas', $update);
            $this->session->set_flashdata('success', 'Berhasil Diedit!');
            redirect(base_url("afasilitas"));
            
        }
    }

}
