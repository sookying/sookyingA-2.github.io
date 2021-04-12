<?php

session_start();

//getting data from form and post into variables
$status = $_POST['status'];
$remark = $_POST['remark'];
$vuser = $_GET["Vusername"];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//update information
$sql = "UPDATE tripApplied SET appStatus = '$status' , remark = '$remark' where vUsernmae = $vuser";

$result = $con->query($sql);

if($result->num_rows > 0){
    echo "<script type='text/javascript'>alert('Data has been saved'); window.location.href='organizeTrip.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Data has been saved'); window.location.href='organizeTrip.php';</script>";

}

//connection close
$con->close();

?>