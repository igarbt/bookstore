<?php

class Products extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('products/index');
    }

    public function all_products(){
        $this->view->all_products = $this->model->all_products();
    }
} 