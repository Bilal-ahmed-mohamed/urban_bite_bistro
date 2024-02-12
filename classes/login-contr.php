
<?php

class loginContr extends login {
    private $email;
    private $password;

    // constructor 

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }

    // method 

    public function userSignup (){
        if ($this->emptyInput() == false) {
            header('location:../login.php?error=emptyinput');
            exit();
        }
        
    
        $this->loginUser($this->email,$this->password);
    }



    private function emptyInput(){

        $result;
    
        if (empty($this->email) || empty($this->password)) {
        $result  = false;
        }else{
            $result = true;
        }
        return $result;
    }



}