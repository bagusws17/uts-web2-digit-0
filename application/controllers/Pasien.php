<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->Pasien_model->getAllPasien();
        $this->load->view('templates/header');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('pasien/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nomor_telepon' => $this->input->post('nomor_telepon')
        );

        if ($this->Pasien_model->createPasien($data)) {
            redirect('pasien');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan pasien');
            redirect('pasien/create');
        }
    }

    public function read($id)
    {
        $data['pasien'] = $this->Pasien_model->getPasienById($id);
        $this->load->view('templates/header');
        $this->load->view('pasien/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['pasien'] = $this->Pasien_model->getPasienById($id);
        $this->load->view('templates/header');
        $this->load->view('pasien/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nomor_telepon' => $this->input->post('nomor_telepon')
        );

        if ($this->Pasien_model->updatePasien($id, $data)) {
            redirect('pasien');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate pasien');
            redirect('pasien/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Pasien_model->deletePasien($id)) {
            redirect('pasien');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus pasien');
            redirect('pasien');
        }
    }
}
