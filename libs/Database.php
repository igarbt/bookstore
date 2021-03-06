<?php

class Database extends PDO{

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
    }

    public function query_database($query){
        $result = $this->mssql_query($query);
        return mssql_fetch_array($result);
    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        $stmt = $this->prepare($sql);
        foreach($array as $key => $value){
            $stmt->bindValue("$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchAll($fetchMode);
    }

    public function insert($table, $data){
        ksort($data);

        $fieldNames = implode('`,`', array_keys($data));
        $fieldValues = ':'.implode(',:', array_keys($data));

        $stmt = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        foreach($data as $key => $value){
            $stmt->bindValue("$key", $value);
        }

        $stmt->execute();
    }

    public function update($table, $data, $where){
        ksort($data);

        $fieldDetails = null;
        foreach($data as $key => $value){
            $fieldDetails .= "`$key` = :$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        $stmt = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
    }

    public function delete($table, $where, $limit = 1){
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }
}