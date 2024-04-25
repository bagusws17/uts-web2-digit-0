<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_model extends CI_Model {

    public function getAllKunjungan()
    {
        $this->db->select('k.*, p.nama as nama_pasien');
        $this->db->from('kunjungan as k');
        $this->db->join('pasien as p', 'k.id_pasien = p.id_pasien', 'inner');
        return $this->db->get()->result_array();
    }

    public function getKunjunganById($id)
    {
        return $this->db->get_where('kunjungan', array('id_kunjungan' => $id))->row_array();
    }

    public function createKunjungan($data)
    {
        return $this->db->insert('kunjungan', $data);
    }

    public function updateKunjungan($id, $data)
    {
        $this->db->where('id_kunjungan', $id);
        return $this->db->update('kunjungan', $data);
    }

    public function deleteKunjungan($id)
    {
        return $this->db->delete('kunjungan', array('id_kunjungan' => $id));
    }

    public function getAllKunjunganWithPasien()
    {
        $this->db->select('kunjungan.*, pasien.nama');
        $this->db->from('kunjungan');
        $this->db->join('pasien', 'kunjungan.id_pasien = pasien.id_pasien');
        return $this->db->get()->result_array();
    }

    public function getKunjunganByIdWithPasien($id)
    {
        $this->db->select('k.*, p.nama as nama');
        $this->db->from('kunjungan as k');
        $this->db->join('pasien as p', 'k.id_pasien = p.id_pasien', 'inner');
        $this->db->where('k.id_kunjungan', $id);
        return $this->db->get()->row_array();
    }
    
}
