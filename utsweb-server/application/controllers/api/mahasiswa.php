<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH.'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model','mahasiswa');
    }
    
    public function index_get()
    {
        $id = $this->get('id');
        if($id===null){
            $mahasiswa = $this->mahasiswa->getMahasiswa();
        }else{
            $mahasiswa = $this->mahasiswa->getMahasiswa($id);
        }

        if($mahasiswa){
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id =  $this->delete('id');

        if($id===null){
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->mahasiswa->deleteMahasiswa($id) > 0){
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'student_name' => $this->post('student_name'),
            'nim' => $this->post('nim'),
            'bithplace' => $this->post('bithplace'),
            'bithdate' => $this->post('bithdate'),
            'majors' => $this->post('majors'),
            'address' => $this->post('address'),
        ];

        if($this->mahasiswa->createMahasiswa($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new mahasiswa has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id =  $this->put('id');
        $data = [
            'student_name' => $this->post('student_name'),
            'nim' => $this->post('nim'),
            'bithplace' => $this->post('bithplace'),
            'bithdate' => $this->post('bithdate'),
            'majors' => $this->post('majors'),
            'address' => $this->post('address'),
        ];

        if($this->mahasiswa->updateMahasiswa($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data mahasiswa has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file Mahasiswa.php */
?>