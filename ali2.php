<?php
$date = $_POST['dob'];
$sex = $_POST['gender'];
$city = $_POST['city'];


session_start();
$_SESSION['date']=$_POST['dob'];
$_SESSION['sex']=$_POST['gender'];
$_SESSION['city']=$_POST['city'];







?>
