<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip_model extends CI_Model {

    // public function __construct() {
    //     parent::__construct();
    //     $this->load->database();
    // }

    // public function get_files() {
    //     $query = $this->db->get('arsip');
    //     return $query->result_array();
    // }

    // public function get_file_by_id($file_id) {
    //     $query = $this->db->get_where('arsip', array('id' => $file_id));
    //     return $query->row_array();
    // }

    public function getDataByBulan($bulan) {
        // Query untuk mengambil data berdasarkan bulan
        $this->db->select('*');
        $this->db->from('kunjungan'); // Ganti nama_tabel dengan nama tabel sesuai aplikasi Anda
        $this->db->where('MONTH(tgl_masuk)', $bulan);
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query
    }

    public function getDataByBulanKeluar($bulan_keluar) {
        // Query untuk mengambil data berdasarkan bulan keluar
        $this->db->select('*');
        $this->db->from('kunjungan'); // Ganti nama_tabel dengan nama tabel sesuai aplikasi Anda
        $this->db->where('MONTH(tgl_keluar)', $bulan_keluar);
        $query = $this->db->get();

        return $query->result(); // Mengembalikan hasil query
    }
    
}
?>
