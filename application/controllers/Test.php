<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_CONTROLLER{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('API/product_model', "p_model");
    }

    public function index()
    {
        $products = $this->p_model->getAll();
        // var_dump($products);
        foreach($products as $key => $product){
            $order = $this->p_model->getSold($product['prod_id']);
            $newData = array(
                'sold' => $order
            );
            $products[$key] = array_merge($product, $newData);
        }
        var_dump($products);
    }
}