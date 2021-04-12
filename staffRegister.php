<?php

//getting the data from form and post into variables
$Suser_name = $_POST["Susername"];
$Spass = $_POST["Spwd"];
$Sname = $_POST["Sname"];
$Sphone = $_POST["Sphone"];
$Sposition = $_POST["Spostion"];
$SdateJoined = $_POST["SdateJoined"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//inserting the value from the form into staffs
$sql = "INSERT INTO staffs VALUES ( '$Suser_name' , '$Spass', '$Sname', '$Sphone', '$Sposition', '$SdateJoined')";

//check if the data is inserted
if($con ->query($sql) == TRUE){
	//show alert
	echo "<script type='text/javascript'>alert('Register Successful'); window.location.href='staffRegistration.php';</script>";
}
else {
	echo "Error:" .$con->error;
	echo "<script type='text/javascript'>alert('Registration Failure');</script>";
}

//connection close
$con->close();

?>