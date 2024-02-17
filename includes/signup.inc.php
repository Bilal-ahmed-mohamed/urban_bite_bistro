<?php

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];


    class db {
        protected function connect() {
            try {
                $username = "root";
                $password = "";
                $db = new PDO('mysql:host=localhost;dbname=urbanbite', $username, $password);
                return $db;
            } catch (PDOException $e) {
                print "Error: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    class signUp extends db {
        public function checkUser($email) {
            $stmt = $this->connect()->prepare("SELECT email FROM users WHERE email = ?");
            if (!$stmt->execute([$email])) {
                header("Location: signup.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() > 0) {
                return false; // User exists
            } else {
                return true; // User does not exist
            }
        }

        public function setUser($name, $email, $password) {
            $stmt = $this->connect()->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            if (!$stmt->execute([$name, $email, $hashedPassword])) {
                header("Location: signup.php?error=stmtfailed");
                exit();
            }
        }
    }

    class signupContr extends signUp {
        private $name;
        private $email;
        private $password;
        private $confirmPassword;

        public function __construct($name, $email, $password, $confirmPassword) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
        }

        public function userSignup() {
            if (!$this->emptyInput()) {
                header('Location: signup.php?error=emptyinput');
                exit();
            }

            if (!$this->emailValidation()) {
                header('Location: signup.php?error=emailisInvalid');
                exit();
            }

            if (!$this->passwordMatch()) {
                header('Location: signup.php?error=passworddontmatch');
                exit();
            }

            if (!$this->checkUser($this->email)) {
                header('Location: signup.php?error=userexists');
                exit();
            }

            $this->setUser($this->name, $this->email, $this->password);
        }

        private function emptyInput() {
            return !empty($this->name) && !empty($this->email) && !empty($this->password) && !empty($this->confirmPassword);
        }

        private function emailValidation() {
            return filter_var($this->email, FILTER_VALIDATE_EMAIL);
        }

        private function passwordMatch() {
            return $this->password === $this->confirmPassword;
        }
    }

    $signUser = new signupContr($name, $email, $password, $confirmPassword);
    $signUser->userSignup();

    // Redirect to login.php after successful signup
    header("Location:../login.php");
    exit;
}

?>
