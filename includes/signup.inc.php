<?php 

if (isset($_POST['signup'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // istanciate the signup.inc.php

    include "../classes/db.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.php";


    $signUser = new signupContr($name,$email,$password,$confirmPassword);


    // running error handlers 

    $signUser->userSignup();

  


    // redirecting

    // header("Location:../login.php");
	header('location: http://localhost/index.php');

    // echo "<script>window.location.href='index.php'</script>";





}