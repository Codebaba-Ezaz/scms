<?php
require_once __DIR__ . "/Database.php";
class User extends Database{
    public function register($name,$email,$password){
        $pass=password_hash($password,PASSWORD_BCRYPT);
        return mysqli_query($this->conn,
        "INSERT INTO register (name, password, email) VALUES ('$name', '$pass', '$email')");

    }
    public function login($email){
        return mysqli_query($this->conn,
        "SELECT * FROM register WHERE email='$email'");
    }
}
