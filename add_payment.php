<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$fullname = '';
$email = '';
$address = '';
$city = '';
$cardname = '';
$creditnumber = '';
$expiremonth = '';
$expireyear = '';
$cvv = '';


if(isset($_POST['SAVE'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $cardname = $_POST['cardname'];
    $creditnumber = $_POST['creditnumber'];
    $expiremonth = $_POST['expiremonth'];
    $expireyear = $_POST['expireyear'];
    $cvv = $_POST['cvv'];

    $mysqli->query("INSERT INTO payments (fullname, email, address, city, cardname, creditnumber, expiremonth, expireyear, cvv ) VALUES('$fullname', '$email', '$address', '$city', '$cardname', '$creditnumber','$expiremonth', '$expireyear', '$cvv' )") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: job catergory.php");
}

?>