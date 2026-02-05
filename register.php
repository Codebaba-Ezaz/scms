<?php
include "classes/User.php";
$user=new User();
if(isset($_POST['register'])){
    $user->register($_POST['name'],$_POST['email'],$_POST['password']);
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class=""container mt-5 col="md-4">
            <h3>Register</h3>
            <form method="post">
                <input name="name" class="form-control mb-2" placeholder="Name">
                <input name="email" class="form-control mb-2" placeholder="Email">
                <input name="password" type="password" class="form-control mb-2" placeholder="Password">
                <button name="register" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </body>"
</html>