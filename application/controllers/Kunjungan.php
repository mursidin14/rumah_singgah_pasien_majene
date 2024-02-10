<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        // $this->load->model('M_Penduduk');
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Kunjungan',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('kunjungan')->result_array();
        $this->load->view('templates/header', $judul);
        $this->load->view('kunjungan/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('kunjungan', ['id' => $id])->row_array();

        $this->db->where(['id' => $id]);
        $this->db->delete('kunjungan');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('kunjungan'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jk', 'JK', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
        $this->form_validation->set_rules('no_bpjs', 'Nomor BPJS', 'required');
        $this->form_validation->set_rules('poli_tujuan', 'Poli Tujuan', 'required|trim');
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kunjungan',
                'sub_title' => 'Tambah Kunjungan '
            ];
            $this->load->view('templates/header', $judul);
            $this->load->view('kunjungan/tambah');
            $this->load->view('templates/footer');
        } else {
            $nama =  $this->input->post("nama", TRUE);
            $jk =  $this->input->post("jk", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $tgl_masuk =  $this->input->post("tgl_masuk", TRUE);
            $no_bpjs =  $this->input->post("no_bpjs", TRUE);
            $poli_tujuan =  $this->input->post("poli_tujuan", TRUE);
            $tgl_keluar =  $this->input->post("tgl_keluar", TRUE);
            $keterangan =  $this->input->post("keterangan", TRUE);

            $save = [
                'nama' => $nama,
                'jk' => $jk,
                'alamat' => $alamat,
                'tgl_masuk' => date('Y-m-d', strtotime($tgl_masuk)),
                'no_bpjs' => $no_bpjs,
                'poli_tujuan' => $poli_tujuan,
                'tgl_keluar' => date('Y-m-d', strtotime($tgl_keluar)),
                'keterangan' => $keterangan
            ];

            $this->db->insert('kunjungan', $save);
            $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
            redirect(base_url("kunjungan"));
            
        }
    }

    public function edit($id)
    {
        
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jk', 'JK', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required|trim');
        $this->form_validation->set_rules('no_bpjs', 'Nomor BPJS', 'required');
        $this->form_validation->set_rules('poli_tujuan', 'Poli Tujuan', 'required|trim');
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Kunjungan',
                'sub_title' => 'Tambah Kunjungan '
            ];

            $data['kunjungan'] = $this->db->get_where('kunjungan', ['id' => $id])->row_array();
            $this->load->view('templates/header', $judul);
            $this->load->view('kunjungan/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $nama =  $this->input->post("nama", TRUE);
            $jk =  $this->input->post("jk", TRUE);
            $alamat =  $this->input->post("alamat", TRUE);
            $tgl_masuk =  $this->input->post("tgl_masuk", TRUE);
            $no_bpjs =  $this->input->post("no_bpjs", TRUE);
            $poli_tujuan =  $this->input->post("poli_tujuan", TRUE);
            $tgl_keluar =  $this->input->post("tgl_keluar", TRUE);
            $keterangan =  $this->input->post("keterangan", TRUE);

            $update = [
                'nama' => $nama,
                'jk' => $jk,
                'alamat' => $alamat,
                'tgl_masuk' => date('Y-m-d', strtotime($tgl_masuk)),
                'no_bpjs' => $no_bpjs,
                'poli_tujuan' => $poli_tujuan,
                'tgl_keluar' => date('Y-m-d', strtotime($tgl_keluar)),
                'keterangan' => $keterangan
            ];

            $this->db->where('id', $id);
            $this->db->update('kunjungan', $update);

            $this->session->set_flashdata('success', 'Berhasil Diupdate!');
            redirect(base_url("kunjungan"));
        }
    }

}
