<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratonline extends CI_Controller
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
            'title' => 'Pendaftaran',
            'sub_title' => ''
        ];

        $data['sm'] = $this->db->get('iventaris')->result_array();

        $kamar = array();
        $status = array();

        foreach ($data['sm'] as $row) {
            $kamar[$row['kamar']] = $row['kamar'];
            $status[$row['kamar']] = $row['status'];
        }

        $data['kamar'] = $kamar;
        $data['status'] = $status;

        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/s_online', $data);
        $this->load->view('frontend/footer2', $data);
    }

    public function ajukan()
    {
        $status = [
            1 => 1,  // Diterima
            2 => 2,  // Persyaratan Tidak Memenuhi
        ];

        $nama = $this->input->post('nama', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $jenis_surat = $this->input->post('jenis_surat', TRUE);
        $tujuan_rs = $this->input->post('tujuan_rs', TRUE);
        $rencana_masuk = $this->input->post('rencana_masuk', TRUE);

        //Output a v4 UUID 
        $rid = uniqid($jenis_surat, TRUE);
        $rid2 = str_replace('.', '', $rid);
        $rid3 = substr(str_shuffle($rid2), 0, 3);

        $cc = $this->db->count_all('pengajuan_surat') + 1;
        $count = str_pad($cc, 3, STR_PAD_LEFT);
        $id = $jenis_surat . "-";
        $d = date('d');
        $y = date('y');
        $mnth = date("m");
        $s = date('s');
        $randomize = $d + $y + $mnth + $s;
        // $id = $id . $rid3 . $randomize . $count . $y;
        $id = $nik;

        // var_dump($id);
        // die;

        try {
            $ceknik = $this->penduduk->cek_penduduk($nik)->num_rows();
        
            if ($ceknik <= 0) {
                $save = [
                    'nik' => $nik,
                ];
        
                $this->db->insert('penduduk', $save);
            }

            if ($_FILES['file']['size'] >= 5242880) {
                $this->session->set_flashdata('success', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-ban"></i> MAAF!</h5> File Lebih 2MB!</div>');
                redirect(base_url("suratonline"));
            }
    
            if ($_FILES['file']['name'] == null) {
                $file = '';
            } else {
                $namafile = substr($_FILES['file']['name'],-7);
                $file = $jenis_surat.uniqid().$namafile;
                $config['upload_path']          = './uploads/berkas';
                $config['allowed_types']        = '*';
                $config['max_size']             = 5120; // 5MB
                $config['file_name']            = $file;
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $file = $data['upload_data']['file_name'];
                }
            }
    
            // surat rujukan
            $surat_rujukan = '';
    
            if ($_FILES['surat_rujukan']['name'] != null) {
                $namafile_rujukan = substr($_FILES['surat_rujukan']['name'], -7);
                $surat_rujukan = $jenis_surat . uniqid().$namafile_rujukan;
                $config['upload_path'] = './uploads/berkas';
                $config['allowed_types'] = '*';
                $config['max_size'] = 5120; // 5MB
                $config['file_name'] = $surat_rujukan;
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload("surat_rujukan")) {
                    $data = array('upload_data' => $this->upload->data());
                    $surat_rujukan = $data['upload_data']['file_name'];
                }
            }
    
            $surat_dinsos = '';
    
            if ($_FILES['surat_dinsos']['name'] != null) {
                $namafile_dinsos = substr($_FILES['surat_dinsos']['name'], -7);
                $surat_dinsos = $jenis_surat . uniqid().$namafile_dinsos;
                $config['upload_path'] = './uploads/berkas';
                $config['allowed_types'] = '*';
                $config['max_size'] = 5120; // 5MB
                $config['file_name'] = $surat_dinsos;
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload("surat_dinsos")) {
                    $data = array('upload_data' => $this->upload->data());
                    $surat_dinsos = $data['upload_data']['file_name'];
                }
            }
    
        
            // Lakukan pengecekan apakah NIK sudah ada dalam tabel pengajuan_surat
            $ceknik_pengajuan = $this->db->get_where('pengajuan_surat', array('nik' => $nik))->num_rows();
        
            if ($ceknik_pengajuan <= 0) {
                // Jika NIK belum ada dalam tabel pengajuan_surat, lakukan penambahan data
                $data = [
                    'id' => $id,
                    // 'nama' => $nama,
                    'nik' => $nik,
                    // 'no_hp' => $no_hp,
                    'jenis_surat' => $jenis_surat,
                    'file' => $file,
                    'surat_rujukan' => $surat_rujukan,
                    'surat_dinsos' => $surat_dinsos,
                    'tanggal' => date('Y-m-d'),
                    'tujuan_rs' => $tujuan_rs, 
                    'rencana_masuk' => $rencana_masuk,
                    'status' => $status[1]
                ];
        
                // var_dump($data);
                // die;
        
                $this->pengajuan_track->insert_p_surat($data);
                $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Mengajukan Surat! Berikut <b>NIK</b> anda: <b>' . $id . '</b></div>');
                redirect(base_url("suratonline"));
            } else {
                // Jika NIK sudah ada dalam tabel pengajuan_surat, tampilkan pesan kesalahan
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-cross"></i> Maaf!</h5> NIK Anda sudah Terdaftar!</div>');
                redirect(base_url("suratonline"));
            }
        } catch (Exception $e) {
            // Tangani exception
            echo "Terjadi kesalahan: " . $e->getMessage();
        }
        
    }
}
