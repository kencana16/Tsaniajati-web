<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->_tOrder = 'orders';
    }

    public function getAll($user_id)
    {
        return $this->db->get_where($this->_table, array('id_user'=>$user_id))->result_array();
    }

    public function getQty($user_id)
    {
        $qty = $this->db->select_sum('qty')
                        ->get_where($this->_table, array('id_user'=>$user_id))
                        ->row()
                        ->qty;
        return $qty!=null ? $qty : 0;
    }

    
}