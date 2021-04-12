<?php

session_start();

// getting random number
$appID = rand(1, 9999);
$appDate = date("Y/m/d");
$appStatus = "NEW";
$remark = "NULL";

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//insert the value into tripApplied
$sql = "INSERT INTO tripApplied VALUES ('$appID' , '$appDate', '$appStatus', $remark)";

$result = $con->query($sql);

if($result->num_rows > 0){
    echo "<script type='text/javascript'>alert('Application ID is $appID . Application Date is $appDate. Status is $appStatus.'); window.location.href='applyTrip.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Application ID is $appID . Application Date is $appDate. Status is $appStatus.'); window.location.href='applyTrip.php';</script>";

}

//connection close
$con->close();

?>