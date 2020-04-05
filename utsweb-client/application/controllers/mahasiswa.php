<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)    
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');

        //validasi level
        if($this->session->userdata('level') !="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        //modul for load database
        //$this->load->database();
        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
        if($this->input->post('keyword')){
            #code...
            $data['mahasiswa']=$this->mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data Mahasiswa';
        $data['majors']=['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin', 'Teknik Sipil'];
        $this->form_validation->set_rules('student_name', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('birthplace', 'Birthplace', 'required');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|date');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('template/footer');
        }else{
            #code...
            $this->mahasiswa_model->tambahdatamhs();
            //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            
            redirect('mahasiswa','refresh');
        }
    }

    public function hapus($id)
    {
        $this->mahasiswa_model->hapusdatamhs($id);
        //untuk flashdata mempunyai 2 parameter (nama flashdata/alias, isi dari flashdatanya)
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('mahasiswa','refresh');
    }

    public function detail($id)
    {
        $data['title']='Detail Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
        
    }

    public function edit($id)
    {
        $data['title']='Form Edit Data Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getmahasiswaByID($id);
        $data['majors']=['Teknik Informatika', 'Teknik Kimia', 'Teknik Industri', 'Teknik Mesin', 'Teknik Sipil'];
        $this->form_validation->set_rules('student_name', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('birthplace', 'Birthplace', 'required');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|date');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->mahasiswa_model->ubahdatamhs();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('mahasiswa', 'refresh');
        };
    }
}

/* End of file Controllername.php */
?>