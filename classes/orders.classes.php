<?php 

class orders extends db {
    protected fucntion setOrder($image,$name,$price,$quantity,$total_amount){

        $stmt = $this->connect()->prepare("INSERT INTO orders (orders_id,users_id,image,name,amount,quantity,total_amount) VALUES (?,?,?,?,?,?,?)");


        if ($stmt->execute(array($image,$name,$price,$quantity,$total_amount))) {
            $stmt = null;
            header("location : orders.php?error=stmtfailed");
            exit();

        }

        $stmt = null;

    }
}