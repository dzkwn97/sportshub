<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$add = mysqli_real_escape_string($conn, $_POST['address']);
	$cont = mysqli_real_escape_string($conn, $_POST['contact']);
	$ccn = mysqli_real_escape_string($conn, $_POST['ccn']);
        $message = "purchase completed";

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($add) || empty($cont) || empty($ccn)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {

				if (!filter_var($cont, FILTER_VALIDATE_INT) > -1 || !filter_var($ccn, FILTER_VALIDATE_INT) >-1 ) {
				 	header("Location: ../signup.php?signup=integer");
					exit();
				} else {
					
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_add, user_cont, user_ccn) VALUES ('$first', '$last', '$email', '$add', '$cont', '$ccn');";
					mysqli_query($conn, $sql);
                                        mail($email,"Sportshub",$message,"From: sportshub609@gmail.com");
					header("Location: Order Succesful.html");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../signup.php");
	exit();
}