<?php
session_start(); 

if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data =	stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$user = strlen($uname);
	$passwords = strlen($pass);
	if (empty($uname)) {
		header("Location: index.php?error=user name is required");
		exit();
	}else if (empty($pass)){
		header("Location: index.php?error=password is required");
		exit();
	}else if ($user>7){
		header("Location: index.php?error=username must consist of seven characters!");
		exit();
	}else if (!preg_match("/[A-Z]/", $pass)){
		header("Location: index.php?error=UPPERCASE is a must!");
		exit();
	}else if (!preg_match("/[a-z]/", $pass)){
		header("Location: index.php?error=lowercase is a must!");
		exit();
	}else if (!preg_match("/[^a-zA-Z\d]/", $pass)){
		header("Location: index.php?error=special characters is a must!");
		exit();
	}else if (!preg_match("/[0-9]/", $pass)){
		header("Location: index.php?error=Number! dont forget to put number ffs!");
		exit();
	}else if ($passwords<10){
		header("Location: index.php?error=do you want to get hacked? 10 or more characters for password!");
		exit();
	}else{
		echo "login success! welcome to our website $uname!";
	}
	
	}else{
		header("Location: index.php");
	exit();
	}

	?>