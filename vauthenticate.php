<?php

session_start();

//getting data from form and post into variables
$vuser = $_POST["Vusername"];
$vpass = $_POST["Vpwd"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//selecting the username and password of volunteer
$sql = "SELECT vUsername , vPassword FROM volunteers WHERE vUsername='$vuser' AND vPassword='$vpass'";

$result = $con->query($sql);

//if the username and password is match
if($result->num_rows > 0){
    $_SESSION['Vusername'] = $row["vUsername"];
    //show alert and go to apply trip
    echo "<script type='text/javascript'>alert('Login Successful'); window.location.href='applyTrip.php';</script>";
} else {
    //else stay at the same page
    header("Location:volunteerLogin.php");
}

//connection close
$con->close();

?>