<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {
    public function getAllmahasiswa()
    {
        //https://www.codeigniter.com/user_guide/database/query_builder.html#selectingdata
        //$query digunakan untuk menampung isi dari tabel mahasiswa
        $query=$this->db->get('mahasiswa');
        
        //https://www.codeigniter.com/user_guide/database/results.html
        //untuk menampilkan isi dari query
        return $query->result_array();

        //atau bisa juga menggunakan code berikut
        //return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahdatamhs()
    {
        $data=[
            "student_name" => $this->input->post('student_name', true),
            "nim" => $this->input->post('nim', true),
            "birthplace" => $this->input->post('birthplace', true),
            "birthdate" => $this->input->post('birthdate', true),
            "majors" => $this->input->post('majors', true),
            "address" => $this->input->post('address', true),
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusdatamhs($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function getmahasiswaByID($id)
    {
        return $this->db->get_where('mahasiswa',['id'=>$id])->row_array();
    }

    public function ubahdatamhs()
    {
        $data=[
            "student_name" => $this->input->post('student_name', true),
            "nim" => $this->input->post('nim', true),
            "birthplace" => $this->input->post('birthplace', true),
            "birthdate" => $this->input->post('birthdate', true),
            "majors" => $this->input->post('majors', true),
            "address" => $this->input->post('address', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword=$this->input->post('keyword');
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    public function datatables(){
        $query = $this->db->order_by('id', 'desc')->get('mahasiswa');
        return $query->result();
    }
}

/* End of file ModelName.php */

?>