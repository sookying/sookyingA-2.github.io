<?php

session_start();

$suser = $_POST["Susername"];
$spass = $_POST["Spwd"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//selecting username and password of staffs and stored in $sql
$sql = "SELECT sUsername , sPassword FROM staffs WHERE sUsername='$suser' AND sPassword='$spass'";

$result = $con->query($sql);

//check if the data is inserted
if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
		$_SESSION["sfullname"] = $row["sName"];
	}
	//show alert and go to next page
	echo "<script type='text/javascript'>alert('Login Successful'); window.location.href='organizeTrip.php';</script>";
} else {
	//else remain
    header("Location:staffLogin.php");
}

//connection close
$con->close();

?>