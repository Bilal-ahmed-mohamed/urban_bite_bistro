
<?php


class signUp extends db {

    protected function setUser($name,$email,$password){
     
        $stmt = $this->connect()->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");

        $hashedPassword = password_hash($password , PASSWORD_DEFAULT);

        if ($stmt->execute(array($name,$email,$hashedPassword))) {
            $stmt = null;
            header("location : signup.php?error=stmtfailed");
            exit();

        }

        $stmt = null;



        
    }

    protected function checkUser ($name,$email,$password){
        $stmt = $this-connect()->prepare("SELECT email FROM users WHERE email = ?");

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      

        if (!$stmt->execute(array($email))) {
            $stmt  = null;
            header("location : signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}