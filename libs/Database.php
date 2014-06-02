<?php

class Database extends PDO{

    public function __construct(){
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }

    public function query_database($query){
        $result = $this->mssql_query($query);
        return mssql_fetch_array($result);
    }
}