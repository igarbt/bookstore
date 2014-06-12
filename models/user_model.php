<?php

class User_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function userList(){
        return $this->db->select('SELECT userid, username, role FROM user');
    }

    public function userSingleList($userid){
        return $this->db->select('SELECT userid, username, role FROM user WHERE userid = :userid', array(':userid' => $userid));
    }

    public function create($data){
        $postData = array(
            'username' => $data['username'],
            'password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        $this->db->insert('user', $postData);
    }

    public function editSave($data){
        $postData = array(
            'username' => $data['username'],
            'password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        $this->db->update('user', $postData, "`userid` = {$data['userid']}");
    }

    public function delete($userid){
        $data = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));
        if($data[0]['role'] == 'owner'){
            return false;
        }

        $this->db->delete('user', "userid = '$userid'");
    }
} 