<?php 

if (isset($_POST['login'])) {
    
  
    $email = $_POST['email'];
    $password = $_POST['password'];


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




    class login extends db {
    
        protected function loginUser($email, $password) {
            $stmt = $this->connect()->prepare("SELECT * FROM admin WHERE email = ?;");
    
            if (!$stmt->execute(array($email))) {
                header("Location: admin_login.php?error=stmtfailed");
                exit();
            }
    
            if ($stmt->rowCount() == 0) {
                header("Location: admin_login.php?error=usernotfound");
                exit();
            }
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($password !== $user['password']) {
                header("Location: admin_login.php?error=wrongpassword");
                exit();
            } else {
                session_start();
                $_SESSION["id"] = $user["id"];
                $_SESSION["name"] = $user["name"];
    
                header("Location: ../dashboard.php");
                exit();
            }
        }
    }
    
    



class loginContr extends login {
    private $email;
    private $password;

    // constructor 

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }

    // method 

    public function userLogin(){

        if (!$this->emptyInput()) {
            header('location:../admin_login.php?error=emptyinput');
            exit();
        }
        
    
        $this->loginUser($this->email,$this->password);
    }

    private function emptyInput() {
        return  !empty($this->email) && !empty($this->password);
    }



}

    $loginUser = new loginContr($email,$password);
    $loginUser->userLogin();


   // Redirect to index.php after successful signup
   header("Location:../dashboard.php");
   exit;





}

?>