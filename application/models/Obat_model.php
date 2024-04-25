<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

    public function getAllObat()
    {
        return $this->db->get('obat_pasien')->result_array();
    }

    public function getObatById($id)
    {
        return $this->db->get_where('obat_pasien', array('id_obat_pasien' => $id))->row_array();
    }

    public function createObat($data)
    {
        return $this->db->insert('obat_pasien', $data);
    }

    public function updateObat($id, $data)
    {
        $this->db->where('id_obat_pasien', $id);
        return $this->db->update('obat_pasien', $data);
    }

    public function deleteObat($id)
    {
        return $this->db->delete('obat_pasien', array('id_obat_pasien' => $id));
    }

    public function getAllObatWithKunjungan()
    {
        $this->db->select('obat_pasien.*, kunjungan.nomor_rm');
        $this->db->from('obat_pasien');
        $this->db->join('kunjungan', 'obat_pasien.id_kunjungan = kunjungan.id_kunjungan', 'inner');
        return $this->db->get()->result_array();
    }

    public function getObatByIdWithKunjungan($id)
    {
        $this->db->select('o.*, k.nomor_rm as nomor_rm');
        $this->db->from('obat_pasien as o');
        $this->db->join('kunjungan as k', 'k.id_kunjungan = o.id_kunjungan', 'inner');
        $this->db->where('o.id_obat_pasien', $id);
        return $this->db->get()->row_array();
    }
}
