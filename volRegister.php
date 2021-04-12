<?php

//getting the input from the form and post into here
$Vuser_name = $_POST["Vusername"];
$Vpass = $_POST["Vpwd"];
$Vname = $_POST["Vname"];
$Vphone = $_POST["Vphone"];

//conenct to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//inserting to volunteers database
$sql = "INSERT INTO volunteers VALUES ('$Vuser_name' , '$Vpass', '$Vname', '$Vphone', NULL, NULL, NULL)";

//if information is inserted
if($con ->query($sql) == TRUE){
	//stay on the same page
	header("Location:volunteerRegistration.php");
}
else {
	echo "Error:" .$con->error;
	echo "Registration failure";
}

//connection close
$con->close();

?>