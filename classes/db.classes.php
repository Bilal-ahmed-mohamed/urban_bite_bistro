<?php


class db {


    
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $db =  new PDO('mysql:host=localhost;dbname=urbanbite', $username , $password);

            return $db;
        } catch (PDOException $e) {
            print "Error :" . $e->getMessage() .  "<br>";
            die();
        }
    }
}