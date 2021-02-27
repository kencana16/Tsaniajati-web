<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Orders extends RestController {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('api/cart_model', 'cart_model');
        $this->load->model('api/order_model', 'order_model');
    }

    public function cart_get()
    {
       $user_id = $this->input->get('user_id');
       if($user_id != null)
       {
            $this->response([
                'success'   => TRUE,
                'data'      => $this->cart_model->getAll($user_id),
                'qty'       => $this->cart_model->getQty($user_id),
                'message'   => ''
            ], 200);
       }else
       {
            $this->response([
                'success'  => FALSE,
                'message'  => 'Masukkan user_id'
            ], 400);
       }
    }
    
    public function cart_qty_get()
    {
       $user_id = $this->input->get('user_id');
       if($user_id != null)
       {
            $this->response([
                'success'   => TRUE,
                'qty'       => $this->cart_model->getQty($user_id),
                'message'   => ''
            ], 200);
       }else
       {
            $this->response([
                'success'  => FALSE,
                'message'  => 'Masukkan user_id'
            ], 400);
       }
    }

    public function add_to_cart_post()
    {
        $user_id = $this->input->post('user_id');
        $product_id = $this->input->post('product_id');
        $product_qty = $this->input->post('product_qty');
        $qty = $product_qty===null? 1 : $product_qty;

        if($user_id != null && $product_id != null)
        {
            $this->response([
                'success'   => TRUE,
                'message'   => $this->cart_model->addToCart($user_id, $product_id, $qty) ? "Ditambahkan ke keranjang" : "Gagal ditambahkan ke keranjang"
            ], 200);
        }else
        {
            $this->response([
                'success'  => FALSE,
                'message' => 'Parameter tidak lengkap'
            ], 400);
        }
    }

    


}