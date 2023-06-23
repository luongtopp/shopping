<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class ApiProductController extends RestController
{   
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('backend/Mproduct');
    }

    public function index_get() {
        $product = new Mproduct();
        $result_pro = $product->get_products();
        $this->response($result_pro, 200);
         
    }

    public function storeProduct_post() {
        $product = new Mproduct();
       $data= [
        'catid'=>$this->input->post('catid'),
        'producer'=>$this->input->post('producer'),
        'name' =>$this->input->post('name'),
        'alias' =>$this->input->post('alias'),
        'detail'=>$this->input->post('detail'),
        'sortDesc'=>$this->input->post('sortDesc'),
        'number'=>$this->input->post('number'),
        'sale'=>$this->input->post('sale'),
        'price'=>$this->input->post('price'),
        'price_sale'=>$this->input->post('price_sale'),
        'created'=>$this->input->post('created'),
        'created_by'=>$this->input->post('created_by'),
        'modified'=>$this->input->post('modified'),
        'modified_by'=>$this->input->post('modified_by'),
        'trash'=>$this->input->post('trash'),
        'status'=>$this->input->post('status'),
       ];
       //Thêm
       $product->product_insert($data);
       $this->response($data, 200);
         
    }
}
