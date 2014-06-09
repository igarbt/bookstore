<?php

class Login_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function run(){
        $stmt = $this->db->prepare("SELECT id, role FROM user WHERE username = :username AND password = :password");
        $stmt->execute(array(
            ':username' => $_POST['username'],
            ':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY)
        ));

        $data = $stmt->fetch();
        $count = $stmt->rowCount();

        if($count > 0){
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('location: '.URL.'dashboard');
        }
        else{
            header('location: '.URL.'login');
        }
    }
}