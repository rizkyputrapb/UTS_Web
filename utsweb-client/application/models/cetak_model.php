<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model {

    public function view(){
        $this->db->select('student_name, nim, birthplace, birthdate, majors, address');
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

}

/* End of file cetak_model.php */

?>