<?php

Class Database
{
    public  function db_connect(){
        try
        {
            $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $db = new PDO($string, DB_USER, DB_PASSWORD);
            return $db;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function read($query, $data=[])
    {
        $DB = $this->db_connect();
        show($DB);
        $stmt = $DB->prepare($query);

        if(count($data) == 0){
            $stmt = $DB->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }else{
                $check = $stmt->execute($data);
            }
        }

        if($check){
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }else{
            return false;
        }

    }

    public function write($query, $data=[])
    {
        $DB = $this->db_connect();
        $stmt = $DB->prepare($query);

        if(count($data) == 0){
            $stmt = $DB->query($query);
            $check = 0;
            if($stmt){
                $check = 1;
            }else{
                $check = $stmt->execute($data);
            }
        }

        if($check){
            $stmt->fetchAll(PDO::FETCH_OBJ);
            return true;
        }else{
            return false;
        }
    }
}
