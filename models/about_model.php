<?php

class About_Model extends Model{

    public function __construct(){

    }

    public function contact_details(){
//        in case we have a connection to the database
//        return $this->database->query_database('SELECT name, country, address, phone FROM company_branches');

//        just for the example:
        return array(
            'name'      =>  'Kalosa',
            'country'   =>  'Israel',
            'address'   =>  'Ben Yehuda street 49',
            'phone'     =>  '+972-3-5555555'
        );
    }
} 