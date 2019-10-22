<?php

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }


    public function index()
    { 
        $this->load->model('Mahasiswa_model');
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if( $this->input->post('keyword') ) {
            $data['mahasiswa'] = $this->Mahasiswa_model->searchDataMahasiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Mahasiswa Data Form';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('matric', 'Matric', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/add');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->AddMahasiswaData();
            $this->session->set_flashdata('flash', 'Added');
            redirect('mahasiswa');
        }
    }

    public function delete($id)
    {
        $this->Mahasiswa_model->deleteMahasiswaData($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa Data';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');

    }

    public function edit($id)
    {
        $data['title'] = 'Edit Mahasiswa Data Form';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['course'] = ['Information Management', 'Artificial Intelligence', 'Data Science', 'Networking', 'Software Engeneering'];

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('matric', 'Matric', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == false ) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->editMahasiswaData();
            $this->session->set_flashdata('flash', 'Edited');
            redirect('mahasiswa');
        }
    }
}