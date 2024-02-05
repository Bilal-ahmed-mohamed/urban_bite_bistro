<?php

class signupContr extends signUp {
    private $name;
    private $email;
    private $password;
    private $confirmPassword;

    // constructor 

    public function __construct($name,$email,$password,$confirmPassword){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    // method 

    public function userSignup (){
        if ($this->emptyInput() == false) {
            header('location:../signup.php?error=emptyinput');
            exit();
        }
        
        if ($this->emailValidation() == false) {
            header('location:../signup.php?error=emailisInvalid');
            exit();
        }

        if ($this->passwordMatch() == false) {
            header('location:../signup.php?error=passworddontmatch');
            exit();
        }
    
        $this->setUser($this->name,$this->email,$this->password);
    }



    private function emptyInput(){

        $result;
    
        if (empty($this->name) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)) {
        $result  = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function emailValidation(){
        $result;
        if (filter_var($this->email , FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;

        if ($this->password !== $this->confirmPassword) {
            $result  = false;
        }else {
            $result = true;
        }
        return $result;
    }
}