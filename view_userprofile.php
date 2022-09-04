<?php

//session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));


if(isset($_POST['SUBMIT'])){

    $fname = $_POST['fname'];
    
    $mysqli->query("SELECT * from user where  )") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: Application form.php");
}
?>