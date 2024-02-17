<?php


class orderContr extends orders {
    private $image;
    private $name;
    private $price;
    private $quantity;
    private $total_amount;
}


public fucntion __construct($image,$name,$price,$quantity,$total_amount){
    $this->image = $image;
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->total_amount = $total_amount;

}

    // method 

    public function ordersSend (){
        if ($this->emptyInput() == false) {
            header('location:../orders.php?error=emptyinput');
            exit();
        }
        
   
    
        $this->setOrders($this->image,$this->name,$this->price,$this->quantity,$this->total_amount);
    }


private function emptyInput(){

    $result;

    if (empty($this->name) || empty($this->price) || empty($this->password) || empty($this->quantity) || empty(total_amount)) {
    $result  = false;
    }else{
        $result = true;
    }
    return $result;
}

