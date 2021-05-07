<?php

	require_once("connection.php");

	if(isset($_POST['update']))
	{
		$UserID = $_GET['ID'];
		$UserName = $_POST['name'];
		$UserEmail = $_POST['email'];
		$UserAge = $_POST['age'];
		$UserJob = $_POST['job'];

		$query = "update records set User_name = '".$UserName."', User_email='".$UserEmail."', User_Age='".$UserAge."', User_job='".$UserJob."' where User_ID='".$UserID."'";
		$result = mysqli_query($con,$query);

		if($result) 
		{
			header("location:view.php");
		}
		else 
		{
			echo 'please check your query';
		}

		}
		else {
			header("location:view.php");
		}
?>