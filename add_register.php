<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$uname = '';
$password = '';
$email = '';


if(isset($_POST['REGISTER'])){

    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
   

    $mysqli->query("INSERT INTO user (uname, password, email ) VALUES('$uname', '$password', '$email' )") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: register.php");
}
?>