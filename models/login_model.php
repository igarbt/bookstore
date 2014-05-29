<?php

class Login_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    public function run(){
        $stmt = $this->db->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
        $stmt->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $count = $stmt->rowCount();

        if($count > 0){
            Session::init();
            Session::set('loggedIn', true);
            header('location: '.URL.'dashboard');
        }
        else{
            header('location: '.URL.'login');
        }
    }
} 