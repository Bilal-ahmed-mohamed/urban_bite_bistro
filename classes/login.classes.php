
<?php


class login extends db {

    protected function lgoinUser($email,$password){
     
        $stmt = $this->connect()->prepare("SELECT email FROM users WHERE email = ?; OR password = ?;");



        if ($stmt->execute(array($email,$password))) {
            $stmt = null;
            header("location : index.php?error=stmtfailed");
            exit();

        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location : login.php?error=usernotfound");
            exit();

        }
        $passowrdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkedPassword = password_verify($password, $passowrdHashed[0]['password']);


        if ($checkedPassword == false) {
            $stmt = null;
            header("location : login.php?error=wrongpassword");
            exit();
        }elseif(){
            $stmt  = $this->connect()->prepare("SELECT email FROM users WHERE email = ?; OR password = ?;");

            
        if ($stmt->execute(array($email,$password))) {
            $stmt = null;
            header("location : index.php?error=stmtfailed");
            exit();

        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location : login.php?error=usernotfound");
            exit();

        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["email"] = $user[0]["email"];
        $_SESSION["name"] = $user[0]["name"];
        
        }

        $stmt = null;



        
    }

}