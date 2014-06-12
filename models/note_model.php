<?php

class Note_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function noteList(){
        return $this->db->select('SELECT * FROM note WHERE userid = :userid', array('userid' => $_SESSION['userid']));
    }

    public function noteSingleList($noteid){
        return $this->db->select('SELECT * FROM note WHERE userid = :userid AND noteid = :noteid', array(':userid' => $_SESSION['userid'], ':noteid' => $noteid));
    }

    public function create($data){
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content'],
            'userid' => $_SESSION['userid'],
            'date_added' => date('Y-m-d H:i:s')
        );
        $this->db->insert('note', $postData);
    }

    public function editSave($data){
        $postData = array(
            'title' => $data['title'],
            'content' => $data['content']
        );
        $this->db->update('note', $postData, "`noteid` = {$data['noteid']} and userid = '{$_SESSION['userid']}'");
    }

    public function delete($noteid){
        $this->db->delete('note', "`noteid` = $noteid and userid = '{$_SESSION['userid']}'");
    }
} 