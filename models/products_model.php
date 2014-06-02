<?php

class Products_Model extends Model{

    public function __construct(){

    }

    public function all_products(){
//        in case we have a connection to the database
//        return $this->database->query_database('SELECT * FROM products');

//        just for the example:
        return array(
            array(
                'name'      =>  'The Brief Wondrous Life of Oscar Wao',
                'author'    =>  'Junot Diaz',
                'image'     =>  IMAGES_URL.'1.jpg'
            ),
            array(
                'name'      =>  'The Orphan Master\'s Son: A Novel (Pulitzer Prize for Fiction)',
                'author'    =>  'Adam Johnson',
                'image'     =>  IMAGES_URL.'2.jpg'
            ),
            array(
                'name'      =>  'The Road',
                'author'    =>  'Cormac McCarthy',
                'image'     =>  IMAGES_URL.'3.jpg'
            )
        );
    }
}