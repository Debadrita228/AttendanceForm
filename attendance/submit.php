<?php

require("library/connect.php");

date_default_timezone_set("Asia/Kolkata");
$dt = date("d/m/Y");
// $dt = "07/03/2020";

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$roll = strtoupper($_POST['roll']);
$roll = mysqli_real_escape_string($con, $roll);

$query = "SELECT * FROM attendance_beta WHERE roll='$roll' AND date='$dt'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$num = mysqli_num_rows($result);

if($num!=0)
{
    $m = "<span class='text-red'>Your Attendance already recorded.</span>";
    header('location: index.php?m1=' . $m);
}
else
{
    $query = "INSERT INTO attendance_beta(Name, Email, Roll, Date)VALUES('" . $name . "','" . $email . "','" . $roll . "','" . $dt . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: success');
}

?>