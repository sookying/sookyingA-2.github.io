<?php

//getting value from form and store into variables
$Tdate = $_POST["date"];
$Tdest = $_POST["dest"];
$Tdesc = $_POST["desc"];
$Toptions = $_POST["options"];
$Tnumbervol = $_POST["numbervol"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//get random number
$tripID = rand(1, 9999);

//inserting value to tripCreated database
$sql = "INSERT INTO tripCreated VALUES ( '$Tdate' , '$Tdest', '$Tdesc', '$Toptions', '$Tnumbervol', '$tripID')";

//if created succesful, show alert
if($con ->query($sql) == TRUE){
	echo "<script type='text/javascript'>alert('Trip ID is $tripID. Trip created successfully. '); window.location.href='organizeTrip.php';</script>";
}
else {
	echo "Error:" .$con->error;
	echo "Registration failure";
}

//connection close
$con->close();

?>