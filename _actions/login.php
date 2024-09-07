<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "alice@gmail.com" && $password == "password") {
    $_SESSION['user'] = ['name' => 'Alice'];
    header("location: ../profile.php");
}else {
    header("location: ../index.php?incorrect=login");
}