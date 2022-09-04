<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$email = '';
$message = '';


if(isset($_POST['REGISTER'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mysqli->query("INSERT INTO contactUs (name, email, message) VALUES('$name', '$email', '$message')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: contactUs.php");
}

?>