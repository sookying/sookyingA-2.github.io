<?php

//getting data from form and post into variables
$dName = $_POST["dName"];
$dPhone = $_POST["dPhone"];
$dEmail = $_POST["dEmail"];
$dDate = $_POST["dDate"];
$dFile = $_POST["dFile"];
$dAmount = $_POST["dAmount"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//insertinf the data from form
$sql = "INSERT INTO donations VALUES ( '$dName' , '$dPhone', '$dEmail', '$dDate', '$dFile', '$dAmount')";

//check if the data is inserted
if($con ->query($sql) == TRUE){
	//show alert and remain on the same page
	echo "<script type='text/javascript'>alert('Donated Successful. Thank you !'); window.location.href='index.php';</script>";
}
else {
	echo "Error:" .$con->error;
	//else show failure alert
	echo "<script type='text/javascript'>alert('Donation Failure');</script>";
}

//connection close
$con->close();

?>