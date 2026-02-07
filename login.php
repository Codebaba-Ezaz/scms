<?php
session_start();
include "classes/User.php";
//require_once __DIR__ . "/Database.php";
$user=new User();

if(isset($_POST['login'])){
    $res=$user->login($_POST['email']);
    $u=mysqli_fetch_assoc($res);

    if(password_verify($_POST['password'],$u['password'])){
        $_SESSION['user']=$u;
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5 col-md-4">
            <h3>Login</h3>
            <form method="post">
                <input name="email" class="form-control mb-2" placeholder="Email">
                <input name="password" type="password" class="form-control mb-2" placeholder="Password">
                <button name="login" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </body>
    </html>