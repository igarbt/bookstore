<?php

class About extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('about/index');
    }

    public function contact_us($arg = false){
        $this->view->contact_details = $this->model->contact_details();
    }
} 