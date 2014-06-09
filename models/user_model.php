<?php

class User_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function userList(){
        return $this->db->select('SELECT id, username, role FROM user');
    }

    public function userSingleList($id){
        return $this->db->select('SELECT id, username, role FROM user WHERE id = :id', array(':id' => $id));
    }

    public function create($data){
        $postData = array(
            'username' => $data['username'],
            'password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        $this->db->insert('users', $postData);
    }

    public function editSave($data){
        $postData = array(
            'username' => $data['username'],
            'password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        $this->db->update('users', $postData, "`id` = {$data['id']}");
    }

    public function delete($id){
        $data = $this->db->select('SELECT role FROM user WHERE id = :id', array(':id' => $id));
        if($data[0]['role'] == 'owner'){
            return false;
        }

        $this->db->delete('user', "id = '$id'");
    }
} 