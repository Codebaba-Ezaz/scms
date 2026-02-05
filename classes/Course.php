<?php
require_once __DIR__ . "/Database.php";
class Course extends Database {

    public function all(){
        return mysqli_query($this->conn,"SELECT * FROM courses");
    }

    public function add($title,$desc){
        return mysqli_query($this->conn,
        "INSERT INTO courses VALUES(null,'$title','$desc')");
    }
}
