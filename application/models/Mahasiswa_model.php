<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
       return $this->db->get('mahasiswa')->result_array();
    }

    public function addMahasiswaData()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "matric" => $this->input->post('matric', true),
            "email" => $this->input->post('email', true),
            "course" => $this->input->post('course', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function deleteMahasiswaData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}