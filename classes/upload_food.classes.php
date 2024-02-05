<?php

class upload extends db {

    protected function uploadDishes($name,$type,$description,$price,$image){

        $stmt = $this->connect()->prepare("INSERT INTO dish ( name , type , description,price, image ) VALUES (?,?,?,?,?)");

        if ($stmt->execute(array($name,$type,$description,$price, $image))) {
            $stmt  = null;
            header("location : ?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}