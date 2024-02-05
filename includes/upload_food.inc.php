<?php

if (isset($_POST["submit"])) {
    
    $name  = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

}





// istanciate the upload-food-contr.php

include "../classes/db.classes.php";
include "../classes/upload_food.classes.php";
include "../classes/upload_food-contr.php";

$dish = new uploadFoodContr($name,$type,$description,$price,$image);


// running error handlers

$dish->uploadDish();


// redirecting 
header('location:../index.php');

