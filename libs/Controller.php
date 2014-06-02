<?php

class Controller{

    public function __construct(){
//        echo 'Main controller<br />';
        $this->view = new View();
//        $this->model = new Model();
    }

    public function loadModel($name){
        $path = 'models/'.$name.'_model.php';
        if(file_exists($path)){
            $modelName = $name.'_Model';
            $this->model = new $modelName();
        }
    }
} 