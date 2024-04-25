<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Kunjungan_model');
    }

    public function index()
    {
        $data['obat'] = $this->Obat_model->getAllObatWithKunjungan();
        $this->load->view('templates/header');
        $this->load->view('obat/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['kunjungan'] = $this->Kunjungan_model->getAllKunjungan();
        $this->load->view('templates/header');
        $this->load->view('obat/create',  $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'nama_obat' => $this->input->post('nama_obat'),
            'dosis' => $this->input->post('dosis'),
            'keterangan' => $this->input->post('keterangan')
        );

        if ($this->Obat_model->createObat($data)) {
            redirect('obat');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan data obat');
            redirect('obat/create');
        }
    }

    public function read($id)
    {
        $data['obat'] = $this->Obat_model->getObatById($id);
        $this->load->view('templates/header');
        $this->load->view('obat/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['obat'] = $this->Obat_model->getObatById($id);
        $this->load->view('templates/header');
        $this->load->view('obat/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'nama_obat' => $this->input->post('nama_obat'),
            'dosis' => $this->input->post('dosis'),
            'keterangan' => $this->input->post('keterangan')
        );

        if ($this->Obat_model->updateObat($id, $data)) {
            redirect('obat');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate data obat');
            redirect('obat/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Obat_model->deleteObat($id)) {
            redirect('obat');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data obat');
            redirect('obat');
        }
    }
}
