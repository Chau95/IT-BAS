<?php
/*severside validation for BAS application project
Author: Melissa, Aman, Craig, Chou*/

//$error = ""; //Initialize error as blank
ini_set('display_errors', 1);
    error_reporting(E_ALL);

if(isset($_POST['submit'])) {
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$degreebtn = trim($_POST['degreebtn']);
	$mail = trim($_POST['mail']);
	$phone = trim($_POST['phone']);
	$studentYesNo = $_POST['studentYesNo'];
	$statvet = $_POST['statvet'];
	$statint= $_POST['statint'];
	$statrs = $_POST['statirs'];

	$isValid = true;


	//validate first name
	if(!empty($_POST['fname'])) {
		$fname = clean($_POST['fname']);
	} else {
		print "<p>Please Enter First Name</p>";
		$isValid= false;
	}

	//validate last name
	if(!empty($_POST['lname'])) {
		$lname = clean($_POST['lname']);
	} else {
		print "<p>Please Enter Last Name</p>";
		$isValid = flase;
	}
	//validate a degree button is selected
	if(isset($_POST['degreebtn'])) {
		$degreebtn =clean($_POST['degreebtn']);
	} else {
		print "<p>Must select a degree or undecided</p>";
		$isValid = false;
	}
}
	?>