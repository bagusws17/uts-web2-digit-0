<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kunjungan_model');
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['kunjungan'] = $this->Kunjungan_model->getAllKunjunganWithPasien();
        $this->load->view('templates/header');
        $this->load->view('kunjungan/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['pasien'] = $this->Pasien_model->getAllPasien();
        $this->load->view('templates/header');
        $this->load->view('kunjungan/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nomor_rm' => $this->input->post('nomor_rm'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan')
        );

        if ($this->Kunjungan_model->createKunjungan($data)) {
            redirect('kunjungan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan data kunjungan');
            redirect('kunjungan/create');
        }
    }

    public function read($id)
    {
        $data['kunjungan'] = $this->Kunjungan_model->getKunjunganByIdWithPasien($id);
        $this->load->view('templates/header');
        $this->load->view('kunjungan/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['kunjungan'] = $this->Kunjungan_model->getKunjunganById($id);
        $data['pasien'] = $this->Pasien_model->getAllPasien(); // Memuat semua data pasien
        $this->load->view('templates/header');
        $this->load->view('kunjungan/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nomor_rm' => $this->input->post('nomor_rm'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan')
        );

        if ($this->Kunjungan_model->updateKunjungan($id, $data)) {
            redirect('kunjungan');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate data kunjungan');
            redirect('kunjungan/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Kunjungan_model->deleteKunjungan($id)) {
            redirect('kunjungan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data kunjungan');
            redirect('kunjungan');
        }
    }
}
