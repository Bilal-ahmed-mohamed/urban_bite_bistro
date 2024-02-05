<?php

class uploadFoodContr extends upload  {

   private $name;
   private $type;
   private $description;
   private $price;
   private $image;

//    constructor 
  
public function __construct($name,$type,$description,$price,$image){

    $this->name = $name;
    $this->type = $type;
    $this->description = $description;
    $this->price = $price;
    $this->image = $image;

    
}
// method

public function uploadDish (){
    if ($this->emptyInput() == false) {
        header('location:../index.php?error=emptyinput');
        exit();
    }

    $this->uploadDishes($this->name,$this->type,$this->description,$this->price,$this->image);
}


private function emptyInput(){

    $result;

    if (empty($this->name) || empty($this->type) || empty($this->description) || empty($this->price) || empty($this->image)) {
    $result  = false;
    }else{
        $result = true;
    }
    return $result;
}


}