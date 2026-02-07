<?php
require_once __DIR__ . "/Database.php";
class User extends Database{
    public function register($name,$email,$password){
        $pass=password_hash($password,PASSWORD_BCRYPT);
        $stmt = mysqli_prepare($this->conn, "INSERT INTO register (name, password, email) VALUES (?, ?, ?)");
        if($stmt){
            mysqli_stmt_bind_param($stmt, "sss", $name, $pass, $email);
            $result = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        }
        return false;
    }
    public function login($email){
        $stmt = mysqli_prepare($this->conn, "SELECT * FROM register WHERE email=?");
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        }
        return false;
    }
}
