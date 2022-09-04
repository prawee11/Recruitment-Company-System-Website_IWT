<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$experience = '';
$comments = '';
$fname = '';
$femail = '';


if(isset($_POST['REGISTER'])){

    $experience = $_POST['experience'];
    $comments = $_POST['comments'];
    $fname = $_POST['fname'];
    $femail = $_POST['femail'];

    $mysqli->query("INSERT INTO feedback (experience, comments, fname, femail) VALUES('$experience', '$comments', '$fname', '$femail')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: feedback page.php");
}
?>

