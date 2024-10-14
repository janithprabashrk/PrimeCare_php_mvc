<?php

use LDAP\Result;

trait Database{

    private function connect(){
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME."";
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }
    
    public function query($query, $data = []){
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if(($check)){#if the query is successful
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                // show($result);
                return $result;
            }
        }
    }

    public function get_row($query, $data = []){
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if(is_array(($check))){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)){
                return $result[0];
            }
        }
    }
}
