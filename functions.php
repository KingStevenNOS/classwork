<?php
	include 'config.php';
	function register($username, $password){
		$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		$checkuser = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query($connection, $checkuser);
		if(mysqli_num_rows($result)>0){
			echo "This username is already in use";
		}
		else{
			mysqli_query($connection, $sql) or die ("Unable to Register user");
		}
	}
?>