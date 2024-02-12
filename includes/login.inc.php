<?php 

if (isset($_POST['login'])) {
    
  
    $email = $_POST['email'];
    $password = $_POST['password'];


    // istanciate the signup.inc.php

    include "../classes/db.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.php";


    $loginUser = new loginContr($email,$password);


    // running error handlers 

    $loginUser->loginUser();


    // redirecting

    header("Location : ../index.php");





}