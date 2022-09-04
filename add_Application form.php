<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$fname = '';
$lname = '';
$address = '';
$email = '';
$phone = '';
$emp_status = '';
$com_name01 = '';
$com_name02 = '';
$com_name03 = '';
$job_title01 = '';
$job_title01 = '';
$job_title02 = '';
$job_title03 = '';
$message = '';

if(isset($_POST['SUBMIT'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $emp_status = $_POST['emp_status'];
    $com_name01 = $_POST['com_name01'];
    $com_name02 = $_POST['com_name02'];
    $com_name03 = $_POST['com_name03'];
    $job_title01 = $_POST['job_title01'];
    $job_title02 = $_POST['job_title02'];
    $job_title03 = $_POST['job_title03'];
    $message = $_POST['message'];

    $mysqli->query("INSERT INTO applicationform (fname, lname, address, email, phone, emp_status, com_name01, com_name02, com_name03, job_title01, job_title02, job_title03, message ) VALUES('$fname', '$lname', '$address', '$email', '$phone', '$emp_status','$com_name01', '$com_name02', '$com_name03', '$job_title01', '$job_title02', '$job_title03', '$message' )") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: payment page.php");
}
?>