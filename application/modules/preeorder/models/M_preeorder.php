<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_preeorder extends CI_Model{

	function tampil_data(){
        $this->db->select('*'); // <-- There is never any reason to write this line!
        $this->db->from('preeorder');
        $query=$this->db->get();
        return $query->result_array();
    }

}