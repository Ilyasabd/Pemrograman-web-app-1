<?php
	require_once("connection.php"); 

	if (isset($_POST['submit'])) {
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['job']) )
		{
			echo 'please fill data in the blank';
		} 

		else
		{
			$UserName = $_POST['name'];
			$UserEmail = $_POST['email'];
			$UserAge = $_POST['age'];
			$UserJob = $_POST['job'];

			$query = "insert into records (User_name, User_Email, User_Age, User_job) value('$UserName', '$UserEmail', '$UserAge', '$UserJob')";

			$result = mysqli_query($con, $query);

			if ($result) {
				header("location: view.php");
			}

			else {
				echo 'please check your query';
			}
		}
	}

	else {
		header("location: index.php");
	}
?>
