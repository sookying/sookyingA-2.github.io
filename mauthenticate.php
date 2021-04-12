<?php

session_start();

$muser = $_POST["Musername"];
$mpass = $_POST["Mpwd"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

if($con->connect_error) {
	die ("DB Connection failure ");
} else {
	echo "Connected to DB successfully";
}

//selecting the data form managers
$sql = "SELECT mUsername , mPassword FROM managers WHERE mUsername='$muser' AND mPassword='$mpass'";

$result = $con->query($sql);

//check if the data is inserted
if($result->num_rows > 0){
    //show alert and go to next page
    echo "<script type='text/javascript'>alert('Login Successful'); window.location.href='staffRegistration.php';</script>";
} else {
    //else remain on the same page
    header("Location:managerLogin.php");
}

//connection close
$con->close();

?>