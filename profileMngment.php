<?php

session_start();

//getting the name type from the form
$vupdateuser = $_POST["changeVname"];
$vupdatepass = $_POST["changeVpwd"];
$vupdatephone = $_POST["changeVphone"];
$vdocType = $_POST["docType"];
$vdocdate = $_POST["docdate"];
$vfile = $_POST["file"]; 
$voluser = $_SESSION['Vusername'];

//connect to DB
$con = new mysqli("localhost:3308" , "root" , "" , "assignment");

//update information
$sql = "UPDATE volunteers SET vPassword=$vupdatepass, vName =$vupdateuser, vPhone =$vupdatephone, docType = $vdocType, docDate = $vdocdate, docFile = $vfile WHERE vUsername = $voluser ";

$result = $con->query($sql);

if($result!=null)
{
	echo "<script type='text/javascript'>alert('Update success'); window.location.href='applyTrip.php';</script>";
} else {
	echo "<script type='text/javascript'>alert('Update failed'); window.location.href='applyTrip.php';</script>";
}

//connection close
$con->close();

?>