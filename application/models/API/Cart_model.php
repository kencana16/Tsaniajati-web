<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'cart';
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

    public function addToCart($user_id, $product_id, $product_qty)
    {

        $isset_data = $this->db->get_where($this->_table, array('prod_id'=>$product_id,'id_user'=>$user_id));
        if($isset_data->num_rows() > 0){
            $data = array(
                'prod_id'   => $product_id,
                'prod_name' => $this->db->select('prod_name')->from('products')->where('prod_id', $product_id)->get()->row()->prod_name,
                'qty'       => $product_qty + $isset_data->row()->qty,
                'price'     => $this->db->select('prod_price')->from('products')->where('prod_id', $product_id)->get()->row()->prod_price,
                'id_user'   => $user_id 
            );
            return $this->db->where(array('prod_id'=>$product_id,'id_user'=>$user_id))->update($this->_table, $data);
        }else{
            $data = array(
                'prod_id'   => $product_id,
                'prod_name' => $this->db->select('prod_name')->from('products')->where('prod_id', $product_id)->get()->row()->prod_name,
                'qty'       => $product_qty,
                'price'     => $this->db->select('prod_price')->from('products')->where('prod_id', $product_id)->get()->row()->prod_price,
                'id_user'   => $user_id 
            );
            return $this->db->insert($this->_table, $data);
        }
    }

    
}