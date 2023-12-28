<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Iventaris extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }
    

    public function index()
    {
        $judul = [
            'title' => 'Manajemen Inventaris',
            'sub_title' => 'Iventaris'
        ];

        $data['status'] = [
            1 => 'Kamar Kosong',
            2 => 'Kamar Terisi',
            '' => ''
        ];

        $data['data'] = $this->db->get('iventaris')->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('iventaris/index', $data);
        $this->load->view('templates/footer');
    }


    public function tambah()
    {
        $this->form_validation->set_rules('kamar', 'Kamar', 'required');

        $status = [
            1 => '1',  // Kamar Kosong
            2 => '2',  // Kamar Terisi
        ];

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Iventaris',
                'sub_title' => 'Iventaris'
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('iventaris/tambah');
            $this->load->view('templates/footer');
        } else {

            $save = [
                'kamar' => $this->input->post("kamar", TRUE),
                'status' => $status[1]
            ];

            $this->db->insert('iventaris', $save);
            $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
            redirect(base_url("iventaris"));
        }
    }

    public function updateStatusKamar($id)
    {

        $status = $this->input->post('status');

        $this->db->set('status', $status);

        $this->db->where(['id_kamar' => $id]);
        $this->db->update('iventaris');


        $this->session->set_flashdata('success', 'Status Pengajuan'.'Telah Diupdate!');

        redirect(base_url('iventaris'));
    }


    public function hapus($id)
    {

        $data = $this->db->get_where('iventaris', ['id_kamar' => $id])->row_array();

        $this->db->where(['id_kamar' => $id]);

        $this->db->delete('iventaris');

        $this->session->set_flashdata('success', 'Berhasil Dihapus!');

        redirect(base_url('iventaris'));
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('kamar', 'Kamar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Iventaris',
                'sub_title' => 'Iventaris'
            ];

            $data['data'] = $this->db->get_where('iventaris', ['id_kamar' => $id])->row_array();

            $this->load->view('templates/header', $judul);
            $this->load->view('iventaris/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $kamar =  $this->input->post("kamar", TRUE);

            $update = [
               'kamar' => $kamar,
            ];

            $this->db->where('id_kamar', $id);
            $this->db->update('iventaris', $update);
            $this->session->set_flashdata('success', 'Berhasil Diedit!');
            redirect(base_url("iventaris"));
            
        }
    }

}
