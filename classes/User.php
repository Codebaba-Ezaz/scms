<?php
class User extends Database{
    public function register($name,$email,$password){
        $pass=password_hash($password,PASSWORD_BCRYPT);
        return mysqli_query($this->conn,
        "INSERT INTO users VALUES(null,'$name','$pass','student')");

    }
    public function login($email){
        return mysqli_query($this->conn,
        "SELECT * FROM users WHERE email='$email'");
    }
}
