<?php

session_start();

if (isset($_POST["order"])) {
    
   $image = $_POST["image"];
   $name =  $_POST["name"];
   $price = $_POST["price"];
   $quantity = $_POST["quantity"];
   $users_id = $_SESSION["users_id"];
 


   $total_amount = $price * $quantity;



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

class sendOrder extends db {
    
    protected function orderOrdered($image,$name,$quantity,$users_id,$total_amount) {
        $stmt = $this->connect()->prepare("INSERT INTO orders (users_id,image,name,quantity,total_amount) VALUES (?,?,?,?,?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if (!$stmt->execute([$image,$name,$quantity,$users_id,$total_amount])) {
                header("Location: order.php?error=stmtfailed");
                exit();
            }
        

    }
}


class orderContr extends sendOrder {
    private $image;
    private $name;
    private $quantity;
    private $users_id;
    private $total_amount;


    public function __construct($image,$name,$quantity,$users_id,$total_amount) {
        $this->image = $image;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->users_id= $users_id;
        $this->total_amount = $total_amount;
    }

    public function orderBooked() {
        if (!$this->emptyInput()) {
            header('Location: menu.php?error=emptyinput');
            exit();
        }


        $this->orderOrdered($this->image,$this->name,$this->quantity,$this->users_id,$this->total_amount);
    }

    private function emptyInput() {
        return !empty($this->image) && !empty($this->name) && !empty($this->quantity) && !empty($this->users_id) && !empty($this->total_amount);
    }

   
}

$orderDone = new orderContr($image,$name,$quantity,$users_id,$total_amount);
$orderDone->orderBooked();


header("Location:..order.php");
exit;



}