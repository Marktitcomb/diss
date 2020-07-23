<?php

if (isset($_POST['signup-submit'])){
	require 'dbh.php';
	
	$userName 		= $_POST['userName'];
	$email 			= $_POST['email'];
	$name 			= $_POST['name'];
	$password 		= $_POST['pwd'];
	$passwordrepeat = $_POST['pwd-repeat'];
	
	if(empty($userName) || empty($email) || empty($name) || empty($password) || empty($passwordrepeat) ){
		header("Location: ../signup.php?error=emptyfields");
		exit();
	}
	else{
		$sql = "Select UserID FROM user WHERE UserID=?";
		$stmt = mysqli_stmt_init($conn, $sql);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location: ../signup.php?error=sqlerror");
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $userName);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt); 
			if($resultCheck > 0){
				header("location: ../signup.php?UserNameTaken");
				exit();
			}
			else{
				$sql= "INSERT INTO user (`UserId`, `Password`, `Name`, `Email`) Values ('?','?','?','?')";
				$stmt = mysqli_stmt_init($conn, $sql);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("location: ../signup.php? error=sqlerror");
				}
				else{
					$hashedPWd = password_hash($password, PASSWORD_DEFAULT);
					
					mysqli_stmt_bind_param($stmt, "ssss", $userName, $hashedPWd, $name , $email);
					mysqli_stmt_execute($stmt);
					header("location: ../signup.php?Success");
					exit(); 
				}
			}
			
		}
	}
	//can provide more if statments to make this more robust
}

else{
	header("location: ../signup.php");
	exit();
}