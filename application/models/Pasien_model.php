<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function getPasienById($id)
    {
        return $this->db->get_where('pasien', array('id_pasien' => $id))->row_array();
    }

    public function createPasien($data)
    {
        return $this->db->insert('pasien', $data);
    }

    public function updatePasien($id, $data)
    {
        $this->db->where('id_pasien', $id);
        return $this->db->update('pasien', $data);
    }

    public function deletePasien($id)
    {
        return $this->db->delete('pasien', array('id_pasien' => $id));
    }
}
